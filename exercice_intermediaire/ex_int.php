<!-- $inventaire = [
    ['nom' => 'Souris', 'quantite' => 25, 'prix_unitaire' => 12.99],
    ['nom' => 'Clavier mécanique', 'quantite' => 8, 'prix_unitaire' => 79.50],
    ['nom' => 'Webcam HD', 'quantite' => 40, 'prix_unitaire' => 29.00],
    ['nom' => 'Disque SSD 1TB', 'quantite' => 15, 'prix_unitaire' => 89.99],
    ['nom' => 'Écran 24"', 'quantite' => 5, 'prix_unitaire' => 199.00],
];
Calculer le Coût Total de l'Inventaire : Calculer la valeur totale de tous les articles 
(Quantité * Prix Unitaire pour chaque article, puis additionner tout). Affichez ce total
 formaté en monnaie (ex: 2450.97 €). fait ok
 
Identifier les Articles Chers : Trouver et afficher le nom des articles dont le prix unitaire
 est supérieur à 50€.
Trouver l'Article le Plus Stocké : Déterminer quel article a la quantité en stock la plus élevée 
et afficher son nom et sa quantité.

foreach ($tableau as $valeur){
}
foreach ($tableau as $clé => $valeur) {
    // Ici, $clé contient l'étiquette et $valeur le contenu de l'élément.
}

comment afficher proprement un nombre 
number_format( // Nombre brut    | Décimales | Séparateur déc. | Séparateur milliers
                $cost,       2,         ',', ' ') 
// Résultat interne de number_format() : "1 250,70" 


-->

<?php

$inventory = [
    ['name' => 'Souris', 'quantity' => 25, 'unit-price' => 12.99],
    ['name' => 'Clavier mécanique', 'quantity' => 8, 'unit-price' => 79.50],
    ['name' => 'Webcam HD', 'quantity' => 40, 'unit-price' => 29.00],
    ['name' => 'Disque SSD 1TB', 'quantity' => 15, 'unit-price' => 89.99],
    ['name' => 'Écran 24"', 'quantity' => 5, 'unit-price' => 199.00],
];

$cost = 0;

foreach ($inventory as $article ){
    $basket_price= ($article['quantity'] * $article['unit-price']);
    $cost += $basket_price;
}

echo "--- Valeur de l'inventaire -----\n";

echo "La valeur de l'inventaire est de : " . number_format($cost, 2, ',',' ') . " € \n";