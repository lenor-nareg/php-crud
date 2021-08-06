<?php
 
// require_one('A.class.php');
// require_one('B.class.php');
// require_one('C.class.php');
// require_one('D.class.php');

function inclusionAutomatique($nomDeLaClasse) {

    require_once($nomDeLaClasse . '.class.php');
    echo "On passe dans inclusionAutomatique ! <br>";
    echo "Require($nomDeLaClasse.class.php);<br>";

}

spl_autoload_register('inclusionAutomatique');

// $a = new A;
// $b = new B;


/*
    spl_autoload_register : permet d'exécuter une fonction lorsque l'interpréteur voit passer un "new" dans le code.
    Le nom à coté du "new" est récupéré et transmis automatiquement à la fonction inclusionAutomatique()
    Il est indispensable de respecter une convention de nommage sur ses fichiers pour que l'autoload fonctionne. 

    L'autoload permet d'automatiser l'inclusion des fichiers contenant les classes, nous n'avons plus besoin de faire 50 classes, c'est l'autoload qui se charge de la faire 
    a notre place.
    
*/

