<?php


class Maison
{

    public $couleur = 'blanc'; // propriété qui appartient à l'objet
    public static $espaceTerrain = '500m2'; // propiété qui appartient à la classe
    private static $nbPiece = 7; // propriété appartient à la classe
    private $nbPorte = 20; // appartient à la classe
    const HAUTEUR = '10m'; // déclaration de constante qui appartient à la classe
    // Une constante se déclare toujours en lettre CAPITAL par convention

    public static function getNbPiece()
    {
        // return Maison::$nbPiece
        return self::$nbPiece;
        // la méthode retourne une propriété static de la classe, on l'appel donc par self:: qui représente la classe à l'intérieur d'elle-même.
    }

    public function getNbPorte()
    {
        return $this->nbPorte;
        // On utilise $this car la propriété $nbPorte est non static et donc appartient à l'objet et non à la classe
    }



}

echo "Espace terrain : " . Maison::$espaceTerrain . '<hr>';
echo "Nombre de pièce : " . Maison::getNbPiece() . '<hr>';



$maison = new Maison;
echo "Couleur : " . $maison->couleur. "<hr>";
echo '<pre>'; var_dump($maison); echo '</pre>';

$maison2 = new Maison;
$maison2->couleur = "bleu";
echo "Couleur maison 2 : " . $maison2->couleur . "<hr>";
echo '<pre>'; var_dump($maison2); echo '</pre>';

Maison::$espaceTerrain = "1000m2";
echo "Espace terrain : " . Maison::$espaceTerrain . '<hr>';
echo "Nombre de pièce : " . Maison::getNbPiece() . '<hr>';
echo "Nombre de portes : " . $maison2->getNbPorte() . '<hr>';

// echo $maison2->espaceTerrain . '<hr>'; ⚠ erreur ! je ne dois pas appelé une propriété static avec mon objet
// echo Maison::$couleur;  ⚠ erreur ! je ne dois pas appeler une propriété qui n'est pas static par la classe
// echo $maison2->getNbPiece() . '<hr>'; ⚠ donne une erreur car on utilise un getter avec un return self réserver au classe.
// echo $maison2::$espaceTerrain . '<hr>'; ⚠ devrait donner une erreur ! car la méthode est static, il faudrait l'appeler par la classe

echo Maison::getNbPiece() . '<hr>';
echo "Hauteur de la maison : " . Maison::HAUTEUR . "<hr>";


/*
$maison3 = new Maison;
echo '<pre>'; var_dump($maison3); echo '</pre>';

$maison3$::$espaceTerrain = '1000m2';
echo "Espace terrain : " . $maison3::$espaceTerrain . '<hr>';
*/

/*
    $objet->element // objet à l'extérieur de la classe
    $this->element  // objet à l'intérieur de la classe
    class::element  // classe à l'extérieur de la classe
    self::element   // classe à l'intérieur de la classe

    static indique qu'un élément appartient à la classe (dans le cas d'une propriété, c'est variable)
    const indique qu'un élément appartient à la classe  (dans le cas d'une constante, c'est constant)
    self représente la class à l'intérieur d'elle-même
    $this représente m'objet en cours à l'intérieur de la classe

    Lorsque l'on appel une propriété via l'objet, il ne faut pas mettre le signe $ devant
    Lorsque l'on appel une propriété via la classe (static), il faut mettre le signe $ devant

*/




