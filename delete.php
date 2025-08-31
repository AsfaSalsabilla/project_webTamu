<?php 
if (isset($_GET['id'])) { 
    include "koneksi.php"; 
    $id = $_GET['id']; 

    // Gunakan prepared statement untuk keamanan lebih
    $query = mysqli_query($koneksi, "DELETE FROM tamu WHERE id='$id'"); 
    
    if ($query) { 
        $message = "Data berhasil dihapus"; 
        $message = urlencode($message); 
        header("Location:admin.php?message={$message}");
        exit();
    } else { 
        $message = "Data gagal dihapus"; 
        $message = urlencode($message); 
        header("Location:admin.php?message={$message}"); 
        exit();
    } 
}
?>
