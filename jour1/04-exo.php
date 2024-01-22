<?php 

// http://192.168.15.22/jour1/04-exo.php

$phrase = "je suis allez visiter le site internet wikipedia.com"; 

$phrase = str_replace(".com", ".fr" , $phrase);
$phrase = str_replace("wikipedia", "https://wikipedia" , $phrase);
$phrase = str_replace(" site ", " SITE " , $phrase);

echo $phrase ."<br>"; 

// remplacer le .com par .fr
// ajouter devant le mot wikipedia => https://
// mettre en majuscule le mot site 

$phrase2 = "je suis allez visiter le site internet wikipedia.com";

$phrase2 = str_replace([".com", "wikipedia" , " site "] , [ ".fr" , "https://wikipedia" , " SITE " ] , $phrase2);

echo $phrase2 ."<br>"; 


$phrase3 ="je suis allez visiter le site internet wikipedia.com"; 

$phrase3Tableau= explode(" ", $phrase3);
$nouvellePhrase = [];
foreach($phrase3Tableau as $key => $value){
    if($value == "wikipedia.com"){
        $nouvellePhrase[] = "https://wikipedia.fr";
    }else if($value == "site"){
        $nouvellePhrase[] = strtoupper($value);
    }else {
        $nouvellePhrase[] = $value ; 
    }
}

echo implode(" ", $nouvellePhrase); 