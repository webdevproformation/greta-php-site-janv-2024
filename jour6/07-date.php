<?php 

// je veux afficher la date du jour
// en format fr jj/mm/aaaa

echo date("d/m/Y"); 

// je veux afficher la date de demain
// format ff jj/mm/aaaa
// => façon simple est d'utiliser une librairie 
// Carbon 

require_once __DIR__ . "/vendor/autoload.php"; 

$demain = Carbon\Carbon::now()->add(1, "day")->format("d/m/Y");

var_dump($demain); 
// http://192.168.15.22/jour6/07-date.php

// cas pratique => créer le fichier 08-exo.php
// dans ce fichier importer la librairie carbon
// déterminer le nombre de jour entre aujourd'hui et le 3 Février 2021