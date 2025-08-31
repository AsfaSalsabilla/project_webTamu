<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Acorn</title>
    
    <!-- Favicon -->
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Style -->
    <link href="custom-style.css" rel="stylesheet">
</head>
<body class="body-about">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="home.php">
                <img src="assets/img/logo.png" alt="Acorn" width="30"> Acorn
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- About Section -->
    <div class="container my-5">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card shadow-sm border-0">
                    <div class="card-body">
                        <h2 class="mb-4" style="color: #424A3F;">Tentang Kami</h2>

                        <p>
                            Acorn adalah platform digital yang dirancang untuk menyimpan data tamu dengan rapi, cepat, dan efisien. 
                            Kami hadir sebagai solusi praktis pengganti buku tamu manual yang merepotkan.
                        </p>
                        <h4 class="mt-4">Kenapa Tupai?</h4>
                        <p>
                            Tupai itu lucu, aktif, dan suka menyimpan biji <strong>kayak website ini yang menyimpan data tamu dengan lincah dan rapi!</strong><br>
                            Filosofi ini menggambarkan semangat Acorn: <em>ceria, gesit, dan bisa diandalkan</em>. Kami ingin memberikan pengalaman pencatatan tamu yang tidak hanya efisien, tapi juga menyenangkan.
                        </p>
                        <p class="mt-4">Terima kasih telah menggunakan Acorn! 🌰</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

     <div class="footer-about text-center p-3 bg-white border-top">
        © <?= date('Y') ?> Acorn. kelompok 7.
     </div>
</body>
</html>
