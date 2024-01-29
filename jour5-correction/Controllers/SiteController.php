<?php 

class SiteController{

    public function home(){

        require_once __DIR__ . "/../Vues/header.tpl.php";
        require_once __DIR__ . "/../Vues/home.tpl.php";
        require_once __DIR__ . "/../Vues/footer.tpl.php";

    }

}