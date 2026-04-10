<?php 
include("php/config.php");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Survei Kepuasan Seksi Bimas Pendidikan Madrasah</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #dfe9f3, #ffffff);
      margin: 0;
      padding: 40px 20px;
      max-width: 100%;
      overflow-x: hidden;
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
      flex-wrap: wrap;
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
    textarea,
    select {
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
    textarea:focus,
    select:focus {
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

    @media (max-width: 768px) {
      body {
        padding: 20px 10px;
      }

      .survey-container {
        padding: 25px 20px;
        border-radius: 10px;
      }

      h2 {
        font-size: 20px;
      }

      .form-group label,
      .question p,
      label {
        font-size: 14px;
      }

      input[type="submit"] {
        font-size: 14px;
        padding: 12px 20px;
      }

      .nav {
        flex-direction: column;
        align-items: flex-start;
      }

      .nav a {
        margin: 5px 0;
      }
    }

  .form-group {
    margin-bottom: 15px;
    display: flex;
    flex-direction: column;
  }

  .form-group label {
    margin-bottom: 5px;
    font-weight: 600;
    color: #333;
  }

  .form-group input[type="number"],
  .form-group input[type="text"],
  .form-group input[type="tel"],
  .form-group select,
  .form-group textarea {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 16px;
    transition: border-color 0.3s ease;
  }

  .form-group input:focus,
  .form-group select:focus,
  .form-group textarea:focus {
    border-color: #4CAF50;
    outline: none;
  }    
  </style>
</head>
<body>
  
<div class="survey-container">
  <h2>Survei Kepuasan Layanan Seksi Pendidikan Madrasah</h2>
  <p style="text-align:center; font-size: 14px; color: #555; margin-top: -15px; margin-bottom: 30px;">
    "Survey kepuasan masyarakat ini untuk kepentingan layanan yang ada di Kemenag, Identitas Anda akan dirahasiakan"
  </p>
<form action="php/proses_survey.php" method="post" id="surveyForm">

  <!-- Identitas -->
  <div class="form-group">
    <label for="nama">Nama Lengkap:</label>
    <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
  </div>

<div class="form-group">
  <label for="nohp">No. HP:</label>
  <input type="tel" id="nohp" name="nohp" placeholder="Contoh: 081234567890" pattern="^[0-9]{10,15}$" inputmode="numeric" required>
</div>


<div class="form-group">
  <label for="usia">Usia:</label>
  <input type="number" id="usia" name="usia" placeholder="Masukkan usia Anda" min="1" max="120" required>
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
    <label><input type="radio" name="disabilitas" value="Ya" required onclick="toggleJenisDisabilitas(true)"> Ya</label>
    <label><input type="radio" name="disabilitas" value="Tidak" onclick="toggleJenisDisabilitas(false)"> Tidak</label>
  </div>

  <div class="form-group">
    <label for="jenis_disabilitas">Jenis Disabilitas:</label>
    <select id="jenis_disabilitas" name="jenis_disabilitas" disabled>
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
      Untuk meningkatkan kualitas pelayanan kami, mohon kesediaan Anda untuk mengisi survei ini dengan memberikan penilaian yang sesuai dengan pengalaman Anda saat menerima layanan dari Sub bagian Perencanaan & Umum. 
    </p>
  </div>

  <!-- Pertanyaan Survei -->
  <div class="question">
    <p>1. Apakah Anda puas terhadap pelayanan Seksi Pendidikan Madrasah dalam proses administrasi dan pengelolaan data madrasah (seperti pendataan EMIS dan SIMPATIKA)?</p>
    <label><input type="radio" name="q1" value="Sangat Puas" required> Sangat Puas</label>
    <label><input type="radio" name="q1" value="Puas"> Puas</label>
    <label><input type="radio" name="q1" value="Kurang Puas"> Kurang Puas</label>
    <label><input type="radio" name="q1" value="Tidak Puas"> Tidak Puas</label>
  </div>

  <div class="question">
    <p>2. Apakah Anda puas dengan pelayanan dalam proses pengajuan izin operasional dan perubahan data kelembagaan madrasah?</p>
    <label><input type="radio" name="q2" value="Sangat Puas" required> Sangat Puas</label>
    <label><input type="radio" name="q2" value="Puas"> Puas</label>
    <label><input type="radio" name="q2" value="Kurang Puas"> Kurang Puas</label>
    <label><input type="radio" name="q2" value="Tidak Puas"> Tidak Puas</label>
  </div>

  <div class="question">
    <p>3. Apakah Anda puas terhadap pendampingan dan pembinaan yang dilakukan Seksi Penmad terhadap madrasah dalam meningkatkan mutu pendidikan?</p>
    <label><input type="radio" name="q3" value="Sangat Puas" required> Sangat Puas</label>
    <label><input type="radio" name="q3" value="Puas"> Puas</label>
    <label><input type="radio" name="q3" value="Kurang Puas"> Kurang Puas</label>
    <label><input type="radio" name="q3" value="Tidak Puas"> Tidak Puas</label>
  </div>

  <div class="question">
    <p>4. Apakah Anda puas terhadap pelayanan bantuan pemerintah seperti BOS, PIP, BOP RA, dan bantuan sarpras yang difasilitasi oleh Seksi Penmad?</p>
    <label><input type="radio" name="q4" value="Sangat Puas" required> Sangat Puas</label>
    <label><input type="radio" name="q4" value="Puas"> Puas</label>
    <label><input type="radio" name="q4" value="Kurang Puas"> Kurang Puas</label>
    <label><input type="radio" name="q4" value="Tidak Puas"> Tidak Puas</label>
  </div>

  <div class="question">
    <p>5. Apakah Anda puas dengan informasi dan komunikasi yang disampaikan oleh Seksi Penmad terkait program dan kebijakan madrasah?</p>
    <label><input type="radio" name="q5" value="Sangat Puas" required> Sangat Puas</label>
    <label><input type="radio" name="q5" value="Puas"> Puas</label>
    <label><input type="radio" name="q5" value="Kurang Puas"> Kurang Puas</label>
    <label><input type="radio" name="q5" value="Tidak Puas"> Tidak Puas</label>
  </div>

  <div class="form-group">
    <label for="saran">Saran dan Kritik:</label>
    <textarea id="saran" name="saran" placeholder="Tuliskan masukan Anda..." ></textarea>
  </div>

  <input type="hidden" name="seksi" value="penmad">
  <input type="submit" value="Kirim Jawaban">
</form>

<script>
  function toggleJenisDisabilitas(status) {
    const jenis = document.getElementById("jenis_disabilitas");

    if (status) {
      jenis.disabled = false;
      jenis.required = true;
    } else {
      jenis.disabled = true;
      jenis.required = false;
      jenis.value = "";
    }
  }

  // Tambahan: cek saat form dimuat (misalnya reload)
  window.addEventListener('DOMContentLoaded', () => {
    const radioYes = document.querySelector('input[name="disabilitas"][value="Ya"]');
    const radioNo  = document.querySelector('input[name="disabilitas"][value="Tidak"]');

    if (radioYes.checked) toggleJenisDisabilitas(true);
    if (radioNo.checked)  toggleJenisDisabilitas(false);
  });

  document.getElementById("usia").addEventListener("input", function (e) {
    this.value = this.value.replace(/[^0-9]/g, "");
  });

  document.getElementById("nohp").addEventListener("input", function (e) {
    this.value = this.value.replace(/[^0-9]/g, "");
  });
</script>





</div>

</body>
</html>
