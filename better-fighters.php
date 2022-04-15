<!DOCTYPE html>
<html lang="en">

<?php include("templates/head.php"); ?>

<body>

    <?php include 'templates/menu.php'; ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="banner-cover"></div>
                <img class="better-fighter-banner-img" src="./img/jon-jones.jpg" alt="Second slide">
                <img class="better-fighter-banner-img-mobile" src="./img/jon-jones-mobile2.png" alt="">
                <div class="better-fighter-banner-text">
                    <h3 class="fighter-title-effect">"Bones"</h3>
                    <h2>Jon Jones</h2>
                    <h5 class="fighter-status">Considerado um dos melhores lutadores de todos os tempos.</h5>
                </div>

            </div>
            <div class="carousel-item ">
                <div class="banner-cover"></div>
                <img class="better-fighter-banner-img" src="./img/gsp.jpg" alt="First slide">
                <img class="better-fighter-banner-img-mobile" src="./img/gsp-mobile3.png" alt="">
                <div class="better-fighter-banner-text">
                    <h3 class="fighter-title-effect">"Rush"</h3>
                    <h2>George St. Pierre</h2>
                    <h5 class="fighter-status">Considerado o G.O.A.T do MMA.</h5>
                </div>
            </div>
            <div class="carousel-item">
                <div class="banner-cover"></div>
                <img class="better-fighter-banner-img" src="./img/amanda-nunes.jpg" alt="Third slide">
                <img class="better-fighter-banner-img-mobile" src="./img/amanda-nunes-mobile3.png" alt="">
                <div class="better-fighter-banner-text">
                    <h3 class="fighter-title-effect">"Lioness"</h3>
                    <h2>Amanda Nunes</h2>
                    <h5 class="fighter-status">Dupla Campeâ invicta por 7 anos.</h5>
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
                    <h3 class="goat-title">QUEM SÃO OS MELHORES LUTADORES?</h3>
                    <p class="goat-text">Os melhores lutadores são chamados como G.O.A.T ou P4P, mas o que significa estás siglas?
                        G.O.A.T significa "O maior de todos os tempos", normalmente utilizada para mencionar lutadores que já deixaram o cage.
                        Já P4P significa "Melhor Lutador Peso por Peso", sigla utilizada para destacar os lutadores indiferente de categoria de peso.
                        Como o MMA é um esporte muito variável, onde alguns anos ou kilos de diferença podem mudar resultados,
                        surgiram estas nomenclaturas para destacar os melhores entre os melhores.
                        A maioria dos lutadores G.O.A.T está aposentada ou não está mais em seu auge, para referenciar os melhores lutadores atuais,
                        utiliza-se a menção de P4P.
                    </p>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-6 goat-image-box">
                    <img class="goat-image" src="./img/amanda-nunes-mobile2.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="fighters-section" id="fighters">
        <H2 class="text-center mb-5 page-title">CONHEÇA OS MELHORES DE TODOS OS TEMPOS</H2>

        <div class="container">
            <div class="row d-flex justify-content-center fighter-row mb-5">
                <div class="col-sm-3 fighter-card-1">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/gsp1.png" data-bs-toggle="modal" data-bs-target="#gspModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">George <span class="fighter-title-effect">Rush</span> St. Pierre</H3>
                            <h4 class="goat-banner-subtitle">PESO MEIO-MÉDIO</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 fighter-card-2">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/jones1.png" data-bs-toggle="modal" data-bs-target="#jonesModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Jon <span class="fighter-title-effect">Bones</span> Jones</H3>
                            <h4 class="goat-banner-subtitle">PESO MEIO-PESADO</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 fighter-card-3">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/amanda1.png" data-bs-toggle="modal" data-bs-target="#amandaModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Amanda <span class="fighter-title-effect">Lioness</span> Nunes</H3>
                            <h4 class="goat-banner-subtitle">PESO GALO</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row d-flex justify-content-center fighter-row mb-5">
                <div class="col-sm-3 fighter-card-1">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/johnson1.png" data-bs-toggle="modal" data-bs-target="#johnsonModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Demetrious <br><span class="fighter-title-effect">Mighty Mouse</span> Johnson</H3>
                            <h4 class="goat-banner-subtitle">PESO MOSCA</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 fighter-card-2">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/khabib1.png" data-bs-toggle="modal" data-bs-target="#khabibModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Khabib <span class="fighter-title-effect">The Eagle</span> <br> Nurmagomedov</H3>
                            <h4 class="goat-banner-subtitle">PESO LEVE</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 fighter-card-3">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/anderson1.png" data-bs-toggle="modal" data-bs-target="#andersonModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Anderson <br><span class="fighter-title-effect">The Spider</span> Silva</H3>
                            <h4 class="goat-banner-subtitle">PESO MÉDIO</h4>
                        </div>
                    </a>
                </div>
            </div>
    </section>

    <section class="fighters-section" id="fighters">
        <H2 class="text-center mb-5 page-title">CONHEÇA OS MELHORES LUTADORES ATUAIS </H2>

        <div class="container">
            <div class="row d-flex justify-content-center fighter-row mb-5">
                <div class="col-sm-3 fighter-card-1">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/usman1.png" data-bs-toggle="modal" data-bs-target="#kamaruModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Kamaru <span class="fighter-title-effect">The Nigerian Nightmare</span> Usman</H3>
                            <h4 class="goat-banner-subtitle">PESO MEIO-MÉDIO</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 fighter-card-2">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/adesanya1.png" data-bs-toggle="modal" data-bs-target="#adesanyaModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Israel <span class="fighter-title-effect">The Last Stylebender</span> Adesanya</H3>
                            <h4 class="goat-banner-subtitle">PESO MÉDIO</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 fighter-card-3">
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
                    <a class="fighter-redirect"">
                        <img class=" fighter-banner" src="./img/alexander1.png" data-bs-toggle="modal" data-bs-target="#alexanderModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Alexander <span class="fighter-title-effect">The Great</span> Volkanovski</H3>
                            <h4 class="goat-banner-subtitle">PESO PENA</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 fighter-card-2">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/charles1.png" data-bs-toggle="modal" data-bs-target="#charlesModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Charles <span class="fighter-title-effect">do Bronx</span> Oliveira</H3>
                            <h4 class="goat-banner-subtitle">PESO LEVE</h4>
                        </div>
                    </a>
                </div>
                <div class="col-sm-3 fighter-card-3">
                    <a class="fighter-redirect">
                        <img class="fighter-banner" src="./img/max1.png" data-bs-toggle="modal" data-bs-target="#maxModal">
                        <div class="goat-text-card">
                            <H3 class="goat-banner-title">Max <span class="fighter-title-effect">Blessed</span> Holloway</H3>
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