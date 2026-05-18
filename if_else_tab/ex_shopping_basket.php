<!-- Tu gères une boutique en ligne et tu dois calculer le montant total du panier d'un utilisateur, appliquer une réduction si 
le total dépasse un certain montant, puis afficher le récapitulatif proprement.



Calculer le sous-total de chaque article (prix × quantité) et l'afficher de manière lisible (ex: "Livre PHP 8 x2 : 70€").

Calculer le montant total global du panier.

Appliquer une promotion : Si le montant total global est supérieur à 100€, on offre une réduction de 10% sur l'ensemble du panier.

Afficher le résultat final : Le prix initial, le montant de la réduction (si applicable), et le prix final que le client doit payer. -->
<?php
$panier = [
    [
        "nom" => "Livre PHP 8",
        "prix" => 35.00,
        "quantite" => 2
    ],
    [
        "nom" => "Souris sans fil",
        "prix" => 25.50,
        "quantite" => 1
    ],
    [
        "nom" => "Écran 24 pouces",
        "prix" => 150.00,
        "quantite" => 1
    ],
    [
        "nom" => "Pack de stylos",
        "prix" => 4.99,
        "quantite" => 3
    ]
];


$total = 0;

echo "--- RÉCAPITULATIF DU PANIER ---" . PHP_EOL;

foreach ($panier as $article) {
    // Calcul du sous-total pour cet article précis
    $sous_total = $article["prix"] * $article["quantite"];
    
    // Affichage lisible de l'article avec sa quantité et son sous-total
    echo $article["nom"] . " x" . $article["quantite"] . " : " . $sous_total . "€" . PHP_EOL;

    // Accumulation dans le total global
    $total += $sous_total;
}

echo "-------------------------------" . PHP_EOL;
echo "Montant initial : " . $total . "€" . PHP_EOL;

// Utilisation du point (.) à la place de la virgule (,)
if ($total >= 100) {
    $reduction = $total * 0.10; 
    $total_final = $total - $reduction; 
    
    echo "Remise fidélité (10%) : -" . $reduction . "€" . PHP_EOL;
    echo "Le montant après réduction est de : " . $total_final . "€" . PHP_EOL;
} else {
    echo "Pas de réduction applicable." . PHP_EOL;
} 