<?php 

// http://192.168.15.22/jour2/03-exo.php

/* function aireCercle( float $rayon ):string{
    return "un cercle de rayon $rayon a une aire de " . 3.14 * $rayon ** 2 . "<br>";
} */

// formater le resultat du l'aire
// séparateur de centaines => espace
// remplace . par une , 
// n'avoir que 2 chiffres en dessous de la virgule (arrondi)
function aireCercle( float $rayon ):string{
    $aire = number_format(3.14 * $rayon ** 2 , 2, ",", " "); 
    $rayon = number_format($rayon , 2, "," , " ");
    return "un cercle de rayon $rayon a une aire de " . $aire . "<br>";
}

echo aireCercle(22.1); // 1er manière

$fonction = "aireCercle";
echo $fonction(10.1); // 2eme manière

echo call_user_func("aireCercle" , 5.2); // 3ème manière

echo call_user_func_array("aireCercle", [33.5]); // 4ème manière 