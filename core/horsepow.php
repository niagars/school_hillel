<?php 
namespace Core;

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
?>