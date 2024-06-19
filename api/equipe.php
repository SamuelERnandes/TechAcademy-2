<?php

header("ccess-Control-Allow-Origin: *");
header("Content-type: application/json;charset-utf-8");

$equipe [1] = array (
    "nome"=> "Samuel Ernandes",
    "cargo" => "Desenvolvedor Jr",
    "foto"=> "imagens/foto1.jpg"
);
$equipe [2] = array (
    "nome"=> "Luis Miguel",
    "cargo" => "Desenvolvedor Jr",
    "foto"=> "imagens/foto2.jpg"
);
$equipe [3] = array (
    "nome"=> "Gabriel",
    "cargo" => "Desenvolvedor Jr",
    "foto"=> "imagens/foto3.jpg"
);
$equipe [4] = array (
    "nome"=> "Kassio",
    "cargo" => "Desenvolvedor Jr",
    "foto"=> "imagens/foto4.jpg"
);

echo json_encode($equipe);