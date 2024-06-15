<?php
$url = "http://localhost/projects/api/banner.php";

$dadosApi = file_get_contents($url);

$dadosBanner = json_decode($dadosApi);
//print_r($dadosBanner)
?>

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
       <?php
            foreach($dadosBanner as $dados) {
                ?>
                   <div class="carousel-item active">
                    <a href="game/<?=$dados->id_game?>">
                    <img src="<?=$dados->imagem?>>"
                    </a>
                         <img src="<?=$dados->imagem?>" class="d-block w-100" alt="<?=$dados->nome?>">
                    </div>
                <?php
            }
       ?>
       
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>