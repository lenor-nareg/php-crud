<?php
// require_once('A.class.php');
// require_once('B.class.php');
// require_once('C.class.php');
// require_once('D.class.php');
require_once('autoload.php');

$a = new A;
$b = new B;
$c = new C;
$d = new D;


var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);

/*
    Si nous nous servons de 120 classes, il faudra 120 require/include.
    L'avantage de l'autoload est qu'il permet d'inclure nos classes automatiquement.
    Il s'agit d'un autoload simple, il peut être améliorer si nos classes sont dans plusieurs dossiers.
*/