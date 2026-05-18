<!-- Exercice : Le Scanner de la Rébellion

Le contexte :
L'Alliance Rebelle a intercepté des données de l'Empire.
 Tu as récupéré un tableau listant plusieurs personnages,
  leur camp d'allégeance, et leur équipement. Ton but est d'écrire 
  un script qui analyse ces données et affiche un rapport détaillé.


$database = [
    'Luke'  => [
        'camp'  => 'Rebelle',
        'armes' => ['Lightsaber', 'Blaster']
    ],
    'Vader' => [
        'camp'  => 'Empire',
        'armes' => ['Lightsaber', 'The Force']
    ],
    'Han'   => [
        'camp'  => 'Rebelle',
        'armes' => ['Blaster', 'Thermal detonator']
    ],
    'Boba'  => [
        'camp'  => 'Mercenaire',
        'armes' => ['EE-3 Carbine', 'Flamethrower', 'Jetpack missile']
    ]
];

Tes missions (Les étapes à coder)

La boucle principale : Utilise une boucle foreach pour parcourir le tableau $database. 
Tu dois récupérer le nom du personnage (la clé) et ses informations (la valeur, qui est un sous-tableau).  

L'analyse du camp (Les conditions) : À l'intérieur de ta boucle, utilise une condition if, elseif, else
 sur la clé 'camp' du personnage :  

Si le camp est 'Empire', affiche : [ALERTE ROUGE] Vader est un ennemi de l'Empire !

Si le camp est 'Rebelle', affiche : [ALLIÉ] Luke fait partie de la Rébellion.

Sinon (pour les autres camps), affiche : [NEUTRE] Boba est un Mercenaire.

L'inventaire des armes (Boucle imbriquée) : Toujours dans la boucle principale, ajoute une deuxième
 boucle foreach pour lister les armes du personnage.  

Affiche chaque arme précédée d'un tiret.

Bonus (Condition imbriquée) : Si l'arme est exactement 'Lightsaber' (utilise l'opérateur d'égalité ==),
 ajoute la mention (Arme Jedi/Sith) à côté.  

Le formatage : Comme tu développes pour le terminal, utilise PHP_EOL à chaque fois que tu dois passer 
à la ligne pour que le rapport soit parfaitement lisible.  -->

<?php

$database = [
    'Luke'  => [
        'camp'  => 'Rebelle',
        'armes' => ['Lightsaber', 'Blaster']
    ],
    'Vader' => [
        'camp'  => 'Empire',
        'armes' => ['Lightsaber', 'The Force']
    ],
    'Han'   => [
        'camp'  => 'Rebelle',
        'armes' => ['Blaster', 'Thermal detonator']
    ],
    'Boba'  => [
        'camp'  => 'Mercenaire',
        'armes' => ['EE-3 Carbine', 'Flamethrower', 'Jetpack missile']
    ]
];

#Etape 1 : utiliser une boucle pour parcourir le tableau database. 

foreach ($database as $name => $infos ){
    if ($infos['camp'] === 'Empire') {
        echo "[ALERTE ROUGE] $name est un ennemi de l'Empire !" . PHP_EOL;
    } elseif ($infos['camp'] === 'Rebelle') {
        echo "[ALLIÉ] $name fait partie de la Rébellion." . PHP_EOL;
    } else {
        echo "[NEUTRE] $name est un {$infos['camp']}." . PHP_EOL;
    }
}