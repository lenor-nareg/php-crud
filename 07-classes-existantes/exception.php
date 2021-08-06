<?php
// Exception :  Utilisable en version procédural et tendance orienté objet.

echo "<h2>Exception  //  try-catch</h2>";

// L'avantage des execptions c'est de centraliser un traitement à effectuer dans le bloc catch en cas d'erreur.
// Cette fonction a pour but de trouver la position d'un élément (son indice) dans un tableau ARRAY. 
function recherche($tab, $elem)
{

    if(!is_array($tab))
        throw new Exception('Vous devez envoyer un ARRAY');
        // throw nous permet de nous envoyer dans le bloc catch et d'arrêter l'exécution du code
        // new Exception : va instancier la class prédéfinie Exception

    if(sizeof($tab) == 0)
        throw new Exception('Vous devez envoyer un ARRAY avec du contenu');

    $position = array_search($elem, $tab);
    return $position;

}

$pasUnArray = 'Je ne suis pas un ARRAY !';
$tab = array();
$tabPerso = ['Mario', 'Luigi', 'Toad', 'Bowser', 'Yoshi', 'Peach'];
echo '<pre>'; print_r($tabPerso); echo '</pre>';

try
{
    echo "Toad se trouve à la position : " . recherche($tabPerso, 'Toad') . '<hr>';
    echo "Yoshi se trouve à la position : " . recherche($tabPerso, 'Yoshi') . '<hr>';
    echo "Mario se trouve à la position : " . recherche($tabPerso, 'Mario') . '<hr>';
    echo "Peach se trouve à la position : " . recherche($tabPerso, 'Peach') . '<hr>';
    echo "Mario se trouve à la position : " . recherche($tab, 'Mario') . '<hr>'; // Erreur car tableau vide
    echo "Bowser se trouve à la position : " . recherche($tabPerso, 'Bowser') . '<hr>'; // Cette ligne n'est pas exécuter puisqu'il y a une erreur juste au dessus et nous sommes automatiquement entrer dans le bloc catch

}
catch(Exception $e)
{
    // bloc de capture, on va attraper les exceptions "Exception" si il y'en a une qui est levée.
    // Exception est une classe prédéfinie en PHP.
    // $e représente l'Exception.
    // try et catch fonctionne toujours ensemble.

   
    // echo '<pre>'; print_r($e); echo '</pre>';
    // echo '<pre>'; print_r(get_class_methods($e)); echo '</pre>';

    echo '<div style="width: 400px; padding: 10px; background: #D59797; border-radius: 5px; margin: 0 auto; color: white; text-align: center;">';
    echo "Erreur : " . $e->getMessage() . "<hr> Dans le fichier : " . $e->getFile() . "<hr> A la ligne : " . $e->getLine();
    echo '</div>';
}

/*
    Il n'y a pas raison de continuer des traitements si l'un d'entre eux dysfonctionne, car les prochains traitements étaient peut-être dépendant de celui qui dysfonctionne. Exception permet de centraliser les erreurs en cas de mauvais traitement. Cela nous permet de gérer proprement les erreurs.
*/

echo "<hr><hr>";

echo "<h2>PDOException</h2>";


try
{
    $bdd = new PDO('mysql:host=localhost;dbname=dbdoranco', 'root', ''); // Tentative de connexion à la bdd
    echo '<div style="width: 400px; padding: 50px; background: #97D5AC; border-radius: 5px; margin: 0 auto; color: white; text-align: center;">';
    echo "Connexion Etablie avec succès !";
    echo '</div>';

}
catch(PDOException $e)
{

    echo '<div style="width: 400px; padding: 10px; background: #D59797; border-radius: 5px; margin: 0 auto; color: white; text-align: center;">';
    echo "Erreur : " . $e->getMessage() . "<hr> Dans le fichier : " . $e->getFile() . "<hr> A la ligne : " . $e->getLine();
    echo '</div>';
}

    // echo 'Informations sur l\'erreur de connexion : ' . $e->getCode(), ' Message : ' . $e->getMessage(), $e->getFile(), '<br>Ligne : ' . $e->getLine(), '<br>getPrevious : ' . $e->getPrevious(), '<br>getTraceAsString : ' . $e->getTraceAsString();
    // echo '<pre>'; print_r(get_class_methods($e)); echo '<pre>';

