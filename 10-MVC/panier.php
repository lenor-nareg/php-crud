<?php

session_start();


if(isset($_GET['action']) && $_GET['action'] == 'create' || isset($_SESSION['panier']))
{
    $_SESSION['panier'] = array(26,27,28);
    echo "Produit présent dans le panier : " . implode('-', $_SESSION['panier']) . '<hr>';
    echo "<a href='?action=vider'>Vider le panier</a>";
}    
else
{
    echo "<a href='?action=create'>Créer le panier</a>";
}    

// le code ci-dessous est mal placé et c'est pour cela que je dois cliqué 2 fois sur vider le panier pour qu'il m'affiche bien crée le panier.
// car le code au dessus est relu et repris.
// Je devrais placer ce code juste après le session_start() pour régler le problème
if(isset($_GET['action']) && $_GET['action'] == 'vider')
{
    unset($_SESSION['panier']);
}



/*
    Model         : requete SQL || Je fais une requête qui va chercher tout les produits en BDD
    View          : rendu visuel (HTML/CSS) || Je présente les données qui sorte du traitement (controller)
    Controller    : le controller pilote l'application || Il réceptionné les données du model (requete SELECT + FETCH) et en fonction de l'action de l'internaute, 
                    il va transmettre les données sur un template / view  sur le navigateur 
*/