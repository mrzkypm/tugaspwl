<?php
include "koneksi.php";

$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$agama = $_POST['agama'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "UPDATE penduduk SET
nik='$nik',
nama='$nama',
jenis_kelamin='$jenis_kelamin',
tempat_lahir='$tempat_lahir',
tanggal_lahir='$tanggal_lahir',
agama='$agama',
pekerjaan='$pekerjaan',
alamat='$alamat'
WHERE id='$id'");

header("Location:tampil.php");
?>