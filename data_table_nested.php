// Ce tableau imbriqué ou multidimensionnel concernant les personnages de star wars et leurs armes 



<?php
$weapons = [
'Luke' => ['Lightsaber', 'Blaster'],
'Han' => ['Blaster', 'Thermal detonator'],
'Boba' => ['EE-3 Carbine', 'Flamethrower', 'Jetpack missile'],
'Leia' => ['Blaster', 'Vibroblade'],
'Vader' => ['Lightsaber', 'The Force'],
];


# Maintenant pour l'affichage puisqu'il y a deux niveaux nous allons utiliser deux boucles. 

foreach ($weapons as $name => $weapons  ) {
   echo "Armes de $name :" . PHP_EOL;
   foreach ($weapons as $weapon) {
        echo "- " . $weapon . PHP_EOL;
    }
    
    echo "-------------------" . PHP_EOL;
}