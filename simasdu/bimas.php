<?php 
include("php/config.php");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Survei Kepuasan Seksi Bimas Islam</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #dfe9f3, #ffffff);
      margin: 0;
      padding: 40px 20px;
    }

    .header {
    display: flex;
    align-items: center;
    background-color: #f8f9fa;
    padding: 10px 20px;
    border-bottom: 2px solid #ddd;
    }
    .header img {
        width: 50px;
        margin-right: 10px;
    }
    .nav {
        display: flex;
        padding: 10px 20px;
        background: #f1f1f1;
    }
    .nav a {
        margin-right: 15px;
        text-decoration: none;
        color: #333;
        font-weight: bold;
    }
    .nav a:hover {
        color: #007bff;
    }

    .survey-container {
      background-color: #ffffff;
      padding: 40px;
      border-radius: 15px;
      max-width: 800px;
      margin: auto;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    h2 {
      text-align: center;
      color: #2c3e50;
      margin-bottom: 30px;
    }

    .question {
      margin-bottom: 25px;
    }

    .question p {
      font-weight: bold;
      color: #34495e;
      margin-bottom: 10px;
    }

    label {
      display: block;
      margin: 5px 0;
      color: #2c3e50;
      font-weight: 500;
    }

    input[type="text"],
    input[type="tel"],
    textarea {
      width: 100%;
      padding: 12px;
      border-radius: 8px;
      border: 1px solid #ccc;
      margin-top: 5px;
      font-size: 15px;
      transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    input[type="tel"]:focus,
    textarea:focus {
      border-color: #3498db;
      outline: none;
    }

    textarea {
      resize: vertical;
      min-height: 100px;
    }

    input[type="radio"] {
      margin-right: 10px;
    }

    .form-group {
      margin-bottom: 25px;
    }

    input[type="submit"] {
      background-color: #3498db;
      color: white;
      padding: 14px 30px;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      width: 100%;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #2980b9;
    }

    @media (max-width: 600px) {
      .survey-container {
        padding: 25px;
      }
    }
  </style>
</head>
<body>
  
<div class="survey-container">
  <h2>Survei Kepuasan Layanan Seksi Bimas Islam</h2>
  <p style="text-align:center; font-size: 14px; color: #555; margin-top: -15px; margin-bottom: 30px;">
  "Survey kepuasan masyarakat ini untuk kepentingan layanan yang ada di Kemenag, Identitas Anda akan dirahasiakan"</p>
  <form action="php/proses_survey.php" method="post">

    <!-- Identitas Pengisi -->
    <div class="form-group">
      <label for="nama">Nama Lengkap:</label>
      <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
    </div>

    <div class="form-group">
      <label for="nohp">No. HP:</label>
      <input type="tel" id="nohp" name="nohp" placeholder="Contoh: 081234567890" pattern="[0-9]{10,15}" required>
    </div>

    <div class="form-group">
      <label for="usia">Usia:</label>
      <input type="text" id="usia" name="usia" placeholder="Masukkan usia Anda" required>
    </div>
    <div class="form-group">
      <label for="pekerjaan">Pekerjaan:</label>
      <select id="pekerjaan" name="pekerjaan" required>
        <option value="">-- Pilih Pekerjaan --</option>
        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
        <option value="PNS">PNS</option>
        <option value="TNI/Polri">TNI/Polri</option>
        <option value="Pegawai Swasta">Pegawai Swasta</option>
        <option value="Wirausaha">Wirausaha</option>
        <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
        <option value="Pensiunan">Pensiunan</option>
        <option value="Lainnya">Lainnya</option>
      </select>
    </div>


    <div class="form-group">
      <label>Jenis Kelamin:</label>
      <label><input type="radio" name="jeniskelamin" value="Laki-laki" required> Laki-laki</label>
      <label><input type="radio" name="jeniskelamin" value="Perempuan"> Perempuan</label>
    </div>

    <div class="form-group">
      <label for="agama">Agama:</label>
      <select id="agama" name="agama" required>
        <option value="">-- Pilih Agama --</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katolik">Katolik</option>
        <option value="Hindu">Hindu</option>
        <option value="Buddha">Buddha</option>
        <option value="Konghucu">Konghucu</option>
        <option value="Lainnya">Lainnya</option>
      </select>
    </div>


    <div class="form-group">
      <label>Penyandang Disabilitas:</label>
      <label><input type="radio" name="disabilitas" value="Ya" required> Ya</label>
      <label><input type="radio" name="disabilitas" value="Tidak"> Tidak</label>
    </div>

    <div class="form-group">
      <label for="jenis_disabilitas">Jenis Disabilitas:</label>
      <select id="jenis_disabilitas" name="jenis_disabilitas">
        <option value="">-- Pilih Jenis Disabilitas --</option>
        <option value="Tunanetra">Tunanetra</option>
        <option value="Tunarungu">Tunarungu</option>
        <option value="Tunadaksa">Tunadaksa</option>
        <option value="Tunagrahita">Tunagrahita</option>
        <option value="Tunalaras">Tunalaras</option>
        <option value="Autisme">Autisme</option>
        <option value="Lainnya">Lainnya</option>
      </select>
    </div>

    <div style="background-color: #f0f8ff; border-left: 5px solid #3498db; padding: 20px; border-radius: 10px; margin-bottom: 35px;">
  <p style="margin: 0; font-size: 15px; color: #2c3e50; line-height: 1.6; text-align: justify;">
    Untuk meningkatkan kualitas pelayanan kami, mohon kesediaan Anda untuk mengisi survei ini dengan memberikan penilaian yang sesuai dengan pengalaman Anda saat menerima layanan dari Seksi Bimas Islam. 
  </p>
</div>


    <!-- Pertanyaan Survei -->
    <div class="question">
      <p>1. Apakah anda puas dengan proses pengurusan surat keterangan masjid?</p>
      <label><input type="radio" name="q1" value="Sangat Puas"> Sangat Puas</label>
      <label><input type="radio" name="q1" value="Puas"> Puas</label>
      <label><input type="radio" name="q1" value="Kurang Puas"> Kurang Puas</label>
      <label><input type="radio" name="q1" value="Tidak Puas"> Tidak Puas</label>
    </div>

    <div class="question">
      <p>2. Apakah anda puas dengan proses pengurusan surat keterangan majelis ta'lim?</p>
      <label><input type="radio" name="q2" value="Sangat Puas"> Sangat Puas</label>
      <label><input type="radio" name="q2" value="Puas"> Puas</label>
      <label><input type="radio" name="q2" value="Kurang Puas"> Kurang Puas</label>
      <label><input type="radio" name="q2" value="Tidak Puas"> Tidak Puas</label>
    </div>

    <div class="question">
      <p>3. Apakah anda puas dengan layanan pencairan PMBP?</p>
      <label><input type="radio" name="q3" value="Sangat Puas"> Sangat Puas</label>
      <label><input type="radio" name="q3" value="Puas"> Puas</label>
      <label><input type="radio" name="q3" value="Kurang Puas"> Kurang Puas</label>
      <label><input type="radio" name="q3" value="Tidak Puas"> Tidak Puas</label>
    </div>

    <div class="question">
      <p>4. Apakah anda puas dengan fasilitas layanan yang disediakan oleh keuangan?</p>
      <label><input type="radio" name="q4" value="Sangat Puas"> Sangat Puas</label>
      <label><input type="radio" name="q4" value="Puas"> Puas</label>
      <label><input type="radio" name="q4" value="Kurang Puas"> Kurang Puas</label>
      <label><input type="radio" name="q4" value="Tidak Puas"> Tidak Puas</label>
    </div>

    <div class="question">
      <p>5. Apakah Anda puas terhadap pelaksanaan bimbingan pranikah atau Suscatin??</p>
      <label><input type="radio" name="q5" value="Sangat Puas"> Sangat Puas</label>
      <label><input type="radio" name="q5" value="Puas"> Puas</label>
      <label><input type="radio" name="q5" value="Kurang Puas"> Kurang Puas</label>
      <label><input type="radio" name="q5" value="Tidak Puas"> Tidak Puas</label>
    </div>

    <!-- Saran dan Kritik -->
    <div class="form-group">
      <label for="saran">Saran dan Kritik:</label>
      <textarea id="saran" name="saran" placeholder="Tuliskan masukan Anda..."></textarea>
    </div>
    <input type="hidden" name="seksi" value="bimas">

    <input type="submit" value="Kirim Jawaban">
  </form>
</div>

</body>
</html>
