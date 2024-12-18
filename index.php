<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>MitraSengon</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/twlogo.png" rel="icon">
  <link href="assets/img/twlogo.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Append
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top" >
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">MitraSengon</h1><span>.</span>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php#hero" class="active">Home</a></li>
          <li><a href="index.php#about">About</a></li>
          <li><a href="index.php#services">Services</a></li>
          <li><a href="index.php#portfolio">Gallery</a></li>
          <li><a href="index.php#pricing">Mitra</a></li>
          <li><a href="index.php#team">Team</a></li>
          <li><a href="blog.php#article">Article</a></li>
          <li><a href="index.php#contact">Contact</a></li>
          
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      
      <!-- Modal untuk Login dan Register -->
<div id="loginModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="toggleLoginModal()">&times;</span>
    <h2>Login Admin</h2>
    <form action="contact.php" method="POST">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required>
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      
      <button type="submit" style="background-color: #1B7825; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; margin-top: 15px;">Login</button>
    </form>
    
   
  </div>
</div>

<style>
  /* Style untuk jarak antar elemen form */
  .modal-content form label {
    display: block;
    margin-top: 10px;
  }
  .modal-content form input[type="text"],
  .modal-content form input[type="password"] {
    width: 90%;
    padding: 8px;
    margin-top: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  .modal-content form button {
    margin-top: 15px; /* Jarak antar password dan button */
  }

        /* Style untuk tombol Login Admin */
        .login-btn {
          background-color: #1B7825;
          padding: 10px 20px;
          border: 2px solid #1B7825;
          border-radius: 5px;
          color: white;
          font-size: 16px;
          text-decoration: none;
          cursor: pointer;
          display: inline-block;
        }
      
        /* Style untuk modal */
        .modal {
          display: none;
          position: fixed;
          z-index: 1;
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
          background-color: rgba(0, 0, 0, 0.5);
        }
      
        .modal-content {
          background-color: white;
          margin: 10% auto;
          padding: 20px;
          border-radius: 10px;
          width: 300px;
          text-align: center;
        }
      
        .modal-content h2, .modal-content h3 {
          color: #1B7825;
        }
      
        .modal-content label {
          display: block;
          margin-top: 10px;
        }
      
        .modal-content input[type="text"],
        .modal-content input[type="password"] {
          width: 90%;
          padding: 8px;
          margin-top: 5px;
          border: 1px solid #ccc;
          border-radius: 5px;
        }
      
        .close {
          color: #aaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
          cursor: pointer;
        }
      
        .close:hover,
        .close:focus {
          color: #000;
          text-decoration: none;
          cursor: pointer;
        }
      </style>
      
      <script>
        function toggleLoginModal() {
          var modal = document.getElementById("loginModal");
          modal.style.display = modal.style.display === "block" ? "none" : "block";
        }
      
        // Menutup modal ketika user mengklik di luar konten modal
        window.onclick = function(event) {
          var modal = document.getElementById("loginModal");
          if (event.target === modal) {
            modal.style.display = "none";
          }
        }
      </script>
      
    
    


    </div>
  </header>

  <main class="main">

<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

  <!-- Tambahkan beberapa gambar untuk slideshow -->
  <div class="hero-slideshow">
    <img src="assets/img/pertama.jpg" alt="Slide 1">
    <img src="assets/img/kedua.jpg" alt="Slide 2">
    <img src="assets/img/ketiga.jpg" alt="Slide 3">
  </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        <h2 data-aos="fade-up" data-aos-delay="100">
          Welcome to <span style="color: #00950F;">MitraSengon</span>
        </h2>            
        <p data-aos="fade-up" data-aos-delay="200">Menumbuhkan Kemakmuran, Memanen Keberlanjutan</p>
      </div>
      <div class="col-lg-5 text-center" data-aos="fade-up" data-aos-delay="300" style="margin-top: 20px;">
        <button onclick="window.location.href='index.html#about'" 
                style="background-color: #1B7825; padding: 10px 20px; border: 2px solid #1B7825; border-radius: 5px; cursor: pointer; font-size: 16px; color: white;">
          Jelajahi Lebih Lanjut
        </button>
      </div>          
    </div>          
  </div>

</section><!-- /Hero Section -->

<style>
  /* CSS untuk Hero Slideshow */
  .hero {
    position: relative;
    overflow: hidden;
    height: 100vh;
  }

  .hero-slideshow {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }

  .hero-slideshow img {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
    opacity: 0;
    transition: opacity 1s ease-in-out;
  }

  /* Gambar pertama terlihat secara default */
  .hero-slideshow img.active {
    opacity: 1;
  }

  /* Gaya teks agar tetap di depan slideshow */
  .hero .container {
    position: relative;
    z-index: 2;
  }

  /* Background overlay (opsional) */
  .dark-background::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5); /* Transparansi background */
    z-index: 1;
  }
</style>

<script>
  // JavaScript untuk Slideshow
  let slideIndex = 0;
  const slides = document.querySelectorAll('.hero-slideshow img');

  function showSlides() {
    // Reset semua gambar
    slides.forEach((slide, index) => {
      slide.classList.remove('active');
    });

    // Tambahkan kelas 'active' pada gambar saat ini
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }
    slides[slideIndex - 1].classList.add('active');

    // Panggil kembali fungsi ini setiap 5 detik
    setTimeout(showSlides, 3000);
  }

  // Mulai slideshow saat halaman dimuat
  showSlides();
</script>


    <!-- Clients Section -->
<!-- Clients Section -->
<section id="clients" class="clients section" style="background-color: #C7E9CB;">
  <div class="container text-center" data-aos="fade-up">
    <div class="text-marquee">
      <h3 class="display-6">Mitra Sengon : Menumbuhkan Kemakmuran, Memanen Keberlanjutan</h3>
    </div>
  </div>
</section>

<style>
  /* Menambahkan font Montserrat */
  .text-marquee h3 {
    font-family: 'Montserrat', sans-serif;
    display: inline-block;
    padding-left: 100%;
    animation: marquee 15s linear infinite;
  }

  .text-marquee {
   
    white-space: nowrap;
    position: relative;
  }

  @keyframes marquee {
    0% { transform: translateX(100%); }
    100% { transform: translateX(-100%); }
  }
</style>



<!-- Bootstrap Carousel controls (optional) -->
<style>
  /* Style for hiding default carousel controls if not needed */
  #clientCarousel .carousel-control-prev,
  #clientCarousel .carousel-control-next {
    display: none;
  }
</style>


    <!-- About Section -->
    <section id="about" class="about section light-background" style="background-color: #1B7825;">


      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">
          <div class="col-xl-5 content">
            <h3 style="color: white;">About Us</h3>
            <h2 style="color: white;">Divisi Pertanian PT. Keong Nusantara Abadi</h2>
            <p style="color: white;">
              Divisi Pertanian PT Keong Nusantara Abadi berkomitmen mengelola dan mengembangkan produk-produk unggulan berbasis hasil pertanian. Kami mengolah lidah buaya menjadi minuman segar berkualitas tinggi yang memanfaatkan potensi alami lidah buaya sebagai minuman sehat. Selain itu, jagung pilihan diproses menjadi produk sweet corn berkualitas dalam kemasan kaleng yang praktis, dengan kualitas yang tetap terjaga.
              <span id="more-text" style="display: none;">
                Tidak hanya berhenti di produksi, divisi ini juga aktif mencari mitra dengan lahan untuk penanaman bibit pohon sengon sebagai bagian dari program kemitraan kehutanan berkelanjutan. Kami berupaya menciptakan nilai tambah dan peluang kerja bagi para mitra, sekaligus mendukung keberlanjutan lingkungan melalui penanaman pohon sengon yang bernilai ekonomi dan ramah lingkungan.
              </span>
            </p>
            <a href="javascript:void(0);" id="read-more-btn" class="read-more" style="background-color: #00950F; color: white;">
              <span>Read More</span>
              <i class="bi bi-arrow-right" style="margin-left: 5px;"></i>
            </a>
          </div>
    
          <!-- Icon Boxes Content -->
          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box" style="background-color: #79A37E; color: white; margin-bottom: 20px;">
                  <i class="bi bi-buildings" style="transition: color 0.3s;"></i>
                  <h3 style="color: white;">Memakmurkan Mitra</h3>
                  <p>Mengembangkan kemitraan yang saling menguntungkan dengan petani dan pemilik lahan melalui program peminjaman lahan dan penanaman bibit Sengon yang berkualitas.</p>
                </div>
              </div>
    
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box" style="background-color: #79A37E; color: white; margin-bottom: 20px;">
                  <i class="bi bi-clipboard-pulse" style="transition: color 0.3s;"></i>
                  <h3 style="color: white;">Menghasilkan Produk Berkualitas</h3>
                  <p>Mengolah lidah buaya menjadi minuman kesehatan dan jagung menjadi produk kaleng berkualitas tinggi yang memenuhi standar pasar lokal dan internasional.</p>
                </div>
              </div>
    
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box" style="background-color: #79A37E; color: white; margin-bottom: 20px;">
                  <i class="bi bi-command" style="transition: color 0.3s;"></i>
                  <h3 style="color: white;">Mendukung Pertanian Berkelanjutan</h3>
                  <p>Melakukan praktik-praktik pertanian yang ramah lingkungan guna menjaga keseimbangan ekosistem dan mendukung ketahanan pangan.</p>
                </div>
              </div>
    
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                <div class="icon-box" style="background-color: #79A37E; color: white; margin-bottom: 20px;">
                  <i class="bi bi-graph-up-arrow" style="transition: color 0.3s;"></i>
                  <h3 style="color: white;">Memberdayakan Petani dan Mitra</h3>
                  <p>Memberikan edukasi dan pelatihan teknis kepada petani dan mitra untuk meningkatkan kualitas produksi serta kemampuan dalam manajemen hasil tani.</p>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    
    <script>
      document.getElementById("read-more-btn").addEventListener("click", function() {
        var moreText = document.getElementById("more-text");
        var btnText = document.getElementById("read-more-btn").querySelector("span");
    
        if (moreText.style.display === "none") {
          moreText.style.display = "inline";
          btnText.textContent = "Read Less";
        } else {
          moreText.style.display = "none";
          btnText.textContent = "Read More";
        }
      });
    </script>

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section dark-background">

      <img src="assets/img/bg_sengon.jpg" alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Daftar Mitra?</h3>
              <p>Bergabunglah bersama kami di Divisi Pertanian PT Keong Nusantara Abadi! Dapatkan kesempatan untuk berkolaborasi dalam penanaman bibit Sengon dan pengelolaan pertanian yang berkelanjutan. Bersama-sama, kita dapat meningkatkan hasil pertanian dan kesejahteraan. Mari wujudkan pertanian yang ramah lingkungan dan menguntungkan untuk masa depan yang lebih baik!
              </p>
              <a class="cta-btn" href="index.html#pricing">Daftar</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Call To Action Section -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section" style="background-color: #1B7825;">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 style="color: white;">Services</h2>
        <p style="color: white;">MitraSengon menawarkan berbagai layanan yang dirancang untuk mendukung mitra dalam pengelolaan sumber daya hutan berkelanjutan.</p>
    </div><!-- End Section Title -->
    
    <div class="container">
        <div class="row gy-4">
    
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item d-flex">
                    <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                    <div>
                        <h4 class="title"style="color: white;">Konsultasi Pertanian Berkelanjutan</a></h4>
                        <p class="description" style="color: white;">Memberikan saran dan strategi kepada mitra tentang praktik pertanian yang ramah lingkungan dan berkelanjutan untuk meningkatkan hasil panen.</p>
                    </div>
                </div>
            </div>
            <!-- End Service Item -->
    
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="service-item d-flex">
                    <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                    <div>
                        <h4 class="title" style="color: white;">Pelatihan Budidaya dan Perawatan Sengon</a></h4>
                        <p class="description" style="color: white;">Menyediakan pelatihan intensif kepada mitra dalam budidaya pohon Sengon, termasuk teknik penanaman, pemupukan, dan pengelolaan hama secara organik.</p>
                    </div>
                </div>
            </div><!-- End Service Item -->
    
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="service-item d-flex">
                    <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                    <div>
                        <h4 class="title" style="color: white;">Pemantauan Pertumbuhan Tanaman</a></h4>
                        <p class="description" style="color: white;">Melakukan pemantauan dan analisis berkala terhadap perkembangan tanaman mitra untuk memastikan hasil yang optimal.</p>
                    </div>
                </div>
            </div><!-- End Service Item -->
    
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="service-item d-flex">
                    <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
                    <div>
                        <h4 class="title" style="color: white;">Dukungan Pemasaran Produk</a></h4>
                        <p class="description" style="color: white;">Membantu mitra dalam memperluas jaringan pasar produk hasil pertanian mereka, termasuk dukungan dalam strategi pemasaran yang efektif.</p>
                    </div>
                </div>
            </div><!-- End Service Item -->
    
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                <div class="service-item d-flex">
                    <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
                    <div>
                        <h4 class="title" style="color: white;">Bantuan Pemasaran Produk Hasil Hutan</a></h4>
                        <p class="description" style="color: white;">Membantu mitra dalam memasarkan produk hasil hutan mereka, termasuk menciptakan jaringan pasar dan memberikan strategi pemasaran yang efektif.</p>
                    </div>
                </div>
            </div><!-- End Service Item -->
    
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="600">
                <div class="service-item d-flex">
                    <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
                    <div>
                        <h4 class="title" style="color: white;">Program Kemitraan Pertanian</a></h4>
                        <p class="description" style="color: white;">Mengembangkan kemitraan dengan pemilik lahan untuk budidaya tanaman Sengon, sekaligus membuka peluang investasi jangka panjang yang menguntungkan.</p>
                    </div>
                </div>
            </div><!-- End Service Item -->
    
        </div>
    </div>
    

    </section><!-- /Services Section -->

    <!-- Features Section -->
    <section id="features" class="features section" style="background-color: #1B7825;">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 style="color: white;">History</h2>
        <p style="color: white;">Berikut adalah sejarah berdirinya PT. Keong Nusantara Abadi dan Divisi Pertanian</p>
    </div><!-- End Section Title -->
    
    <div class="container">
    
      <div class="row gy-4 align-items-center features-item">
        <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
            <h3 style="color: white;">PT. Keong Nusantara Abadi</h3>
            <p style="color: white;">
                Wong Coco adalah grup perusahaan sekaligus merek terkenal dalam produk makanan dan minuman dari PT Keong Nusantara Abadi, yang berdiri sejak tahun 1986 di Lampung. Dengan pengalaman 37 tahun, perusahaan ini telah berkembang pesat dan memperluas jangkauannya dalam industri pangan.
                <span id="more-pt-text" style="display: none;">
                    Wong Coco mengoperasikan fasilitas produksi modern di Natar, Lampung, serta Kediri, Jawa Timur, yang memungkinkan perusahaan menghasilkan produk berkualitas tinggi. Dengan komitmen terhadap kualitas dan inovasi, Wong Coco terus menciptakan produk-produk yang memenuhi standar internasional, sehingga mampu bersaing di pasar global dan menjadi bagian dari keseharian konsumen di dalam maupun luar negeri.
                </span>
            </p>
            <a href="javascript:void(0);" class="btn btn-get-started" style="background-color: #00950F; color: white;" onclick="toggleText('more-pt-text', this)">Read More</a>
        </div>
        <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <div class="image-stack">
                <img src="assets/img/wcc.png" alt="" class="stack-front">
                <img src="assets/img/perusahaan.jpg" alt="" class="stack-back">
            </div>
        </div>
    </div>
    
    <div class="row gy-4 align-items-stretch justify-content-between features-item ">
        <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
            <img src="assets/img/sengonku.jpeg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
          <h3 style="color: white;">Divisi Pertanian</h3>
          <p style="color: white;">
            PT Keong Nusantara Abadi memperkenalkan divisi yang fokus pada sektor pertanian, bertujuan untuk mengelola dan mengembangkan produk pertanian yang berkelanjutan. Divisi ini mencakup berbagai inisiatif, termasuk pengolahan lidah buaya menjadi minuman, pengolahan jagung menjadi kemasan kaleng seperti sweet corn, serta pencarian mitra untuk menanam bibit sengon.
              <span id="more-thinkwood-text" style="display: none;">
                Divisi pertanian ini dirancang untuk memenuhi kebutuhan pasar lokal dan mendukung para petani melalui program yang ramah lingkungan dan inovatif. Dengan mengedepankan praktik pertanian yang berkelanjutan, PT Keong Nusantara Abadi berkomitmen untuk meningkatkan kesejahteraan mitra tani dan memastikan pengelolaan sumber daya alam yang bertanggung jawab. Divisi ini menjadi bagian penting dari strategi perusahaan untuk memperluas kontribusinya dalam sektor pertanian, sambil tetap berfokus pada keberlanjutan dan kemitraan yang saling menguntungkan.
              </span>
          </p>
  
          <ul>
            <li><i class="bi bi-check" style="color: #E7F5EE;"></i> <span style="color: white;">Pemberian konsultasi dan pelatihan tentang teknik pengolahan lidah buaya menjadi produk minuman.</span></li>
            <li><i class="bi bi-check" style="color: #E7F5EE;"></i> <span style="color: white;">Pengawasan dan pemantauan pertumbuhan jagung untuk memastikan kualitas dan hasil panen yang optimal.</span></li>
            <li><i class="bi bi-check" style="color: #E7F5EE;"></i> <span style="color: white;">Pengembangan kemitraan dengan petani untuk penanaman bibit Sengon yang berkelanjutan.</span></li>
        </ul>
        
  
          <a href="javascript:void(0);" class="btn btn-get-started align-self-start" style="background-color: #00950F; color: white;" onclick="toggleText('more-thinkwood-text', this)">Read More</a>
      </div>
  </div>
  
  <script>
      function toggleText(id, btn) {
          var moreText = document.getElementById(id);
          if (moreText.style.display === "none") {
              moreText.style.display = "inline";
              btn.textContent = "Read Less";
          } else {
              moreText.style.display = "none";
              btn.textContent = "Read More";
          }
      }
  </script>
    </div>
    
    <!-- Portfolio Section -->
<section id="portfolio" class="portfolio section" style="background-color: #1B7825;">

<div class="container section-title" data-aos="fade-up">
  <h2 style="color: #ffffff;">Gallery</h2>
  <p style="color: #ffffff;">Berikut ini adalah beberapa momen kegiatan dengan mitra-mitra kami</p>
</div>

<div class="container">

  <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
      
      <?php
      // Menyertakan koneksi ke database
      include 'db_connection.php';

      // Query untuk mengambil data foto dari database
      $sql = "SELECT photo_path FROM photos ORDER BY id DESC";
      $result = mysqli_query($conn, $sql);

      // Mengecek apakah ada hasil dari query
      if (mysqli_num_rows($result) > 0) {
          // Menampilkan gambar-gambar yang diambil dari database
          while ($row = mysqli_fetch_assoc($result)) {
              // Menampilkan gambar dari database
              echo '<div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">';
              echo '<img src="' . $row['photo_path'] . '" class="img-fluid" alt="Foto">';
              echo '<div class="portfolio-info">';
              echo '<h4>Foto</h4>';
              echo '<a href="' . $row['photo_path'] . '" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>';
              echo '</div>';
              echo '</div>';
          }
      } else {
          echo '<p>No photos available.</p>';
      }

      // Menutup koneksi database
      mysqli_close($conn);
      ?>

      <!-- Gambar-gambar lain yang statis, bisa tetap ada di bawah -->
      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
        <img src="assets/img/sosialisasi1.jpeg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Sosialisasi</h4>
          <a href="assets/img/sosialisasi1.jpeg" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        </div>
      </div><!-- End Portfolio Item -->

      <!-- Gambar-gambar lainnya tetap bisa ditambahkan jika perlu -->
      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
        <img src="assets/img/mitra2.jpeg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Mitra</h4>
          <a href="assets/img/mitra2.jpeg" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/mitra1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mitra</h4>
                
                <a href="assets/img/mitra1.jpeg" title="Four Ears 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-octagon">
              <img src="assets/img/bibit1.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bibit</h4>
                
                <a href="assets/img/bibit1.jpeg" title="Octagon 1" data-gallery="portfolio-gallery-octagon" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-roundoval">
              <img src="assets/img/sosialisasi2.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sosialisasi</h4>
                
                <a href="assets/img/sosialisasi2.jpeg" title="Round and Oval 1" data-gallery="portfolio-gallery-roundoval" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/bibit2.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Bibit</h4>
                
                <a href="assets/img/bibit2.jpeg" title="Boat 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/sosialisasi3.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sosialisasi</h4>
                
                <a href="assets/img/sosialisasi3.jpeg" title="Collapsible 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
               
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/mitra3.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mitra</h4>
                
                <a href="assets/img/mitra3.jpeg" title="Four Ears 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-octagon">
              <img src="assets/img/sosialisasi4.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sosialisasi</h4>
                
                <a href="assets/img/sosialisasi4.jpeg" title="Octagon 2" data-gallery="portfolio-gallery-octagon" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-roundoval">
              <img src="assets/img/mitrague.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mitra</h4>
               
                <a href="assets/img/mitrague.jpeg" title="Round and Oval 2" data-gallery="portfolio-gallery-roundoval" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets/img/fotorr.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Mitra</h4>
                
                <a href="assets/img/fotorr.jpeg" title="Boat 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets/img/iyadah.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sosialisasi</h4>
                
                <a href="assets/img/iyadah.jpeg" title="Collapsible 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets/img/barulagi.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sosialisasi</h4>
                
                <a href="assets/img/barulagi.jpeg" title="Four Ears 3" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                
              </div>
            </div><!-- End Portfolio Item -->
      
      <!-- Portfolio Items lainnya di sini -->
      
      
            </div><!-- End Portfolio Container -->
      </div>
</div>

</section><!-- /Portfolio Section -->


    <!-- Pricing Section -->
    <section id="pricing" class="pricing section" style="background-color: #1B7825;">
      <div class="container section-title" data-aos="fade-up">
          <h2 style="color: #ffffff;">Register Mitra</h2>
          <p style="color: #ffffff;">Bergabunglah dengan kami sebagai mitra dan jadilah bagian dari perjalanan berkelanjutan</p>
      </div>
      <div class="d-flex justify-content-center"> <!-- Flex untuk menengahkan -->
          <div class="w-100" style="max-width: 500px;"> <!-- Mengatur lebar maksimum -->
              <form id="registrationForm" action="supplier_registration_process.php" method="POST" style="background-color: #C7E9CB;" class="p-8 rounded-lg shadow-lg text-gray-800 space-y-6 form-box">
                  <div class="form-group">
                      <label for="supplier_name" class="block text-gray-700 font-semibold mb-1">Nama Mitra</label>
                      <input type="text" name="supplier_name" id="supplier_name" class="input-field" placeholder="Nama Mitra" required>
                  </div>
                  <div class="form-group">
                      <label for="address" class="block text-gray-700 font-semibold mb-1">Alamat</label>
                      <input type="text" name="address" id="address" class="input-field" placeholder="Alamat Mitra" required>
                  </div>
                  <div class="form-group">
                      <label for="email" class="block text-gray-700 font-semibold mb-1">Email</label>
                      <input type="email" name="email" id="email" class="input-field" placeholder="Email" required>
                  </div> 
                  <div class="form-group">
                      <label for="phone" class="block text-gray-700 font-semibold mb-1">No Telepon</label>
                      <input type="text" name="phone" id="phone" class="input-field" placeholder="Nomor Telepon" required>
                  </div>
                  <div class="form-group">
                      <label for="message" class="block text-gray-700 font-semibold mb-1">Pesan</label>
                      <textarea name="message" id="message" rows="4" class="input-field" placeholder="Ketik Pesan" required></textarea>
                  </div>
                  <div class="text-center">
                      <button type="submit" style="background-color: #1B7825;" class="hover:bg-green-700 text-white py-3 px-5 font-semibold rounded-lg transition duration-300">
                          Daftar
                      </button>
                  </div>                
              </form>
          </div>
      </div>
  </section>
  
    

    <!-- Faq Section -->
    <section id="faq" class="faq section"style="background-color: #1B7825;">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="content px-xl-5">
              <h3><span style="color: #ffffff;">Frequently Asked </span><strong style="color: #ffffff;">Questions</strong></h3>
<p style="color: #ffffff;">
  Temukan jawaban atas pertanyaan umum tentang program kemitraan dan layanan MitraSengon. Dari informasi mengenai cara bergabung, layanan yang tersedia, hingga cara kami mendukung dan memantau perkembangan mitra kami, FAQ ini dirancang untuk memberikan pemahaman yang jelas dan lengkap tentang bagaimana MitraSengon bekerja dalam mendukung pertanian yang berkelanjutan
</p>

            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <div class="faq-container">
              <div class="faq-item faq-active">
                <h3 style="color: #4CAF50;"><span style="color: #4CAF50;" class="num">1.</span> <span>Apa itu MitraSengon?</span></h3>
                <div class="faq-content">
                  <p>MitraSengon adalah website divisi pertanian PT Keong Nusantara Abadi yang memudahkan pencarian mitra yang memiliki lahan untuk diberi pengarahan dan bekerja sama dalam penanaman bibit Sengon. Melalui platform ini, kami menyediakan informasi dan dukungan bagi para petani dan pemilik lahan untuk mengoptimalkan hasil pertanian serta memastikan praktik yang berkelanjutan. MitraSengon bertujuan untuk membangun kemitraan yang saling menguntungkan dan mendukung pengelolaan sumber daya alam yang bertanggung jawab.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3 style="color: #4CAF50;"><span style="color: #4CAF50;"class="num">2.</span> <span>Apa saja layanan yang disediakan oleh Divisi Pertanian?</span></h3>
                <div class="faq-content">
                  <p>Divisi pertanian PT Keong Nusantara Abadi menyediakan beberapa layanan, antara lain:
                    Pemberian konsultasi dan pelatihan tentang teknik pengolahan lidah buaya menjadi produk minuman, 
                    Pengawasan dan pemantauan pertumbuhan jagung untuk memastikan kualitas dan hasil panen yang optimal, 
                    Pengembangan kemitraan dengan petani untuk penanaman bibit Sengon yang berkelanjutan, 
                    Melalui layanan ini, kami bertujuan untuk mendukung petani lokal dan meningkatkan hasil pertanian dengan praktik yang ramah lingkungan.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3 style="color: #4CAF50;"><span style="color: #4CAF50;"class="num">3.</span> <span>Apa keuntungan bergabung dengan program kemitraan Divisi Pertanian?</span></h3>
                <div class="faq-content">
                  <p>Dengan bergabung, mitra akan mendapatkan akses ke pelatihan dan konsultasi. Selain itu, divisi pertanian PT Keong Nusantara Abadi memberikan dukungan pemantauan pertumbuhan tanaman dan bantuan dalam pemasaran hasil pertanian. Hal ini memungkinkan mitra untuk meningkatkan kualitas hasil pertanian mereka, serta pendapatan dan kesejahteraan secara keseluruhan.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3 style="color: #4CAF50;"><span style="color: #4CAF50;" class="num">4.</span> <span>Bagaimana Divisi Pertanian memantau pertumbuhan pohon yang ditanam mitra?</span></h3>
                <div class="faq-content">
                  <p>Divisi pertanian PT Keong Nusantara Abadi memantau pertumbuhan pohon yang ditanam oleh mitra dengan melakukan kunjungan lapangan rutin dan menggunakan teknologi digital untuk mencatat perkembangan tanaman. Proses ini memastikan bahwa pertumbuhan pohon berjalan sesuai dengan standar yang telah ditentukan, serta memberikan rekomendasi perawatan yang diperlukan untuk mendukung keberhasilan penanaman.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3 style="color: #4CAF50;"><span style="color: #4CAF50;"class="num">5.</span> <span>Apakah Divisi Pertanian memberikan pelatihan kepada mitra?</span></h3>
                <div class="faq-content">
                  <p>Ya, Divisi Pertanian PT Keong Nusantara Abadi memberikan pelatihan dan perawatan pohon Sengon. Kami juga menyediakan materi edukasi terkait praktik pertanian berkelanjutan dan pengelolaan sumber daya untuk meningkatkan pemahaman dan keterampilan mitra kami.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>
        </div>

      </div>

    </section><!-- /Faq Section -->

    <!-- Team Section -->
    <section id="team" class="team section light-background"style="background-color: #1B7825;">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 style="color: white;">Team</h2>
        <p style="color: white;">Berikut adalah tim dari divisi pertanian yang siap mendukung keberhasilan kemitraan Anda</p>
    </div><!-- End Section Title -->
    
      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="assets/img/bapak1.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4 style="color: white;">Agus Setiono</h4>
              <span style="color: white;">Manager Pertanian</span>
              <p style="color: white;">Manager Pertanian Divisi Pertanian PT Keong Nusantara Abadi bertanggung jawab atas perencanaan, pelaksanaan, dan pengawasan kegiatan operasional pertanian</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="assets/img/bapak2.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4 style="color: white;">Suwandi</h4>
              <span style="color: white;">KA Pertanian</span>
              <p style="color: white;">(KA) Pertanian Divisi Pertanian PT Keong Nusantara Abadi memiliki tanggung jawab utama dalam merancang strategi agronomi yang efektif dan berkelanjutan. Peran ini mencakup pengawasan teknis terhadap proses penanaman, pemeliharaan, dan panen tanaman</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="assets/img/bapak33.jpeg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4 style="color: white;">Kasan Asnawi</h4>
              <span style="color: white;">KA Pertanian</span>
              <p style="color: white;">(KA) Pertanian Divisi Pertanian PT Keong Nusantara Abadi memiliki tanggung jawab utama dalam merancang strategi agronomi yang efektif dan berkelanjutan. Peran ini mencakup pengawasan teknis terhadap proses penanaman, pemeliharaan, dan panen tanaman</p>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

   

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background" style="background-color: #1B7825;">

      <div class="container">

        <div class="row align-items-center">

          <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
            <h3 style="color: white;">Testimonials</h3>
            <p style="color: white;">
              Testimoni dari mitra pertanian PT. Keong Nusantara Abadi mencerminkan kepuasan dan kepercayaan yang mereka miliki terhadap layanan dan produk kami. Banyak mitra melaporkan peningkatan produktivitas dan kualitas hasil panen berkat dukungan teknis dan pelatihan yang kami berikan. 
            </p>
          </div>

          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
            <div class="swiper init-swiper">

              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  }
                }
              </script>
              <div class="swiper-wrapper">
              <?php
                        include 'db_connection.php'; // Pastikan untuk menyertakan koneksi database

                        // Query untuk mengambil testimoni dari database
                        $sql = "SELECT * FROM testimonials ORDER BY id DESC";
                        $result = mysqli_query($conn, $sql);

                        // Cek apakah ada testimoni
                        if (mysqli_num_rows($result) > 0) {
                            // Loop melalui data testimoni
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<div class="swiper-slide">';
                                echo '<div class="testimonial-item">';
                                echo '<div class="d-flex">';
                                echo '<img src="' . $row['image_path'] . '" class="testimonial-img flex-shrink-0" alt="">';
                                echo '<div>';
                                echo '<h3>' . $row['name'] . '</h3>';
                                echo '<h4>' . $row['role'] . '</h4>';
                                echo '<div class="stars">';
                                for ($i = 0; $i < $row['stars']; $i++) {
                                    echo '<i class="bi bi-star-fill"></i>'; // Menampilkan bintang
                                }
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '<p>';
                                echo '<i class="bi bi-quote quote-icon-left"></i>';
                                echo '<span>' . $row['message'] . '</span>';
                                echo '<i class="bi bi-quote quote-icon-right"></i>';
                                echo '</p>';
                                echo '</div>';
                                echo '</div>';
                            }
                        }

                        mysqli_close($conn); // Menutup koneksi database
                        ?>
                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/slamet.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Slamet</h3>
                        <h4>Petani</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Bergabung menjadi mitra pertanian PT. Keong Nusantara Abadi telah menjadi pengalaman yang luar biasa. Program pelatihan dan konsultasi yang mereka tawarkan membantu saya memahami teknik penanaman yang efektif, serta cara memantau pertumbuhan pohon dengan baik. Saya merasa didukung dan memiliki akses ke sumber daya yang berguna untuk meningkatkan hasil panen saya. Terima kasih, MitraSengon!</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div> <!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/sopiyah.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Sopiyah</h3>
                        <h4>Petani</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Bergabung menjadi mitra pertanian PT. Keong Nusantara Abadi membuka peluang baru bagi kami dalam pengelolaan lahan. Program pendampingan dan akses ke sumber daya yang mereka berikan sangat membantu dalam meningkatkan kualitas tanaman kami. Kami merasa didukung dalam setiap langkah, dan hasilnya terlihat jelas. Terima kasih, MitraSengon , atas kesempatan ini!</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div> <!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/marpuah.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Marpuah</h3>
                        <h4>Petani</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Bergabung dengan mitra pertanian PT. Keong Nusantara Abadi adalah keputusan terbaik yang kami buat. Pelatihan yang mereka berikan sangat bermanfaat, dan dukungan mereka dalam pemantauan pertumbuhan tanaman membuat kami lebih percaya diri. Kami merasa bahwa kerja sama ini tidak hanya menguntungkan kami, tetapi juga memberikan dampak positif bagi lingkungan.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div> <!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/sugeng.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Sugeng Rahayu</h3>
                        <h4>Petani</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Bergabung dengan mitra pertanian PT. Keong Nusantara Abadi telah membuka banyak peluang bagi kami. Program kemitraan mereka sangat membantu dalam mengelola sumber daya hutan kami secara berkelanjutan. Kami sangat menghargai perhatian dan dukungan yang diberikan, yang membuat kami semakin termotivasi untuk berkembang.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div> <!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="assets/img/sumaji.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Sumaji</h3>
                        <h4>Petani</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Keberadaan MitraSengon dalam perjalanan kami sangat berarti. Mereka tidak hanya memberikan bimbingan teknis, tetapi juga membangun hubungan yang kuat dengan para mitra. Kami merasa didukung dalam setiap langkah, dan hasilnya terlihat jelas pada pertumbuhan dan kualitas tanaman kami.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div> <!-- End testimonial item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Recent Posts Section -->
    <section id="recent-posts" class="recent-posts section" style="background-color: #1B7825;">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 style="color: white;">Articles</h2>
        <p style="color: white;">Artikel mengenai teknik pengolahan kayu sengon dan langkah-langkah pelestariannya</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <article>

              <div class="post-img">
                <img src="assets/img/artikel1.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Ilmu</p>

              <h2 class="title">
                <a href="https://rimbakita.com/pohon-sengon/">Pohon Sengon – Morfologi, Manfaat, Harga Kayu & Budidaya</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/cowo1.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">A. Aji Prakoso, S.T.</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">15 Februari, 2021</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <article>

              <div class="post-img">
                <img src="assets/img/artikel2.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Ilmu</p>

              <h2 class="title">
                <a href="https://fahutan.ipb.ac.id/pentingnya-pohon-sengon-begini-cara-pengolahannya/">Pentingnya Pohon Sengon: Begini Cara Pengolahannya!</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/ipb.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Fahutan IPB</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Januari 06, 2024</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <article>

              <div class="post-img">
                <img src="assets/img/blog/blog-3.jpg" alt="" class="img-fluid">
              </div>

              <p class="post-category">Ilmu</p>

              <h2 class="title">
                <a href="https://www.greeners.co/flora-fauna/sengon-pohon-kayu-unggulan-yang-serbaguna/">Sengon, Pohon Kayu Unggulan yang Serbaguna</a>
              </h2>

              <div class="d-flex align-items-center">
                <img src="assets/img/cewe1.jpg" alt="" class="img-fluid post-author-img flex-shrink-0">
                <div class="post-meta">
                  <p class="post-author">Sarah R.Megumi</p>
                  <p class="post-date">
                    <time datetime="2022-01-01">Agustus 02, 2020</time>
                  </p>
                </div>
              </div>

            </article>
          </div><!-- End post list item -->

        </div><!-- End recent posts list -->

      </div>

    </section><!-- /Recent Posts Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section" style="background-color: #1B7825;">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <div class="contact-title">
          <h2 style="color: white;">Contact</h2>
<p style="color: white; margin-bottom: 20px;">Jika Anda memiliki pertanyaan atau ingin mendapatkan informasi lebih lanjut, jangan ragu untuk menghubungi kami</p>
    
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" style="background-color: #79A37E;" data-aos-delay="200">
                  <i class="bi bi-geo-alt" style="color: #C7E9CB;"></i> <!-- Mengubah warna ikon menjadi hijau -->
                  <h3 style="color: white;">Address</h3>
                  <p style="color: white;">Jl. Raya Bogo - Kunjang</p>
                  <p style="color: white;">Desa Mojoayu, Kec. Plemahan</p>
                
            

                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade"style="background-color: #79A37E;" data-aos-delay="300">
                  <i class="bi bi-telephone" style="color: #C7E9CB;"></i>
                  <h3 style="color: white;">Call Us</h3>
                  <p style="color: white;">(0354) 526251</p>
                  <p style="color: white;">+1 6678 254445 41</p>
                  

                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" style="background-color: #79A37E;" data-aos-delay="400">
                  <i class="bi bi-envelope" style="color: #C7E9CB;"></i>
                  <h3 style="color: white;">Email Us</h3>
                  <p style="color: white;">ptkna@indo.net.id</p>
                  <p style="color: white;">info@wongcoco.com</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade"style="background-color: #79A37E;"  data-aos-delay="500">
                  <i class="bi bi-clock" style="color: #C7E9CB;"></i>
                  <h3 style="color: white;">Open Hours</h3>
                  <p style="color: white;">Monday - Friday</p>
                  <p style="color: white;">7:00AM - 05:00PM</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-6">
            <div style="background-color: #79A37E; padding: 20px;" data-aos="fade-up" data-aos-delay="200">
              <p style="color: white; font-weight: bold; font-size: 24px;">Kemitraan dengan Mitra Sengon</p>
              <p style="color: white;">Jika Anda memiliki pertanyaan, membutuhkan bantuan, atau tertarik untuk menjalin kemitraan bersama Mitra Sengon, jangan ragu untuk menghubungi Kami dengan klik di bawah ini</p>
          
              <!-- Gambar di atas tombol -->
              <div class="text-center"> 
                <img src="assets/img/csimg.png" alt="Mitra Sengon" style="width: 50%; max-width: 200px; margin-bottom: 20px;">
              </div>
          
              <!-- Tombol Hubungi Kami -->
              <div class="text-center">
                <button onclick="window.open('https://wa.me/6281335470432', '_blank')"  
                        style="background-color: #1B7825; color: white; padding: 10px 20px; border: none; border-radius: 30px; cursor: pointer;">
                  Hubungi Kami
                </button>
              </div>
            </div>
          </div>
          

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background" style="background-color:#C7E9CB">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">MitraSengon</span>
          </a>
          <p>MitraSengon adalah inisiatif dari PT Keong Nusantara Abadi yang bertujuan untuk memakmurkan mitra melalui pengelolaan pertanian berkelanjutan.MitraSengon berkomitmen untuk meningkatkan hasil pertanian dan memperkuat kemitraan dengan petani melalui program-program yang mendukung keberlanjutan dan pengembangan komunitas.</p>
          <div class="social-links d-flex mt-4">
            <a href="https://x.com/wongcoco_id"><i class="bi bi-twitter-x"></i></a>
            <a href="https://www.facebook.com/wongcoco.id"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/wongcoco.id?igsh=MXRldjhxMWtuNTI5aA=="><i class="bi bi-instagram"></i></a>
            <a href="https://id.linkedin.com/company/pt-keong-nusantara-abadi-wong-coco"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">Mitra</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="#">Article</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Konsultasi Pertanian Berkelanjutan</a></li>
            <li><a href="#">Pelatihan Budidaya dan Perawatan Sengon</a></li>
            <li><a href="#">Pemantauan Pertumbuhan Tanaman</a></li>
            <li><a href="#">Materi Edukasi dan Pelatihan</a></li>
            <li><a href="#">Dukungan Pemasaran Produk</a></li>
            <li><a href="#">Program Kemitraan Pertanian</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>Jl. Raya Bogo - Kunjang </p>
          <p>Desa Mojoayu, Mojoayu, Kec. Plemahan</p>
          <p>Kabupaten Kediri, Jawa Timur</p>
          <p>Indonesia</p>
          <p class="mt-4"><strong>Phone:</strong> <span>(0354) 526251</span></p>
          <p><strong>Email:</strong> <span>info@wongcoco.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="sitename"><a href="javascript:void(0);" onclick="toggleLoginModal()" style="color: black;">MitraSengon </a></strong> <span>PT. Keong Nusantara Abadi</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/" style="color: #4CAF50;">Politeknik Negeri Jember</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>