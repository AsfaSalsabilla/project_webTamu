<?php 
session_start(); 
if (isset($_POST['register'])) { 
    include "koneksi.php"; 

    $username = trim($_POST['username']); 
    $password = trim($_POST['password']); 
    $email = trim($_POST['email']); 

    // Enkripsi password (MD5 - untuk sementara)
    $hashedPassword = md5($password); 
    
    // Cek apakah username sudah terdaftar
    $checkUserQuery = "SELECT username FROM tuser WHERE username='$username'"; 
    $query = mysqli_query($koneksi, $checkUserQuery); 
    
    if (mysqli_num_rows($query) > 0) { 
        $_SESSION['danger'] = "Username sudah digunakan"; 
        header("Location:register.php"); 
        exit;
    } else { 
        // Simpan pengguna baru
        $create = mysqli_query($koneksi, "INSERT INTO tuser (username, password, email) VALUES ('$username', '$hashedPassword', '$email')"); 
        
        if ($create) { 
            $_SESSION['success'] = "Akun berhasil dibuat! Silakan login."; 
            header("Location:index.php"); 
            exit;
        } else { 
            $_SESSION['danger'] = "Gagal membuat akun. Silakan coba lagi."; 
            header("Location:register.php"); 
            exit;
        } 
    } 
}
