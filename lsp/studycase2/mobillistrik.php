<?php

require_once 'kendaraanlistrik.php';

class MobilListrik implements KendaraanListrik {
    public function menggunakanBaterai(): void {
        echo "Mobil listrik menggunakan baterai.<br>";
    }
}

?>