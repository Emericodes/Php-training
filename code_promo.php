<!-- Tu développes le système d'un site de karting. Tu reçois les résultats d'une course
 avec les temps de chaque joueur (en secondes) sur un parcours de 500 mètres.

Tu dois créer une fonction qui va analyser ce tableau, calculer la vitesse
 moyenne de chaque joueur, et leur attribuer un code promo s'ils ont été particulièrement rapides. 
 Suppérieur à 45 km/h le code promo "speed 45" = 15% de réduction sur le prix-->
<?php

 $course = [
    ["nom" => "Max", "temps_secondes" => 45],
    ["nom" => "Julie", "temps_secondes" => 38],
    ["nom" => "Samy", "temps_secondes" => 52],
    ["nom" => "Léa", "temps_secondes" => 41]
];




function raceSpeed ($course) {

$code = 0;

    foreach ($course as $racer){
    $speed = (500 / $racer["temps_secondes"]) * 3.6 ;
    echo "La vitesse de " . $racer["nom"] . " est de " . $speed . " Km/h" . PHP_EOL;
    
   if ($speed >= 45 ){
    echo "Bravo ! " . $racer["nom"] . " tu as le droit d'utiliser le code promo Speed45";
    $code++;
   }
   echo " ________________________" . PHP_EOL;
}
    echo "Nombre de codes promos distribués : " . $code . PHP_EOL;
}

raceSpeed($course);