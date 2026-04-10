<?php
include("php/config.php");
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

if (isset($_GET['export']) && $_GET['export'] == 'excel') {
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=hasil_survei.xls");
    echo "Nama\tNo HP\tSeksi\tQ1\tQ2\tQ3\tQ4\tQ5\tKritik/Saran\tWaktu\n";
}

$sql = "SELECT * FROM jawaban ORDER BY waktu_submit ASC";
$result = $con->query($sql);

$seksiData = [];
$sqlSeksi = "SELECT seksi, COUNT(*) as total FROM jawaban GROUP BY seksi";
$resSeksi = $con->query($sqlSeksi);
while ($row = $resSeksi->fetch_assoc()) {
    $seksiData[$row['seksi']] = $row['total'];
}

$statPerSeksi = [];
$sql = "SELECT seksi, q1, q2, q3, q4, q5 FROM jawaban";
$res = $con->query($sql);
while ($row = $res->fetch_assoc()) {
    $seksi = $row['seksi'];
    if (!isset($statPerSeksi[$seksi])) {
        $statPerSeksi[$seksi] = ['sangat_puas' => 0, 'puas' => 0, 'kurang_puas' => 0, 'tidak_puas' => 0];
    }
    foreach (['q1','q2','q3','q4','q5'] as $q) {
        if ($row[$q] === 'sangat_puas') $statPerSeksi[$seksi]['sangat_puas']++;
        if ($row[$q] === 'puas') $statPerSeksi[$seksi]['puas']++;
        if ($row[$q] === 'kurang_puas') $statPerSeksi[$seksi]['kurang_puas']++;
        if ($row[$q] === 'tidak_puas') $statPerSeksi[$seksi]['tidak_puas']++;
    }
}

$opsi_jawaban = [
    'sangat_puas' => 'Sangat puas',
    'puas' => 'Puas',
    'kurang_puas' => 'Kurang puas',
    'tidak_puas' => 'Tidak puas'
];

$opsi_seksi = [
    'umum' => 'Sub Bagian Perencanaan & Umum',
    'kepegawaian' => 'Sub Bagian Kepegawaian',
    'keuangan' => 'Sub Bagian Keuangan',
    'bimas' => 'Bimas Islam',
    'penmad' => 'Pendidikan Madrasah',
    'pais' => 'Pendidikan Agama Islam',
    'phu' => 'Penyelenggaraan Haji & Umroh',
    'pontren' => 'Pendidikan Diniyah dan Pondok Pesantren',
    'pzw' => 'Penyelenggara Zakat & Wakaf'
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hasil Survei Kepuasan</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      background: #f4f4f4;
    }
    h2 {
      text-align: center;
      margin-bottom: 30px;
    }
    .flex-container {
      display: flex;
      gap: 20px;
      align-items: flex-start;
      flex-wrap: wrap;
    }
    .table-wrapper {
      flex: 2;
      overflow-x: auto;
      background-color: #fff;
      padding: 10px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .chart-wrapper {
      flex: 1;
      max-width: 400px;
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    table {
      width: 100%;
      border-collapse: collapse;
      min-width: 1000px;
    }
    th, td {
      padding: 10px;
      border: 1px solid #ccc;
      text-align: left;
      font-size: 14px;
    }
    th {
      background-color: #3498db;
      color: white;
    }
    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
    .export-btn {
      display: inline-block;
      background-color: #198754;
      color: white;
      padding: 12px 25px;
      font-size: 16px;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      text-decoration: none;
      margin-top: 15px;
    }
    #chartSeksi {
      max-width: 100%;
      height: auto;
    }
    @media screen and (max-width: 992px) {
      .flex-container {
        flex-direction: column;
      }
    }

   /* Style for Logout Button */
   .logout-btn {
      position: fixed;
      top: 20px;
      right: 20px;
      background-color: #CB0404;
      color: white;
      padding: 12px 25px;
      font-size: 16px;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      text-decoration: none;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
      transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .logout-btn:hover {
      background-color: #CB0404;
      transform: scale(1.05);
    }
  </style>
</head>
<body>
  <h2>REKAP HASIL SURVEY KEPUASAN MASYARAKAT</h2>
  <div style="display: flex; gap: 20px; margin-top: 20px;">
    <a href="?export=excel" class="export-btn">🧾 Export ke Excel</a>
    <button onclick="exportChartToPDF()" class="export-btn" style="background-color:#dc3545;">📄 Export Grafik ke PDF</button>
  </div>
  <!-- Logout Button -->
  <a href="php/logout.php" class="logout-btn">Logout</a>

  <div class="flex-container">
    <div class="table-wrapper">
      <table>
        <tr>
          <th>No</th><th>Nama</th><th>No HP</th><th>Usia</th><th>Pekerjaan</th><th>Jenis Kelamin</th>
          <th>Agama</th><th>Disabilitas</th><th>Jenis Disabilitas</th>
          <th>Q1</th><th>Q2</th><th>Q3</th><th>Q4</th><th>Q5</th>
          <th>Saran</th><th>Seksi</th><th>Waktu Submit</th><th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $no++ . "</td>";
            echo "<td>" . htmlspecialchars($row["nama"] ?? '') . "</td>";
            echo "<td>" . htmlspecialchars($row["nohp"] ?? '') . "</td>";
            echo "<td>" . htmlspecialchars($row["usia"] ?? '') . "</td>";
            echo "<td>" . htmlspecialchars($row["pekerjaan"] ?? '') . "</td>";
            echo "<td>" . htmlspecialchars($row["jeniskelamin"] ?? '') . "</td>";
            echo "<td>" . htmlspecialchars($row["agama"] ?? '') . "</td>";
            echo "<td>" . htmlspecialchars($row["disabilitas"] ?? '') . "</td>";
            echo "<td>" . htmlspecialchars($row["jenis_disabilitas"] ?? '') . "</td>";
            for ($i = 1; $i <= 5; $i++) {
              echo "<td>" . htmlspecialchars($opsi_jawaban[$row["q$i"]] ?? $row["q$i"]) . "</td>";
            }
            echo "<td>" . htmlspecialchars($row["saran"] ?? '') . "</td>";
            echo "<td>" . htmlspecialchars($opsi_seksi[$row["seksi"]] ?? $row["seksi"]) . "</td>";
            echo "<td>" . htmlspecialchars($row["waktu_submit"] ?? '') . "</td>";
            echo "<td><a href='php/hapus.php?id=" . $row["id"] . "' onclick='return confirm(\"Yakin ingin menghapus data ini?\")' style='color:red;'>🗑️ Hapus</a></td>";
            echo "</tr>";
          }
        } else {
          echo "<tr><td colspan='20'>Belum ada data survei.</td></tr>";
        }
        ?>
      </table>
    </div>
    <div class="chart-wrapper">
      <canvas id="chartSeksi"></canvas>
    </div>
  </div>
<script>
function exportChartToPDF() {
  const chartArea = document.querySelector('.chart-wrapper');
  html2canvas(chartArea).then(canvas => {
    const imgData = canvas.toDataURL('image/png');
    const { jsPDF } = window.jspdf;
    const pdf = new jsPDF();
    const pdfWidth = pdf.internal.pageSize.getWidth();
    const pdfHeight = pdf.internal.pageSize.getHeight();
    const imgProps = pdf.getImageProperties(imgData);
    const imgRatio = imgProps.width / imgProps.height;
    const imgHeight = pdfWidth / imgRatio;
    const y = (pdfHeight - imgHeight) / 2;
    pdf.addImage(imgData, 'PNG', 10, y, pdfWidth - 20, imgHeight);
    pdf.save("grafik_seksi.pdf");
  });
}
function generateColors(n) {
  const baseColors = ['#FF6384','#36A2EB','#FFCE56','#4BC0C0','#9966FF','#FF9F40','#8D6E63','#009688','#9C27B0','#CDDC39','#3F51B5','#795548'];
  const colors = [];
  for (let i = 0; i < n; i++) {
    colors.push(baseColors[i % baseColors.length]);
  }
  return colors;
}
const ctxSeksi = document.getElementById('chartSeksi').getContext('2d');
const labelsSeksi = <?php echo json_encode(array_map(function($k) use ($opsi_seksi) {
  return $opsi_seksi[$k] ?? $k;
}, array_keys($seksiData))); ?>;
const dataSeksiValues = <?php echo json_encode(array_values($seksiData)); ?>;
const dataSeksi = {
  labels: labelsSeksi,
  datasets: [{
    label: 'Jumlah Responden per Seksi',
    data: dataSeksiValues,
    backgroundColor: generateColors(dataSeksiValues.length)
  }]
};
const configSeksi = {
  type: 'pie',
  data: dataSeksi,
  options: {
    responsive: true,
    plugins: {
      legend: {
        position: 'bottom',
        labels: {
          usePointStyle: true,
          boxWidth: 12,
          font: {
            size: 12
          },
          padding: 15,
          textAlign: 'left',
          maxWidth: 400,
          generateLabels: function(chart) {
            const data = chart.data;
            return data.labels.map((label, i) => {
              const value = data.datasets[0].data[i];
              const bgColor = data.datasets[0].backgroundColor[i];
              return {
                text: `${label} (${value})`,
                fillStyle: bgColor,
                strokeStyle: bgColor,
                pointStyle: 'rect',
                lineWidth: 1,
                hidden: !chart.getDataVisibility(i),
                index: i
              };
            });
          }
        }
      },
      title: {
        display: true,
        text: 'Distribusi Responden Berdasarkan Seksi'
      }
    }
  }
};

new Chart(ctxSeksi, configSeksi);
</script>
</body>
</html>
