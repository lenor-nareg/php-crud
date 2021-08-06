<?php

class Animal
{
    protected function deplacement()
    {
        return "Je me déplace";
    }

    public function manger()
    {
        return "Je mange chaque jour";
    }
}

// extends est un mot clé qui permet d'hériter d'une classe
// la classe Elephant hérite de toute les méthodes (public, protected) de la classe Animal. ⚠ private n'est pas héritable.
// toutes les méthodes de la class Animal sont accessibme directement dans la classe Elephant

class Elephant extends Animal
{
    public function quiSuisJe()
    {
        // appel des méthodes issues de la classe Animal (héritage : deplacement() et manger() ) 
        return "Je suis un Elephant et " . $this->deplacement() . " comme un éléphant ! " . $this->manger() . " des fougères.";
        // j'utilise la méthode deplacement() qui est protected dont j'hérite.
    }

}

class Chat extends Animal
{
    public function quiSuisJe()
    {
        return "Je suis un Chat et " . $this->deplacement() . " comme un chat ! " . Animal::manger() ;
    }

    public function manger() // redéfinition de méthode // Lorsque l'on appel une méthode sur un objet, l'intépréteur php d'abord chercher dans la classe dont est issue l'objet avant d'aller voir dans la classe mère (en cas d'héritage)
    {
        return "Je mange des croquettes";
    }

}


// Aucun est un Animal, par contre il existe des éléphants , des chats, des chiens, etc ...
$elephant = new Elephant;
echo "Elephant : " . $elephant->quiSuisJe() . '<hr>'; // affiche : "Je suis un éléphant"
echo "Elephant : " . $elephant->manger() . '<hr>'; // affiche : "Je mange chaque jour"
// echo "Elephant : " . $elephant->deplacement() . '<hr>'; // Erreur. J'hérite bien de la méthode protected mais je ne pas l'invoquer en dehors d'une classe.

$chat = new Chat;
echo "Chat : " . $chat->quiSuisJe() . '<hr>';
echo "Chat : " . $chat->manger() . '<hr>';



echo '<pre>'; print_r(get_class_methods($chat)); echo '</pre>';
echo '<pre>'; print_r(get_class_methods($elephant)); echo '</pre>';