<?php 

// http://192.168.15.22/jour2/06-exo.php

class Exercice{

    public  array     $technologies ;
    public  string    $sujet ;
    private int       $duree  ;
    private array     $notes ;

    public function __construct(array $techno , string $subjet , int $duration, array $notations)
    {
        $this->technologies = $techno ;
        $this->sujet = $subjet ;
        $this->duree = $duration ;
        $this->notes = $notations ;
    }

    private function moyenneNote(){
        /* $total = 0 ;
        foreach($this->notes as $key => $value){
            $total += $value; 
        } */
        $total = array_sum($this->notes); 
        $total = $total / count($this->notes);
        return $total ; 
    }

    public function resultat() : string{
        return "pour le sujet {$this->sujet} j'ai eu la note ". $this->moyenneNote(); 
    }
}

$exo = new Exercice(["php", "html"], "créer un class", 10 , [10,12,4, 0]);

echo $exo->resultat(); 

var_dump($exo);

// setter getter 
// heritage => extends 
// class static 