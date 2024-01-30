html 

=> librairie pour réaliser rapidement de la mise en forme 
=> bootstrap 

.html 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

--- 

PHP il existe des librairies 
    attention ces librairies doivent être téléchargée dans le dossier dans le lequel vous travaillez 
    
    première solution => chercher sur internet 
    copier coller le code dans le fichier qui vous intéresse

    deuxième manière de procéder => télécharger une librairie depusi internet 
    en utilisant un outil en ligne de commande => composer 

    composer ( ressemble npm) 
    composer require auteur/nom_librairie 

    => https://carbon.nesbot.com/docs/
=> https://carbon.nesbot.com/#gettingstarted

```bash
vagrant ssh
cd /var/www/html/jour6
composer require nesbot/carbon
```

```bash
./composer.json has been created => créer un fichier composer.json (fichier de descriptiond de projet)
Running composer update nesbot/carbon
Loading composer repositories with package information
Updating dependencies
Lock file operations: 8 installs, 0 updates, 0 removals
  - Locking carbonphp/carbon-doctrine-types (3.1.0)
  - Locking nesbot/carbon (2.72.2)
  - Locking psr/clock (1.0.0)
  - Locking symfony/deprecation-contracts (v3.4.0)
  - Locking symfony/polyfill-mbstring (v1.28.0)
  - Locking symfony/polyfill-php80 (v1.28.0)
  - Locking symfony/translation (v6.4.2)
  - Locking symfony/translation-contracts (v3.4.1)
Writing lock file
Installing dependencies from lock file (including require-dev)
Package operations: 8 installs, 0 updates, 0 removals
As there is no 'unzip' nor '7z' command installed zip files are being unpacked using the PHP zip extension.                                                                                   
This may cause invalid reports of corrupted archives. Besides, any UNIX permissions (e.g. executable) defined in the archives will be lost.                                                   
Installing 'unzip' or '7z' (21.01+) may remediate them.
  - Downloading symfony/translation-contracts (v3.4.1)
  - Downloading symfony/polyfill-mbstring (v1.28.0)
  - Downloading symfony/deprecation-contracts (v3.4.0)
  - Downloading symfony/translation (v6.4.2)
  - Downloading symfony/polyfill-php80 (v1.28.0)
  - Downloading psr/clock (1.0.0)
  - Downloading carbonphp/carbon-doctrine-types (3.1.0)
  - Downloading nesbot/carbon (2.72.2)
  - Installing symfony/translation-contracts (v3.4.1): Extracting archive
  - Installing symfony/polyfill-mbstring (v1.28.0): Extracting archive
  - Installing symfony/deprecation-contracts (v3.4.0): Extracting archive
  - Installing symfony/translation (v6.4.2): Extracting archive
  - Installing symfony/polyfill-php80 (v1.28.0): Extracting archive
  - Installing psr/clock (1.0.0): Extracting archive
  - Installing carbonphp/carbon-doctrine-types (3.1.0): Extracting archive
  - Installing nesbot/carbon (2.72.2): Extracting archive
Generating autoload files // générer un fichier autoload
7 packages you are using are looking for funding.
Use the `composer fund` command to find out more!
No security vulnerability advisories found.
Using version ^2.72 for nesbot/carbon
```

composer outil qui permet de télécharger des librairies 
composer gestionnaire de dépendance 
Node Javascript => npm 
linux => apt install apache 



toutes les commandes composer .... saisir dans le terminal DANS la machine virtuelle 


fichier composer.json => la librairie téléchargée
fichier composer.lock => détail précis de tous les librairies téléchargées / celle demandée et celle dont celle qu'on a demandé

dossier vendor contient toutes les librairies 
attention ce dossier ne doit pas être versionné => ajouter dans .gitignore

dans le dossier vendor => fichier autoload.php

on va devoir le require dans nos projets et grâce à require 

require_once __DIR__ . "/vendor/autoload.php"; 


// composer 
// namespace !! 
