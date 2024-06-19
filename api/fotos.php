<?php

header("ccess-Control-Allow-Origin: *");
header("Content-type: application/json;charset-utf-8");

$foto [1] = array (
        "foto1" => "imagens/jogo.speedbird1.png",
        "foto2" => "imagens/jogo.speedbird2.png",
        "foto3" => "imagens/jogo.speedbird3.png",
        "foto4" => "imagens/jogo.speedbird4.png",

);
$foto [2] = array (
        "foto1" => "imagens/jogo.bublekid1.png",
        "foto2" => "imagens/jogo.bublekid2.png",
        "foto3" => "imagens/jogo.bublekid3.png",
        "foto4" => "imagens/jogo.bublekid4.png",

);
$foto [3] = array (
        "foto1" => "imagens/jogo.bombstrick1.png",
        "foto2" => "imagens/jogo.bombstrick2.png",
        "foto3" => "imagens/jogo.bombstrick3.png",
        "foto4" => "imagens/jogo.bombstrick4.png",

);
$foto [4] = array (
        "foto1" => "imagens/jogo.bombsword1.png",
        "foto2" => "imagens/jogo.bombsword2.png",
        "foto3" => "imagens/jogo.bombsword3.png",
        "foto4" => "imagens/jogo.bombsword4.png",

);
$foto [5] = array (
        "foto1" => "imagens/jogo.explosionrace1.png",
        "foto2" => "imagens/jogo.explosionrace2.png",
        "foto3" => "imagens/jogo.explosionrace3.png",
        "foto4" => "imagens/jogo.explosionrace4.png",

);
$foto [6] = array (
        "foto1" => "imagens/jogo.assassincread1.png",
        "foto2" => "imagens/jogo.assassincread2.png",
        "foto3" => "imagens/jogo.assassincread3.png",
        "foto4" => "imagens/jogo.assassincread4.png",

);
$foto [7] = array (
        "foto" => "imagens/jogo.mortalkombat1.jpg",
        "foto" => "imagens/jogo.mortalkombat2.jpg",
        "foto" => "imagens/jogo.mortalkombat3.jpg",
        "foto" => "imagens/jogo.mortalkombat4.jpg",

);
$foto [8] = array (
        "foto" => "imagens/jogo.reddead1.jpg",
        "foto" => "imagens/jogo.reddead2.jpg",
        "foto" => "imagens/jogo.reddead3.jpg",
        "foto" => "imagens/jogo.reddead4.jpg",

);

echo json_encode($foto);