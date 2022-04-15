<!DOCTYPE html>
<html lang="en">

<?php include("templates/head.php"); ?>

<body>

    <!-- Anderson silva 1 sim
Charles do bronx2 sim

Amanda nunes tenho imagem
Gilbert durinho devo por
Borrachina3 sim


José aldo
Glove
-->


    <?php include 'templates/menu.php'; ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="banner-cover"></div>
                <img class="better-fighter-banner-img" src="./img/anderson-banner.png" alt="Second slide">
                <img class="better-fighter-banner-img-mobile" src="./img/anderson-mobile3.png" alt="">
                <div class="better-fighter-banner-text">
                    <h3 class="fighter-title-effect">"The Spider"</h3>
                    <h2>Anderson Silva</h2>
                    <h5 class="fighter-status">Campeão dominante com maior sequência de vitórias.</h5>
                </div>

            </div>
            <div class="carousel-item ">
                <div class="banner-cover"></div>
                <img class="better-fighter-banner-img" src="./img/charles-banner2.png" alt="Second slide">
                <img class="better-fighter-banner-img-mobile" src="./img/charles-mobile3.png" alt="">
                <div class="better-fighter-banner-text">
                    <h3 class="fighter-title-effect">"do bronx"</h3>
                    <h2>CHARLES Oliveira</h2>
                    <h5 class="fighter-status">Campeão da categoria mais difícil do UFC.</h5>
                </div>
            </div>
            <div class="carousel-item">
                <div class="banner-cover"></div>
                <img class="better-fighter-banner-img" src="./img/borrachina-banner.png" alt="Third slide">
                <img class="better-fighter-banner-img-mobile" src="./img/borrachina-mobile3.png" alt="">
                <div class="better-fighter-banner-text">
                    <h3 class="fighter-title-effect">"Borrachinha"</h3>
                    <h2>Paulo Costa</h2>
                    <h5 class="fighter-status">Representante da elite brasileira no mma.</h5>
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
                    <h3 class="goat-title">QUEM SÃO OS BRASILEIROS NO ESPORTE?</h3>
                    <p class="goat-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    </p>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-6 goat-image-box">
                    <img class="goat-image" src="./img/gilbert-brasileiro.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="fighters-section" id="fighters">
        <H2 class="text-center mb-5 page-title">CONHEÇA OS BRASILEIROS</H2>

        <div class="container">
            <div class="row d-flex justify-content-center fighter-row mb-5">
                <div class="col-sm-3 fighter-card-1">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/anderson1.png" data-bs-toggle="modal" data-bs-target="#andersonModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Anderson <span class="fighter-title-effect">The Spider</span> Silva</H3>
                            <h4 class="goat-banner-subtitle">PESO MÉDIO</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 fighter-card-2">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/charles1.png" data-bs-toggle="modal" data-bs-target="#charlesModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Charles <span class="fighter-title-effect">Do Bronx</span> Oliveira</H3>
                            <h4 class="goat-banner-subtitle">PESO LEVE</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 fighter-card-3">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/borrachinha1.png" data-bs-toggle="modal" data-bs-target="#pauloModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Paulo <span class="fighter-title-effect">Borrachinha</span> Costa</H3>
                            <h4 class="goat-banner-subtitle">PESO MÉDIO</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row d-flex justify-content-center fighter-row mb-5">
                <div class="col-sm-3 fighter-card-1">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/amanda1.png" data-bs-toggle="modal" data-bs-target="#amandaModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Amanda <span class="fighter-title-effect">Lioness</span> <br> Nunes</H3>
                            <h4 class="goat-banner-subtitle">PESO PENA</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 fighter-card-2">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/gilbert1.png" data-bs-toggle="modal" data-bs-target="#gilbertModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Gilbert <span class="fighter-title-effect">Durinho</span> <br> Burns</H3>
                            <h4 class="goat-banner-subtitle">PESO MEIO-MÉDIO</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 fighter-card-3">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/aldo1.png" data-bs-toggle="modal" data-bs-target="#joseModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">José <br><span class="fighter-title-effect">Junior</span> Aldo</H3>
                            <h4 class="goat-banner-subtitle">PESO GALO</h4>
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