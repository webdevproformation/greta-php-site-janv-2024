

I afficher un formulaire 

1 index.php => ajouter nouvelle route
2 execute le controller AdminController 
    méthode article_new
    $this->render("article_new")

3 vue => créer un fichier article_new.tpl.php
    dans ce formulaire que l'on écrire le html du formulaire

II l'utilisateur va remplir le formulaire
    et il le soumet 

III récupérer les informations saisies et les insérer en base de données 

1 index.php => modifié la route avec un |POST

2 execute le controller AdminController 
    méthode article_new
    if(!empty($_POST))
        récupérer les informations saisies avec un peu de nettoyage trim / htmlspecialchar 

        tester ces valeurs 

        si il n'ya aucune erreur 
            utilise le modele Article create()
            redirigé 
        sinon 
    réafficher le formulaire 
        zone rouge 
        remettre les valeurs saisies précédemment

cas pratique : 
=> ajouter une nouvelle page qui sera accessible via l'adresse
/admin/user/new 
cette page doit ête gérée dans le Controller AdminController dans la méthode 
user_new 

// cette page contient un formulaire avec deux champs 
    
    email
    password
    