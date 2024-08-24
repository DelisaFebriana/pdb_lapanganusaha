<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Badan Pusat Statistika</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel PDB Menurut Lapangan Usaha</title>

  <style>
        .sub-category {
            padding-left: 20px;
        }
        .no-border {
            border-top: none;
            border-bottom: none;
        }

        /* CSS untuk mengecilkan ukuran dropdown */
        .dropdown-sm {
            width: auto;
            display: inline-block;
            font-size: 0.875rem; /* Sesuaikan ukuran font agar lebih kecil */
            padding: 0.25rem 0.5rem; /* Sesuaikan padding agar dropdown lebih kompak */
        }

         /* Style untuk tombol back */
         .btn-back {
            margin-top: 20px;
            margin-bottom: 20px;
            background-color: white; /* Warna latar belakang putih */
            color: black; /* Warna teks hitam */
            border: 2px solid black; /* Batas tombol hitam */
            padding: 5px 10px; /* Padding untuk tombol */
            text-decoration: none; /* Hilangkan garis bawah pada link */
            display: inline-flex; /* Gunakan inline-flex untuk menampung ikon */
            align-items: center; /* Rata tengah secara vertikal */
            border-radius: 10px; /* Buat tombol lebih membulat */
        }
        .btn-back i {
            font-size: 1.2rem; /* Ukuran ikon panah */
        }
        .btn-back:hover {
            background-color: black; /* Warna latar belakang saat hover */
            color: white; /* Warna teks saat hover */
        }

    </style>

  <!-- Tombol Back ke Home -->
  <a href="/home" class="btn btn-secondary btn-back">Kembali</a>

  <!-- Favicons -->
  <link href="/img/favicon.png" rel="icon">
  <link href="/img/bps.png" rel="bps">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Tambahkan link untuk Font Awesome untuk ikon panah -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

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
          <li class="menu-active"><a href="#body">Beranda</a></li>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#services">PDB Lapangan Usaha</a></li>
          <li class="menu-has-children"><a href="">Admin</a>
            <ul>
              <li><a href="#">Log In</a></li>
              <li><a href="#"></a></li>
            </ul>
          </li>
          <li><a href="#contact">Informasi Publik</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <div class="container mt-5">
        <h2 class="text-center">PDB Menurut Lapangan Usaha (Milyar Rupiah)</h2>
        
        <!-- Dropdown untuk memilih tahun -->
        <div class="form-group">
            <label for="select-year">Pilih Tahun:</label>
            <select class="form-control form-control-sm dropdown-sm" id="select-year" style="width: auto; display: inline-block;">>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
            </select>
        </div>

        <table class="table table-hover ">
                <thead>
                    <tr>
                        <th scope="col ">PDB Lapangan Usaha</th>
                        <th scope="col ">Triwulan I</th>
                        <th scope="col ">Triwulan II</th>
                        <th scope="col ">Triwulan III</th>
                        <th scope="col ">Triwulan IV</th>
                        <th scope="col ">Tahunan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cat1 as $item): ?>
                    <tr>
                        <td><?= $item['Lapangan Usaha'] ?></td>
                        <td><?= $item['Triwulan I'] ?></td>
                        <td><?= $item['Triwulan II'] ?></td>
                        <td><?= $item['Triwulan III'] ?></td>
                        <td><?= $item['Triwulan IV'] ?></td>
                        <td><?= $item['Tahunan'] ?></td>
                        <td>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
    </div>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Reveal</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="/js/main.js"></script>

  <!-- Script untuk mengubah tahun sesuai dropdown -->
  <script>
        document.getElementById('select-year').addEventListener('change', function() {
            var year = this.value;
            document.getElementById('year-header').textContent = 'Tahun ' + year;
        });
  </script>

</body>
</html>
