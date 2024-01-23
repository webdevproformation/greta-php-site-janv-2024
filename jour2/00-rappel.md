# en plus des opérations de base les langages informatiques vont offrir des fonctions pour réaliser des traitements en + 

## string 

- str_replace("recherche", "remplacement" , "où")
$texte= "...............";
- str_replace("recherche", "remplacement" , $texte); 
- // modifier dans la mémoire (RAM) du serveur / pendant l'exécution du script

string => array 
$r = explode(" " , "bonjour les amis");
// $r = ["bonjour", "les", "amis"]; // l'espace n'est pas inclu dans le tableau indexé final 

array => string
$r2 = implode(" ", ["bonjour", "coucou"]);

ucfirst("string") met en Majuscule la 1ère lettre de la string
strtoupper("") MAJUSCULE toutes les lettres
strtolower("") minuscule toutes les lettres 

trim("    texte coucou    "); supprimer les espaces en début et fin d'une string 

texte => injecter (concaténer) HTML ou SQL 
htmlspecialchar()
htmlentities()

<!--  par défaut -->
<?php echo $toto ?>
<?= $toto ?>

<!-- il faut l'activer => .asp () Microsoft -->
<? echo $toto ?> 
vagrant ssh 
sudo su -
sudo vi /etc/php/8.2/apache2/php.ini
//  asp_tags Off
//  asp_tags On
:wq! # write  quit forcé
/etc/init.d/apache2 restart 
 -->

## array

array_sum()
array_merge()
array_keys()
array_values()
array_key_exists()
end()
first()

## fonction boolean 

isset() => variable existe (créée) / 
           tableau index / clé existe

isset($a) ; // false 
$b = ["cle" => 10]
isset($b["toto"]) ; // false 

isset($b) ; // true
isset($b["cle"]) ; // true


empty() => variable existe ET contient une valeur différente de 
            0 / [] / "" / null / "0" / false 

empty($c); // true 

$d = 0 ;
$d = [] ;
$d = null ;
$d = "0" ;
$d = false ;
empty($d); // true  // 

// ouvrir la page $_POST = []

if(!empty($_POST)){}
if(!empty([])){}
if(!true){}
if(false){}

// clique sur le bouton de soumission sur le form $_POST = ["age" => 10 , "nom" => "Alain" , "isActive" => "on" ]

if(!empty($_POST)){}
if(!empty(["age" => 10 , "nom" => "Alain" , "isActive" => "on" ])){}
if(!false){}
if(true){}


&& AND
|| OR
!  NOT 

is_numeric() // sécurité de notre code 
filter_var() // sécurité pour les emails 
... 


