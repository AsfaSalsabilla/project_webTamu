<?php
session_start();

// Simulasi user login (biarkan ini kalau memang diperlukan)
$_SESSION['admin_name'] = 'Admin Acorn';

// Tambahkan koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "dbbukutamu");

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>
