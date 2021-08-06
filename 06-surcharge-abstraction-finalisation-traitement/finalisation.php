<?php

final class Application
{
    public function lancementApplication()
    {
        return 'L\'application se lance comme cela !!';
    }

}

#############################
// class Test extends Application {} // Erreur, car on ne peut pas hérité d'une class final !


// il est tout de même possible d'instancier une classe final
$app = new Application;
echo $app->lancementApplication();




class Application2
{
    final public function lancementApplication()
    {
        return "L'application 2 se lance correctement !";
    }
}


class Extension extends Application2
{

    // On hérite de la méthode lancementApplication()
    // Erreur ! Je ne peux pas surcharger/redéfinir la méthode lancementApplication() car elle est final dans la classe mère.

    // public function lancementApplication()
    // {
    //     return "L'application 2 à été redéfinie et se lance maintenant comme cela !";
    // }

}

$ext = new Extension;
echo "<pre>"; print_r(get_class_methods($ext)); echo "</pre>";
echo $ext->lancementApplication();

/*
    Une classe final ne peut pas être héritée
    Une class final aura forcément des méthodes qui ne pourront pas être surchargées ou redéfinies
    Une class final reste instanciable
    Une méthode final peut être présente dans une class normale
    L'intérêt de mettre le mot clé final sur une méthode est de vérouiller afin d'empêcher toute sous-méthode de la redéfinir et modifier son comportement (quand nous voulons être sur que le comportement d'une méthode soit préservé durant l'hériatge)
*/