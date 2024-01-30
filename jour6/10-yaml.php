<?php 

require_once __DIR__ . "/vendor/autoload.php";
# packagist.org
# composer require symfony/yaml
# https://symfony.com/doc/current/components/yaml.html

use Symfony\Component\Yaml\Yaml;
echo __DIR__ ; 
$file = Yaml::parseFile(__DIR__. "/09-article.yaml");

var_dump($file); 

// http://192.168.15.22/jour6/10-yaml.php