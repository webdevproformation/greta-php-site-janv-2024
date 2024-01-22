<?php 
// http://192.168.15.22/jour1/07-exo.php
$server = [
    "procotol" => "http://",
    "domain" => "exemple.com",
    "method" => "get",
    "poids" => [ 30 , 60 , 210 , 45 ]
] ;

// récupérer la dernière valeur de clé poids
// solution 1
echo end($server["poids"]); 

// solution 2
$poids = end($server);
$lastChiffre = end($poids); 
echo $lastChiffre . "<br>";

// solution 3
echo $server["poids"][3] . "<br>" ;

// mettre en majuscule la clé get 
// echo $server["method"] = "GET" ; 

echo strtoupper($server["method"]) . "<br>";

// déterminer si le tableau serveur contient la clé domain ?
// solution 1
foreach($server as $key => $valeur){
    if($key == "domain"){
        echo "ok<br>"; 
    }
}

// solution2 
$keysServeur = array_keys($server); 

echo in_array("domain", $keysServeur) . "<br>"; 

// solution3

echo array_key_exists("domain", $server); 

// modifier le protocole de http => https

 // $server["procotol"]  =  "https://"; 

 var_dump($server); 

 // str_replace("text", "texte" , "sujet")
 // str_replace([], [] , "sujet")
 $r = str_replace("http", "https" , json_encode($server)); 
 var_dump(json_decode($r));