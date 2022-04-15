<!DOCTYPE html>
<html lang="en">

<?php include("templates/head.php"); ?>

<body>

    <?php include 'templates/menu.php'; ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="banner-cover"></div>
                <img class="better-fighter-banner-img" src="./img/valentina-banner.png" alt="First slide">
                <img class="better-fighter-banner-img-mobile" src="./img/valentina-mobile3.png" alt="">
                <div class="better-fighter-banner-text">
                    <h3 class="fighter-title-effect">"Bullet"</h3>
                    <h2>Valetina Shevchenko</h2>
                    <h5 class="fighter-status">A melhor atleta feminina atual.</h5>
                </div>
            </div>
            <div class="carousel-item">
                <div class="banner-cover"></div>
                <img class="better-fighter-banner-img" src="./img/kamaru-usman.png" alt="Second slide">
                <img class="better-fighter-banner-img-mobile" src="./img/usman-mobile3.png" alt="">
                <div class="better-fighter-banner-text">
                    <h3 class="fighter-title-effect">"THE NIGERIAN NIGHTMARE"</h3>
                    <h2>KAMARU USMAN</h2>
                    <h5 class="fighter-status">O campeão mais dominante do UFC.</h5>
                </div>

            </div>
            <div class="carousel-item">
                <div class="banner-cover"></div>
                <img class="better-fighter-banner-img" src="./img/charles-banner2.png" alt="Third slide">
                <img class="better-fighter-banner-img-mobile" src="./img/charles-mobile3.png" alt="">
                <div class="better-fighter-banner-text">
                    <h3 class="fighter-title-effect">"do bronx"</h3>
                    <h2>CHARLES Oliveira</h2>
                    <h5 class="fighter-status">Campeão da categoria mais difícil do UFC.</h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="goat-text">
        <div class="container goat-text-container">
            <div class="row">
                <div class="col-sm-5 goat-text-box">
                    <h3 class="goat-title">QUEM SÃO OS CAMPEÕES?</h3>
                    <p class="goat-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-6 goat-image-box">
                    <img class="goat-image" src="./img/charles-champion.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="fighters-section" id="fighters">
        <H2 class="text-center mb-5 page-title">CONHEÇA OS CAMPEÕES MASCULINOS</H2>

        <div class="container">
            <div class="row d-flex justify-content-center fighter-row mb-5">
                <div class="col-sm-3 fighter-card-1">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/brandon1.png" data-bs-toggle="modal" data-bs-target="#brandonModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Brandon <span class="fighter-title-effect">The Assassin Baby</span> Moreno</H3>
                            <h4 class="goat-banner-subtitle">PESO MOSCA</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 fighter-card-2">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/alja1.png" data-bs-toggle="modal" data-bs-target="#aljamainModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Aljamain <span class="fighter-title-effect">Funk Master</span> Sterling</H3>
                            <h4 class="goat-banner-subtitle">PESO GALO</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 fighter-card-3">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/alexander1.png" data-bs-toggle="modal" data-bs-target="#alexanderModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Alexander <span class="fighter-title-effect">The Great</span> Volkanovski</H3>
                            <h4 class="goat-banner-subtitle">PESO PENA</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row d-flex justify-content-center fighter-row mb-5">
                <div class="col-sm-3 fighter-card-1">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/charles1.png" data-bs-toggle="modal" data-bs-target="#charlesModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Charles <span class="fighter-title-effect">do Bronx</span> Oliveira</H3>
                            <h4 class="goat-banner-subtitle">PESO LEVE</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 fighter-card-2">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/usman1.png" data-bs-toggle="modal" data-bs-target="#kamaruModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Kamaru <span class="fighter-title-effect">The Nigerian Nightmare</span> Usman</H3>
                            <h4 class="goat-banner-subtitle">PESO MEIO-MÉDIO</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 fighter-card-3">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/adesanya1.png" data-bs-toggle="modal" data-bs-target="#adesanyaModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Israel <span class="fighter-title-effect">The Last Stylebender</span> Adesanya</H3>
                            <h4 class="goat-banner-subtitle">PESO MÉDIO</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row d-flex justify-content-center fighter-row mb-5">
                <div class="col-sm-3 fighter-card-1">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/glover1.png" data-bs-toggle="modal" data-bs-target="#gloverModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Glover Teixeira</H3>
                            <h4 class="goat-banner-subtitle">PESO MEIO-PESADO</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 fighter-card-2">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/francis1.png" data-bs-toggle="modal" data-bs-target="#francisModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Francis <span class="fighter-title-effect">The Predator</span> Ngannou</H3>
                            <h4 class="goat-banner-subtitle">PESO PESADO</h4>
                        </div>
                    </a>
                </div>
    </section>

    <section class="fighters-section" id="fighters">
        <H2 class="text-center mb-5 page-title">CONHEÇA AS CAMPEÃS FEMININAS </H2>

        <div class="container">
            <div class="row d-flex justify-content-center fighter-row mb-5">
                <div class="col-sm-3 fighter-card-1">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/ROSE1.1.png" data-bs-toggle="modal" data-bs-target="#roseModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Rose <span class="fighter-title-effect">Thug</span> Namajunas</H3>
                            <h4 class="goat-banner-subtitle">PESO PALHA</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 fighter-card-2">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/valetina1.png" data-bs-toggle="modal" data-bs-target="#valentinaModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Valentina <span class="fighter-title-effect">Bullet</span> Shevchenko</H3>
                            <h4 class="goat-banner-subtitle">PESO MOSCA</h4>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row d-flex justify-content-center fighter-row mb-5">
                <div class="col-sm-3 fighter-card-1">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/juliana1.png" data-bs-toggle="modal" data-bs-target="#julianaModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Julianna <span class="fighter-title-effect">The Venezuelan Vixen</span> Peña</H3>
                            <h4 class="goat-banner-subtitle">PESO GALO</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 fighter-card-2">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/amanda1.png" data-bs-toggle="modal" data-bs-target="#amandaModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Amanda <span class="fighter-title-effect">Lioness</span> Nunes</H3>
                            <h4 class="goat-banner-subtitle">PESO PENA</h4>
                        </div>
                    </a>
                </div>
            </div>


    </section>

    <?php include("modal.php"); ?>

    <?php include("templates/footer.php"); ?>

    <?php include("templates/scripts.php"); ?>

</body>

</html>