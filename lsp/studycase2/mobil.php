<?php

require_once 'kendaraanbbm.php';

class Mobil implements KendaraanBBM {
    public function menggunakanBBM(): void {
        echo "Mobil menggunakan bahan bakar bensin.<br>";
    }
}

?>