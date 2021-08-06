<?php

class Panier 
{
    public $nbProduit; // propriété. "public" est accessible au sein de la classe et aussi en dehors.
    protected $prenom; // propriété. "protected" est accessible au sein de la classe et dans les classes héritières.
    private $mdp;      // propriété. "private" est accessible uniquement au sein de la classe ou elle à été déclarée.
    public function ajouterArticle() 
    {
        return "L'article a bien été ajouté<hr>";
    }

    protected function retirerArticle()
    {
        return "L'article a bien été retiré<hr>";
    }

    private function affichageArticle() 
    {
        return "Voici les articles<hr>";
    }
}

$panier1 = new Panier;
echo '<pre>'; var_dump($panier1); echo '</pre>';
echo '<pre>'; print_r(get_class_methods($panier1)); echo '</pre>';

$panier1->nbProduit = 10;
echo '<pre>'; var_dump($panier1); echo '</pre>';

echo 'Nombre de produit(s) : ' . $panier1->nbProduit . '<hr>';
echo $panier1->ajouterArticle();

// echo $panier1->retirerArticle();
// echo $panier->affichageArticle();

$panier2 = new Panier;
echo '<pre>'; var_dump($panier2); echo '</pre>';

$panier2->nbProduit = 5;
echo '<pre>'; var_dump($panier2); echo '</pre>';

// Autre exemple de class :

class Article
{
    public $id;
    public $titre;
    public $description;
    public $photo;
    public $auteur;
}

$article1 = new Article;
$article1->id = 1;
$article1->titre = "Ceci est le titre de mon article 1";
$article1->description = "Une jolie et complète description de mon article 1";
$article1->photo = "Photo de mon article 1";
$article1->auteur = "Julien Lebron";

echo '<pre>'; print_r($article1); echo '</pre>';

echo '<div>';
    echo 'id : ' . $article1->id . '<br>';
    echo 'titre : ' . $article1->titre . '<br>';
    echo 'description : ' . $article1->description . '<br>';
    echo 'photo : ' . $article1->photo . '<br>';
    echo 'auteur : ' . $article1->auteur . '<br>';
echo '</div>';

/* 

    Une classe est un plan de construction, un modèle qui nous permet de regrouper des données, des informations sur un même sujet.
    Pour exploiter ce qui est déclaré dans la classe, nous devons créer une instance, un objet issu de la classe grâce au mot clé "new";
    Le mot clé "new" permet de créer un exemplaire de la classe à travers l'objet ($panier1, $panier2).
    Si je travail avec d'autre développeur et que je met tous en public, les autres développeurs ne vont pas bien s'y retrouver.
    Si je mets des privates, les autres développeurs savent qu'ils n'ont pas besoin de comprendre à quoi ç sert.

    Niveau de visibilité :
        public    : accessible de partout dans la classe, dans les classes héritières et depuis l'extérieur de la classe.
        private   : accessible uniquement dans la classe ou cela a été déclaré.
        protected : accessible uniquement dans la classe ou cela a été déclaré et aussi dans les classes héritères.

    Divers :
        new est un mot-clé permettant d'effectuer une instanciation.
        Une classe peut produire plusieurs objets. Nous pouvons donc effectuer plusieurs instanciation avec "new".

    Les niveaux de visibilité permettent de protéger les données des classes, et de ne pas pouvoir injecter n'importe quelle données directement dans les propriétées et les méthodes des classes.

    Quand vous instanciez une classe, la variable stockant l'objet, en faite ne stocke pas l'objet lui-même.
    En faite elle stocke un identifiant qui représente cet objet.

*/


