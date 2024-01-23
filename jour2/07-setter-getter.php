<?php 

// http://192.168.15.22/jour2/07-setter-getter.php

// table 
// Article 
// id
// titre 
// contenu
// date_creation 

// créer une class => les même propriétés que dans la table 
// synchroniser une class => une table => Design Pattern => ActiveRecord 

class Articles{
    // pour ajouter rapidement les Setter et Getter sur chaque propriété private de la class 
    // attention l'id n'a QUE getter car la valeur de l'id est donné PAR la base de données
    // pour les propriétés ayant un séparateur _ 
    // getter et le setter ne prennent pas de _ 
    //  $date_creation
    // getDateCreation()
    // setDateCreation()
    // pour créer rapidement les setter et getter sur les propriétés private 
    // vous pouvez télécharger une extension dans VSC 
    //
    private int $id;
    private string $titre ;
    private string $contenu ;
    private string $date_creation ;
    
    // getter => permet d'accéder hors de la class à la valeur de $titre
    public function getTitre() :string {
        return $this->titre ; 
    }
    // setter => donner une valeur à la propriété $titre 
    // setter fluent 
    public function setTitre(string $titre) :self {
        $this->titre = $titre ;
        return $this ; 
    }
    
    // mais vu que les propriétés sont private 
    // pour chaque propriété private est associée à 2 méthodes public 
    // getter => récupérer sa valeur 
    // setter => donner une valeur 

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
}
