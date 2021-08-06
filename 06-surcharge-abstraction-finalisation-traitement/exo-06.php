<?php

/*
    1. Faire en sorte de ne pas avoir d'objet Vehicule.
    2. Obligation pour la renault et la peugeot de posséder la même méthode demarrer().
    3. Obligation pour la renault de déclarer un carburant diesel et pour la peugeot de déclarer un carburant essence.
    4. La renault doit effectuer 30 tests de plus qu'un véhicule de base.
    5. la peugeot doit effectuer 70 tests de plus qu'un véhicule de base.
    6. Effectuer les affichages nécessaires.
*/



abstract class Vehicule
{
    final public function demarrer(){
        return 'Je démarre';
    }
    

    abstract public function carburant();
    

    public function nombreDeTestObligatoire()
    {
        return 100;
    }
}

//----------------
class Peugeot extends Vehicule{
    

    public function carburant(){
        return "Diesel";
    }

     public function nombreDeTestObligatoire() 
    {
   
        return parent::nombreDeTestObligatoire() + 70;
        //$nbtest = parent::ombreDeTestObligatoire();
        //$nbtestPeugeot = $nbtest + 70;
        //
    }
    
}
//----------------
class Renault extends Vehicule
   
{
    public function carburant(){
        return "Essence";
    }

     public function nombreDeTestObligatoire() // redefinition
    {

        return parent::nombreDeTestObligatoire() + 30;
        
      

    }
    
}

$peugeot = new Peugeot;
echo "Je suis dans ma peugeot : " . $peugeot->demarrer() . '<br>';
echo "Elle carbure au : " . $peugeot->carburant() . '<hr>';
echo "Nombre de test : " . $peugeot->nombreDeTestObligatoire() . '<hr>';

$renault = new Renault;
echo "Je suis dans ma renault : " . $renault->demarrer() . '<br>';
echo "Elle carbure au : " . $renault->carburant() . '<hr>';
echo "Nombre de test : " . $renault->nombreDeTestObligatoire() . '<hr>';


echo "Bonjour l'erreur";
$vehicule = new Vehicule;