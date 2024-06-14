<?php

header("ccess-Control-Allow-Origin: *");
header("Content-type: application/json;charset-utf-8");

$equipe [1] = array (
    "nome"=> "Samuel Ernandes",
    "Descricao" => "",
    "foto"=> ""
);
$equipe [2] = array (
    "nome"=> "Luis Miguel",
    "Descricao" => "",
    "foto"=> ""
);
$equipe [3] = array (
    "nome"=> "Gabriel",
    "Descricao" => "",
    "foto"=> ""
);
$equipe [4] = array (
    "nome"=> "Kassio",
    "Descricao" => "",
    "foto"=> ""
);

echo json_encode($equipe);