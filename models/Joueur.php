
<?php

require_once "models/Personnage.php";

class Joueur extends Personnage
{
	private $ennemyCount = 1;

	public function __construct($level)
	{
		parent::__construct($level);
		$this->endurance = $this->getLevel() * 2;
		$this->force = $this->getLevel()  * 2;
		$this->pv = $this->endurance * 5;
		$this->attaque = $this->force * 2;
	}



	public function FightEnemy($target)
	{
		echo "=========Ennemie $this->ennemyCount============".PHP_EOL;
		
		while($this->pv > 0 && $target->getPv() > 0)
		{
			if($this->getLevel() < $target->getLevel()){
				echo "combat impossible".PHP_EOL;
				break;
			} else {
				$target->setPv($target->getPv() - $this->attaque);

				if($target->getPv() <= 0){

					$this->ennemyCount++; 
					echo "Votre Ennemie est mort".PHP_EOL;
					break;
				}
				

				$this->setPv($this->pv - $target->getAttack());	

				if($this->pv  <= 0){
					echo "Votre hero est mort".PHP_EOL;
					break;
				}

				echo "target hp :" . $target->getPv().PHP_EOL;
				// echo "player hp :" . $this->pv.PHP_EOL;
				
			}		

		}

	}
}