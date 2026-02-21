<div class="carousel slide carousel-fade carrusel-govco" id="carouselExampleGovco2" data-bs-ride="carousel" role="region" aria-label="Carrusel de destacados">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="8000">
            {{ drupal_view('home', 'block_3', 1) }}
        </div>
        <div class="carousel-item" data-bs-interval="8000">
            {{ drupal_view('home', 'block_3', 2) }}
        </div>
        <div class="carousel-item" data-bs-interval="8000">
            {{ drupal_view('home', 'block_3', 3) }}
        </div>
        <div class="carousel-item" data-bs-interval="8000">
            {{ drupal_view('home', 'block_3', 4) }}
        </div>
        <div class="carousel-item" data-bs-interval="8000">
            {{ drupal_view('home', 'block_3', 5) }}
        </div>
        <div class="carousel-item" data-bs-interval="8000">
            {{ drupal_view('home', 'block_3', 6) }}
        </div>
    </div>
    <p>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleGovco2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior imagen</span>
                          </button> <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleGovco2" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Próxima imagen</span>
                          </button>
    </p>
    <div class="control-start-pause">
        <button class="controls start" type="button">
                              <span>Reproducir</span>
                            </button> <button class="controls pause active" type="button">
                              <span>Pausar</span>
                            </button>
    </div>
    <div class="carousel-indicators">
        <button class="active" type="button" data-bs-target="#carouselExampleGovco2" data-bs-slide-to="0" aria-current="true" aria-label="Slide 1"></button> <button type="button" data-bs-target="#carouselExampleGovco2" data-bs-slide-to="1" aria-label="Slide 2"></button> <button type="button" data-bs-target="#carouselExampleGovco2" data-bs-slide-to="2" aria-label="Slide 3"></button> <button type="button" data-bs-target="#carouselExampleGovco2" data-bs-slide-to="3" aria-label="Slide 4"></button> <button type="button" data-bs-target="#carouselExampleGovco2" data-bs-slide-to="4" aria-label="Slide 5"></button><button type="button" data-bs-target="#carouselExampleGovco2" data-bs-slide-to="5" aria-label="Slide 6"></button>
    </div>
</div>
