# authentification et autorisation 
création du profil 

Table => user
    - email
    - password 

php bin/console make:user 


- page à part entière 
- formulaire dans le créer un profil utilisateur 
    - email
    - password    

INSERT dans la table user // password est hashé 

php bin/console make:registration-form

---- 

connexion 

autre page à part entière 
- formulaire dans le créer un profil utilisateur 
    - email
    - password 

SELECT * FROM user WHERE email = :email 
vérifier que le mot de passe hashé
- $_SESSION["user"]
- 
php bin/console make:security:form-login

---- 

autorisation  

si $_SESSION["user"] existe 
=> barre de menu lien vont apparaitre
=> accéder à des fonctionnalités
si non 
=> menu différent
=> page 403 si l'utilisateur force 


php bin/console make:user == make:entity
php bin/console make:migration
php bin/console d:m:m

php bin/console make:registration-form

 updated: src/Entity/User.php
 created: src/Form/RegistrationFormType.php
 created: src/Controller/RegistrationController.php
 created: templates/registration/register.html.twig

------

php bin/console make:security:form-login

 created: src/Controller/SecurityController.php
 created: templates/security/login.html.twig
 updated: config/packages/security.yaml
