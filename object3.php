<?php
class type_eng extends engine
{
	protected string $model;
	public function getModel () : string
	{
		return $this->model;
	} 
	public function setModel (string $model) : void
	{
		$this->model = $model;
	}
	public function setVolume (int $volume) : void
	{
		echo "$this->model+"; // використовую не додавання, а типу зєднання двох string ніби змінюючи попереднє volume на volume+model
		strval ($this->volume = $volume);
	}	
	public function setSize (int $size) : void
	{
		echo "$this->model+"; // використовую не додавання, а типу зєднання двох string ніби змінюючи попереднє size на size+model 
		strval ($this->size = $size);
	}
}

class horsepow extends engine
{
	protected int $horsevolume;
	public function getHorsevolume () : int
	{
		return $this->horsevolume;
	} 
	public function setHorsevolume (int $horsevolume) : void
	{
		$this->horsevolume = $horsevolume;
	}
	public function setVolume (int $volume) : void
	{
		$this->volume = $volume + $this->horsevolume; // Змінюю вищий клас 1-го рівня 
	}	
	public function setSize (int $size) : void
	{
		$this->size = $size + $this->horsevolume; // Змінюю головний батьківський клас 
	}
}

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