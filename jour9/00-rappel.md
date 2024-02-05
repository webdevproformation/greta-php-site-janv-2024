# rappels !! 

## sécurité des formulaires 

- fondamental de sécuriser (échapper les caractères dangereux + verifier que ce qui est saisit correspond aux types de nos colonnes dans notre table)
- à faire dans le Controller AVANT de réaliser l'INSERT 

$text = htmlspecialchar(trim($_POST["text"])); 

if(strlen($text) < 3 || strlen($text) > 255 ){
}


<h3>coucou</h3> => &lt;h3&gt;coucou&lt;/h3&gt;

## stocker les mots de passe en base de données 

- le mot de passe des users / des gestionnaires NE DOIT JAMAIS être stocker en clair dans la base de données 
- utiliser une fonction de hashage() 
- password_hash("Azerty1234!", PASSWORD_BCRYPT) => 
- $2y$10$rCxfWuv1JBzqKak1GwMHIeO5Df1zUM6TjZ64KDMp7kni9Y2LZ6/Pi (hash)
- SHA1() / MD5() / SHA256()
- le hash ne peut permet pas de retrouver le mot de passe saisit à l'origine
- donc ça veut dire que si l'utilisateur ne connait plus son mot de passe => il faut le recréer (Même le développeur qui a fait le projet !!!)
- 
- hors sujet mais il existe aussi des fonctions de cryptage / decryptage (notamment lorsque l'on utilise le https://)
- par contre les fonctions de hashage disposent d'une fonction qui permet de vérifier que le mot de passe saisit correspond au hash => password_verify()

## exécution d'un MVC 

définition : https://fr.wikipedia.org/wiki/Mod%C3%A8le-vue-contr%C3%B4leur

- .htaccess (apache)
- index.php 
- méthode d'un Controller 
- elle peut appeler un model 
- model appelle la BDD (BDD.php) => MySQL 
- réponse du BDD
- méthode du Controller qui appelle la fonction $this->render("home")
- header.tpl.php
- $template.tpl.php === home.tpl.php
- footer.tpl.php 

## cas pratique 

relancer votre VM / 
aller dans le projet jour7-tp et ajouter une nouvelle page dans projet 
la page de connexion 
appeler via http://192.168.15.22/jour7-tp/login
afficher un formulaire avec deux champs email / password 
