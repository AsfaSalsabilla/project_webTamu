<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Dapatkan nama file yang sedang diakses
$currentFile = basename($_SERVER['PHP_SELF']);

// Halaman yang boleh diakses tanpa harus login
$allowedPages = ['index.php', 'register.php', 'cek_login.php'];

// Jika halaman bukan salah satu yang diizinkan, baru cek session login
if (!in_array($currentFile, $allowedPages)) {
    if (empty($_SESSION['username']) || empty($_SESSION['password'])) {
        echo "<script>
                alert('Maaf, untuk mengakses halaman ini, Anda diharuskan Login terlebih dahulu..!');
                document.location='index.php';
              </script>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Set karakter encoding untuk halaman -->
    <meta charset="utf-8">
    <!-- Atur kompatibilitas dengan Internet Explorer -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Set viewport agar halaman responsif di perangkat mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Judul halaman -->
    <title>Sistem Informasi Buku Tamu</title>

    <!-- Memuat font dan ikon khusus untuk template -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Favicon untuk halaman (ikon di tab browser) -->
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Memuat stylesheet utama untuk template SB Admin 2 -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- Memuat stylesheet khusus untuk halaman tabel data -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="custom-style.css" rel="stylesheet">

</head>

<body class="custom-bg">
<!-- Mulai kontainer utama untuk halaman -->
<div class="container">
    <?php include "koneksi.php"; ?>
