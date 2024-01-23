<?php 

// http://192.168.15.22/jour2/09-heritage.php


class Table {
    private int $id ;
    private DateTime $date_creation ;
    private DateTime $date_update ; 
     /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of date_creation
     */ 
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * Set the value of date_creation
     *
     * @return  self
     */ 
    public function setDateCreation($date_creation)
    {
        $this->date_creation = $date_creation;

        return $this;
    }

     /**
     * Get the value of date_update
     */ 
    public function getDateUpdate()
    {
        return $this->date_update;
    }

    /**
     * Set the value of date_update
     *
     * @return  self
     */ 
    public function setDateUpdate($date_update)
    {
        $this->date_update = $date_update;

        return $this;
    }
}

class Articles extends Table{

  
    private string $titre;
    
   

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
}

class Auteur  extends Table{
   
    private string $nom ;
    

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
}

$a = new Articles();

var_dump($a); 

