<?php 

class Categorie{
    private int|null $id ;
    private string $nom ;
    private string $description;
    private DateTime $date_creation ;
    private bool $status ; 

    /**
     * Get the value of id
     */ 
    public function getId():int|null
    {
        return $this->id;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom():string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom):self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription():string
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description):self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of date_creation
     */ 
    public function getDateCreation():DateTime
    {
        return $this->date_creation;
    }

    /**
     * Set the value of date_creation
     *
     * @return  self
     */ 
    public function setDateCreation($date_creation):self
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus():bool
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status):self
    {
        $this->status = $status;

        return $this;
    }
    /**
     * méthode qui permet de récupérer (get) la date de création en format français jj/mm/aaaa
     *
     * @return string
     */
    public function getDateCreationFr():string{
        return $this->getDateCreation()->format("d/m/Y"); 
    }
}

$categorie = new Categorie();
$categorie->setNom("PHP") 
          ->setDescription("initiation au langage")
          ->setStatus(true)
          ->setDateCreation(new DateTime());

var_dump($categorie); 
var_dump($categorie->getDateCreation()->format("d/m/Y")); 
var_dump($categorie->getDateCreationFr()); 
// http://192.168.15.22/jour2/08-exo.php
