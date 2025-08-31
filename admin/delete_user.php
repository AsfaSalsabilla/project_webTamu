<?php
if (isset($_GET['id_user'])) {
    include __DIR__ . "/../koneksi.php"; // koneksi.php ada di luar folder 'admin'

    $id_user = $_GET['id_user'];

    $stmt = mysqli_prepare($koneksi, "DELETE FROM tuser WHERE id_user = ?");
    mysqli_stmt_bind_param($stmt, "i", $id_user);

    if (mysqli_stmt_execute($stmt)) {
        $message = urlencode("User berhasil dihapus");
    } else {
        $message = urlencode("Gagal menghapus user");
    }

    mysqli_stmt_close($stmt);
    header("Location: dashboard.php?message=$message");
    exit();
}
?>
