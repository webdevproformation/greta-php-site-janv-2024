<?php 
// depuis la version de PHP 7.3 
// nouveau mot clé qui a été ajouté dans la langage PHP 
namespace App ; 
// permet de protéger et rendre unique votre class Bonjour ; 
// class s'appelle toujours Bonjour
// MAIS maintenant elle est une élément du namespage App ; 

class Bonjour {
    public function dire(): void{
        echo "bonjour <br>";
    }
}