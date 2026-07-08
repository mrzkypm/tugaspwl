<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <title>Tambah Data Penduduk</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      body,
      html {
        height: 100%;
        margin: 0;
        font-family: "Segoe UI", sans-serif;
        background: linear-gradient(135deg, #1e3c72, #2a5298);
      }
      .split-container {
        display: flex;
        height: 100vh;
      }
      .left-panel {
        flex: 1;
        background: linear-gradient(135deg, #2a5298, #1e3c72);
        color: #fff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 40px;
        text-align: center;
      }
      .left-panel h1 {
        font-size: 32px;
        margin-bottom: 20px;
      }
      .left-panel img {
        width: 150px;
        margin-bottom: 20px;
      }
      .right-panel {
        flex: 2;
        background: #fff;
        padding: 60px;
        overflow-y: auto;
      }
      .right-panel h2 {
        margin-bottom: 30px;
        color: #2a5298;
      }
      .form-control {
        margin-bottom: 20px;
        border-radius: 8px;
        transition: 0.3s;
      }
      .form-control:focus {
        border-color: #2a5298;
        box-shadow: 0 0 8px #2a5298;
      }
      .btn-custom {
        width: 100%;
        padding: 14px;
        border: none;
        border-radius: 8px;
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        color: #fff;
        font-size: 18px;
        cursor: pointer;
        transition: transform 0.2s ease;
      }
      .btn-custom:hover {
        transform: scale(1.05);
      }
      .btn-dashboard {
        width: 100%;
        padding: 14px;
        border: none;
        border-radius: 8px;
        background: #6c757d;
        color: #fff;
        font-size: 16px;
        margin-top: 15px;
        transition: background 0.3s ease;
        text-decoration: none;
        display: inline-block;
        text-align: center;
      }
      .btn-dashboard:hover {
        background: #5a6268;
      }
    </style>
  </head>
  <body>
    <div class="split-container">
      <!-- Panel Kiri -->
      <div class="left-panel">
        <img
          src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
          alt="Icon Penduduk"
        />
        <h1>Sistem Informasi Kependudukan</h1>
        <p>Formulir Smart Kependudukan – Tambah Data Penduduk dengan Mudah.</p>
      </div>

      <!-- Panel Kanan -->
      <div class="right-panel">
        <h2>Tambah Data Penduduk</h2>
        <form action="simpan.php" method="POST">
          <input
            type="text"
            name="nik"
            class="form-control"
            placeholder="NIK (16 digit)"
            required
          />
          <input
            type="text"
            name="nama"
            class="form-control"
            placeholder="Nama Lengkap"
            required
          />
          <select name="jenis_kelamin" class="form-control" required>
            <option value="">-- Pilih Jenis Kelamin --</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
          <input
            type="text"
            name="tempat_lahir"
            class="form-control"
            placeholder="Tempat Lahir"
            required
          />
          <input
            type="date"
            name="tanggal_lahir"
            class="form-control"
            required
          />
          <input
            type="text"
            name="agama"
            class="form-control"
            placeholder="Agama"
            required
          />
          <input
            type="text"
            name="pekerjaan"
            class="form-control"
            placeholder="Pekerjaan"
            required
          />
          <input
            type="text"
            name="alamat"
            class="form-control"
            placeholder="Alamat"
            required
          />
          <button type="submit" class="btn-custom">Simpan Data</button>
        </form>
        <!-- Tombol Balik ke Dashboard -->
        <a href="Dashboard.html" class="btn-dashboard">Kembali</a>
      </div>
    </div>
  </body>
</html>
