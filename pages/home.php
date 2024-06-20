<?php
$url = "http://localhost/projects/api/banner.php";


$dadosApi = file_get_contents($url);

$dadosBanner = json_decode($dadosApi);
//print_r($dadosBanner)
?>



<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

        <?php foreach ($dadosBanner as $posicao => $dados) : ?>
        <?php if ($posicao == 1) : ?>
        <div class="carousel-item active" data-bs-interval="5000">
            <img src="<?= $dados->imagem ?>"  alt="<?=$dados->nome?>"class="d-block w-100">
        </div>
        <?php else : ?>
        <div class="carousel-item" data-bs-interval="5000">
            <img src="<?= $dados->imagem ?>" class="d-block w-100" alt="...">
        </div>
        <?php endif; ?>
        <?php endforeach; ?>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>



<div class="container text-center">
    <h1>Jogos em Destaques</h1>
    <div class="desaparecer">
        <div class="row">

            <?php
                $url = "http://localhost/projects/api/games.php";

            $dadosApi = file_get_contents($url);

            $dadosJogos = json_decode($dadosApi);

            foreach ($dadosJogos as $jogos) {
            ?>
                <div class="col-12 col-md-3 text-center">
                    
                    <div class="card">
                     <img src="<?= $jogos->poster ?>" alt="<?= $jogos->nome ?> class=" w-100" class="card-img-top">

                        <p>
                            <strong><?php echo $jogos->nome; ?></strong>
                        </p>
                        <p>
                            <a href="game/<?=$jogos->id?>" title="Detalhes do Jogo" class="btn btn-warning">
                            <i class="fa-solid fa-gamepad"></i>
                                Detalhes
                            </a>
                        </p>

                </div>

        </div>
            <?php

        }

        ?>

        </div>
    </div>

</div>

<div id="news-area">
    <div class="container">
        <div class="col-md-12">
            <h3 class="main-title text-center">
                Fique por Dentro das Novidades !!
            </h3>
        </div>
        <div class="desaparecer">
        <p>Assine nossa lista de e-mails, e receba nossos conteúdos sobre desenvolvimento de jogos Mobile e Desktop</p>
        </div>
    </div>
    
</div>
<div>
<form action="form" class="text-center m-4">
            <input type="email" class="form-control " id="email-input" nome="email"
                placeholder="Coloque se E-mail para Novidades">
            <input type="submit" id="news-btn" value="Inscrever">
        </form>
</div>
