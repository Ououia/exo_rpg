<?php 


require_once "models/Personnage.php";
require_once "models/Joueur.php";
require_once "models/Pnj.php";



$player1 = new Joueur(1);



// $player1->fight(new Pnj(3));


// echo $player1->getLevel().PHP_EOL;

// echo $ennemy1->getLevel().PHP_EOL;


$player1->FightEnemy(new Pnj(1));


$player1->FightEnemy(new Pnj(1));


$player1->FightEnemy(new Pnj(1));


$player1->FightEnemy(new Pnj(1));


$player1->FightEnemy(new Pnj(1));