<?php
$koneksi = new mysqli("127.0.0.1", "root", "", "data_perpus", 3310);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>