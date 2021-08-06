<?php

/*
    1. Faire le setter et le getter pour la propriété private $nom.
    2. Enregister un nom et afficher le nom.
*/

class Membre 

{
    private $prenom;
    private $nom;

    public function setPrenom($newPrenom)
    {
        if(is_string($newPrenom))
        {
            // $membre->prenom  
            $this->prenom = $newPrenom;
        }
        else
        {
            // fonction prédéfinie qui génère des erreurs utilisateurs
            trigger_error("Ce prénom n'est pas un string", E_USER_ERROR);
        }
    }

    public function getPrenom() 
    {
        return $this->prenom;
    }

    public function setNom($newNom)
    {
        if(is_string($newNom))
        {
            $this->nom = $newNom;
        }
        else
        {
            // fonction prédéfinie qui génère des erreurs utilisateurs
            trigger_error("Ce nom n'est pas un string", E_USER_ERROR);
        }
    }

    public function getNom()
    {
        return $this->nom;
    }


}



$membre = new Membre;
echo '<pre>'; print_r(get_class_methods($membre)); echo '</pre>';
$membre->setPrenom("John");
echo "Prénom : " . $membre->getPrenom() . "<br>";
$membre->setNom('Doe');
echo "Nom : " . $membre->getNom() . "<br>";

/*
    Les getters / setters permettent de contrôler l'intégralité des données.
    Si nous devons contrôler les données saisie dans un formulaire, chaque donnée devra être transmit à une fonction qui permettra de contrôler la validité de la donnée.
    setteur = contrôler les données.
    getteur = permet de voir / d'exploiter les données finales, les données contrôlées.
    Si nous avons 10 champs dans 1 formulaire, nous aurons 10 setteurs et 10 getteurs.
    Les getteurs / setteurs permettent d'éviter d'avoir n'importe quoi comme données dans les différentes propriétés déclarées

    $this représente l'objet (en cours) à l'intérieur de la classe
    Mettre les propriétés en private permet d'éviter qu'ils ne soient modifié dans le code, nous sommes obligés de passer par les setteurs.
    (c'est un bonne contrainte !)
*/

