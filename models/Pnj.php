<?php

require_once "models/Personnage.php";



class Pnj extends Personnage
{

	public function __construct($level)
	{
		parent::__construct($level);
		$this->endurance = $this->getLevel();
		$this->force = $this->getLevel();
		$this->pv = $this->endurance * 5;
		$this->attaque = $this->force * 2;
	}



}