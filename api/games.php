<?php

header("ccess-Control-Allow-Origin: *");
header("Content-type: application/json;charset-utf-8");

$games [1] = array (
    "id" => 1,
    "nome" => "SpeedBird",
    "descricao" => "Bem-vindo ao mundo de Endless Run! Prepare-se para uma aventura emocionante onde você assumirá o papel de um pássaro ágil e destemido em busca de superar desafios e conquistar recordes em uma jornada sem fim. Em nosso jogo, você se tornará um pássaro único, dotado de habilidades excepcionais de voo e agilidade. Neste universo vibrante e cheio de cores, você voará através de paisagens deslumbrantes, desde florestas exuberantes até noites escuras, enfrentando obstáculos desafiadores pelo caminho.",
    "poster" => "imagens/poster.speedbird.png" ,
    "banner" => "imagens/banner.speedbird.png",
    "construct" => "construct/SpeedBird2.0"
);
$games [2] = array (
    "id" => 2,
    "nome" => "BubleKid",
    "descricao" => "",
    "poster" => "imagens/poster.bublekid.jpg" ,
    "banner" => "imagens/banner.bublekid.jpg",
    "construct" => "construct/bublekid"
);
$games [3] = array (
    "id" => 3,
    "nome" => "Bambo Strick",
    "descricao" => "",
    "poster" => "imagens/poster.bambustrick.jpg" ,
    "banner" => "imagens/banner.bambustrick.jpg",
    "construct" => "construct/Bamboo Strike"
);
$games [4] = array (
    "id" => 4,
    "nome" => "Bomb Sword",
    "descricao" => "",
    "poster" => "imagens/poster.bombsword.jpeg" ,
    "banner" => "imagens/banner.bombsword.jpeg",
    "construct" => "construct/BombSword"
);
$games [5] = array (
    "id" => 5,
    "nome" => "Explosion Race",
    "descricao" => "",
    "poster" => "imagens/poster.explosionrace.jpg" ,
    "banner" => "imagens/banner.explosionrace.jpg",
    "construct" => "construct/explosionrace"
);
$games [6] = array (
    "id" => 6,
    "nome" => "Assassin's Creed Shadows",
    "descricao" => "Assassin's CreedShadows é um aguardado jogo de ação-aventura e RPG desenvolvido pela Ubisoft Quebec, com lançamento previsto para 15 de novembro de 2024. Este novo título da série Assassin's Creed transporta os jogadores para o Japão feudal, onde poderão explorar um vasto mundo aberto repleto de detalhes históricos e culturais.",
    "poster" => "imagens/poster.assassincread.jpg" ,
    "banner" => "imagens/banner.assassincreed.jpg",
    "construct" => "https://www.youtube.com/watch?v=c-0DwhkAWDo"
);
$games [7] = array (
    "id" => 7,
    "nome" => "Mortal Kombat I",
    "descricao" => "Após cessar o suporte para Mortal Kombat 11, a NetherRealm Studios revelou que estava trabalhando em um novo projeto em julho de 2021. O dublador de Johnny Cage, Andrew Bowen, indicou que a décima segunda parcela estava em desenvolvimento em um tweet excluído às pressas.

Em 18 de maio de 2023, a NetherRealm Studios anunciou Mortal Kombat 1 com data de lançamento para 19 de setembro de 2023. É uma reinicialização da série e se passa na linha do tempo da Nova Era criada por Liu Kang depois que ele alcançou a divindade em Mortal Kombat 11 em 2019.[3] A NetherRealm Studios também anunciou que aqueles que encomendarem qualquer versão do jogo para PS5 e Xbox Series antes do lançamento também receberão acesso a uma versão beta em agosto e, após o lançamento do jogo, a NetherRealm fornecerá cross-play e cross-progression.[4]",
    "poster" => "imagens/poster.mortalkombat.jpg" ,
    "banner" => "imagens/banner.motalkombat.jpg",
    "construct" => "https://www.youtube.com/watch?v=Ue1Yo-3QnRc"
);
$games [8] = array (
    "id" => 8,
    "nome" => "Red Dead Redemption II",
    "descricao" => "Red Dead Redemption 2 é um jogo de ação e aventura em mundo aberto desenvolvido pela Rockstar Games. O jogo se passa em 1899, no final da era do Velho Oeste, e segue a história do fora-da-lei Arthur Morgan, membro da gangue Van der Linde. Morgan e seus companheiros estão em fuga após um assalto fracassado em Blackwater, e agora precisam sobreviver em um mundo implacável enquanto são perseguidos por agentes da lei e caçadores de recompensas.",
    "poster" => "imagens/poster.reddead.jpg" ,
    "banner" => "imagens/banner.reddead.jpg",
    "construct" => "https://www.youtube.com/watch?v=gmA6MrX81z4"
);

echo json_encode($games);