<?php 

// http://192.168.15.22/jour2/01-fonction.php

// echo "coucou" ; 

function a(int $largeur) : int {
    return $largeur * 10 ; 
}

echo a(30) . "<br>";

$leNomDeLaFonctionA = 'a' ; // $a 'a' "a" 

echo  $leNomDeLaFonctionA(100) . "<br>";  // en PHP une variable est exécutable 
                                      // si c'est une string ET que cette string correspond au nom d'une fonction
                                      // créée précédemment
                                      
//echo  "a"(100) . "<br>"; 
// dispatcher et router => appeler la page A => eexécter la fonction A
// dispatcher et router => appeler la page B => eexécter la fonction B


class Etudiant{
    public function note() : int{
        return 20 ; 
    }
}

$etudiant = new Etudiant(); 
echo $etudiant->note() . "<br>"; 
// la même technique mais avec class et une méthode 
$class = "Etudiant";
$method = "note" ; 

$etudiant2 = new $class(); 
echo $etudiant2->{$method}() . "<br>";

// call_user_func()
// call_user_func_array()
// dans 15 min !! 