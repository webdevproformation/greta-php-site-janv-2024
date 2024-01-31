<?php 

namespace App\Controller ; 

class SiteController{

    public function home() :void {
        $this->render("home");
    }

    private function render(string $template):void{
        require_once __DIR__ . "/../Vues/header.tpl.php";
        require_once __DIR__ . "/../Vues/$template.tpl.php";
        require_once __DIR__ . "/../Vues/footer.tpl.php";
    }

}