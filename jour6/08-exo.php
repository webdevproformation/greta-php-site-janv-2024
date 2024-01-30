<?php 

require_once __DIR__ . "/vendor/autoload.php"; 

use Carbon\Carbon ;

$depart = Carbon::createFromDate(2021, 2, 3);
echo Carbon::now()->longRelativeDiffForHumans($depart); 

// http://192.168.15.22/jour6/08-exo.php