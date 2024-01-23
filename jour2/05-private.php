<?php 
// http://192.168.15.22/jour2/05-private.php
class Voiture{ // Bonne pratique la première lettre du nom de la class 
              //  en Majuscule
    public string $marque ;
    public float $prix ; 
    public function __construct(string $marque , float $prix)
    {
        $this->marque = $marque ;
        $this->prix = $prix ; 
    }
    public function description():string{
        return "j'ai acheté une {$this->marque} à {$this->prix}"; 
    }
}
$v = new Voiture("Peugeot 208", 10_000.5);
echo $v->description() . "<br>"; 
echo $v->marque . "<br>"; // $marque est publique => je peux l'utiliser hors de la class

// public => scope visibilité l'utilisabilité 
// public => propriété et la méthode sont utilisables DANS la class ET HORS DE la class

class Carre {
    private int $cote ;
    public function __construct(int $largeur)
    {
        $this->cote = $largeur ;
    }
    private function  calcul() : int{
        return $this->cote ** 2; 
    }
    public function description(): string {
        return "une carre de coté {$this->cote} a une aire de " . $this->calcul(); 
    }
}
// les propriétés ou les méthodes private ne sont accessibles QUE DANS la class 
$c = new Carre(30); // OK 
echo $c->description() . "<br>"; 
// echo $c->cote . "<br>"; 
// Fatal error: Uncaught Error: Cannot access private property Carre::$cote 
// $c->calcul();
//  Fatal error: Uncaught Error: Call to private method Carre::calcul() from global scope  
// sécuriser la manière d'utiliser la class 
// permet en coup d'oeil de voiture si une propriété ou une méthode elle ne doit pas être utiliser hors de la class 
