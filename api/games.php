<?php

header("ccess-Control-Allow-Origin: *");
header("Content-type: application/json;charset-utf-8");

$games [1] = array (
    "id" => 1,
    "nome" => "SpeedBird",
    "descricao" => "Bem-vindo ao mundo de Endless Run! Prepare-se para uma aventura emocionante onde você assumirá o papel de um pássaro ágil e destemido em busca de superar desafios e conquistar recordes em uma jornada sem fim. Em nosso jogo, você se tornará um pássaro único, dotado de habilidades excepcionais de voo e agilidade. Neste universo vibrante e cheio de cores, você voará através de paisagens deslumbrantes, desde florestas exuberantes até noites escuras, enfrentando obstáculos desafiadores pelo caminho.",
    "poster" => "" ,
    "banner" => ""
);
$games [2] = array (
    "id" => 2,
    "nome" => "BubleKid",
    "descricao" => "",
    "poster" => "" ,
    "banner" => ""
);
$games [3] = array (
    "id" => 3,
    "nome" => "Bambo Strick",
    "descricao" => "",
    "poster" => "" ,
    "banner" => ""
);
$games [4] = array (
    "id" => 4,
    "nome" => "BombSword",
    "descricao" => "",
    "poster" => "" ,
    "banner" => ""
);
$games [5] = array (
    "id" => 5,
    "nome" => "Corrida Certo",
    "descricao" => "",
    "poster" => "" ,
    "banner" => ""
);
$games [6] = array (
    "id" => 6,
    "nome" => "Assassin's Creed Shadows",
    "descricao" => "Assassin's CreedShadows é um aguardado jogo de ação-aventura e RPG desenvolvido pela Ubisoft Quebec, com lançamento previsto para 15 de novembro de 2024. Este novo título da série Assassin's Creed transporta os jogadores para o Japão feudal, onde poderão explorar um vasto mundo aberto repleto de detalhes históricos e culturais.",
    "poster" => "" ,
    "banner" => "",
    "trailer" => "https://www.youtube.com/watch?v=c-0DwhkAWDo"
);
$games [7] = array (
    "id" => 7,
    "nome" => "Mortal Kombat I",
    "descricao" => "Mortal Kombat 1 traz um novo mundo, criado pelo Guardião do Tempo e protetor do Plano Terreno, o Deus do Fogo Liu Kang, que representa um recomeço para a franquia.
Após tomar controle da Ampulheta de Kronika no final de Mortal Kombat 11, ele reinicia o tempo e a história, com a proposta de criar uma existência mais gentil e pacífica para os habitantes de todos os Reinos, libertando-os do mal que os têm atormentado por eras.
Através de sua visão, veremos personagens familiares entrarem nesse universo recriado, de novas maneiras. Mas Liu Kang logo percebe que há alguém interferindo em seu plano para o universo, e precisa descobrir quem, antes que esse inimigo desconhecido destrua toda a realidade.",
    "poster" => "" ,
    "banner" => "",
    "trailer" => "https://www.youtube.com/watch?v=Ue1Yo-3QnRc"
);
$games [8] = array (
    "id" => 8,
    "nome" => "Red Dead Redemption II",
    "descricao" => "Red Dead Redemption 2 é um jogo de ação e aventura em mundo aberto desenvolvido pela Rockstar Games. O jogo se passa em 1899, no final da era do Velho Oeste, e segue a história do fora-da-lei Arthur Morgan, membro da gangue Van der Linde. Morgan e seus companheiros estão em fuga após um assalto fracassado em Blackwater, e agora precisam sobreviver em um mundo implacável enquanto são perseguidos por agentes da lei e caçadores de recompensas.",
    "poster" => "" ,
    "banner" => "",
    "trailer" => "https://www.youtube.com/watch?v=gmA6MrX81z4"
);

echo json_encode($games);