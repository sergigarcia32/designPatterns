<?php
include_once("Guitar.php");
include_once("AcousticGuitar.php");

/**
 * Adapter/Wrapper: We Adapter/Wrapper AcousticGuitar into 
 * ElectricAcousticGuitar to adapt into the Guitar Model
 */
class ElectricAcousticGuitarAdapter implements Guitar
{

	private $acoustic;
	public function __construct(AcousticGuitar $acousticGuitar)
	{
		$this->acoustic = $acousticGuitar;
	}
	public function onGuitar()
	{
		$this->acoustic->play();
	}

	public function offGuitar()
	{
		$this->acoustic->leaveGuitar();
	}
}
