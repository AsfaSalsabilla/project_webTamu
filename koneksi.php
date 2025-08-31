<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "dbbukutamu";

// Mencoba koneksi ke database
$koneksi = mysqli_connect($server, $user, $password, $database);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>
