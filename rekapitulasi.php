<?php 
// Include file header untuk layout dan koneksi database
include "header.php"; 
?>

<!-- Awal Row untuk menampilkan konten utama -->
<div class="row">
    <!-- Awal col-md-12 untuk pengaturan lebar tampilan -->
    <div class="col-md-12">
        <!-- Awal card untuk menampilkan data rekapitulasi pengunjung -->
        <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Rekapitulasi Pengunjung</h6>
            </div>
            <div class="card-body">
                <!-- Form untuk memilih rentang tanggal rekapitulasi pengunjung -->
                <form method="POST" action="" class="text-center">
                    <div class="row">
                        <div class="col-md-3"></div> <!-- Spacer -->
                        
                        <!-- Input tanggal mulai -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="tanggal1">Dari Tanggal</label>
                                <input 
                                    class="form-control" 
                                    type="date" 
                                    id="tanggal1" 
                                    name="tanggal1" 
                                    value="<?= isset($_POST['tanggal1']) ? htmlspecialchars($_POST['tanggal1']) : date('Y-m-d') ?>" 
                                    required
                                >
                            </div>
                        </div>

                        <!-- Input tanggal akhir -->
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="tanggal2">Sampai Tanggal</label>
                                <input 
                                    class="form-control" 
                                    type="date" 
                                    id="tanggal2" 
                                    name="tanggal2" 
                                    value="<?= isset($_POST['tanggal2']) ? htmlspecialchars($_POST['tanggal2']) : date('Y-m-d') ?>" 
                                    required
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Tombol aksi untuk menampilkan data dan kembali -->
                    <div class="row">
                        <div class="col-md-4"></div> <!-- Spacer -->
                        <div class="col-md-2">
                            <button class="btn btn-primary form-control" name="btampilkan">
                                <i class="fa fa-search"></i> Tampilkan
                            </button>
                        </div>
                        <div class="col-md-2">
                            <a href="admin.php" class="btn btn-danger form-control">
                                <i class="fa fa-backward"></i> Kembali
                            </a>
                        </div>
                    </div>
                </form>

                <?php
                // Cek apakah tombol 'Tampilkan' diklik
                if (isset($_POST['btampilkan'])):
                    // Ambil nilai tanggal dari form POST
                    $tgl1 = $_POST['tanggal1'];
                    $tgl2 = $_POST['tanggal2'];
                    $id_user = $_SESSION['id_user']; // Asumsi session sudah dimulai dan id_user tersedia

                    // Query data pengunjung berdasarkan rentang tanggal dan user aktif
                    $query = "SELECT * FROM tamu 
                              WHERE tanggal BETWEEN '$tgl1' AND '$tgl2' 
                              AND id_user = '$id_user' 
                              ORDER BY id DESC";

                    $tampil = mysqli_query($koneksi, $query);
                ?>

                <!-- Tabel data pengunjung -->
                <div class="table-responsive mt-3">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tanggal</th>
                                <th>Nama Pengunjung</th>
                                <th>Alamat</th>
                                <th>Tujuan</th>
                                <th>No. HP</th>
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
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            $no = 1;
                            while ($data = mysqli_fetch_array($tampil)) {
                            ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= htmlspecialchars($data['tanggal']); ?></td>
                                <td><?= htmlspecialchars($data['nama']); ?></td>
                                <td><?= htmlspecialchars($data['alamat']); ?></td>
                                <td><?= htmlspecialchars($data['tujuan']); ?></td>
                                <td><?= htmlspecialchars($data['nope']); ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <!-- Form ekspor data ke Excel -->
                    <center>
                        <form method="POST" action="exportexcel.php">
                            <input type="hidden" name="tanggala" value="<?= htmlspecialchars(@$_POST['tanggal1']); ?>">
                            <input type="hidden" name="tanggalb" value="<?= htmlspecialchars(@$_POST['tanggal2']); ?>">
                            <button class="btn btn-success form-control" name="bexport">
                                <i class="fa fa-download"></i> Export Data Excel
                            </button>
                        </form>
                    </center>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <!-- Akhir card -->
    </div>
    <!-- Akhir col-md-12 -->
</div>
<!-- Akhir Row -->

<?php include "footer.php"; ?>
