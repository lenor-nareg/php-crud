<?php

namespace General;
// Les namespaces (espace de nom) permettent de ranger ses classes.
// Il est possible que 2 classes possèdent le même nom mais proviennent de namespace différents, du coup il n'y aura pas de conflits entre ces 2 classes.

require_once('namespace-commerce.php');

// permet de dire quel namespace je souhaite importer du fichier namespace-commerce.php
use Commerce1, Commerce2, Commerce3;

echo __NAMESPACE__ . '<hr>'; // constante qui permet de m'afficher le namespace dans le quel je suis.


// Sans l'anti-slash, cela recherche la classe PDO dans le namespace General.
// Si je mets l'antislash, je repars dans l'espace global d'origine de PHP et donc plus de problème pour trouver la classe PDO.
// Cela me permet de sortir de mon namespace le temps de la ligne. 
$bdd = new \PDO('mysql:host=localhost;dbname=dorancodb', 'root', '');




// $monObjet = nomDuNamespace\nomDeLaClasse;
$commande = new Commerce1\Commande;
echo '<pre>'; var_dump($commande); echo '</pre>';
echo 'Nombre de commande(s) : ' . $commande->nbCommande . '<hr>';


$produit = new Commerce2\Produit;
echo '<pre>'; var_dump($produit); echo '</pre>';
echo 'Nombre de produit(s) : ' . $produit->nbProduit . '<hr>';

$panier = new Commerce3\Panier;
echo '<pre>'; var_dump($panier); echo '</pre>';
echo "Nombre de commande(s) : " . $panier->nbCommande . '<hr>';

$produit = new Commerce3\Produit;
echo '<pre>'; var_dump($produit); echo '</pre>';
echo "Nombre de produit(s) : " . $produit->nbProduit . '<hr>';

