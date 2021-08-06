<?php

/*
    1. Création d'un véhicule. //
    2. Attribuer un nombre de litre d'essence au véhicule : 5L. //
    3. Afficher le nombre de litre d'essence du véhicule. //
    4. Création d'une pompe à essence. //
    5. Attribuer un nombre de litre d'essence à la pompe : 800L. //
    6. Afficher le nombre de litre d'essence de la pompe. //
    7. La pompe donne de l'essence à la voiture en faisant le plein (voiture après plein : 50L). //
    8. Afficher le nombre de litres d'essence de la voiture après ravitaillement. //
    9. Afficher le nombre de litres d'essence contenu dans la pompe après ravitaillement. //
    10. Faire en sorte que le véhicule ne puisse pas contenir plus de 50L d'essence. //
*/

/**********************
UML:
---------------------       
|    Vehicule		|     
---------------------
|	$litresEssence	|
---------------------
|setlitresEssence() |
|getlitresEssence() |
---------------------

---------------------
|    Pompe   		|
---------------------
|	$litresEssence	|
---------------------
|setlitresEssence() |
|getlitresEssence() |
|donnerEssence()	|
---------------------
***********************/


class Vehicule
{
    private $litresEssence;

    public function setLitresEssence($litres)
    {
        if(is_int($litres))
            $this->litresEssence = $litres;
    }

    public function getLitresEssence()
    {
        return $this->litresEssence;
    }

}

class Pompe
{
    private $litresEssence;

    public function setLitresEssence($litres)
    {
        if(is_integer($litres))
        $this->litresEssence = $litres;
    }

    public function getLitresEssence()
    {
        return $this->litresEssence;
    }

    public function donnerEssence(Vehicule $v) // injection de dépendance
    // on exige un argument de type Vehicule
    {   
        // $this représente l'objet pompe courant         //       $v représente le Vehicule reçu
        $this->setLitresEssence( $this->getLitresEssence() - (50 - $v->getLitresEssence()));
        //                               800               - (50  -   5)
        $v->setLitresEssence( $v->getLitresEssence() + (50 - $v->getLitresEssence())); // 50 L de + pour le Vehicule
        //                            5              +            (50  - 5)        
    }                                         

}

$vehicule1 = new Vehicule;
$vehicule1->setLitresEssence(5);
echo "Le véhicule 1 possède : " . $vehicule1->getLitresEssence() . " litres d'essence. <hr>";

$pompe = new Pompe;
$pompe->setLitresEssence(800);
echo "La pompe à essence possède : " . $pompe->getLitresEssence() . " litres d'essence. <hr>";


$pompe->donnerEssence($vehicule1);
echo "Après ravitaillement, le véhicule 1 possède : " . $vehicule1->getLitresEssence() . " litres d'essence. <hr>";
echo "Après ravitaillement, la pompe possède : " . $pompe->getLitresEssence() . " litres d'essence. <hr>";

$vehicule2 = new Vehicule;
$vehicule2->setLitresEssence(30);
echo "Le véhicule 2 possède : " . $vehicule2->getLitresEssence() . " litres d'essence. <hr>";

$pompe->donnerEssence($vehicule2);
echo "Après ravitaillement, le véhicule 2 possède : " . $vehicule2->getLitresEssence() . " litres d'essence. <hr>";
echo "Après ravitaillement, la pompe possède : " . $pompe->getLitresEssence() . " litres d'essence. <hr>";

$vehicule3 = new Vehicule;
$vehicule3->setLitresEssence(0);
echo "Le véhicule 3 possède : " . $vehicule3->getLitresEssence() . " litres d'essence. <hr>";

$pompe->donnerEssence($vehicule3);
echo "Après ravitaillement, le véhicule 3 possède : " . $vehicule3->getLitresEssence() . " litres d'essence. <hr>";
echo "Après ravitaillement, la pompe possède : " . $pompe->getLitresEssence() . " litres d'essence. <hr>";








