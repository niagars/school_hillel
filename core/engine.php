<?php 
namespace Core;

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









?>