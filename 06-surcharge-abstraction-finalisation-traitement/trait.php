<?php


trait Tpanier 
{
    public $nbProduit = 5;
    public function affichageProduits()
    {
        return "Affichage des produits"; 
    }
}

trait Tmembre
{
    public function affichageMembre()
    {
        return "Affichage des membres";
    }
}



class Site
{
    use Tpanier, Tmembre; // importation des traits déclarés ci-dessus avec le mot clé "use"
}

$site = new Site;
echo "<pre>"; print_r($site); echo "</pre>";
echo "<pre>"; print_r(get_class_methods($site)); echo "</pre>";

echo "Nombre de produit(s) dans mon panier : " . $site->nbProduit . "<hr>";
echo $site->affichageProduits() . '<hr>';
echo $site->affichageMembre();

/*
    Les traits on été inventés pour repousser les limites de l'héritage.
    Une classe ne peut héritée que d'une classe. En revanche elle peut importer plusieurs trait en même temps.
    Un trait c'est un regroupement de méthodes et de propriétés pouvant être importés dans une classe. 
*/