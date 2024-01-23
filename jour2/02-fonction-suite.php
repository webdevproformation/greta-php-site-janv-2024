<?php  

// http://192.168.15.22/jour2/02-fonction-suite.php

// call_user_func()
// call_user_func_array()

// fonction native de PHP qui permet d'exécuter de fonction 

function a ( ) : string{
    return "bonjour" ; 
}

echo a() . "<br>"; // manière classique

$titi = "a";
echo $titi() . "<br>" ; // créer une variable exécutable

echo call_user_func("a") . "<br>"; // utilisation de la fonction native de 
                                   // call_user_func("a")

echo call_user_func($titi) . "<br>";



function b (string $message , string $dt) : string{
    //return "Victor Hugo a dit \"$message\" en $dt<br>"; 
    //return 'Victor Hugo a dit "{$message}" en {$dt}<br>'; 
    return 'Victor Hugo a dit "'.$message.'" en '.$dt.'<br>'; 
}

echo b("j'aime PHP" , "janvier"); // classique d'exécuter une fonction

$tutu = "b";
echo $tutu("j'adore Javascript !!" , "février"); // avec une variable exécutable

echo call_user_func("b","je ne connais pas encore Angular ???" , "mars"); 
echo call_user_func($tutu,"je ne connais pas encore Angular ???" , "mars"); 


function c ( array $liste , int $distance , bool $test ) :string {
    $first = $liste[0]; // récupérer la 1ère valeur tableau 
    $total = $first * $distance ; // multiplication
    if( $test ){
        return $total . " euros <br>";
    }else {
        return $total . " dollars <br>";
    }
}
echo c([10], 200, true) ; // 2000 euros

$toutou = "c";
echo $toutou([5], 20 , false) ; // 100 dollars

echo call_user_func("c" , [30], 10 , true); // 300 euros