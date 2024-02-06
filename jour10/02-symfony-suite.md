# symfony suite 

- relancer la machine virtuelle
- http://192.168.15.22/jour9-tp/

```
HomeController.php on line 15:
"bonjour"
``` 

public/index.php 
src/Controller/HomeController.php 

<?php 

namespace App\Controller ;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController{

    #[Route("/" , name:"home")] 
    // router via annotation directement sur la méthode 
    public function accueil(){
        $data = [];
        dump();
        dd(); var_dump(); die() ; 
        // $this->render("...." , $data) 
                        => fichier de Vue => templates
                        => .html.twig 
    }
}

# cas pratique

créer un nouveau controller Exo1Controller 
// ce controller dispose d'une méthode test qui va être appellée lorsque l'on saisit l'adresse internet suivante 
http://192.168.15.22/jour9-tp/exo1
// cette affiche le test "j'ai réussi l'exo 1"