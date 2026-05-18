<!-- Tu développes le système d'entrée automatisé d'un club de sport/loisirs. 
Tu disposes d'une liste de membres inscrits. Ton script doit analyser cette liste pour faire deux choses :

Valider les accès : Un membre peut entrer uniquement s'il a payé sa cotisation ET s'il est majeur (≥18 ans).

Créer une alerte : Si un membre a payé mais est mineur, il faut lui afficher un message spécial indiquant qu'il doit être accompagné. -->
<?php
$membres = [
    [
        "nom" => "Alice",
        "age" => 25,
        "cotisation_payee" => true
    ],
    [
        "nom" => "Bob",
        "age" => 16,
        "cotisation_payee" => true
    ],
    [
        "nom" => "Charlie",
        "age" => 42,
        "cotisation_payee" => false
    ],
    [
        "nom" => "Chloé",
        "age" => 19,
        "cotisation_payee" => true
    ],
    [
        "nom" => "Damien",
        "age" => 17,
        "cotisation_payee" => false
    ]
];

$allowed = 0;
$refuse = 0;

foreach ($membres as $customer ){
   if ($customer["age"] >= 18 && $customer ["cotisation_payee"] == true){
    echo "🟢 " . $customer["nom"] . " : Accès autorisé." . PHP_EOL;
    $allowed++;
   }
elseif ($customer["age"] < 18 && $customer ["cotisation_payee"] == true){
    echo " 🟡 Attention! " . $customer["nom"] . " : Accès autorisé accompagné par un majeur." . PHP_EOL;
    $allowed++;
}
else {
    echo " 🔴 refuser !" . $customer["nom"] . " : Non autorisé car cotisation non payé. " . PHP_EOL;
    $refuse++;
    }
}

echo "-------------------------------" . PHP_EOL;
echo " Membres acceptés : " . $allowed . PHP_EOL;
echo " Membres refusés : " . $refuse . PHP_EOL;