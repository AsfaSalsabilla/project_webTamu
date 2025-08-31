<?php
require_once 'config.php';
require_once 'partials/header.php';
?>

<?php require_once 'partials/sidebar.php'; ?>

<div class="content">
  <div class="topbar d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Selamat Datang, <?= $_SESSION['admin_name'] ?? 'Admin' ?></h5>
    <span class="text-muted">Tanggal: <?= date('d M Y') ?></span>
  </div>

  <div class="container my-4">
    <!-- Dashboard cards -->
    <div class="row g-4 mb-5">
      <div class="col-md-4">
        <div class="p-4 text-white dashboard-card" style="background-color: #424A3F;">
          <h5>Total Pengguna</h5>
          <h3>
            <?php
            $queryUser = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM tuser");
            $dataUser = mysqli_fetch_assoc($queryUser);
            echo $dataUser['total'];
            ?>
          </h3>
        </div>
      </div>

      <div class="col-md-4">
        <div class="p-4 text-dark dashboard-card" style="background-color: white;">
          <h5>Inbox Masuk</h5>
          <h3>
            <?php
            $queryInbox = mysqli_query($koneksi, "SELECT COUNT(*) AS total FROM messages");
            $dataInbox = mysqli_fetch_assoc($queryInbox);
            echo $dataInbox['total'];
            ?>
          </h3>
        </div>
      </div>
    </div>

    <!-- Tabel Data User -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-dark">Data User Terdaftar</h6>
      </div>

      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No.</th>
              <th>Email</th>
              <th>Username</th>
              <th>Hapus</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>No.</th>
              <th>Email</th>
              <th>Username</th>
              <th>Hapus</th>
            </tr>
          </tfoot>
          <tbody>
            <?php
            $tampil = mysqli_query($koneksi, "SELECT * FROM tuser ORDER BY id_user ASC");
            $no = 1;
            while ($data = mysqli_fetch_array($tampil)) {
            ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= htmlspecialchars($data['email']) ?></td>
                <td><?= htmlspecialchars($data['username']) ?></td>
                <td>
                  <a href="delete_user.php?id_user=<?= $data['id_user'] ?>" 
                     class="btn btn-hapus"
                     onclick="return confirm('Apakah Anda yakin ingin menghapus user ini?');">
                    <i class="fa fa-trash"></i> Hapus
                  </a>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
