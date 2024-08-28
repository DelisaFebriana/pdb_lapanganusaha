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

        .dropdown-sm {
            width: auto;
            display: inline-block;
            font-size: 0.875rem; 
            padding: 0.25rem 0.5rem; 
        }

        .btn-back 
        {
        margin: 20px 0 20px 20px;
        background-color: #003366; /* Dark blue color */
        color: white; 
        border: 2px solid #003366; /* Dark blue border */
        padding: 5px 10px; 
        text-decoration: none;
        display: inline-flex; 
        align-items: center; 
        border-radius: 10px; 
        }

        .btn-back i 
        {
        font-size: 1.2rem; 
        }

        .btn-back:hover    
        {
        background-color: white; 
        color: #003366; /* Text color changes to dark blue on hover */
        }

          .table-container 
        {
            padding-left: 0 30px;
            padding-right: 20px;
        }

          .table-container table 
        {
            width: 100%;
            max-width: 100%;
        }

        .text-center 
        {
            padding-left: 15px;  /* Beri jarak kiri pada judul */
            padding-right: 15px; /* Beri jarak kanan pada judul */
        }
</style>

  <!-- Tambahkan link Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- Tombol Back ke Home -->
  <button type="button" class="btn btn-sm btn-back" onclick="location.href=('/admin')">
    <i class="fa fa-backward"></i>
  </button>

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

    <!-- Pesan Sukses -->
    <?php if (session()->getFlashdata('success')): ?>
      <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('success') ?>
      </div>
    <?php endif; ?>

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
    </div>
  </header><!-- #header -->

  <div class="container mt-5">
        <h2 class="text-center">PDB Menurut Lapangan Usaha (Milyar Rupiah)</h2>
        <h3 class="text-center">Kategori 3</h3>
        
        <!-- Dropdown untuk memilih tahun -->
        <div class="form-group">
            <label for="select-year">Pilih Tahun:</label>
            <select class="form-control form-control-sm dropdown-sm" id="select-year" style="width: auto; display: inline-block;" onchange="filterByYear()">
                <option value="all" <?= $tahun == 'all' ? 'selected' : '' ?>>All</option>
                <option value="2020" <?= $tahun == 2020 ? 'selected' : '' ?>>2020</option>
                <option value="2021" <?= $tahun == 2021 ? 'selected' : '' ?>>2021</option>
                <option value="2022" <?= $tahun == 2022 ? 'selected' : '' ?>>2022</option>
                <option value="2023" <?= $tahun == 2023 ? 'selected' : '' ?>>2023</option>
                <option value="2024" <?= $tahun == 2024 ? 'selected' : '' ?>>2024</option>
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
                        <th scope="col ">Tahun</th>
                        <th scope="col ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cat3 as $item): ?>
                    <?php if ($tahun == 'all' && $item['Tahun'] >= 2020 && $item['Tahun'] <= 2024 || $item['Tahun'] == $tahun): ?>
                    <tr>
                        <td><?= $item['Lapangan_Usaha'] ?></td>
                        <td><?= $item['Triwulan_I'] ?></td>
                        <td><?= $item['Triwulan_II'] ?></td>
                        <td><?= $item['Triwulan_III'] ?></td>
                        <td><?= $item['Triwulan_IV'] ?></td>
                        <td><?= $item['Tahunan'] ?></td>
                        <td><?= $item['Tahun'] ?></td>

                        <td><!-- Tombol Edit -->
                        <a href="/adminpdb3/<?= $item['id'] ?>/edit3" class="btn btn-sm btn-primary" style="background-color: #003366; color: white; border-radius: 0; border-top-left-radius: 5px; border-bottom-left-radius: 5px;"><i class="fas fa-edit"></i>
                        </td>

                        <!-- Tombol Delete -->
                         <td>
                        <form action="/adminpdb3/delete/<?= $item['id'] ?>" method="POST"style="border-radius: 0; border-top-right-radius: 5px; border-bottom-right-radius: 5px;">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></button>
                        </form>
                        </td>
                    </tr>
                    <?php endif ?>
                    <?php endforeach ?>
                    </tbody>
        </table>
        </div>
            <!-- Canvas untuk Chart.js -->
            <div class="mt-5">
              <canvas id="pdbChart"></canvas>
            </div>
    </div>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Reveal</strong>. 
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="/js/main.js"></script>

  <!-- Script untuk mengubah tahun sesuai dropdown -->
  <script>
    function filterByYear() {
      var year = document.getElementById('select-year').value;
      window.location.href = "/pdb?tahun=" + year;
    }

    // Fungsi untuk membuat dan memperbarui chart
    function createChart(labels, data) {
        var ctx = document.getElementById('pdbChart').getContext('2d');
        if (window.pdbChart) {
            window.pdbChart.destroy();
        }
        window.pdbChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'PDB Lapangan Usaha',
                    data: data,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        beginAtZero: true
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    }

    // Script untuk mengubah tahun sesuai dropdown
    function filterByYear() {
        var year = document.getElementById('select-year').value;
        window.location.href = "/pdb?tahun=" + year;
    }

    // Ambil data dari tabel dan buat chart
    document.addEventListener('DOMContentLoaded', function() {
        var rows = document.querySelectorAll('table tbody tr');
        var labels = [];
        var data = [];

        rows.forEach(function(row) {
            var cells = row.querySelectorAll('td');
            labels.push(cells[0].textContent); // PDB Lapangan Usaha
            data.push(parseFloat(cells[5].textContent)); // Tahunan
        });

        createChart(labels, data);
    });
  </script>

</body>
</html>