<?php
$fightCard1 = [
    "title" => "VOLKANOVSKI VS ORTEGA",
    "poster" => "./img/lutadoano1.jpg",
    "video" => 'data-bs-toggle="modal" data-bs-target="#volkaOrtegaModal"',
];

$fightCard2 = [
    "title" => "HOLLOWAY VS KATTAR",
    "poster" => "./img/lutadoano2.jpg",
    "video" => 'data-bs-toggle="modal" data-bs-target="#maxKattarModal"',
];

$fightCard3 = [
    "title" => "OLIVEIRA VS CHANDLER",
    "poster" => "./img/lutadoano3.jpg",
    "video" => 'data-bs-toggle="modal" data-bs-target="#charlesChandlerModal"',
];

$fightCards = [$fightCard1, $fightCard2, $fightCard3];

?>

<div class="container events-year">
    <H2 class="text-center page-subtitle mb-5">AS MELHORES LUTAS DE 2021</H2>


    <div class="row d-flex justify-content-center">

        <?php foreach ($fightCards as $fightCard) : ?>
            <div class="col-sm-4 d-flex justify-content-center">
                <div class="card-1">
                    <img class="card-img-top" src="<?php echo $fightCard["poster"] ?>" <?php echo $fightCard["video"] ?>>
                    <div class="card-body">
                        <h5 class="page-subtitle text-center"><?php echo $fightCard["title"] ?></h5>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

    </div>

</div>


<!-- VOLKANOVSKI VS ORTEGA -->
<div class="modal fade" id="volkaOrtegaModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">VOLKANOVSKI VS ORTEGA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/BzmqyFsK5Qg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="close-button" data-bs-dismiss="modal">Sair</button>
            </div>
        </div>
    </div>
</div>

<!-- HOLLOWAY VS KATTAR -->
<div class="modal fade" id="maxKattarModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">HOLLOWAY VS KATTAR</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/shNPQ3m_4MU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="close-button" data-bs-dismiss="modal">Sair</button>
            </div>
        </div>
    </div>
</div>

<!-- OLIVEIRA VS CHANDLER -->
<div class="modal fade" id="charlesChandlerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">OLIVEIRA VS CHANDLER</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/2VYohGZ5jKA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="close-button" data-bs-dismiss="modal">Sair</button>
            </div>
        </div>
    </div>
</div>