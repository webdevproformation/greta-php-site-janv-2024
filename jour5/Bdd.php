<?php 

// Singleton 
// cette class permet de créer une connexion à la base de données
class Bdd{ // Bdd::getInstance() // une seule fois
    private $connexion ;
    private static $instance = null;
    private function __construct(){
        $dsn = "mysql://host=localhost;dbname=blog;charset=utf8";
        $login = "root";
        $password = "demo";
        $this->connexion = new PDO($dsn, $login , $password);
    }
    public static function getInstance(){
        if(self::$instance === null){
            self::$instance = new Bdd();
        }
        return self::$instance->connexion ; 
    }
}

// $bdd = new Bdd()
// $connexion = $bdd->getInstance()

// $connexion = Bdd::getInstance()
