<!-- $inventaire = [
    ['nom' => 'Souris', 'quantite' => 25, 'prix_unitaire' => 12.99],
    ['nom' => 'Clavier mécanique', 'quantite' => 8, 'prix_unitaire' => 79.50],
    ['nom' => 'Webcam HD', 'quantite' => 40, 'prix_unitaire' => 29.00],
    ['nom' => 'Disque SSD 1TB', 'quantite' => 15, 'prix_unitaire' => 89.99],
    ['nom' => 'Écran 24"', 'quantite' => 5, 'prix_unitaire' => 199.00],
];
1/ Calculer le Coût Total de l'Inventaire : Calculer la valeur totale de tous les articles 
(Quantité * Prix Unitaire pour chaque article, puis additionner tout). Affichez ce total
 formaté en monnaie (ex: 2450.97 €). fait ok

2/Identifier les Articles Chers : Trouver et afficher le nom des articles dont le prix unitaire
 est supérieur à 50€.

3/Trouver l'Article le Plus Stocké : Déterminer quel article a la quantité en stock la plus élevée 
et afficher son nom et sa quantité.

1/
foreach ($tableau as $valeur){
}
foreach ($tableau as $clé => $valeur) {
    // Ici, $clé contient l'étiquette et $valeur le contenu de l'élément.
}

comment afficher proprement un nombre 
number_format( // Nombre brut    | Décimales | Séparateur déc. | Séparateur milliers
                $cost,       2,         ',', ' ') 
// Résultat interne de number_format() : "1 250,70" 

2/
Pour trouver les articles chers supérieur à 50€ 
stocker les valeurs dans un nouveau tableau $articles_hight_cost = [];
utilisation de if 
si l'article >= 50 alors stocker dans $articles_hight_cost
utiliser implode L'objectif de implode() est de transformer ce tableau
en une phrase ou en une liste formatée.

3/$max_quantite = 0;
$lmore_stock = null; 

foreach ($inventory as $article) {
    // Condition : Est-ce que la quantité actuelle est supérieure au maximum trouvé jusqu'à présent ?
    if ($article['quantity'] > $max_quantite) { 
        // Mise à jour du max (le nombre)
        $max_quantite = $article['quantity'];
        
        // Mise à jour de l'article gagnant (son nom)
        $le_plus_stocke = $article['name']; 
    }
}

// Affichage des résultats
echo "Article le plus stocké : " . $le_plus_stocke . "\n";
echo "Quantité max: " . $max_quantite . "\n";

-->

<?php

$inventory = [
    ['name' => 'Souris', 'quantity' => 25, 'unit_price' => 12.99],
    ['name' => 'Clavier mécanique', 'quantity' => 8, 'unit_price' => 79.50],
    ['name' => 'Webcam HD', 'quantity' => 40, 'unit_price' => 29.00],
    ['name' => 'Disque SSD 1TB', 'quantity' => 15, 'unit_price' => 89.99],
    ['name' => 'Écran 24"', 'quantity' => 5, 'unit_price' => 199.00],
];

$cost = 0;
$articles_hight_cost = [];
$max_quantity = 0;
$more_stock = null;

foreach ($inventory as $article) {
    $basket_price = ($article['quantity'] * $article['unit_price']);
    $cost += $basket_price;

    if ($article['unit_price'] >= 50) {
        $articles_hight_cost[] = $article['name'];
    }
    if ($article['quantity'] > $max_quantity) {


        $max_quantity = $article['quantity'];
        $more_stock = $article['name'];
    }
}

echo "--- Valeur de l'inventaire -----\n";

echo "La valeur de l'inventaire est de : " . number_format($cost, 2, ',', ' ') . " € \n";

echo "Liste des articles dont le prix > 50€: " . implode(', ', $articles_hight_cost) . "\n";

echo "L'article ayant le plus de stock : " . $more_stock . " il y a " . $max_quantity . " unitées attention à ne pas commander de trop \n";
