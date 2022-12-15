<?php 
namespace Core;

class type_fuel extends fuel
{
	protected string $namefuel;
	public function getNamefuel () : string
	{
		return $this->namefuel;
	} 
	public function setNamefuel (string $namefuel) : void
	{
		$this->namefuel = $namefuel;
	}
	public function setUsefuel (float $usefuel) : void
	{
		echo "$this->namefuel+"; // використовую не додавання, а типу зєднання двох string ніби змінюючи попереднє useful на usefuel + namefuel
		strval ($this->usefuel = $usefuel);
	}	
	public function setWeight (int $weight) : void
	{
		echo "$this->namefuel+"; // використовую не додавання, а типу зєднання двох string ніби змінюючи попереднє size на size+model 
		strval ($this->weight = $weight);
	}
}
?>