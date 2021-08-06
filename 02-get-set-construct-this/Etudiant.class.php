<?php

// 1. Créer des nouvelles propriétées private : nom, adresse, salle, cp, ville.
// 2. Créer des setters et getters associés.
// 3. Créer 5 nouveaux Etudiant.
// 4. Vérifier que nom, prenom, ville, adresse c'est bien du string // pour nom et prenom ( longueur minimum 3 caractères - maximum 15 caractères ) sinon erreur !
// 5. salle et cp verifier que se sont bien des nombres sinon erreur ! 

class Etudiant
{
    private $prenom;
    private $nom;
    private $adresse;
    private $salle;
    private $cp;
    private $ville;
    

    public function __construct($prenom, $nom, $adresse, $salle, $cp, $ville) // __construct : méthode appelée automatiquement lors du 'new'.
    {
        $this->setPrenom($prenom);
        $this->setNom($nom);
        $this->setAdresse($adresse);
        $this->setSalle($salle);
        $this->setCp($cp);
        $this->setVille($ville);
        echo "Nom et prénom de l'étudiant : " . $prenom . ' ' . $nom . '<br>' . 'Salle : ' . $salle . '<br>' . 'Adresse : ' . $adresse . ' ' . $cp . ' ' . $ville;

    }


    public function setPrenom($prenom)
    {
       if(is_string($prenom))
       {
           if(iconv_strlen($prenom) >= 3 && iconv_strlen($prenom) <= 15)
           {
               $this->prenom = $prenom;
           }
           else
           {
               trigger_error("Le prénom doit contenir entre 3 et 15 caractères ", E_USER_ERROR);
           }
       }
       else
       {
           trigger_error("Ce prénom n'est pas un string !", E_USER_ERROR);
       } 
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setNom($nom)
    {

        if(is_string($nom))
        {
            if(iconv_strlen($nom) >= 3 && iconv_strlen($nom) <= 15)
           {
               $this->nom = $nom;
           }
           else
           {
               trigger_error("Le nom doit contenir entre 3 et 15 caractères ", E_USER_ERROR);
           }
        }
        else
        {
            trigger_error("Ce nom n'est pas un string !", E_USER_ERROR);
        }  
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setAdresse($adresse)
    {
        if(is_string($adresse))
       {
           $this->adresse = $adresse;
       }
       else
       {
           trigger_error("Cette adresse n'est pas un string !", E_USER_ERROR);
       } 
    }

    public function getAdresse()
    {
        return $this->adresse;
    }
    
    public function setSalle($salle)
    {
        if(is_integer($salle))
        {
            $this->salle = $salle;
        }
        else
        {
            trigger_error("Cette salle n'est un nombre !", E_USER_ERROR);
        }
    }   
    public function getSalle()
    {
        return $this->salle;
    }
           
    public function setCp($cp)
    {
        if(is_integer($cp))
        {
            $this->cp = $cp;
        }
        else
        {
            trigger_error("Ce code postal n'est un nombre !", E_USER_ERROR);
        }
    }

    public function getCp()
    {
        return $this->cp;
    }

    public function setVille($ville)
    {
        if(is_string($ville))
       {
           $this->ville = $ville;
       }
       else
       {
           trigger_error("Cette ville n'est pas un string !", E_USER_ERROR);
       } 
    }

    public function getVille()
    {
        return $this->ville;
    }
}


$eleve = new Etudiant("John", "Doe", "16 rue de là-bas", 7, 93170, "Bagnolet");
echo '<hr>';
$eleve2 = new Etudiant("johanna", "Bourgeois", "6 rue du Trou Noir", 24, 92000, "Nanterre");
echo '<hr>';
$eleve3 = new Etudiant("Sam", "Sung", "4 Rue de la street", 24, 94000, "Creteil");
echo '<hr>';
$eleve4 = new Etudiant("Anthony", "Legrand", "9 rue du Lieutenant Thomas", 24, 93000, "Bobigny");
echo '<hr>';
$eleve5 = new Etudiant("Anthony", "Legrand", "75 rue du Lieutenant Thomas", 24, 93170, "Bagnolet");
echo '<hr>';
echo '<pre>'; var_dump($eleve); echo '</pre>';



/*
    __construct() est une méthode magique en PHP, elle est prédéfinie dans le code et s'execute automatiquement lorsqu'on instancie la classe.
    si la méthode magique __construct($arg) attend un argument, nous devons lui envoyer un argument à l'instanciation de la classe,
    vous savez ou vont les arguments envoyées dans la classe.
    __construct() permet d'automatiser un traitement, cela pourrait être l'équivalent du fichier init (contenant la connexion à la BDD, sessi_start, les constantes etc ...)
    On ne peux pas déclarer 2 constructeurs.
*/