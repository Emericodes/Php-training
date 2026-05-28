<!-- Créez une classe Article. Cette classe doit encapsuler les données d'un seul produit et définir ses propriétés/méthodes
 spécifiques.

Tâches :

Définir la propriété $nom, $quantite, et $prixUnitaire dans le constructeur (__construct).
Implémenter une méthode getValeur() qui calcule et retourne la valeur totale de cet article (Quantité * Prix Unitaire). 


Étape 2 : Création du Gestionnaire (La classe GestionInventaire)
Créez une classe GestionInventaire. Cette classe sera le point d'entrée pour toutes les opérations sur l'inventaire.
 Elle stockera un tableau d'objets Article.

Tâches :

Initialiser la classe avec les données de base (le tableau initial d'articles).x
Implémenter une méthode calculerCoûtTotal() qui boucle sur tous les objets Article et retourne la somme totale des valeurs.x
Implémenter une méthode filterArticlesParPrix(float $seuil) qui prend un montant en paramètre ($seuil). Elle doit retourner
 un tableau de tous les objets Article dont le prix unitaire dépasse ce seuil (ex: 50€).
Étape 3 : Améliorations Fonctionnelles et Performance
Ajoutez une méthode complexe pour maximiser l'utilisation des structures PHP.

Tâche :

Implémenter une méthode trouverArticlePlusStocke() qui itère sur tous les articles et retourne l'objet Article complet possédant
 la plus grande quantité, au lieu de seulement son nom ou sa quantité.
Étape 4 : Exécution du Script (Test)
Au bas du fichier, créez une instance de GestionInventaire et appelez toutes les méthodes pour démontrer la fonctionnalité.
Assurez-vous que tous les affichages respectent le format monétaire (number_format).

-->

<?php

class Article
{
    private string $name;
    private int $quantity;
    private float $unit_price;
    private int $ref;

    //Constructeur de l'objet Article. Initialise toutes ses propriétés.

    public function __construct(string $name, int $quantity, float $unit_price, int $ref)
    {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->unit_price = $unit_price;
        $this->ref = $ref;
    }
    //calcul de la valeur de stock de l'article
    public function getValueStock(): float
    {
        return $this->quantity * $this->unit_price;
    }
    public function getNameStock(): string
    {
        return $this->name;
    }
    public function getQuantityStock(): int
    {
        return $this->quantity;
    }
    public function getUnitPriceStock(): float
    {
        return $this->unit_price;
    }
    public function getRef(): int
    {
        return $this->ref;
    }
}

// Test
$article = new Article("Stylo", 10, 1.50, 100042);
echo " l'article: "  . $article->getNameStock()
    . " représente une valeur de  "
    . number_format($article->getValueStock(), 2, ',', ' ')
    . "€ dans le stock \n";




// =======================================
//CLASSE 2: GESTIONINVENTAIRE (Logique Métier)
//Gère la collection d'articles.
//=======================================
class InventoryManagement
{

    private array $articles;

    public function __construct(array $data)
    {

        $this->articles = [];
        foreach ($data as $item) {
            $articleObject = new Article(
                $item['name'],
                $item['quantity'],
                $item['unit_price'],
                $item['ref']
            );
            $this->articles[] = $articleObject;
        }
    }

    public function ValueInventory(): float
    {
        $total = 0.0;
        foreach ($this->articles as $article) {
            $total += $article->getValueStock();
        }
        return $total;
    }
    public function ValueMaxInventory(): float
    {
        $article_hight_coste = [];
        foreach ($this->articles as $article) {
            $article_hight_coste = $article->getUnitPriceStock() * getQuantityStock();
        }
        if ($article['unit_price'] >= 50) {
        $articles_hight_cost[] = $article['name'];
    }
    if ($article['quantity'] > $max_quantity) {
    }
}
