<?php
// Hubungkan ke database
include 'koneksi.php';

// Periksa apakah request dikirim melalui metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Amankan input dari user untuk mencegah SQL Injection
    $firstName = mysqli_real_escape_string($koneksi, $_POST['firstName']);
    $lastName  = mysqli_real_escape_string($koneksi, $_POST['lastName']);
    $email     = mysqli_real_escape_string($koneksi, $_POST['email']);
    $message   = mysqli_real_escape_string($koneksi, $_POST['message']);

    // Validasi: pastikan semua field diisi
    if (empty($firstName) || empty($lastName) || empty($email) || empty($message)) {
        header("Location: contact.php?error=Semua kolom wajib diisi!");
        exit;
    }

    // Simpan pesan ke database
    $query = "INSERT INTO messages (first_name, last_name, email, message)
              VALUES ('$firstName', '$lastName', '$email', '$message')";

    if (mysqli_query($koneksi, $query)) {
        // Redirect dengan pesan sukses
        header("Location: contact.php?success=Pesan berhasil dikirim!");
    } else {
        // Redirect jika terjadi kesalahan saat menyimpan
        header("Location: contact.php?error=Gagal mengirim pesan. Silakan coba lagi.");
    }
}
?>
