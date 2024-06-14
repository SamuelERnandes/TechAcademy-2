<?php

header("ccess-Control-Allow-Origin: *");
header("Content-type: application/json;charset-utf-8");

$banner [1]= array (
    "nome" => "SpeedBird",
    "imagem" => "http://projects/imagens/speedbird.png",
    "id_game" => 1

);
$banner [2]= array (
    "nome" => "BubleKid",
    "imagem" => "http://projects/imagens/banner.bublekid.jpg",
    "id_game" => 2

);
$banner [3]= array (
    "nome" => "Bambo Strick",
    "imagem" => "http://projects/imagens/banner.bombustrick.jpg",
    "id_game" => 3

);
$banner [4]= array (
    "nome" => "BombSword",
    "imagem" => "http://projects/imagens/banner.bombsword.jpeg",
    "id_game" => 4

);
$banner [5]= array (
    "nome" => "Explosion Race",
    "imagem" => "http://projects/imagens/banner.explosionrace",
    "id_game" => 5

);
$banner [6]= array (
    "nome" => "Assassin's Creed Shadows",
    "imagem" => "http://projects/imagens/banner.assassincreed.jpg",
    "id_game" => 6

);
$banner [7]= array (
    "nome" => "Mortal Kombat I",
    "imagem" => "http://projects/imagens/banner.mortalkombat.jpg",
    "id_game" => 7

);
$banner [8]= array (
    "nome" => "Red Dead Redemption II",
    "imagem" => "http://projects/imagens/reddead.jpg",
    "id_game" => 8

);

echo json_encode($banner);