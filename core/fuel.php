<?php
namespace Core;

class fuel extends car
{
	protected float $usefuel;
	public function getUsefuel () : float
	{
		return $this->usefuel;
	} 
	public function setUsefuel (float $usefuel) : void
	{
		$this->usefuel = $usefuel;
	}
	//Множимо weight з батьківського weight на usefuel
	public function setWeight (int $weight) : void
	{
		$this->weight = $weight * $this->usefuel;
	}
}

?>
