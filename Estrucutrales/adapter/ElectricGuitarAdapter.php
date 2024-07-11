<?php
include_once("Guitar.php");
/**
 * Direct Target Implementation: Already Adapted/Wrapped
 */
class ElectricGuitarAdapter implements Guitar
{
    public function onGuitar()
    {
        echo "Playing Guitar";
    }

    public function offGuitar()
    {
        echo "I'm tired to play the guitar";
    }
}
