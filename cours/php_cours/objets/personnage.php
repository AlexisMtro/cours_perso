<?php

class Personnage{ // Création de notre class personnage

    public $vie = 80; // Propriété (caracteristique) a notre personnage
    public $attaque = 20; // Propriété (caracteristique) a notre personnage
    public $nom;

    public function __construct($nom){
    $this->nom = $nom;
    }

    public function crier(){  //Création d'une fonction
        echo 'GOOOO';
    }

    public function regenerer($vie = null){
        // Si la vie est egale a 0 alors on l'initialise a 100 sinon on rajoute la valeur de $vie
        if ($vie === null){
            $this->vie = 100; //This fait reference en cours, ici vie
        } else {
            $this->vie += $vie;
        }
    }

    public function mort(){
        return $this->vie <= 0;
    }

    public function attaque($cible){
        $cible->vie -= $this->attaque;
    }
}