<?php

class A 
{
    public function calcul()
    {
        return 10;
    }
}

class B extends A
{
    public function calcul() // redefinition
    {

        // $nb = 10
        $nb = parent::calcul();
        // ici on stock le résultat de la fonction initiale par parent::ma_methode();
        // je n'utilise pas $this->calcul() sinon cette méthode devient récursive et la méthode s'appelera en boucle
        // on ne peut pas faire appel à une méthode à l'intérieur d'elle-même

        if($nb <= 100)
        {
            return "$nb est inférieur ou égal à 100<hr>";
        }
        else
        {
            return "$nb est supérieur à 100<hr>";
        }

    }

    public function autreCalcul()
    {
        $uneVariable = parent::calcul();
        // Il est possible d'atteindre une méthode de mon parent dans une autre méthode ne portant pas le même nom
    }


} 

######################################################################

$objetClassB = new B;
echo "<pre>"; print_r(get_class_methods($objetClassB)); echo "</pre>";

echo $objetClassB->calcul();

/*
    surcharge - override : une redéfinition + surcharge cela permet de prendre en compte le comportement de ma fonction d'origine afin d'y ajouter un traitement complémentaire. C'est une amélioration de la méthode d'origine !

*/