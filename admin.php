<?php
session_start();
include "header.php";

// Redirect jika belum login
if (!isset($_SESSION['id_user'])) {
    header("Location: login.php");
    exit;
}

include "koneksi.php";

$id_user = $_SESSION['id_user'];

// Proses penyimpanan data tamu
if (isset($_POST['bsimpan'])) {
    $tgl = date('Y-m-d');
    $nama = htmlspecialchars($_POST['nama'], ENT_QUOTES);
    $alamat = htmlspecialchars($_POST['alamat'], ENT_QUOTES);
    $tujuan = htmlspecialchars($_POST['tujuan'], ENT_QUOTES);
    $nope = htmlspecialchars($_POST['nope'], ENT_QUOTES);

    $simpan = mysqli_query($koneksi, "INSERT INTO tamu (tanggal, nama, alamat, tujuan, nope, id_user)
        VALUES ('$tgl', '$nama', '$alamat', '$tujuan', '$nope', '$id_user')");

    if ($simpan) {
        echo "<script>alert('Simpan data Sukses, Terima kasih..!'); document.location='?'</script>";
    } else {
        echo "<script>alert('Simpan data GAGAL!!'); document.location='?'</script>";
    }
}
?>

<div class="head text-center">
    <img src="assets/img/logo.png" width="100">
    <h2 class="text--dark-green">Sistem Informasi Buku Tamu <br> Acorn</h2>
    <link href="custom-style.css" rel="stylesheet">
</div>

<div class="row nt-2">
    <!-- Form Input Tamu -->
    <div class="col-lg-7 mb-3">
        <div class="card shadow bg-gradient-light">
            <div class="card-body">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Identitas Pengunjung</h1>
                </div>
                <form class="user" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="nama" placeholder="Nama Pengunjung" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="alamat" placeholder="Alamat Pengunjung" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="tujuan" placeholder="Tujuan Pengunjung" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" name="nope" placeholder="No.hp Pengunjung" required>
                    </div>
                    <button type="submit" name="bsimpan" class="btn btn-primary btn-user btn-block">Simpan Data</button>
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="#">By. kel7 | 2025 - <?= date('Y') ?></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistik Pengunjung -->
    <div class="col-lg-5 mb-3">
        <div class="card shadow bg-gradient-light">
            <div class="card-body">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Statistik Pengunjung</h1>
                </div>
<?php
$tgl_sekarang = date('Y-m-d');
$kemarin = date('Y-m-d', strtotime('-1 day'));
$seminggu = date('Y-m-d H:i:s', strtotime('-6 days'));
$sekarang = date('Y-m-d H:i:s');
$bulan_ini = date('m');

$tgl_sekarang_q = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) FROM tamu WHERE tanggal LIKE '%$tgl_sekarang%' AND id_user = '$id_user'"));
$kemarin_q = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) FROM tamu WHERE tanggal LIKE '%$kemarin%' AND id_user = '$id_user'"));
$seminggu_q = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) FROM tamu WHERE tanggal BETWEEN '$seminggu' AND '$sekarang' AND id_user = '$id_user'"));
$sebulan_q = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) FROM tamu WHERE MONTH(tanggal) = '$bulan_ini' AND id_user = '$id_user'"));
$keseluruhan_q = mysqli_fetch_array(mysqli_query($koneksi, "SELECT COUNT(*) FROM tamu WHERE id_user = '$id_user'"));
?>
                <table class="table table-bordered">
                    <tr><td>Hari ini</td><td>: <?= $tgl_sekarang_q[0] ?></td></tr>
                    <tr><td>Kemarin</td><td>: <?= $kemarin_q[0] ?></td></tr>
                    <tr><td>Minggu ini</td><td>: <?= $seminggu_q[0] ?></td></tr>
                    <tr><td>Bulan ini</td><td>: <?= $sebulan_q[0] ?></td></tr>
                    <tr><td>Keseluruhan</td><td>: <?= $keseluruhan_q[0] ?></td></tr>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Tabel Data Pengunjung Hari Ini -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pengunjung Hari ini [<?= date('d-m-Y') ?>]</h6>
    </div>
    <div class="card-body">
        <a href="rekapitulasi.php" class="btn btn mb-3"><i class="fa fa-table"></i> Rekapitulasi Pengunjung</a>
        <a href="logout.php" class="btn btn mb-3"><i class="fa fa-sign-out-alt"></i> Logout</a>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>Nama Pengunjung</th>
                        <th>Alamat</th>
                        <th>Tujuan</th>
                        <th>No. HP</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>Nama Pengunjung</th>
                        <th>Alamat</th>
                        <th>Tujuan</th>
                        <th>No. HP</th>
                        <th>Hapus</th>
                    </tr>
                </tfoot>
                <tbody>
<?php
$tampil = mysqli_query($koneksi, "SELECT * FROM tamu WHERE tanggal = '$tgl_sekarang' AND id_user = '$id_user' ORDER BY id DESC");
$no = 1;
while ($data = mysqli_fetch_array($tampil)) {
?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['tanggal'] ?></td>
                        <td><?= $data['nama'] ?></td>
                        <td><?= $data['alamat'] ?></td>
                        <td><?= $data['tujuan'] ?></td>
                        <td><?= $data['nope'] ?></td>
                        <td><a href="delete.php?id=<?= $data['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a></td>
                    </tr>
<?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
