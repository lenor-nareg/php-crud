<?php

namespace model;

class EntityRepository
{
    private $db; // permet de stocker un objet issu de la classe PDO, c'est à dire la connexion à la BDD
    public $table; // permet de stocker le nom de la table SQL afin de l'injecter dans les différentes requêtes SQL

    // fonction permettant de construire la connexion à la BDD
    public function getDb()
    {
        // Si dans la variable $db, il n'y a pas de connexion PDO, alors on entre dans le IF et on construit notre connexion
        if(!$this->db)
        {

            try
            {
                // simplexml_load_file() : fonction PHP qui permet de charger un fichier XML et retourne un objet PHP SimpleXMLElement contenant toutes les informations de la connexion à la BDD
                $xml = simplexml_load_file('app/config.xml');
                // echo '<pre>'; print_r($xml); echo '</pre>';

                $this->table = $xml->table; // on affecte le nom de la table récupéré via le fichier XML à la propriété $table de la classe EntityRepository

                try // On tente d'executer la connexion à la BDD
                {
                    // On affecte à la propriété privé $db la connexion à la BDD (PDO)        
                    $this->db = new \PDO("mysql:host=" . $xml->host . ";dbname=" . $xml->db, $xml->user, $xml->password, array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
                }
                catch(\PDOException $e)
                {
                    echo "Erreur : " . $e->getMessage();
                }

            }
            catch(\Exception $e)
            {
                echo "Erreur : " . $e->getMessage();
            }

            // print_r($this->db);
            // Si la propriété 
            return $this->db;

        }

    }

    // méthode permettant de sélectionner l'ensemble de la table 'employes'
    public function selectAllEntityRepository()
    {

        // $data = objetPDO
        // $r = PDOstatement
        $data = $this->getDb()->query("SELECT * FROM " . $this->table);
        $r = $data->fetchAll(\PDO::FETCH_ASSOC);
        // echo "<pre>"; var_dump($r); echo "</pre>";
        return $r;


    }

}



// $e = new EntityRepository;
// $e->selectAllEntityRepo();