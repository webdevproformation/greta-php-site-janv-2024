# support

- url : http://formation.webdevpro.net/symfony
- login : symfony
- password : symfony

## Symfony 

- plus qu'une simple librairie : Carbon date / AltoRouter router  
- framework => super librairie 
    - plein de librairie pour créer un site internet
    - frame : cadre
    - work : travail  
    - qui impose une manière de travailler


## pour installer Symfony il faut un environnement dédié

- PHP dans une certaine version !!! 
- dans PHP il faut installer certaines extensions de PHP 
- composer EST QUASI OBLIGATOIRE pour installer symfony 
- git 
=> déjà prêt avec la machine vagrant

## installation


vagrant up
vagrant ssh 
cd /var/www/html
# install une version minimal de symfony 
composer create-project symfony/skeleton jour9-tp

# modifier les droits du dossier var
chmod 777 -R /var/www/html/jour9-tp/var

# positionne dans le dossier du projet 
cd jour9-tp

# permet d'ajouter une 60n de module de symfony à la version minimale
composer require webapp

=> demander d'installer DockerCompose => n Enter

php bin/console cache:clear

chmod 777 -R /var/www/html/jour9-tp/var

----

sudo su -

touch /etc/apache2/sites-enabled/tp.conf
vi /etc/apache2/sites-enabled/tp.conf

Alias /jour9-tp "/var/www/html/jour9-tp/public"

<Directory /var/www/html/jour9-tp>

    AllowOverride None
    Order Allow,Deny
    Allow from All

    <IfModule mod_rewrite.c>
        Options -MultiViews
        RewriteEngine On
        RewriteRule (/public) - [L]
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d
        RewriteRule ^(.*)$ index.php/$1 [L]
    </IfModule>
</Directory>


/etc/init.d/apache2 restart 