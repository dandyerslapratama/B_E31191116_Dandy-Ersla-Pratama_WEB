<?php
abstract class Car {
	// Abstract classescan have properties
	protected $tankVolume;
	
	// Abstract classes can have non abstract methods
	public function setTankVolume($volume)
	{
		$this -> tankVolume = $volume;
	}
	
	// Abstract method
	Abstract public function calcNumMilesOnFullTank();
}
?>