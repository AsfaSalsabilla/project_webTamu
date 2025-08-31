<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Pengaturan karakter dan kompatibilitas browser -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Halaman login untuk Sistem Informasi Buku Tamu" />
    <meta name="author" content="Channel kel7" />

    <!-- Judul halaman -->
    <title>Halaman Login | Acorn</title>
    
    <!-- Favicon untuk halaman (ikon di tab browser) -->
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon" />
    
    <!-- Font dan ikon dari FontAwesome -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    
    <!-- Gaya khusus untuk template admin SB Admin 2 -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Gaya kustom -->
    <link href="custom-style.css" rel="stylesheet" />
</head>

<body class="custom-bg">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white custom-navbar">
        <div class="container">
            <!-- Logo -->
            <img src="assets/img/logo.png" alt="Acorn" width="30" />
            <!-- Brand -->
            <a class="navbar-brand" href="home.php">Acorn</a>
            <!-- Toggle button untuk responsive navbar -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menu navbar -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Me</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Container utama untuk konten halaman -->
    <div class="container">

        <!-- Baris utama untuk form login yang dipusatkan -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <!-- Card untuk form login dengan bayangan -->
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">

                            <!-- Sisi kiri dengan gambar dan teks branding -->
                            <div class="col-lg-6 d-lg-block bg-dark-green shadow-lg p-5 text-center">
                                <img src="assets/img/logo.png" width="200">
                                <h3 class="text-dark-green">
                                    Sistem Informasi Buku Tamu<br>
                                    ACORN<br>
                                    <small>Karawang, Jawa Barat</small>
                                </h3>
                            </div>

                            <!-- Sisi kanan untuk form login -->
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <!-- Judul form -->
                                    <div class="text-center mb-4">
                                        <h1 class="h4 text-gray-900">Welcome Back!</h1>
                                    </div>

                                    <!-- Form login admin -->
                                    <form class="user" action="cek_login.php" method="POST">
                                        <div class="form-group mb-3">
                                            <input 
                                                type="text" 
                                                name="username" 
                                                class="form-control form-control-user" 
                                                id="exampleInputEmail" 
                                                placeholder="Enter Username..." 
                                                required 
                                            />
                                        </div>
                                        <div class="form-group mb-3">
                                            <input 
                                                type="password" 
                                                name="password" 
                                                class="form-control form-control-user" 
                                                id="exampleInputPassword" 
                                                placeholder="Password" 
                                                required 
                                            />
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="form-check small">
                                                <input 
                                                    type="checkbox" 
                                                    class="form-check-input" 
                                                    id="customCheck" 
                                                />
                                                <label class="form-check-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>
                                        <!-- Tombol login -->
                                        <button type="submit" class="btn btn-primary btn-user btn-block mb-2">Login</button>
                                        <!-- Tombol daftar -->
                                        <a href="register.php" class="btn btn-primary btn-user btn-block">Register Account</a>
                                    </form>

                                    <hr />

                                    <!-- Footer kecil di form -->
                                    <div class="text-center small">
                                        <a href="forgot-password.html">By. kelompok 7 | 2025 - <?= date('Y') ?></a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- JavaScript dependencies dan Bootstrap -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>
