<?php

header("ccess-Control-Allow-Origin: *");
header("Content-type: application/json;charset-utf-8");

$equipe [1] = array (
    "nome"=> "Samuel Ernandes",
    "cargo" => "Desenvolvedor Jr",
    "foto"=> ""
);
$equipe [2] = array (
    "nome"=> "Luis Miguel",
    "cargo" => "Desenvolvedor Jr",
    "foto"=> ""
);
$equipe [3] = array (
    "nome"=> "Gabriel",
    "cargo" => "Desenvolvedor Jr",
    "foto"=> ""
);
$equipe [4] = array (
    "nome"=> "Kassio",
    "cargo" => "Desenvolvedor Jr",
    "foto"=> ""
);

echo json_encode($equipe);