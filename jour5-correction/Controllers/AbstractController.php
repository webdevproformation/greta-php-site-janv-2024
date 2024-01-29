<?php 

class AbstractController{
    protected function render(string $nomTemplate) :void {
        require_once __DIR__ . "/../Vues/header.tpl.php";
        require_once __DIR__ . "/../Vues/$nomTemplate.tpl.php";
        require_once __DIR__ . "/../Vues/footer.tpl.php";
    }
}