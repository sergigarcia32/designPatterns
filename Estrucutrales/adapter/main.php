<?php
include_once("Guitar.php");
include_once("ElectricGuitarAdapter.php");
include_once("ElectricAcousticGuitarAdapter.php");

// 2. Create instances using constructors (avoid direct property access):
$electricGuitarAdapter = new ElectricGuitarAdapter();
$acousticGuitar = new AcousticGuitar();
$electricAcousticGuitarAdapter = new ElectricAcousticGuitarAdapter($acousticGuitar);

// 3. Call methods using object syntax:
$electricGuitarAdapter->onGuitar();
$electricGuitarAdapter->offGuitar();

$electricAcousticGuitarAdapter->onGuitar();
$electricAcousticGuitarAdapter->offGuitar();