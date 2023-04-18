<?php 


abstract class Personnage
{
	private $level;
	protected $xp;
	protected $pv;
	protected $endurance;
	protected $force;
	protected $attaque;


	public function __construct($level)
	{
		$this->level = $level;
	}

	public function getLevel()
	{
		return $this->level;
	}


	public function getPv()
	{
		return $this->pv;
	}

	public function setPv($pv)
	{
		$this->pv = $pv;
	}

	public function getAttack()
	{
		return $this->attaque;
	}

}