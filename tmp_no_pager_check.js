
            (function() {
            // Script para filtrar las tarjetas de trámites y servicios
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

            function actualizarConteoResultados(totalFiltrados) {
                var root = getRoot();
                if (!root) return;
                var status = root.querySelector("#results-status");
                if (!status) return;
                if (totalFiltrados === 0) {
                    status.textContent = "No hay resultados disponibles para los filtros aplicados.";
                    return;
                }
                status.textContent = totalFiltrados + (totalFiltrados === 1 ? " resultado disponible." :
                    " resultados disponibles.");
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

            function aplicarFiltros(reiniciarPagina) {
                var filtradas = obtenerTarjetasFiltradas();
                var totalFiltrados = filtradas.length;
                var root = getRoot();
                if (!root) return;
                var resultsRegion = root.querySelector("#ts-cards");
                if (resultsRegion) {
                    resultsRegion.setAttribute("aria-busy", "true");
                }
                var todas = root.querySelectorAll(".card-ts");

                for (var i = 0; i < todas.length; i++) {
                    actualizarVisibilidadTarjeta(todas[i], false);
                }

                for (var j = 0; j < totalFiltrados; j++) {
                    actualizarVisibilidadTarjeta(filtradas[j], true);
                }

                actualizarConteoResultados(totalFiltrados);
                if (resultsRegion) {
                    resultsRegion.setAttribute("aria-busy", "false");
                }
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

            // Agregar evento de entrada al campo de búsqueda
            if (document.readyState === "loading") {
                document.addEventListener("DOMContentLoaded", inicializarVistaTramitesServicios);
            } else {
                inicializarVistaTramitesServicios();
            }
            })();
        