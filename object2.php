<?php 
class engine extends car
{
	protected int $volume;
	public function getVolume () : int
	{
		return $this->volume;
	} 
	public function setVolume (int $volume) : void
	{
		$this->volume = $volume;
	}
	//Множимо size з батьківського size на volume
	public function setSize (int $size) : void
	{
		$this->size = $size * $this->volume;
	}
}

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

final class type extends car // використав final заборонив наслідування + private (для надійності)))
{
	private string $exvehicle;
	public function getExvehicle () : string
	{
		return $this->exvehicle;
	} 
	public function setExvehicle (string $exvehicle) : void
	{
		$this->exvehicle = $exvehicle;
	}
	public function setSize (int $size) : void
	{
		echo "$this->exvehicle+";  // використовую не додавання, а типу зєднання двох string
		strval ($this->size = $size);
	}
}









?>