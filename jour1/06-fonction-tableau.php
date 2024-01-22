<?php 

/**
    var_dump(); // debugger => afficher le contenu d'un tableau
    print_r(); // debugger => afficher le contenu d'un tableau
    foreach(){}
    array_keys ( $array );
    array_sum( ) ;
    array_merge( $tab1, $tab2 );
    count() ;
    array_splice ($array, $offset, $length) ;
    extract()
    end()
 */
// http://192.168.15.22/jour1/06-fonction-tableau.php
 $tableau = [1,2,3] ;

 var_dump($tableau); 
 echo "<pre>";
 print_r($tableau); 
 echo "</pre>";

 $formation = [
    "duree" => 10 ,
    "prix" => 30.5,
    "nom" => "php"
 ];

 $keyFormation = array_keys($formation); 
 // ["duree" , "prix" , "nom"]
 var_dump($keyFormation); 
 $valuesFormation = array_values($formation); 
 var_dump($valuesFormation); 

// somme de toutes les valeurs dans un tableau indexé

 $prix = [10,12,25] ; 

 $total = array_sum($prix);

 var_dump($total); 

 // array_merge => concaténation de tableau (fusion de tableau)

 $etudiant = [ "nom" => "Alain" , "age" => 32];
 $matieres = [ "php" => "expert" , "js" => "novice" ]; 

 $etudiantComplet = array_merge($etudiant , $matieres , $prix ,  $keyFormation); 
 var_dump($etudiantComplet); 


 $tableau = [3,4,5,6,7,8]; 

 echo $tableau[5]. "<br>";
 echo $tableau[count($tableau) - 1] . "<br>";
 echo end($tableau) . "<br>" ; 


 $etudiant = [ "nom" => "Alain" , "age" => 32];

 // à partir du tableau associatif =>
 // $nom = "Alain"
 // $age = 32 ; 

 extract($etudiant);

 echo $nom . " a " . $age . " ans"; 

 // cas pratique :

 // créer le fichier 07-exo.php 
 // dans ce fichier vous avez le tableau suivant 

 /**
$server = [
    "procotol" => "http://",
    "domain" => "exemple.com",
    "method" => "get",
    "poids" => [ 30 , 60 , 210 , 45 ]
] ;

// récupérer la dernière valeur de clé poids
// mettre en majuscule la clé get 
// déterminer si le tableau serveur contient la clé domain ?
// modifier le protocole de http => https

  */