<?php
include "koneksi.php";

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM penduduk WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Data Penduduk</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      font-family: "Segoe UI", sans-serif;
    }
    .card {
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }
    .card-header {
      background: #2a5298;
      color: #fff;
      font-size: 20px;
      font-weight: bold;
      text-align: center;
    }
    .btn-custom {
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      color: #fff;
      border: none;
      border-radius: 8px;
      padding: 10px 20px;
      transition: transform 0.2s ease;
    }
    .btn-custom:hover {
      transform: scale(1.05);
    }
    .btn-dashboard {
      background: #6c757d;
      color: #fff;
      border-radius: 8px;
      padding: 10px 20px;
      text-decoration: none;
      display: inline-block;
      text-align: center;
      margin-top: 10px;
    }
    .btn-dashboard:hover {
      background: #5a6268;
    }
  </style>
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">✏️ Edit Data Penduduk</div>
        <div class="card-body">
          <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

            <div class="mb-3">
              <label class="form-label">NIK</label>
              <input type="text" name="nik" class="form-control" value="<?php echo $d['nik']; ?>" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Nama</label>
              <input type="text" name="nama" class="form-control" value="<?php echo $d['nama']; ?>" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-select" required>
                <option value="Laki-laki" <?php if($d['jenis_kelamin']=="Laki-laki") echo "selected"; ?>>Laki-laki</option>
                <option value="Perempuan" <?php if($d['jenis_kelamin']=="Perempuan") echo "selected"; ?>>Perempuan</option>
              </select>
            </div>

            <div class="mb-3">
              <label class="form-label">Tempat Lahir</label>
              <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $d['tempat_lahir']; ?>" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Tanggal Lahir</label>
              <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $d['tanggal_lahir']; ?>" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Agama</label>
              <input type="text" name="agama" class="form-control" value="<?php echo $d['agama']; ?>" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Pekerjaan</label>
              <input type="text" name="pekerjaan" class="form-control" value="<?php echo $d['pekerjaan']; ?>" required>
            </div>

            <div class="mb-3">
              <label class="form-label">Alamat</label>
              <textarea name="alamat" class="form-control" rows="3" required><?php echo $d['alamat']; ?></textarea>
            </div>

            <button type="submit" class="btn-custom w-100">💾 Update Data</button>
          </form>
          <a href="tampil.php" class="btn-dashboard w-100 mt-3">Kembali</a>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
