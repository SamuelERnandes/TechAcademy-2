<?php

header("ccess-Control-Allow-Origin: *");
header("Content-type: application/json;charset-utf-8");

$equipe [1] = array (
    "nome"=> "Samuel Ernandes",
    "cargo" => "Desenvolvedor Master",
    "foto"=> "imagens/samuel.jpeg"
);
$equipe [2] = array (
    "nome"=> "Luis Miguel",
    "cargo" => "Desenvolvedor Jr",
    "foto"=> "imagens/luismiguel.jpeg"
);
$equipe [3] = array (
    "nome"=> "Gabriel Barros",
    "cargo" => "Desenvolvedor Jr",
    "foto"=> "imagens/gabrielbarros.jpg"
);
$equipe [4] = array (
    "nome"=> "Kassio",
    "cargo" => "Desenvolvedor Jr",
    "foto"=> "imagens/kassio.png"
);
$equipe [5] = array (
    "nome"=> "Pedro Rorato",
    "cargo" => "Desenvolvedor Jr",
    "foto"=> "imagens/pedrororato.jpeg"
);

echo json_encode($equipe);