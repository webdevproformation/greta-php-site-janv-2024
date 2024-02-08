MVC 

=> créer une page 
=> dans cette page écrire à la main formulaire 

=> retour dans le controller 
=> if(!empty($_POST))
    => récupérer les valeurs => nettoyée
    => lancer une requete INSERT en utilisant Model 
    => si tout OK => redirection
    => erreur => reste sur le formulaire ET message en rouge

=> faire la même chose avec symfony 

=> créer la page 
=> dans l'ancien MVC on ajoute les balises html directement dans la vue 
=> créer une class (en ligne de commande)
=> qui va se charge de de toute la partie affichage du formulaire 
=> EtudiantType.php => class qui est en charge de générer un formulaire en relation avec l'entité Etudiant

vagrant ssh
cd /var/www/html/jour9-tp
php bin/console make:form

nom de la class => EtudiantType
nom de l'entité associée => Etudiant 

nouveau fichier / dossier  src/Form/EtudiantType.php


$_POST => Request