<?php
include_once("helpers/url.php");
include_once("data/posts.php");
include_once("data/categories.php");

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<?php include("templates/head.php"); ?>

<body>

    <?php include 'templates/menu.php'; ?>
    <?php include 'templates/banner.php'; ?>

    <section class="fighters-section" id="fighters">
        <H2 class="text-center mb-5 page-title">CONHEÇA OS LUTADORES</H2>

        <div class="container">
            <div class="row d-flex justify-content-center fighter-row mb-5">
                <div class="col-sm-3 fighter-card-1">
                    <a class="fighter-redirect" href="better-fighters.php">
                        <img class="fighter-banner" src="./img/jones1.png" alt="">
                        <H3 class="fighters-title">Os Melhores</H3>
                    </a>
                </div>
                <div class="col-sm-3 fighter-card-2">
                    <a class="fighter-redirect" href="champions.php">
                        <img class="fighter-banner" src="./img/valetina1.png" alt="">
                        <H3 class="fighters-title">Os Campeões</H3>
                    </a>
                </div>
                <div class="col-sm-3 fighter-card-3">
                    <a class="fighter-redirect" href="specialist.php">
                        <img class="fighter-banner" src="./img/wonderboy1.png" alt="">
                        <H3 class="fighters-title" style="font-size:24px;">Os Especialistas</H3>
                    </a>
                </div>
            </div>

            <div class="row d-flex justify-content-center fighter-row">
                <div class="col-sm-3 fighter-card-1">
                    <a class="fighter-redirect" href="stars.php">
                        <img class="fighter-banner" src="./img/conor1.png" alt="">
                        <H3 class="fighters-title">As Estrelas</H3>
                    </a>
                </div>
                <div class="col-sm-3 fighter-card-2">
                    <a class="fighter-redirect" href="future.php">
                        <img class="fighter-banner" src="./img/khamzat1.png" alt="">
                        <H3 class="fighters-title">As Promessas</H3>
                    </a>
                </div>
                <div class="col-sm-3 fighter-card-3">
                    <a class="fighter-redirect" href="brazilians.php">
                        <img class="fighter-banner" src="./img/anderson1.png" alt="">
                        <H3 class="fighters-title">Os Brasileiros</H3>
                    </a>
                </div>
            </div>
        </div>

    </section>

    <section class="event-section" id="event">
        <H2 class="text-center mb-5 page-title event-title">EVENTOS</H2>
        <div id="carouselExampleIndicators" class="carousel slide event-slider" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="banner-cover-event"></div>
                    <img class="event-banner" src="./img/ufc270.jpeg">
                    <img class="event-banner-mobile event-banner-1" src="./img/ufc270-mobile2.png">
                    <div class="banner-event-text-box">
                        <h3>UFC 270</h3>
                        <H2>NGANNOU VS GANE</H2>
                        <H4>SÁBADO, 22 DE JANEIRO, A PARTIR DAS 23:00</H4>
                        <a href="#" class="home-banner-button event-button">CARD COMPLETO</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="banner-cover-event"></div>
                    <img class="event-banner" src="./img/ufc2712.png">
                    <img class="event-banner-mobile event-banner-2" src="./img/ufc271-mobile2.png">
                    <div class="banner-event-text-box">
                        <h3>UFC 271</h3>
                        <H2 class="event-mobile-align">ADESANYA VS WHITTAKER 2</H2>
                        <H4>SÁBADO, 12 DE FEVEREIRO, A PARTIR DAS 23:00</H4>
                        <a href="#" class="home-banner-button event-button ">CARD COMPLETO</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="banner-cover-event"></div>
                    <img class="event-banner" src="./img/ufc-fight-night2.png">
                    <img class="event-banner-mobile event-banner-3" src="./img/ufc-fight-night-mobile.png">
                    <div class="banner-event-text-box">
                        <h3>UFC FIGHT NIGHT</h3>
                        <H2>KATTAR VS CHIKADZE</H2>
                        <H4>SÁBADO, 15 DE JANEIRO, A PARTIR DAS 19:00</H4>
                        <a href="#" class="home-banner-button event-button">CARD COMPLETO</a>
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

        <?php include("./templates/events.php") ?>

    </section>

    <section class="blog" id="news">
        <H2 class="text-center mb-5 page-title">NOTÍCIAS</H2>
        <h4 id="msg"></h4>"
        <div class="container blog-container">
            <?php foreach ($posts as $post) : ?>
                <div class="post-box">
                    <a href="<?= $BASE_URL ?>./blog/post.php?id=<?= $post['id'] ?>" class="fighter-redirect">
                        <img class="fighter-banner" src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
                        <h2 class="post-title mt-3"><a class="title-link" href="<?= $BASE_URL ?>./blog/post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a></h2>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="home-banner-button blog-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            MAIS NOTÍCIAS
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Newsletter do mundo do MMA </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="container">
                            <form method="post" id="form-subscribe" action="./submit.php">
                                <div class="input-icon">
                                    <input type="text" name="name" placeholder="Name" class="field2" required autocomplete="off">
                                </div>
                                <div class="input-icon">
                                    <input type="email" name="email" placeholder="Email" class="field2" required autocomplete="off">
                                </div>


                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="submit" id="btn-subscriber" class="subscribe-button">Inscrever-se</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>



    </section>




    <section class="contact" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-4 contact-text">
                    <h3 class="page-subtitle">FALE CONOSCO</h3>
                    <p style="text-align:justify;"> Quer falar conosco, enviar suas sugestões e/ou falar sobre parcerias?
                        Preencha o formulário que entraremos em contato. </p>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-5 contact-field">
                    <h3 class="mb-3 page-subtitle">Formulário de Contato</h3>
                    <?php include './templates/form.php'; ?>
                </div>

            </div>
        </div>
    </section>



    <?php include("templates/footer.php"); ?>


    <script src="./js/logic.js"></script>
    <?php include("templates/scripts.php"); ?>
</body>

</html>