<?php
include "koneksi.php";

$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$agama = $_POST['agama'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "INSERT INTO penduduk
(nik, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, agama, pekerjaan, alamat)
VALUES
('$nik','$nama','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$agama','$pekerjaan','$alamat')");
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Tersimpan</title>
  <style>
    body {
      font-family: "Segoe UI", sans-serif;
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.2);
      padding: 30px;
      text-align: center;
      max-width: 500px;
      animation: fadeIn 0.8s ease;
    }
    .card h2 {
      color: #2a5298;
      margin-bottom: 20px;
    }
    .card p {
      font-size: 16px;
      margin-bottom: 25px;
    }
    .btn {
      display: inline-block;
      margin: 8px;
      padding: 12px 20px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: bold;
      transition: transform 0.2s ease;
    }
    .btn:hover {
      transform: scale(1.05);
    }
    .btn-add {
      background: #28a745;
      color: #fff;
    }
    .btn-view {
      background: #007bff;
      color: #fff;
      
    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(-20px);}
      to {opacity: 1; transform: translateY(0);}
    }
  </style>
</head>
<body>
  <div class="card">
    <h2>✅ Data Berhasil Disimpan</h2>
    <p>Data penduduk baru sudah masuk ke database.</p>
    <a href="data.php" class="btn btn-add">➕ Tambah Data Lagi</a>
    <a href="tampil.php" class="btn btn-view">📋 Lihat Data</a>
  </div>
</body>
</html>
