<?php 
// 03-fonction-string.php 
// http://192.168.15.22/jour1/03-fonction-string.php

// en PHP il existe 5 types de valeurs que l'on peut stocker dans des variables 
// string       => concaténation
// int / float  => addition / soustraction ... 
// boolean      => opération boolean && || comparaison
// tableau (array) => associatif / indexé  
//                   array_splice()
//                   array_unshift() 
// objet et les class

// en plus des traitements de base 
// php met à disposition des fonctions en + 
// qui permet de réaliser des traitements en + 
// => dans le super de cours 
// pour chaque section vous avez une liste de fonction en + à connaitre 

/* CREATE TABLE toto(
    commentaire TEXT DEFAULT "cv de l'étudiant"
) */

// http://192.168.15.22/jour1/03-fonction-string.php

echo "start <br>";

/**
echo => permet d'afficher à l'écran le texte qui est mis à la suite 
<?= =>
str_replace($search , $replace , $subject);
ucfirst ( $string );
strtolower( $string ) ;
explode ( $separator , $string) ;
trim( $string , $characters ) ;
substr_replace($string ,"", -1); // remplacer le dernier caractère d'une chaine
substr($big, 0, 100);
htmlspecialchars() / htmlentities()
11 fonctions traitements en + sur les strings 
 */
$titreInitial = "super titre";
?>
<!--  ouvert une  balise html dans laquelle je veux écrire du php -->
<h1><?php echo "bonjour" ?></h1>
<!--  lorsque vous devez écrire du PHP dans une balise html vous avez une écriture plus rapide -->
<h2> <?= $titreInitial ?> </h2> 
<!-- cette syntaxe raccourcie n'est à utiliser QUE lorsque tu veux afficher le contenu d'une variable dans du html --> 
<h3> 
    <?php 
        $titre = "sous titre";
        echo $titre  
    ?>
</h3>

<?php 

// remplacer dans la variable $adresseInternet le texte index par home 

// https://www.php.net/manual/fr/ref.strings.php
// str_replace() => https://www.php.net/manual/fr/function.str-replace.php

/**
 *  str_replace(
 array|string $search, // le premier paramètre text ou un tableau OBLIGATOIRE
 array|string $replace,  // le deuxieme paramètre text ou un tableau OBLIGATOIRE
 string|array $subject, // le troisième paramètre text ou un tableau OBLIGATOIRE
 int &$count = null // le dernier est facultatif chiffre entier et & passage par référence 
 ): string|array // le type de retour 
 * 
 */
$adresseInternet = "http://localhost/index.php" ; 
$nouvelleAdresse = str_replace("index" , "home" , $adresseInternet); 
echo $nouvelleAdresse . "<br>";

/* $adresseInternet = "http://localhost/index.php?id=20" ; 
$adresseInternet = "http://localhost/index.php/20" ;  */

// ucfirst ( $string ); => bonjour => Bonjour => mettre la première lettre en Majuscule

$hello = "comment allez vous les amis" ;  // Comment allez vous les amis
echo ucfirst($hello) . "<br>"; // UpperCase First 

// strtolower( $string ) ;
// perd toutes les lettres d'une string et les met en minuscule

$phrase = "Victor Hugo a écrit les Misérables"; 
echo strtolower($phrase) . "<br>"; // victor hugo a écrit les misérables

$phrase2 = "La formation en PHP est sympathique"; 

// transformer la chaine de caractère $phrase2 en un tableau 
// en utilisant l'espace comme séparateur 
// [ "La" , "formation" , "en" , "PHP" , "est" , "sympathique" ]
// explode() => string => array
$tableau = explode(" " , $phrase2); 
var_dump($tableau); 
$tableau2 = explode("n" , $phrase2);
var_dump($tableau2); 

// implode() => array => string
$fleurs = ["lilas", "jasmin" , "tulipes"]; 
$phraseAvecFleurs = implode(", " , $fleurs);
echo $phraseAvecFleurs . "<br>" ; 


$sql  = "      UPDATE articles SET title = 'bonjour' WHERE id = 12     ";

echo strlen($sql) . "<br>";// avec les espaces // 62

$updateSql = trim($sql); // par défaut permet d'enlever tous les espaces en début ET fin d'une string PAS entre les mots de la chaine 

echo strlen($updateSql) . "<br>"; // sans les espaces

$_POST["titre"] = "toto";
$_POST["age"] = 22;

$titre = htmlentities($_POST["titre"]);
$titre = htmlspecialchars($titre) ; 

$titre = htmlspecialchars(htmlentities($_POST["titre"]));

$age = htmlentities($_POST["age"]);
$sql  = "      UPDATE articles SET title = '$titre' WHERE id = 12     ";

$sql = "      UPDATE articles SET title = '". htmlentities($_POST["titre"])  . "' WHERE id = 12     ";


$tableau = ["nom", "prénom", 10]; 


$phraseHtml = "<p>J'ai très faim</p>";
// balise html
// ' 
// è

echo $phraseHtml . "<br>"; // <p> disparue => exécutée
echo htmlentities($phraseHtml) . "<br>"; // <p> apparait dans le navigateur 
echo htmlspecialchars($phraseHtml) . "<br>"; // <p> apparait dans le navigateur 
// les fonctions htmlentities() et htmlspecialchars() vont échapper 
// < => &lt;
// > => &gt;
// ' => &#039;
// <p>
// &lt;p&gt;

// htmlentities() => è => &egrave; alors que htmlspecialchars() non 

// créer le fichier 04-exo.php 

// dans ce fichier vous allez créer une chaine de caractère $phrase qui contient le texte suivant 

$phrase = "je suis allez visiter le site internet wikipedia.com"; 

// remplacer le .com par .fr
// ajouter devant le mot wikipedia => https://
// mettre en majuscule le mot site 

// "je suis allez visiter le Site internet https://wikipedia.fr"