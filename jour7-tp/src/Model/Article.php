<?php 

namespace App\Model ;

use PDO ;
use App\Utils\Bdd ; 

class Article{
    private int|null $id ;
    private string $titre ;
    private string|null $contenu ;
    private string|null $img;
    private string|null  $dt_creation ; 

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of contenu
     */ 
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set the value of contenu
     *
     * @return  self
     */ 
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get the value of img
     */ 
    public function getImg()
    {
        if($this->img === null){
            return "https://via.placeholder.com/400x200?text=no image";
        }
        return $this->img;
    }

    /**
     * Set the value of img
     *
     * @return  self
     */ 
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get the value of dt_creation
     */ 
    public function getDtCreation()
    {
        return $this->dt_creation;
    }

    /**
     * Set the value of dt_creation
     *
     * @return  self
     */ 
    public function setDtCreation($dt_creation)
    {
        $this->dt_creation = $dt_creation;

        return $this;
    }

    public function readAll(){
        $connexion = Bdd::getInstance();
        $sql = "SELECT * FROM article";
        $stmt = $connexion->query($sql);
        return $stmt->fetchAll(PDO::FETCH_CLASS, Article::class);
    }

    public function create(){
        $connexion = Bdd::getInstance();
        $sql = "INSERT INTO article
                (titre, contenu , img)
                VALUES
                (:titre , :contenu , :img)
            ";
        $stmt = $connexion->prepare($sql );
        $stmt->execute([
            ":titre" => $this->titre ,
            ":contenu" => $this->contenu ,
            ":img" => $this->img
        ]);
        return $stmt->rowCount(); 
    }
}