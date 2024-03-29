<?php 
// créer le fichier PageController.php
// class contient du code qui est exécuté AVANT 
// la partie affichage
class PageController extends AbstractController {
    // méthode que l'on va exécuter dans le fichier index.php 
    // $p = new PageController()
    // $p->home(); 
    public function home() :void {

        $data = [];
        $data["title"] = "Homepage";
        $data["h1"] = "Bienvenue sur notre site"; 

        $images = [];
        for($i = 1 ; $i < 5 ; $i++){
            $images[] = "https://source.unsplash.com/random/1500x300?v$i";
        }

        $data["diapositives"] = $images;

        $this->render("home" , $data );
    }
    public function presentation() :void{

        $data = [];
        $data["title"] = "page de présentation";
        $data["h1"] = "Qui sommes nous ???";    
        $data["p"] = [
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, voluptate maiores! Aliquam, distinctio quae dolor asperiores ab vitae totam, quam aspernatur voluptas sunt vero odio minus recusandae consectetur laudantium aut dolorum ea quidem ut facere enim obcaecati et! In, repellat?",
            "Eligendi quaerat corrupti error corporis, perferendis maxime quos suscipit quae, beatae iste quas deserunt minus similique quo a id nemo exercitationem, magni dignissimos enim quam velit? Explicabo doloremque optio amet nemo. Omnis quod dolorum vero. Dolore minima doloribus rerum praesentium!",
            "Qui dolor, temporibus quos, autem minus officia eius delectus fugiat molestias quam voluptates perspiciatis doloremque doloribus numquam magnam rem quia similique iste? Adipisci quia molestiae ratione porro repellendus eaque perferendis reiciendis ut nihil! Corrupti laboriosam distinctio sunt, ipsa accusantium voluptatibus.",
            "Explicabo esse ex architecto necessitatibus voluptatibus. Vero corrupti porro, animi voluptate deserunt laboriosam itaque nobis? Odio rerum sequi facere non eaque, assumenda aliquam repellendus totam quia. Libero quaerat quibusdam nostrum temporibus. Natus, soluta? Aspernatur architecto nam saepe corrupti quod blanditiis?",
            "Hic iure veritatis aspernatur asperiores maiores dignissimos sed commodi nam nemo ullam blanditiis vel eligendi sunt cupiditate praesentium, alias excepturi maxime fuga iste doloribus nostrum facere obcaecati animi. Ea rerum soluta ducimus dolores voluptatibus fuga cum aspernatur. Voluptates, numquam molestiae?"
        ];
        $images = [];

        for($i = 1 ; $i < 5  ; $i++){
            $images[] = "https://source.unsplash.com/random/600x150?v$i";
        }

        $data["images"] = $images; 


        $this->render("presentation" , $data);
    }
    public function contact() :void{
        // avant le render => stocker toutes les valeurs 
        // dont j'ai besoin ici 
        $data = [] ; 
        $data["title"] = "page nous contacter";
        $data["h1"] = "Vous avez une question ? Nous avons une réponse !!"; 

        $this->render("contact", $data);
    }

}
