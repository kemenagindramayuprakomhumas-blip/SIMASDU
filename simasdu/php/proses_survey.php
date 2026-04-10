<?php
include("config.php"); // koneksi ke database

// Ambil data dari form POST
$seksi              = $_POST['seksi'];
// $nama               = $_POST['nama'];
// $nohp               = $_POST['nohp'];
$usia               = (int) $_POST['usia'];
// $pekerjaan          = $_POST['pekerjaan'];
$jeniskelamin       = $_POST['jeniskelamin'];
$agama              = $_POST['agama'];
$disabilitas        = $_POST['disabilitas'];
$jenis_disabilitas  = $_POST['jenis_disabilitas'];
$q1                 = $_POST['q1'] ?? '';
$q2                 = $_POST['q2'] ?? '';
$q3                 = $_POST['q3'] ?? '';
$q4                 = $_POST['q4'] ?? '';
$q5                 = $_POST['q5'] ?? '';
// $saran              = $_POST['saran'] ?? '';
$nama  = htmlspecialchars(trim($_POST['nama']), ENT_QUOTES, 'UTF-8');
$nohp  = htmlspecialchars(trim($_POST['nohp']), ENT_QUOTES, 'UTF-8');
$pekerjaan = htmlspecialchars(trim($_POST['pekerjaan']), ENT_QUOTES, 'UTF-8');
$saran = htmlspecialchars(trim($_POST['saran']), ENT_QUOTES, 'UTF-8');


// Jika disabilitas = 'Tidak', kosongkan jenis_disabilitas
if ($disabilitas === 'Tidak') {
  $jenis_disabilitas = ''; // atau NULL jika kolomnya nullable
}

// Daftar opsi seksi yang valid
$opsi_seksi = ['umum', 'kepegawaian','keuangan','bimas', 'penmad', 'pais', 'phu', 'pontren', 'pzw'];
if (!in_array($seksi, $opsi_seksi)) {
    die("Seksi tidak valid");
}

// Siapkan query untuk insert data ke tabel jawaban
$sql = "INSERT INTO jawaban (
    seksi, nama, nohp, usia, pekerjaan, jeniskelamin, agama, disabilitas, jenis_disabilitas,
    q1, q2, q3, q4, q5, saran
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Aktifkan error detail untuk mysqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $stmt = $con->prepare($sql);
    $stmt->bind_param(
        "sssisssssssssss", 
        $seksi, $nama, $nohp, $usia, $pekerjaan, $jeniskelamin, $agama, $disabilitas, $jenis_disabilitas,
        $q1, $q2, $q3, $q4, $q5, $saran
    );
    $stmt->execute();
    echo "<script>alert('Terima kasih, survei Anda berhasil dikirim.'); window.location='../';</script>";
} catch (mysqli_sql_exception $e) {
    echo "❌ Gagal menyimpan ke database: " . $e->getMessage();
}


$stmt->close();
$con->close();
?>
