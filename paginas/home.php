<?php
$dadosApi = file_get_contents("http://localhost/projects/api/games.php");

$dadosApi = json_decode($dadosApi);

print_r($dadosApi);