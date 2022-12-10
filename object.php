<?php
class car extends stepen
{
	protected int $size;
	public function getSize () : int
	{
		return $this->size;
	} 
	public function setSize (int $size) : void
	{
		$this->size = $size;
	} 
		
	protected int $weight;
	public function getWeight () : int
	{
		return $this->weight;
	} 
	public function setWeight (int $weight) :void
	{
		$this->weight = $weight;
	} 
	
	function countStep(int $a, int $x)
    {
        $this->$a=$a;
		$this->$x=$x;
		return (pow ($a,$x));
    }
}



abstract class stepen
{
    abstract function countStep(int $a, int $x);
}
 
?>