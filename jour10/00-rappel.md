# qu'est ce l'on a vu hier ensemble ??

## connexion 

- permet de privatiser une partie du site internet par exemple le C du CRUD 
- créer un formulaire de connexion 
- récupérer les informations saisies 
    - verifier quelles étaient conformes
    - rechercher si un user avait le mail saisit => `readOneByEmail()`
    - si oui vérifié si le password saisit vérifie le password hashé `password_verify()` 
    - si tout est OK  => connexion `$_SESSION["user"]`
- la barre de menu fait apparaitre et disparaitre certains liens 
- mise en place une erreur 403 si l'utilisateur n'est pas connecté et veut accéder à une page qui nécessite une connexion


## $_SESSION

- super globale qui va stocker des informations tout le long du parcours de votre utilisateur
- dans cette variable que l'on va stocker le fait que l'utilisateur est bien connecté et s'est bien authentifié
- dans cette variable que l'on va stocker les produits sélectionnés par l'utilisateur (panier d'achat)
- n'est pas créé automatiquement il faut au préalable avoir créer la session via la fonction native PHP : `session_start()`


## Symfony

- framework = super librairie : librairie + cadre de travail
- permet de gagner du temps 
    - structure est prête
    - organisation (où travailler)

MAIS pour travailler avec symfony il FAUT savoir travailler en ligne de commande en plus de travailler dans des fichiers .php 

- avoir PHP installé (dans une version) + modules de PHP 
- composer installé 
- chmod 777 -R /var/www/html/jour9-tp/var
- long pour installer

```bash
composer create-project symfony/skeleton nom-projet

# version MINIMAL
# rappel beaucoup React 

cd nom-projet
composer require webapp
# attention mettre n lorsque il vous demande installer une base de données PostGRE via Docker 
```




 