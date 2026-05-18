//imaginons que le veuille classé des jeux vidéo Halo, Mario, Les Sims, Zelda.
en détaillant le type de jeu FPS, Plateforme, Gestion, Aventure.//


<?php
#faire une liste
$game1 = "Halo";
$game2 = "Mario";
$game3 = "Les Sims";
$game4 = "Zelda";

#Mettre sous forme de tableau indexé.

$games = ['Halo', 'Mario', 'Les Sims', 'Zelda'];

#tableau associatif 

$type_games = [
    'Halo'     => 'FPS',
    'Mario'    => 'Plateforme',
    'Les Sims' => 'Gestion',
    'Zelda'    => 'Aventure'
];
//  Test d'affichage
echo "Le genre de Zelda est : " . $type_games['Zelda']; 

//  Pour bien visualiser la structure
echo "<pre>";
var_dump($type_games);
echo "</pre>";