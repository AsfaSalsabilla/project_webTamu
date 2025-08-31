<?php
require_once 'config.php';
require_once 'partials/header.php';
require_once 'partials/sidebar.php';

// Ambil data pesan dari database
$query = mysqli_query($koneksi, "SELECT * FROM messages ORDER BY created_at DESC");

// Cek error jika query gagal
if (!$query) {
    die("Query gagal: " . mysqli_error($koneksi));
}
?>

<div class="content">
  <div class="topbar d-flex justify-content-between align-items-center">
    <h5 class="mb-0">Selamat Datang, <?= $_SESSION['admin_name'] ?? 'Admin' ?></h5>
    <span class="text-muted">Tanggal: <?= date('d M Y') ?></span>
  </div>

  <div class="container my-5">
    <div class="card shadow mb-4">
      <div class="card-header py-3" style="background-color: #424A3F;">
        <h6 class="m-0 font-weight-bold" style="color: #DDBEB5;">Kotak Masuk</h6>
      </div>

      <div class="card-body">
        <?php if (mysqli_num_rows($query) > 0): ?>
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead style="background-color: #EFE1DC;">
                <tr>
                  <th>No</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Email</th>
                  <th>Message</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php while ($data = mysqli_fetch_assoc($query)) { ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= htmlspecialchars($data['first_name']) ?></td>
                    <td><?= htmlspecialchars($data['last_name']) ?></td>
                    <td><?= htmlspecialchars($data['email']) ?></td>
                    <td><?= nl2br(htmlspecialchars($data['message'])) ?></td>
                    <td><?= date('d M Y H:i', strtotime($data['created_at'])) ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        <?php else: ?>
          <div class="alert alert-warning">Belum ada pesan masuk.</div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>