<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Penduduk</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- DataTables CSS -->
  <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <h2 class="mb-4 text-primary">📋 Data Penduduk</h2>

  <!-- Tabel Data -->
  <table id="pendudukTable" class="table table-striped table-bordered">
    <thead class="table-primary">
      <tr>
        <th>No</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Agama</th>
        <th>Pekerjaan</th>
        <th>Alamat</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      if(isset($_GET['cari'])){
          $cari = $_GET['cari'];
          $data = mysqli_query($koneksi,"SELECT * FROM penduduk WHERE nama LIKE '%$cari%' OR nik LIKE '%$cari%'");
      }else{
          $data = mysqli_query($koneksi,"SELECT * FROM penduduk");
      }
      while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['nik']; ?></td>
        <td><?php echo $d['nama']; ?></td>
        <td><?php echo $d['jenis_kelamin']; ?></td>
        <td><?php echo $d['tempat_lahir']; ?></td>
        <td><?php echo $d['tanggal_lahir']; ?></td>
        <td><?php echo $d['agama']; ?></td>
        <td><?php echo $d['pekerjaan']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td>
          <a href="edit.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-secondary">Edit</a>
          <a href="hapus.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-light">Hapus</a>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>

  <!-- Tombol Balik ke Dashboard -->
  <a href="Dashboard.html" class="btn btn-secondary w-100 mt-3">Dashboard</a>
</div>

<!-- JS Bootstrap + DataTables -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function() {
    $('#pendudukTable').DataTable();
  });
</script>

</body>
</html>
