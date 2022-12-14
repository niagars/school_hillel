<?php 
namespace Core;

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
