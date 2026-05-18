<!-- Créer la filmographie Star Wars
 ans un fichier PHP, crée un tableau contenant 6 titres de films Star wars. 
Pour chaque film, associe son année de sortie (le titre du film sera la clé).
Une fois le tableau créé, réalise une boucle pour afficher la liste des films contenus dans le tableau
ainsi que leur année de sortie associée. Les films devront apparaître dans l'ordre décroissant de sortie
(du plus récent au plus ancien). Regarde du côté des fonctions de tri.
Pour chaque film, tu devras donc afficher: 2000 - movie_title
2000 étant l'année de parution du film.

Critères de validation
Le fichier contient un tableau associatif,
Le tableau contient 6 films, avec, le titre comme clé et l'année de sortie comme valeur
Une boucle est utilisée pour afficher dynamiquement les films et leur date.
Les films sont triés dans l'ordre décroissant de leur sortie en utilisant une fonction de tri.
Un nouvel espoir — 1977.
L'Empire contre-attaque — 1980.
L'attaque des clones — 2002.
La revanche des Sith — 2005.
Le Retour du Jedi — 1983.
Le Réveil de la Force — 2015.
Rogue One — 2016.
Les Derniers Jedi — 2017.
-->
<?php
$movie1 = "Un nouvel espoir";
$movie2 = "L'Empire contre-attaque";
$movie3 = "L'attaque des clones";
$movie4 = "La revanche des Sith";
$movie5 = "Le Retour du Jedi";
$movie6 = "Le Réveil de la Force";
$movie7 = "Rogue One";
$movie8 = "Les Derniers Jedi";

$year1 = 1977;
$year2 = 1980;
$year3 = 2002;
$year4 = 2005;
$year5 = 1983;
$year6 = 2015;
$year7 = 2016;
$year8 = 2017;

#etape 1 le tableau associatif contient les titres de films et les années de sortiee

$movies = [
    $movie1 => $year1,
    $movie2 => $year2,
    $movie3 => $year3,
    $movie4 => $year4,
    $movie5 => $year5,
    $movie6 => $year6,
    $movie7 => $year7,
    $movie8 => $year8
];

#etape 2 trier le tableau dans l'ordre décroissant de date de sortie.
arsort ($movies);

# etape 3 Une boucle est utilisée pour afficher dynamiquement les films et leur date.


foreach ($movies as $title => $year){
   echo $year . "-" . $title . "<br>";
}



echo "<pre>";
    var_dump($movies);
echo "</pre>";
?>