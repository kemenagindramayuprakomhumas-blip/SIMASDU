<?php
// Plain PHP version converted from Laravel Blade (no framework dependencies)
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Portal resmi Kementerian Agama Kabupaten Indramayu">
    <meta name="author" content="Kemenag Indramayu">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="data:,">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Calistoga&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Central Website KEMENTERIAN AGAMA KABUPATEN INDRAMAYU</title>

    <!-- Bootstrap core CSS (local) -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="../assets/css/all.css">
    <link rel="stylesheet" href="../assets/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="assets/css/templatemo-chain-app-dev.css">
    <link rel="stylesheet" href="../assets/css/animated.css">
    <link rel="stylesheet" href="../assets/css/owl.css">

    <style>
      .floating-btn {
        position: fixed;
        bottom: 30px;   /* tidak terlalu mepet ke bawah */
        right: 30px;    /* tidak terlalu mepet ke kanan */
        z-index: 9999;  /* tampil di atas elemen lain */
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }

      .floating-btn img {
        width: 110px;       /* ukuran tombol */
        height: auto;
      }

      .floating-btn:hover {
        transform: scale(1.08);
      }

      @media (max-width: 768px) {
        .floating-btn {
          bottom: 20px;
          right: 20px;
        }
        .floating-btn img {
          width: 70px;
        }
      }

      .misi-list {
        margin-top: 10px;
        padding-left: 0;
      }
      .misi-list li {
        list-style: none;
        font-family: 'Poppins', sans-serif;
        font-size: 17px;
        font-weight: 600;
        color: #2a2a2a;
        line-height: 1.9;
        margin-bottom: 6px;
        position: relative;
        padding-left: 24px; /* jarak kiri agar bullet sejajar */
      }
      .misi-list li::before {
        content: "•";
        color: #124b2b; /* hijau khas Kemenag */
        font-weight: 900;
        position: absolute;
        left: 0;
        top: 0;
      }



            /* ===== Indramayu Kota Wakaf ===== */
      .wakaf-section {
        padding: 5% 5%;
        font-family: inherit;               /* samakan font dengan halaman */
        color: #111827;                     /* abu gelap yang bersih */
      }

      .wakaf-card {
        background: linear-gradient(to right, #92B6FF, #C9FAD8);  /* gradasi biru muda → hijau muda */
        border-radius: 22px;
        padding: 16px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.05);
      }

      .wakaf-gallery {
        display: grid;
        grid-template-columns: 1fr;
        gap: 12px;
      }

      .wakaf-gallery img {
        width: 100%;
        aspect-ratio: 4/3;                  /* proporsi foto rapi */
        object-fit: cover;
        border-radius: 14px;
        display: block;
      }

      /* teks */
      .wakaf-copy {
        font-size: 1.15rem;       /* ukuran lebih besar dari default */
        line-height: 1.9;         /* jarak antarbaris biar lega */
      }

      .wakaf-copy p {
          font-size: inherit;
          color: #000000ff;
          font-size: 20px;
          margin-top: 30px;
      }


      .wakaf-copy strong { font-weight: 700; }
      .wakaf-copy em { font-style: italic; }

      /* >= tablet: tiga kolom gambar */
      @media (min-width: 768px) {
        .wakaf-card { padding: 18px; }
        .wakaf-gallery {
          grid-template-columns: repeat(3, 1fr);
          gap: 14px;
        }
      }

      /* >= desktop lebar: beri napas lebih */
      @media (min-width: 1200px) {
        .wakaf-card { padding: 20px; }
        .wakaf-copy { font-size: 1.05rem; }
      }

      /* ===== Indramayu Kota Wakaf (Diagram) ===== */
      .alur-wakaf-section {
        position: relative;
        padding: 60px 0 40px;
        text-align: center;
        color: #0f172a;
        font-family: inherit;
        background:
          url('../assets/images/indonesiasilver.png') center 120px / 900px auto no-repeat,
          linear-gradient(180deg, #9EC2FF 0%, #BDECF0 50%, #CFF8DB 100%);
      }

      .alur-wakaf-section2 {
        position: relative;
        padding: 60px 0 40px;
        text-align: center;
        color: #0f172a;
        font-family: inherit;
        background:
          url('../assets/images/pelangi1.png') right 0px/ 30% auto no-repeat,
          linear-gradient(180deg, #9EC2FF 0%, #BDECF0 50%, #CFF8DB 100%);
      }

      /* Judul pill */
      .alur-title {
        display: inline-block;
        background: #fff;
        border: 4px solid #4B8EF1;
        border-radius: 999px;
        padding: 10px 28px;
        font-weight: 800;
        letter-spacing: 0.5px;
        margin-bottom: 24px;
      }

      /* Diagram */
      .alur-diagram img {
        width: 100%;
        max-width: 950px;
        height: auto;
        display: block;
        margin: 0 auto 24px;
      }

      /* Teks bawah */
      .alur-note {
        font-size: 20px;
        line-height: 1.7;
        color: #0f172a;
        max-width: 900px;
        margin: 0 auto;
      }

      .alur-note .linkish {
        color: #1D4ED8;
        font-weight: 700;
      }

      /* Responsif */
      @media (max-width: 768px) {
        .alur-title {
          font-size: 14px;
          padding: 8px 20px;
        }
        .alur-diagram img {
          max-width: 100%;
        }
        .alur-note {
          font-size: 15px;
          padding: 0 15px;
        }
        .alur-wakaf-section {
          background:
            url('../assets/images/indonesiasilver.png') center 180px / 600px auto no-repeat,
            linear-gradient(180deg, #9EC2FF 0%, #BDECF0 50%, #CFF8DB 100%);
        }
        .alur-wakaf-section2 {
          background:
            url('../assets/images/pelangi1.png') right 0px/ 30% auto no-repeat,
          linear-gradient(180deg, #9EC2FF 0%, #BDECF0 50%, #CFF8DB 100%);
        }
      }

            

    </style>

  </head>
  

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="sigap_page.php" class="logo d-flex align-items-center" style="gap: 12px; padding: 20px 0;">
              <img src="../assets/images/logo.png" alt="Kemenag Logo" style="height: 50px; width: auto;">
              <div style="line-height: 1.2; color: #064e3b; font-weight: bold; text-align: left;">
                <div style="font-size: 16px;">KEMENTERIAN AGAMA</div>
                <div style="font-size: 16px;">KABUPATEN INDRAMAYU</div>
              </div>
            </a>
            <!-- ***** Logo End ***** -->

            <ul class="nav" >
              <li><a href="../sigap/sigap_page.php">Halaman SIGAP</a></li>
              <li><a href="../index.php">Home</a></li>
              
              <li class="dropdown">
                <a href="#Informasi" class="dropbtn">Informasi Kemenag <i class="fa fa-caret-down"></i></a>
                <ul class="dropdown-content">
                  <li><a href="../profil/profil_page.php">Profil, Visi & Misi</a></li>
                  <li><a href="../organisasi/organisasi_page.php">Struktur Organisasi</a></li>
                  <li><a href="../informasiKUA/informasiKUA_page.php">Informasi KUA</a></li>
                  <li><a href="../informasiWakaf/informasiWakaf_page.php">Informasi Wakaf</a></li>
                  <li><a href="../informasiMadrasah/informasiMadrasah_page.php">Informasi Madrasah</a></li>
                  <li></li>
                  <li><a href="../informasiPonpes/informasiPonpes_page.php">Informasi Ponpes</a></li>
                  <li></li>
                  <li></li>
                </ul>
              </li>
              <li>
                <!-- <div class="gradient-button">
                  <a id="modal_trigger" href="#modal">
                    <i class="fa fa-sign-in-alt"></i> Sign In Now
                  </a>
                </div> -->
              </li>
            </ul>
            

            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>

  <!-- ***** Header Area End ***** -->
<div class="sigap-banner wow fadeIn" id="wakaf-zakat" data-wow-duration="1s" data-wow-delay="0.5s">
  <div class="container">
    
    <!-- Bagian judul di tengah -->
    <div class="row">
      <div class="col-12 text-center" >
        <h2 style="font-family:'Calistoga', serif; color:#124b2b; font-weight:800; margin-bottom:5px;">
          Program Wakaf dan Zakat
        </h2>
        <h5 style="font-family:'Calistoga', serif; color:#198754; font-weight:600; margin-bottom:40px;">
          Kantor Kementerian Agama Kabupaten Indramayu
        </h5>
      </div>
    </div>

    <!-- Bagian konten bawah: kiri video, kanan card -->
    <div class="row align-items-center">
      
      <!-- Kolom kiri: video -->
      <div class="col-lg-6 col-md-12 mb-4">
        <div style="position:relative; width:100%; padding-bottom:56.25%; border-radius:16px; overflow:hidden; box-shadow:0 4px 15px rgba(0,0,0,0.15);">
          <iframe 
            src="https://www.youtube.com/embed/qSCAGKWuWms?si=IyPnqhDgCUEFfgpx"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen
            style="position:absolute; top:0; left:0; width:100%; height:100%;">
          </iframe>
        </div>
      </div>

      <!-- Kolom kanan: card deskripsi -->
      <div class="col-lg-6 col-md-12">
        <div style="
          background-color: rgba(255,255,255,0.92);
          padding: 25px 30px;
          border-radius: 16px;
          max-width: 100%;
          box-shadow: 0 4px 15px rgba(0,0,0,0.05);
          font-family: 'Poppins', sans-serif;
        ">
          <div style="font-weight:700; color:#124b2b; font-size:18px; margin-bottom:15px; text-align:justify;">
            Wakaf dan zakat bukan sekadar ibadah sosial, melainkan juga instrumen pemberdayaan ekonomi umat. Oleh karena itu, Kemenag Indramayu terus mendorong transformasi wakaf dari model konsumtif menuju wakaf produktif, sejalan dengan visi Indramayu Religius, Ekonomi, Agamis, Nasionalis, dan Gotong Royong (REANG).
          </div>
          <div style="font-weight:700; color:#124b2b; font-size:18px; text-align:justify;">
            Dengan semangat “Wakaf Bergerak, Indramayu REANG”, website ini diharapkan menjadi jembatan literasi dan partisipasi publik untuk membangun peradaban yang lebih adil, sejahtera, dan meningkatkan kesejahteraan umat melalui wakaf.
          </div>
        </div>
      </div>

    </div>
  </div>
</div>



<!-- ===== Indramayu Kota Wakaf ===== -->
<section id="wakaf-info" class="wakaf-section">
  <div class="container">
    <!-- Kartu galeri 3 gambar -->
    <div class="wakaf-card">
      <div class="wakaf-gallery">
        <!-- sementara pakai 1 gambar yang sama 3x sesuai permintaan -->
        <img src="../assets/images/zakat1.jpg" alt="Kegiatan Wakaf 1" loading="lazy">
        <img src="../assets/images/zakat2.jpg" alt="Kegiatan Wakaf 2" loading="lazy">
        <img src="../assets/images/zakat3.jpg" alt="Kegiatan Wakaf 3" loading="lazy">
      </div>
    </div>

    <!-- Teks penjelasan -->
    <div class="wakaf-copy">
      <p >
        <strong>Indramayu Kota Wakaf</strong> adalah gerakan nyata menuju masyarakat yang dermawan, mandiri, dan berdaya.
        Melalui pengelolaan wakaf yang produktif dan transparan, Indramayu berkomitmen menjadikan wakaf sebagai pilar
        pembangunan sosial dan ekonomi umat.
      </p>

      <p >
        Dengan semangat <em>“Wakaf Bergerak, Indramayu REANG”</em>, seluruh elemen masyarakat diajak untuk berpartisipasi
        dalam menghidupkan potensi wakaf di setiap bidang kehidupan, dari pendidikan, kesehatan, hingga pemberdayaan ekonomi.
        <em><strong>Bersama, kita wujudkan Indramayu sebagai Kota Wakaf yang membawa keberkahan bagi semua.</strong></em>
      </p>
    </div>
  </div>
</section>


<!-- ===== Indramayu Kota Wakaf - Diagram ===== -->
<section id="alur-wakaf" class="alur-wakaf-section">
  <div class="container text-center">

    <!-- Diagram tunggal -->
    <div class="alur-diagram">
      <img src="../assets/images/alurwakaf.png" alt="Alur Indramayu Kota Wakaf" loading="lazy">
    </div>

    <!-- Teks bawah -->
    <p class="alur-note">
      Penguatan pengelolaan zakat dan wakaf merupakan bagian dari implementasi
      <strong class="linkish">Peraturan Menteri Agama (PMA) Nomor 16 Tahun 2025</strong>
      tentang Pendayagunaan Zakat untuk Usaha Produktif.
    </p>
  </div>
</section>

<section id="alur-wakaf" class="alur-wakaf-section2">
  <div class="container text-center">
    <!-- Diagram tunggal -->
    <div class="alur-diagram">
      <img src="../assets/images/wakaf1.png" alt="Alur Indramayu Kota Wakaf" loading="lazy">
    </div>
  </div>
</section>

<!-- ===== Tambahan baru (seperti gambar yang kamu kirim) ===== -->
<div class="sigap-banner" id="info-selengkapnya" style="position:relative; text-align:center; padding:60px 0; background:linear-gradient(to bottom, #f4fff4, #dff6ff);">
  <div class="container">

    <!-- Area hijau utama -->
    <div style="
      position:relative; 
      width:100%;
      max-width:900px;
      margin:0 auto;
    ">
      <img src="../assets/images/wakaf2.png" 
           alt="Latar Hijau"
           style="width:100%; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.3);">
      
      <!-- Maskot di kiri bawah -->
      <img src="../assets/images/sigap2.png"
           alt="Maskot SIGAP"
           style="
             position:absolute;
             bottom:0;
             left:-20%;
             width:100%;
             max-width:40%;
             z-index:2;
           ">

      <!-- Tombol di tengah bawah -->
      <a href="https://docs.google.com/spreadsheets/d/1bHzsLlyNinLVuDwef8GBwWIm0fAji59p/edit?usp=sharing&ouid=113837042151804396775&rtpof=true&sd=true" style="
        position:absolute;
        bottom:10%;
        left:50%;
        transform:translateX(-50%);
        text-decoration:none;
        z-index:3;
      ">
        <img src="../assets/images/infoselengkapnya.png"
             alt="Tombol Info Selengkapnya"
             style="width:230px; max-width:100%;">
      </a>
    </div>

  </div>
</div>

<!-- ===== Tambahan baru (seperti gambar yang kamu kirim) ===== -->
<div class="sigap-banner" id="info-selengkapnya" style="position:relative; text-align:center; padding:60px 0; background:linear-gradient(to bottom, #f4fff4, #dff6ff);">
  <div class="container">

    <!-- Area hijau utama -->
    <div style="
      position:relative; 
      width:100%;
      max-width:900px;
      margin:0 auto;
    ">
      <img src="../assets/images/wakaf3.png" 
           alt="Latar Hijau"
           style="width:100%; border-radius:12px; box-shadow:0 4px 15px rgba(0,0,0,0.3);">
      
      <!-- Maskot di kiri bawah -->
      <img src="../assets/images/sigap3.png"
           alt="Maskot SIGAP"
           style="
             position:absolute;
             bottom:0;
             right:-20%;
             width:100%;
             max-width:40%;
             z-index:2;
           ">

      <!-- Tombol di tengah bawah -->
      <a href="https://docs.google.com/spreadsheets/d/1bHzsLlyNinLVuDwef8GBwWIm0fAji59p/edit?usp=sharing&ouid=113837042151804396775&rtpof=true&sd=true" style="
        position:absolute;
        bottom:10%;
        left:50%;
        transform:translateX(-50%);
        text-decoration:none;
        z-index:3;
      ">
        <img src="../assets/images/infoselengkapnya.png"
             alt="Tombol Info Selengkapnya"
             style="width:230px; max-width:100%;">
      </a>
    </div>

  </div>
</div>


  <footer id="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>KEMENTERIAN AGAMA KABUPATEN INDRAMAYU<br>2025</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script>
      // Deteksi apakah pengguna menggunakan perangkat mobile
      function isMobile() {
        return /Android|iPhone|iPad|iPod/i.test(navigator.userAgent);
      }

      // Tambahkan event listener untuk setiap tombol
      document.getElementById('facebook-btn').addEventListener('click', function(e) {
        e.preventDefault();
        if (isMobile()) {
          window.location.href = "fb://page/100063865556073"; // ID halaman FB Indramayu
          setTimeout(() => window.location.href = "https://www.facebook.com/kantorkemenagindramayu?locale=id_ID", 500);
        } else {
          window.open("https://www.facebook.com/kantorkemenagindramayu?locale=id_ID", "_blank");
        }
      });

      document.getElementById('instagram-btn').addEventListener('click', function(e) {
        e.preventDefault();
        if (isMobile()) {
          window.location.href = "instagram://user?username=kemenagindramayu";
          setTimeout(() => window.location.href = "https://www.instagram.com/kemenagindramayu/", 500);
        } else {
          window.open("https://www.instagram.com/kemenagindramayu/", "_blank");
        }
      });

      document.getElementById('tiktok-btn').addEventListener('click', function(e) {
        e.preventDefault();
        if (isMobile()) {
          window.location.href = "snssdk1128://user/profile/7357149978224590854"; // TikTok app
          setTimeout(() => window.location.href = "https://www.tiktok.com/@kemenag_indramayu?lang=id-ID", 500);
        } else {
          window.open("https://www.tiktok.com/@kemenag_indramayu?lang=id-ID", "_blank");
        }
      });

      document.getElementById('youtube-btn').addEventListener('click', function(e) {
        e.preventDefault();
        if (isMobile()) {
          window.location.href = "vnd.youtube://channel/UC8uMVR_FzN1YbQYt6NwR5VA"; // YouTube deep link (channel Kemenag Indramayu)
          setTimeout(() => window.location.href = "https://www.youtube.com/@KantorKemenagIndramayu", 500);
        } else {
          window.open("https://www.youtube.com/@KantorKemenagIndramayu", "_blank");
        }
      });
 </script>
  



<script>
document.addEventListener('DOMContentLoaded', function () {
  const triggers = document.querySelectorAll('.nav .dropdown > .dropbtn');

  function closeAll(except) {
    document.querySelectorAll('.nav .dropdown.active').forEach(li => {
      if (li !== except) li.classList.remove('active');
    });
  }

  triggers.forEach(btn => {
    const li = btn.closest('.dropdown');
    if (!li) return;

    // Aksesibilitas
    btn.setAttribute('aria-haspopup', 'true');
    btn.setAttribute('aria-expanded', 'false');

    // klik/tap untuk toggle
    ['click', 'touchstart'].forEach(evt => {
      btn.addEventListener(evt, function (e) {
        e.preventDefault();      // jangan langsung pindah halaman
        e.stopPropagation();     // jangan kena handler luar
        const isOpen = li.classList.contains('active');
        closeAll(li);
        li.classList.toggle('active', !isOpen);
        btn.setAttribute('aria-expanded', String(!isOpen));
      }, { passive: false });
    });
  });

  // klik di luar nav -> tutup
  document.addEventListener('click', function (e) {
    if (!e.target.closest('.nav')) closeAll();
  });
});
</script>

<script>
  // Menu Dropdown Toggle (tanpa ubah display jadi block; kita pakai class .open)
  (function($){
      if ($('.menu-trigger').length) {
        $('.menu-trigger').on('click', function () {
          $(this).toggleClass('active');
          const $main = $('.header-area .main-nav');
          const $nav  = $main.find('.nav');
          const open  = !$main.hasClass('open');

          $main.toggleClass('open', open);

          if (open) {
            $nav.stop(true, true).slideDown(0, function () {
              this.style.display = 'flex';        // paksa inline flex
              this.style.flexDirection = 'column';
              this.style.alignItems = 'stretch';
            });
          } else {
            $nav.stop(true, true).slideUp(200, function () {
              this.style.display = '';            // bersihkan agar desktop kembali normal
              this.style.flexDirection = '';
              this.style.alignItems = '';
            });
          }
        });
      }


    // Scroll elevator (tetap, plus tutup menu di mobile)
    $('.scroll-to-section a[href*=\\#]:not([href=\\#])').on('click', function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          var width = $(window).width();
          if (width < 991) {
            $('.menu-trigger').removeClass('active');
            $('.header-area .main-nav').removeClass('open');
            $('.header-area .main-nav .nav').stop(true,true).slideUp(200);
          }
          $('html,body').animate({ scrollTop: (target.offset().top) + 1 }, 700);
          return false;
        }
      }
    });
  })(jQuery);
</script>

<script>
// deteksi perubahan style display pada .nav
const nav = document.querySelector('.header-area .main-nav .nav');

if (nav) {
  const observer = new MutationObserver(() => {
    const current = nav.style.display;
    // jika jQuery memberi style="display:block"
    if (current === 'block') {
      nav.style.display = 'flex';
      nav.style.flexDirection = 'column';
      nav.style.alignItems = 'stretch';
    }
  });

  // amati setiap perubahan atribut style
  observer.observe(nav, { attributes: true, attributeFilter: ['style'] });
}
</script>

  <!-- Scripts: use local files that exist under /vendor and /assets -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/owl-carousel.js"></script>
  <script src="../assets/js/animation.js"></script>
  <script src="../assets/js/imagesloaded.js"></script>
  <script src="../assets/js/popup.js"></script>
  <script src="../assets/js/custom.js"></script>

  <a href="https://wa.me/62881023554011?text=Assalamualaikum%20Warahmatullahi%20Wabarakatuh%20Hi%20Admin%20SIGAP%2C%0APerkenalkan%20saya%0ANama%20%3A%20%0Aingin%20bertanya" target="_blank" class="floating-btn">
    <img src="../assets/images/askme.png" alt="Ask Me" />
  </a>
</body>
</html>
