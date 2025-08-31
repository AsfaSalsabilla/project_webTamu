<?php
// Mulai session untuk menyimpan data login
session_start();

// Panggil file koneksi database
include "koneksi.php";

// Ambil dan amankan input dari form login
// Gunakan ternary operator untuk menghindari penggunaan @ (kurang disarankan)
$username_input = isset($_POST['username']) ? $_POST['username'] : '';
$password_input = isset($_POST['password']) ? $_POST['password'] : '';

// Enkripsi password menggunakan MD5 (catatan: lebih aman gunakan bcrypt di proyek nyata)
$encrypted_password = md5($password_input);

// Escape input untuk mencegah SQL Injection
$username = mysqli_real_escape_string($koneksi, $username_input);
$password = mysqli_real_escape_string($koneksi, $encrypted_password);

// Query untuk mencocokkan user aktif di database
$query = "SELECT * FROM tuser WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($result);

// Periksa apakah login berhasil
if ($data) {
    // Simpan data pengguna ke dalam session
    $_SESSION['id_user']   = $data['id_user'];
    $_SESSION['username']  = $data['username'];
    $_SESSION['password']  = $data['password']; // (bisa dihindari simpan password)
    $_SESSION['email']     = $data['email'];

    // Arahkan ke halaman utama
    header('Location: admin.php');
    exit;
} else {
    // Jika login gagal, tampilkan peringatan dan kembalikan ke halaman login
    echo "<script>
            alert('Maaf, Login Gagal. Pastikan Username dan Password Anda benar!');
            window.location='index.php';
          </script>";
}
?>
