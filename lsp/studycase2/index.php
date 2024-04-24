<?php

require_once 'Mobil.php';
require_once 'MobilListrik.php';

// Create instances of Mobil and MobilListrik
$mobil = new Mobil();
$mobilListrik = new MobilListrik();

// Use Mobil
echo "Mobil Actions:<br>";
$mobil->menggunakanBBM();

// Use MobilListrik
echo "<br>Mobil Listrik Actions:<br>";
$mobilListrik->menggunakanBaterai();

?>