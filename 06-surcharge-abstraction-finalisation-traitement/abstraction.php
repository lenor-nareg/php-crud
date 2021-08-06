<?php

abstract class Joueur
{
    public function seConnecter()
    {
        return $this->etreMajeur();
    }

    // Redéfinir cette méthode avec l'age de la majorité du pays concerné
    abstract public function etreMajeur(); // les méthodes abstraites n'ont pas de contenu (no body)
    // Redéfinir cette méthode avec la devise du pays concerné
    abstract public function devise();

}


############################################
// Ici on hérite

class JoueurFr extends Joueur 
{
    public function etreMajeur()
    {
        return 18;
    }

    public function devise()
    {
        return ' euro €';
    }


}

######################################
// Ici on hérite

class JoueurUs extends Joueur
{

    public function etreMajeur()
    {
        return 21;
    }

    public function devise()
    {
        return ' dollar $';
    }


}

// $joueur = new Joueur; // erreur, car une class abstraite n'est pas instanciable

$joueurFr = new JoueurFr;
echo "Age pour jouer en France : " . $joueurFr->etreMajeur() . '<hr>';
echo "Devise pour jouer en France : " . $joueurFr->devise() . '<hr>';

$joueurUs = new JoueurUs;
echo "Age pour jouer au USA : " . $joueurUs->etreMajeur() . '<hr>';
echo "Devise pour jouer au USA: " . $joueurUs->devise() . '<hr>';


/*
    Une classe abstraite n'est pas instanciable.
    Les méthodes abstraites n'ont pas de contenu (no body).
    Lorsque l'on hérite de méthodes abstraites, nous sommes obligés de les redéfinir.
    Pour avoir des méthodes abstraites, il est nécessaire que la classe qui les contient soit abstraite
    Une classe abstraite peut contenir des méthodes normale.

    Le développeur qui écrit une classe abstraite est au coeur de l'application et va obliger les autres développeurs à redéfinir la methode etreMajeur() et devise() car non seulement elle est abstraite mais en plus elle est exécutée dans la méthode seConnecter().
    Le développeur impose un bonne contrainte (saine).
*/