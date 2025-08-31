<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Pengaturan karakter dan kompatibilitas browser -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Halaman registrasi untuk Sistem Informasi Buku Tamu" />
    <meta name="author" content="Channel kel7" />

    <!-- Judul halaman -->
    <title>Halaman Registrasi | Acorn</title>
    
    <!-- Favicon untuk halaman (ikon di tab browser) -->
    <link rel="icon" href="assets/img/logo.png" type="image/x-icon" />
    
    <!-- Font dan ikon dari FontAwesome -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    
    <!-- Gaya khusus untuk template admin SB Admin 2 -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet" />
    
    <!-- Gaya kustom -->
    <link href="custom-style.css" rel="stylesheet" />
</head>

<body class="custom-bg">

    <!-- Container utama untuk konten halaman -->
    <div class="container">

        <!-- Baris utama untuk form registrasi yang dipusatkan -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <!-- Card untuk form registrasi dengan bayangan -->
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">

                            <!-- Sisi kiri dengan gambar dan teks branding -->
                            <div class="col-lg-6 d-lg-block bg shadow-lg p-5 text-center">
                                <img src="assets/img/logo.png" width="200" alt="Logo Acorn" />
                                <h3 class="text-dark-green">
                                    Sistem Informasi Buku Tamu<br />
                                    ACORN<br />
                                    <small>Karawang, Jawa Barat</small>
                                </h3>
                            </div>

                            <!-- Sisi kanan untuk form registrasi -->
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center mb-4">
                                        <h1 class="h4 text-gray-900">Register Form</h1>
                                    </div>

                                    <?php 
                                        session_start(); 
                                        if (isset($_SESSION['danger'])): 
                                    ?>
                                        <div class="alert alert-danger">
                                            <?= htmlspecialchars($_SESSION['danger']) ?>
                                        </div>
                                    <?php 
                                        unset($_SESSION['danger']); 
                                        endif; 
                                    ?>

                                    <!-- Form registrasi -->
                                    <form action="register-proccess.php" method="post">
                                        <div class="form-group mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input 
                                                type="email" 
                                                name="email" 
                                                id="email" 
                                                class="form-control form-control-user" 
                                                required 
                                                autocomplete="email" 
                                                required
                                            />
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input 
                                                type="text" 
                                                name="username" 
                                                id="username" 
                                                class="form-control form-control-user" 
                                                required 
                                                autocomplete="username" 
                                                required
                                            />
                                        </div>

                                        <div class="form-group mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input 
                                                type="password" 
                                                name="password" 
                                                id="password" 
                                                class="form-control form-control-user" 
                                                required 
                                                autocomplete="new-password"
                                                required 
                                            />
                                        </div>

                                        <button type="submit" name="register" class="btn btn-primary btn-user btn-block">
                                            Register
                                        </button>
                                    </form>

                                    <hr />

                                    <div class="text-center">
                                        <a class="small" href="index.php">Sudah punya akun? Login</a>
                                    </div>
                                </div>
                            </div>

                        </div> <!-- end row -->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->

            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- end container -->

    <!-- JavaScript dependencies dan Bootstrap -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/js/sb-admin-2.min.js"></script>
    <!-- Bootstrap 5 JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
