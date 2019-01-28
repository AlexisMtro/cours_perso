<?php

class Personnage{ // Création de notre class personnage

    public $vie = 80; // Public : accessible a l'interieur et a l'exterieur de la class
    private $nom; // Private : accessible juste dans la class

    public function __construct($nom){
        $this->nom = $nom;
    }

    // Fonction permettant de definir une variable, ici nom
    public function setNom($nom){
        $this->nom = $nom;
    }

    // Fonction permettant de recuperer le nom malgrès la visibilite "private"

    public function getNom(){
        return $this->nom;
    }


    public function regenerer($vie = null){
        if ($vie === null){
            $this->vie = 100;
        } else {
            $this->vie += $vie;
        }
    }

}