<?php

header("ccess-Control-Allow-Origin: *");
header("Content-type: application/json;charset-utf-8");


$fotos[1] = array(
        array("foto"=>"imagens/jogo.speedbird1.png"),
        array("foto"=>"imagens/jogo.speedbird2.png"),
        array("foto"=>"imagens/jogo.speedbird3.png"),
        array("foto"=>"imagens/jogo.speedbird4.png"),
    );

$fotos[2] = array(
        array("foto"=>"imagens/jogo.bublekid1.png"),
        array("foto"=>"imagens/jogo.bublekid2.png"),
        array("foto"=>"imagens/jogo.bublekid3.png"),
        array("foto"=>"imagens/jogo.bublekid4.png"),
    );
$fotos[3] = array(
        array("foto"=>"imagens/jogo.bombstrick1.png"),
        array("foto"=>"imagens/jogo.bombstrick2.png"),
        array("foto"=>"imagens/jogo.bombstrick3.png"),
        array("foto"=>"imagens/jogo.bombstrick4.png"),
    );
$fotos[4] = array(
        array("foto"=>"imagens/jogo.bombsword1.png"),
        array("foto"=>"imagens/jogo.bombsword2.png"),
        array("foto"=>"imagens/jogo.bombsword3.png"),
        array("foto"=>"imagens/jogo.bombsword4.png"),
    );
$fotos[5] = array(
        array("foto"=>"imagens/jogo.explosionrace1.png"),
        array("foto"=>"imagens/jogo.explosionrace2.png"),
        array("foto"=>"imagens/jogo.explosionrace3.png"),
        array("foto"=>"imagens/jogo.explosionrace4.png"),
    );

$fotos[6] = array(
        array("foto"=>"imagens/jogo.assassincread1.png"),
        array("foto"=>"imagens/jogo.assassincread2.png"),
        array("foto"=>"imagens/jogo.assassincread3.png"),
        array("foto"=>"imagens/jogo.assassincread4.png"),
    );
$fotos[7] = array(
        array("foto"=>"imagens/jogo.mortalkombat1.jpg"),
        array("foto"=>"imagens/jogo.mortalkombat2.jpg"),
        array("foto"=>"imagens/jogo.mortalkombat3.jpg"),
        array("foto"=>"imagens/jogo.mortalkombat4.jpg"),
    );
$fotos[8] = array(
        array("foto"=>"imagens/jogo.reddead1.jpg"),
        array("foto"=>"imagens/jogo.reddead2.jpg"),
        array("foto"=>"imagens/jogo.reddead3.jpg"),
        array("foto"=>"imagens/jogo.readdead4.jpg"),
    );



echo json_encode($fotos);