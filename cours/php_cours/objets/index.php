<?php

require 'personnage.php';

$merlin = new Personnage('Merlin'); // Création d'un nouveau personnage (objet = $merlin) via la class Personnage (personnage.php)
$merlin->regenerer(5); // Utiliser la fonction regenerer() pour merlin

$harry = new Personnage('Harry');
//var_dump($harry->mort());
$harry->regenerer();

$merlin->attaque($harry);

if ($harry->mort()) {
    echo 'Harry est mort';
} else {
    echo 'Harry a survecu avec ' . $harry->vie;
}

//var_dump($harry);
//var_dump($merlin); // Acceder a qlq chose dans l'objet
