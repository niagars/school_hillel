<?php
namespace core;

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





?>