<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Badan Pusat Statistika</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="/img/bps.png" rel="bps">
  <link href="/img/bps.png" rel="bps">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->

  <style>
    .subtitle {
      color: black; /* Warna teks hitam */
      font-size: 0.9rem; /* Ukuran font lebih kecil dari PDB */
      margin-top: 5px; /* Jarak antara subtitle dengan judul */
      display: block;
    }
    
    .table-container {
      max-height: 400px;
      /* Atur tinggi maksimum kontainer tabel */
      overflow-y: auto;
      /* Tambahkan scroll vertikal jika konten melebihi tinggi */
      border: 1px solid #ddd;
      /* Tambahkan border di sekitar kontainer */
    }

    table {
      width: 100%;
      /* Tabel akan memenuhi lebar kontainer */
      border-collapse: collapse;
      /* Hilangkan jarak antara border sel */
    }

    th,
    td {
      padding: 10px 15px;
      /* Atur padding untuk memberikan ruang lebih */
      border: 1px solid #ddd;
      /* Tambahkan border untuk tiap sel */
      text-align: left;
      /* Perataan teks di kiri */
    }

    th {
      background-color: #6c7ae0;
      /* Warna latar belakang header */
      color: white;
      /* Warna teks header */
      position: sticky;
      top: 0;
      z-index: 1;
      /* Buat header tetap berada di atas saat scroll */
    }

    tr:nth-child(even) {
      background-color: #f8f6ff;
      /* Warna latar belakang baris genap */
    }

    tr:hover {
      background-color: #e0e0e0;
      /* Warna latar belakang saat baris di-hover */
    }
  </style>
</head>

<body id="body">

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">
      
      <div id="logo" class="pull-left">
        <h1><img src="/img/bps.png" alt="" class="me-3" style="height: 0.8em; width: auto; vertical-align: middle;" /><a href="#body" class="scrollto">B<span>P</span>S</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="/login">LogOut</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2>Badan <span>Pusat</span><br>Statistika</h2>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/4.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Log Aksi Pengguna</h2>
        </div>

        <div class="table-container">
          <table>
            <thead>
              <tr>
                <th>User ID</th>
                <th>Action</th>
                <th>Table Name</th>
                <th>Record ID</th>
                <th>Timestamp</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($log as $item): ?>
                <tr>
                  <td><?php echo $item['user_id']; ?></td>
                  <td><?php echo $item['action']; ?></td>
                  <td><?php echo $item['table_name']; ?></td>
                  <td><?php echo $item['record_id']; ?></td>
                  <td><?php echo $item['timestamp']; ?></td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
        <br />
      </div>
    </section><!-- #services -->

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Reveal</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">Delisa Febriana</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="/lib/jquery/jquery.min.js"></script>
  <script src="/lib/jquery/jquery-migrate.min.js"></script>
  <script src="/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/lib/easing/easing.min.js"></script>
  <script src="/lib/superfish/hoverIntent.js"></script>
  <script src="/lib/superfish/superfish.min.js"></script>
  <script src="/lib/wow/wow.min.js"></script>
  <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="/lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="/lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="/js/main.js"></script>

</body>

</html>
