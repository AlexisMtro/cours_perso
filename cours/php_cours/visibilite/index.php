<?php

require 'personnage.php';

$merlin = new Personnage('Merlin');

$merlin->setNom('Marlin');
echo $merlin->getNom();