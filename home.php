<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Acorn - web Buku Tamu</title>
    <!-- Favicon untuk halaman (ikon di tab browser) -->
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="custom-style.css" /> 
</head>
<body>
<?php session_start(); ?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white custom-navbar">
    <div class="container">
        <img src="assets/img/logo.png" alt="Acorn" width="30" />
        <a class="navbar-brand" href="home.php">Acorn</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="home.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Me</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Home Section -->
<section class="home" id="home">
    <div class="content">
        <h3>ACORN</h3>
        <span>Teman dalam berbagai Acara</span>
        <p>
            Kami hadir untuk membantu Anda mencatat tamu dengan mudah dan rapi. Gunakan platform kami di berbagai acara seperti seminar, pernikahan, reuni, dan banyak lagi.
        </p>
        <a href="index.php" class="btn">Coba Sekarang</a>
    </div>
</section>

<!-- Footer -->
<div class="text-center p-3 bg-white border-top">
    © <?= date('Y') ?> Acorn. kelompok 7.
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
