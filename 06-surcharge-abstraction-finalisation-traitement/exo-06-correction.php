<?php

/*
    1. Faire en sorte de ne pas avoir d'objet Vehicule. //
    2. Obligation pour la renault et la peugeot de posséder la même méthode demarrer(). //
    3. Obligation pour la renault de déclarer un carburant diesel et pour la peugeot de déclarer un carburant essence. //
    4. La renault doit effectuer 30 tests de plus qu'un véhicule de base. //
    5. la peugeot doit effectuer 70 tests de plus qu'un véhicule de base. //
    6. Effectuer les affichages nécessaires. //
*/

abstract class Vehicule // empêche l'instanciation de la class Vehicule
{
    final public function demarrer() // empêcher la modification de cette méthode dans les classe héritière
    {
        return 'Je démarre';
    }

    abstract public function carburant(); // pour obliger les classes héritières à redéclarer un méthode carburant

    public function nombreDeTestObligatoire()
    {
        return 100;
    }
}

//----------------
class Peugeot extends Vehicule // extends pour hérité de la classe Vehicule
{

    public function carburant()
    {
        return 'essence';
    }

    public function nombreDeTestObligatoire() // redefinition + surcharge
    {
        // 100
        $nbTest = parent::nombreDeTestObligatoire(); // parent::une_methode() récupérer le résultat de la méthode parent
        $nbTestPeugeot = $nbTest + 70; // surcharge, amélioration de la méthode
        return $nbTestPeugeot;
    }


}
//----------------
class Renault extends Vehicule // extends pour hérité de la classe Vehicule
{

    public function carburant()
    {
        return 'diesel';
    }

    public function nombreDeTestObligatoire() // redefinition + surcharge
    {
        return parent::nombreDeTestObligatoire() + 30; // parent::une_methode() récupérer le résultat de la méthode parent + surcharge
    }

}

$peugeot = new Peugeot;
echo "La Peugeot peut démarrer : " . $peugeot->demarrer() . "<br>";
echo "La Peugeot possède un carburant de type : " . $peugeot->carburant() . "<br>";
echo "La Peugeot à affectuée : " . $peugeot->nombreDeTestObligatoire() . ' tests obligatoire.<br>';

echo "<br><hr><br>";

$renault = new Renault;
echo "La Renault peut démarrer : " . $renault->demarrer() . "<br>";
echo "La Renault possède un carburant de type : " . $renault->carburant() . "<br>";
echo "La Renault à affectuée : " . $renault->nombreDeTestObligatoire() . ' tests obligatoire.<br>';