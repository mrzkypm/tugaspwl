<?php

$koneksi = mysqli_connect("localhost", "root", "", "Kependudukan");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

?>