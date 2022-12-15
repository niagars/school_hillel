<?php

namespace Core;

class tank extends fuel
{
	protected float $tankvol;
	public function getTankvol () : int
	{
		return $this->tankvol;
	} 
	public function setTankvol (int $tankvol) : void
	{
		$this->tankvol = $tankvol;
	}
	public function setUsefuel (float $usefuel) : void
	{
		$this->usefuel = $usefuel + $this->tankvol; // Змінюю вищий клас 1-го рівня 
	}	
	public function setWeight (int $weight) : void
	{
		$this->weight = $weight + $this->tankvol; // Змінюю головний батьківський клас
	}
}

?>