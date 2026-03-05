
            (function() {
            // Script para filtrar las tarjetas de trámites y servicios
            var TARJETAS_POR_PAGINA = 10;
            var paginaActual = 1;
            var ROOT_ID = "tramites-servicios-wrapper";

            function getRoot() {
                return document.getElementById(ROOT_ID);
            }

            function actualizarVisibilidadTarjeta(card, visible) {
                if (visible) {
                    card.classList.add("uncover");
                    card.removeAttribute("hidden");
                    card.setAttribute("aria-hidden", "false");
                } else {
                    card.classList.remove("uncover");
                    card.setAttribute("hidden", "");
                    card.setAttribute("aria-hidden", "true");
                }
            }

            function actualizarConteoResultados(totalFiltrados, visiblesPagina) {
                var root = getRoot();
                if (!root) return;
                var status = root.querySelector("#results-status");
                if (!status) return;
                if (totalFiltrados === 0) {
                    status.textContent = "No hay resultados disponibles para los filtros aplicados.";
                    return;
                }
                status.textContent = totalFiltrados + (totalFiltrados === 1 ? " resultado disponible." :
                    " resultados disponibles.") + " Mostrando " + visiblesPagina + ".";
            }

            function obtenerCategoriaActiva() {
                var root = getRoot();
                if (!root) return "all";
                var activeButton = root.querySelector("#buttonsFilter .btn.active");
                if (!activeButton) return "all";
                return activeButton.getAttribute("data-filter") || "all";
            }

            function obtenerConteosPorGrupo() {
                var root = getRoot();
                if (!root) return { all: 0, tramites: 0, servicios: 0, pqrsds: 0 };
                var cards = root.querySelectorAll(".card-ts");
                var conteos = {
                    all: cards.length,
                    tramites: 0,
                    servicios: 0,
                    pqrsds: 0
                };

                for (var i = 0; i < cards.length; i++) {
                    if (cards[i].classList.contains("tramites")) conteos.tramites++;
                    if (cards[i].classList.contains("servicios")) conteos.servicios++;
                    if (cards[i].classList.contains("pqrsds")) conteos.pqrsds++;
                }

                return conteos;
            }

            function actualizarEtiquetasBotones() {
                var root = getRoot();
                if (!root) return;
                var conteos = obtenerConteosPorGrupo();
                var etiquetas = {
                    all: "Mostrar todo",
                    tramites: "Trámites",
                    servicios: "Servicios",
                    pqrsds: "PQRSD"
                };

                var buttons = root.querySelectorAll("#buttonsFilter .btn");
                buttons.forEach(function(button) {
                    var filtro = button.getAttribute("data-filter");
                    if (!filtro || !etiquetas[filtro]) return;
                    button.textContent = etiquetas[filtro] + " (" + conteos[filtro] + ")";
                });
            }

            function coincideTexto(card, filter) {
                var title = card.getElementsByTagName("h3")[0];
                var description = card.getElementsByClassName("p1")[0];
                if (!title && !description) return false;
                var titleText = title ? (title.textContent || title.innerText || "") : "";
                var descText = description ? (description.textContent || description.innerText || "") : "";
                return titleText.toUpperCase().indexOf(filter) > -1 || descText.toUpperCase().indexOf(filter) > -1;
            }

            function obtenerTarjetasFiltradas() {
                var root = getRoot();
                if (!root) return [];
                var cards = root.querySelectorAll(".card-ts");
                var selectedCategory = obtenerCategoriaActiva();
                var input = root.querySelector("#sentence");
                var filter = input ? input.value.toUpperCase() : "";
                var filtradas = [];

                for (var i = 0; i < cards.length; i++) {
                    var matchCategory = selectedCategory === "all" || cards[i].classList.contains(selectedCategory);
                    var matchText = filter === "" || coincideTexto(cards[i], filter);
                    if (matchCategory && matchText) {
                        filtradas.push(cards[i]);
                    }
                }

                return filtradas;
            }

            function dibujarElementosGovco(pages, page) {
                var liTag = "";
                var active;
                var beforePages = page - 1;
                var afterPages = page + 1;

                if (page > 1) {
                    liTag +=
                        '<li class="page-item-ts prev-page-ts no"><a href="#" data-page="' + (page - 1) +
                        '" onclick="return tsIrAPagina(' + (page - 1) + ', event)"' +
                        '"><span class="prev-page-icon-ts"></span><span class="prev-page-text-ts">Anterior</span></a></li>';
                } else {
                    liTag +=
                        '<li class="page-item-ts prev-page-ts disabled-ts"><a href="#"><span class="prev-page-icon-ts"></span><span class="prev-page-text-ts">Anterior</span></a></li>';
                }

                if (pages < 6) {
                    for (var p = 1; p <= pages; p++) {
                        active = page === p ? "active-ts" : "no";
                        liTag += '<li class="page-item-ts number-ts ' + active + '"><a href="#" data-page="' +
                            p + '" onclick="return tsIrAPagina(' + p + ', event)"' +
                            '>' + p + "</a></li>";
                    }
                } else {
                    if (page > 2) {
                        liTag +=
                            '<li class="page-item-ts number-ts"><a href="#" data-page="1" onclick="return tsIrAPagina(1, event)">1</a></li>';
                        if (page > 3) {
                            liTag += '<li class="page-item-ts dots-ts"><a>...</a></li>';
                        }
                    }

                    if (page === 1) {
                        afterPages += 2;
                    } else if (page === 2) {
                        afterPages += 1;
                    }

                    if (page === pages) {
                        beforePages -= 2;
                    } else if (page === pages - 1) {
                        beforePages -= 1;
                    }

                    for (var n = beforePages; n <= afterPages; n++) {
                        if (n === 0) {
                            n += 1;
                        }
                        if (n > pages) {
                            continue;
                        }
                        active = page === n ? "active-ts" : "no";
                        liTag += '<li class="page-item-ts number-ts ' + active + '"><a href="#" data-page="' +
                            n + '" onclick="return tsIrAPagina(' + n + ', event)"' +
                            '>' + n + "</a></li>";
                    }

                    if (page < pages - 1) {
                        if (page < pages - 2) {
                            liTag += '<li class="page-item-ts dots-ts"><a>...</a></li>';
                        }
                        liTag += '<li class="page-item-ts number-ts no"><a href="#" data-page="' + pages +
                            '" onclick="return tsIrAPagina(' + pages + ', event)">' +
                            pages + "</a></li>";
                    }
                }

                if (page < pages) {
                    liTag += '<li class="page-item-ts next-page-ts"><a href="#" data-page="' + (page + 1) +
                        '" onclick="return tsIrAPagina(' + (page + 1) + ', event)"' +
                        '"><span class="next-page-icon-ts"></span><span class="next-page-text-ts">Siguiente</span></a></li>';
                } else {
                    liTag +=
                        '<li class="page-item-ts next-page-ts disabled-ts"><a href="#"><span class="next-page-icon-ts"></span><span class="next-page-text-ts">Siguiente</span></a></li>';
                }

                return liTag;
            }

            function renderizarPaginacion(totalFiltrados, totalPaginas) {
                var root = getRoot();
                if (!root) return;
                var contenedor = root.querySelector(".pagination-container-ts");
                var paginador = root.querySelector("#paginationTs");
                var lista = root.querySelector("#lista-paginador");
                if (!contenedor || !paginador || !lista) return;

                if (totalFiltrados <= TARJETAS_POR_PAGINA || totalPaginas <= 1) {
                    contenedor.setAttribute("hidden", "");
                    lista.innerHTML = "";
                    return;
                }

                contenedor.removeAttribute("hidden");
                paginador.setAttribute("total", totalPaginas);
                paginador.setAttribute("initialpage", paginaActual);
                lista.innerHTML = dibujarElementosGovco(totalPaginas, paginaActual);
            }

            function aplicarFiltros(reiniciarPagina) {
                if (reiniciarPagina !== false) {
                    paginaActual = 1;
                }

                var filtradas = obtenerTarjetasFiltradas();
                var totalFiltrados = filtradas.length;
                var totalPaginas = totalFiltrados > 0 ? Math.ceil(totalFiltrados / TARJETAS_POR_PAGINA) : 1;

                if (paginaActual > totalPaginas) {
                    paginaActual = totalPaginas;
                }

                var indiceInicio = (paginaActual - 1) * TARJETAS_POR_PAGINA;
                var indiceFin = indiceInicio + TARJETAS_POR_PAGINA;
                var visiblesPagina = 0;
                var root = getRoot();
                if (!root) return;
                var todas = root.querySelectorAll(".card-ts");

                for (var i = 0; i < todas.length; i++) {
                    actualizarVisibilidadTarjeta(todas[i], false);
                }

                for (var j = indiceInicio; j < indiceFin && j < totalFiltrados; j++) {
                    actualizarVisibilidadTarjeta(filtradas[j], true);
                    visiblesPagina++;
                }

                actualizarConteoResultados(totalFiltrados, visiblesPagina);
                renderizarPaginacion(totalFiltrados, totalPaginas);
            }

            function irAPagina(page, evt) {
                if (evt) evt.preventDefault();
                if (isNaN(page) || page < 1) return false;
                paginaActual = page;
                aplicarFiltros(false);
                return false;
            }

            function filterSelection(evt, c) {
                var root = getRoot();
                if (!root) return;
                // Remover la clase active de todos los botones
                var buttons = root.querySelectorAll("#buttonsFilter .btn");
                for (var i = 0; i < buttons.length; i++) {
                    buttons[i].classList.remove("active");
                    buttons[i].setAttribute("aria-pressed", "false");
                }
                // Agregar la clase active al botón clickeado
                if (evt && evt.currentTarget) {
                    evt.currentTarget.classList.add("active");
                    evt.currentTarget.setAttribute("aria-pressed", "true");
                }
                if (!evt || !evt.currentTarget) {
                    for (var j = 0; j < buttons.length; j++) {
                        if (buttons[j].getAttribute("data-filter") === c) {
                            buttons[j].classList.add("active");
                            buttons[j].setAttribute("aria-pressed", "true");
                            break;
                        }
                    }
                }
                aplicarFiltros(true);
            }
            // Función para limpiar el filtro de búsqueda
            function limpiarFiltro(evt) {
                var root = getRoot();
                if (!root) return;
                if (evt) evt.preventDefault();
                var sentenceInput = root.querySelector("#sentence");
                if (sentenceInput) {
                    sentenceInput.value = "";
                }
                // Restablecer el botón activo a "Mostrar todo"
                var buttons = root.querySelectorAll("#buttonsFilter .btn");
                for (var i = 0; i < buttons.length; i++) {
                    buttons[i].classList.remove("active");
                    buttons[i].setAttribute("aria-pressed", "false");
                    if (buttons[i].getAttribute("data-filter") === "all") {
                        buttons[i].classList.add("active");
                        buttons[i].setAttribute("aria-pressed", "true");
                    }
                }
                aplicarFiltros(true);
            }
            // Función para filtrar por texto (búsqueda)
            function filtrarPorTexto() {
                aplicarFiltros(true);
            }
            function inicializarVistaTramitesServicios() {
                if (window.__tramitesServiciosInitDone) return;
                window.__tramitesServiciosInitDone = true;
                var root = getRoot();
                if (!root) return;

                var searchInput = root.querySelector("#sentence");
                if (searchInput) {
                    searchInput.addEventListener("input", filtrarPorTexto);
                }

                actualizarEtiquetasBotones();

                var listaPaginador = root.querySelector("#lista-paginador");
                if (listaPaginador) {
                    listaPaginador.addEventListener("click", function(evt) {
                        var link = evt.target.closest("a");
                        if (!link) return;
                        evt.preventDefault();
                        var page = parseInt(link.getAttribute("data-page"), 10);
                        if (!isNaN(page)) {
                            paginaActual = page;
                            aplicarFiltros(false);
                        }
                    });
                }

                var searchForm = searchInput ? searchInput.closest("form") : null;
                if (searchForm) {
                    searchForm.addEventListener("submit", function(evt) {
                        evt.preventDefault();
                        filtrarPorTexto();
                    });
                }

                var tramiteCards = root.querySelectorAll(".card-ts");
                tramiteCards.forEach(function(card, index) {
                    var channels = card.querySelector(".canals-ts");
                    var title = card.querySelector("h3");
                    var titleId = "card-ts-title-" + index;

                    card.setAttribute("role", "article");
                    if (title) {
                        title.setAttribute("id", titleId);
                        card.setAttribute("aria-labelledby", titleId);
                    }

                    if (channels) {
                        channels.setAttribute("role", "navigation");
                        channels.setAttribute(
                            "aria-label",
                            "Canales de atención para " + (title ? title.textContent.trim() : "este trámite")
                        );
                    }

                    var icons = card.querySelectorAll(".list-canals img");
                    icons.forEach(function(icon) {
                        icon.setAttribute("alt", "");
                        icon.setAttribute("aria-hidden", "true");
                    });

                    var links = card.querySelectorAll(".list-canals a");
                    links.forEach(function(link) {
                        var accion = link.textContent.trim();
                        var tramiteNombre = title ? title.textContent.trim() : "este trámite o servicio";
                        link.setAttribute("aria-label", accion + " para " + tramiteNombre);
                    });
                });

                aplicarFiltros(true);
            }

            if (!window.mouseoversound || typeof window.mouseoversound.playclip !== "function") {
                window.mouseoversound = {
                    playclip: function() {}
                };
            }
            window.tsFilterSelection = function(evt, c) {
                filterSelection(evt, c);
                return false;
            };
            window.tsLimpiarFiltro = function(evt) {
                limpiarFiltro(evt);
                return false;
            };
            window.tsIrAPagina = function(page, evt) {
                return irAPagina(page, evt);
            };

            // Agregar evento de entrada al campo de búsqueda
            if (document.readyState === "loading") {
                document.addEventListener("DOMContentLoaded", inicializarVistaTramitesServicios);
            } else {
                inicializarVistaTramitesServicios();
            }
            })();
        