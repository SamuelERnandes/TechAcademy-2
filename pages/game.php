<?php
       //$dados = $dadosGames;
       $dados = $dadosGames -> $codigo;
       //print_r($dados);

        ?>

<div class="banner">
    <img src="<?=$dados->banner?>" alt="<?=$dados->banner?>" class="w-100">
</div>

<div class="container">
    <h1 class="text-center"><?=$dados->nome?></h1>
    <div class="row">
        <div class="col-12 col-md-3">
            <img src="<?=$dados->poster?>" alt="<?=$dados->nome?>" class="w-100">
        </div>
        <div class="col-12 col-md-9">
            <p>
                <?=$dados->descricao?>
            </p>
        </div>

        <h2 class="text-center">Fotos do Jogo</h2>
    <div class="row">
        <?php
            $dadosFotos = file_get_contents("http://localhost/projects/api/fotos.php");
            $dadosFotos = json_decode($dadosFotos);
            
            $dados = $dadosFotos->$codigo;

            $i = 1;
            foreach($dados as $foto) {
                ?>
                <div class="col-12 col-md-3">
                    <a href="<?=$foto->foto?>" title="Foto <?=$i?>"
                    data-fslightbox>
                        <img src="<?=$foto->foto?>"
                        alt="Foto <?=$i?>" class="w-100">
                    </a>
                </div>
                <?php
                $i++;
            }
        ?>
    </div>
</div>

<h2 class="text-center">Jogar Agora</h2>
<?php
   $url= "http://localhost/projects/api/games.php";
   $dados2 = file_get_contents($url);
   $dados2 = json_decode($dados2);
   $dados2 = $dados2->$codigo;
  
 ?>
     <iframe width="100%" height="600" src="<?=$dados2->construct?>"></iframe>