<?php

class Autoload
{

    public static function inclusionAuto($className)
    {
        // $className = controller\Controller
        // require_once "  C:\xampp\htdocs\phpoo\11-CRUD  .   /controller/Controller    '.php'"
        // $test = str_replace('\\', '/', $className);
        // var_dump($test);
        require_once __DIR__ . '/' . str_replace('\\', '/', $className) . '.php';
        //                  controller\Controller
        // Affichage du chemin sur la page web pour controle
    }
}

spl_autoload_register(array('Autoload', 'inclusionAuto'));
/*
    spl_autoload_register() : fonction prédéfinie qui s'execute lorsque l'interpréteur voit passer le mot clé "new"
    Lorsque l'on instancie une classe, la fonction 'InclusionAuto de la classe 'Autoload' s'execute automatiquement et tout ce qu'il ya après le "new" (namespace\class) est envoyé directement en argument de la fonction 'inclusionAuto'.
    On se sert du namespace 'controller' pour entrer dans le dossier controller du dossier "11-CRUD" et du nom de la classe 'Controller' pour inclure le fichier
    Il faut bien respecter une convention de nommage pour les dossiers et les fichiers.
*/


// TEST

// $c = new controller\Controller;
// echo __DIR__ . '/controller/Controller.php<br>';
