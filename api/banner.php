<?php

header("ccess-Control-Allow-Origin: *");
header("Content-type: application/json;charset-utf-8");


$banner [1]= array (
    "nome" => "SpeedBird",
    "imagem" => "imagens/banner.speedbird.png",
    "id_game" => 1
);
$banner [2]= array (
    "nome" => "BubleKid",
    "imagem" => "imagens/banner.bublekid.jpg",
    "id_game" => 2

);
$banner [3]= array (
    "nome" => "Bambo Strick",
    "imagem" => "imagens/banner.bambustrick.jpg",
    "id_game" => 3

);
$banner [4]= array (
    "nome" => "BombSword",
    "imagem" => "imagens/banner.bombsword.jpeg",
    "id_game" => 4

);
$banner [5]= array (
    "nome" => "Explosion Race",
    "imagem" => "imagens/banner.explosionrace.jpg",
    "id_game" => 5

);
$banner [6]= array (
    "nome" => "Assassin's Creed Shadows",
    "imagem" => "imagens/banner.assassincreed.jpg",
    "id_game" => 6

);
$banner [7]= array (
    "nome" => "Mortal Kombat I",
    "imagem" => "imagens/banner.motalkombat.jpg",
    "id_game" => 7

);
$banner [8]= array (
    "nome" => "Red Dead Redemption II",
    "imagem" => "imagens/banner.reddead.jpg",
    "id_game" => 8

);

echo json_encode($banner);