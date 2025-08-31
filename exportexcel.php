<?php
session_start();
// Panggil koneksi ke database
include "koneksi.php";

// Mengatur header untuk mengarahkan output ke file Excel
header("Content-type: application/vnd-ms-excel"); // Tipe file Excel
header("Content-Disposition: attachment; filename=Export Excel Data Pengunjung.xls"); // Nama file hasil export
header("Pragma: no-cache"); // Mencegah caching file
header("Expires: 0"); // Mencegah file kedaluwarsa
?>

        <?php
        // Ambil rentang tanggal dari form yang dikirim melalui POST
        $tgl1 = $_POST['tanggala']; // Tanggal awal
        $tgl2 = $_POST['tanggalb']; // Tanggal akhir
        $id_user = $_SESSION['id_user']; // Ambil id user dari session
        
        // Query untuk mengambil data tamu berdasarkan rentang tanggal
        $tampil = mysqli_query($koneksi, "SELECT * FROM tamu WHERE tanggal BETWEEN '$tgl1' AND '$tgl2' AND id_user = '$id_user' ORDER BY tanggal ASC");
        $no = 1; // Inisialisasi nomor urut

        ?>

        <!-- Membuat tabel untuk menampilkan data pengunjung -->
         <table border="1">
            <thead>
                <tr>
                    <th colspan="6">Rekapitulasi Data Pengunjung</th> <!-- Judul tabel -->
                </tr>
                <tr>
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>Nama Pengunjung</th>
                    <th>Alamat</th>
                    <th>Tujuan</th>
                    <th>No. HP</th>
                </tr>
            </thead>
            <tbody>
               
            <?php while($data = mysqli_fetch_array($tampil)){ ?>

            <tr>
                <td><?= $no++ ?></td> <!-- Nomor urut -->
                <td><?= $data['tanggal'] ?></td> <!-- Tanggal kunjungan -->
                <td><?= $data['nama'] ?></td> <!-- Nama pengunjung -->
                <td><?= $data['alamat'] ?></td> <!-- Alamat pengunjung -->
                <td><?= $data['tujuan'] ?></td> <!-- Tujuan kunjungan -->
                <td><?= $data['nope'] ?></td> <!-- Nomor HP pengunjung -->
            </tr>
            <?php } ?>
    </tbody>
</table>
