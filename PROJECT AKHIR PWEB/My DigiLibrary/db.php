<?php
    $db = new mysqli("localhost", "tia212410102048", "secret", "uas212410102048");
    if ($db->connect_error) {
        die("Koneksi Gagal");
}
