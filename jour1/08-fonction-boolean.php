<?php 

/**
 *  isset()
 * 
 * empty() 
 * 
 * is_numeric()
 * filter_var( $email , FILTER_VALIDATE_EMAIL)
 * !!
 */

 // isset vérifier si une variable existe 
 //       vérifier si une clé existant dans un tableau 
// // http://192.168.15.22/jour1/08-fonction-boolean.php
 var_dump(isset($a)); // false est ce que la variable $a as été créée précédemment ???  

 $b = 0 ; 

 var_dump(isset($b));  // true $b a été créée et elle contient n'importe quoi 

 $tb = [
    "prix" => 20
 ]; 

 var_dump(isset($tb["inconnu"])); // false
 var_dump(isset($tb["prix"])); // true

 // ne pas confondre isset avec empty()

 var_dump(empty($c)); // true // vue quelle n'existe pas => elle est vide 

 $d = 0 ;
 $d = "" ;
 $d = []; 
 $d = "0"; 
 $d = false; 
 $d = null; 

 var_dump(empty($d)) ; // true 

 $e = " ";

 var_dump(empty($e)) ; // false
 
 if(!empty(["age" =>22 ])){

 }

 if(!empty($_POST)){

 }



 $a = 10 ;
 $b = "10"; 
 $c = "ma note est de 10"; 
 $d = "10 est ma note"; 

 var_dump(is_numeric($a)); // true ==
 var_dump(is_numeric($b)); // true == 
 var_dump(is_numeric($c)); // false
 var_dump(is_numeric($d)); // false

 $prix = "10 euros";
 $devise = "10 poulet"; 
 echo @($prix + $devise) ; /// ??? PHP peut effectuer l'addition 

 $email = "alain@yahoo.fr";
// https://www.php.net/manual/fr/function.filter-var.php
 $verif = filter_var( $email , FILTER_VALIDATE_EMAIL);
// https://www.php.net/manual/fr/filter.filters.validate.php
 var_dump($verif);

// !!

$a = 0 ;
var_dump($a); 
var_dump(!$a);  // true
//       !0
//       ! false
//       true
var_dump(!!$a); // false

$b = "bonjour" ;

var_dump(!$b); // false
//       !"bonjour"
//       !true
//       false
var_dump(!!$b); // true

$c= 0 ; 
$c = "" ; 
$c = null ; 
$c = -0 ;
$c = false ;
$c = 0.0 ;
$c = "0"; 
unset($c);  
