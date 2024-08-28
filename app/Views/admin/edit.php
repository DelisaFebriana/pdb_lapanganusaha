<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

        .btn-back {
            margin: 20px 0 20px 20px;
            background-color: white;
            color: black;
            border: 2px solid black;
            padding: 5px 10px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            border-radius: 10px;
          }
          .btn-back i {
            font-size: 1.2rem;
          }
          .btn-back:hover {
            background-color: black;
            color: white;
          }
          .btn-back span {
            display: none;
          }

        .form-container 
        {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Center vertically */
            padding-bottom: 50px; /* Increased padding to move buttons up */
            padding-top: 20px; /* Optional: Add some padding to the top */
        }

        .container 
        {
            background-color: white;
            padding: 30px;
            border-radius: 10px; /* Optional: Add rounded corners */
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Optional: Add a shadow for better aesthetics */
            max-width: 500px; /* Optional: Set a max width for better form control */
        }

        .btn-container 
        {
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            margin-top: 20px; /* Maintain spacing above buttons */
            margin-bottom: 10px; /* Add margin below the buttons */
        }

        .btn 
        {
            padding: 10px 20px; /* Optional: Increase padding for better button appearance */
        }
    </style>
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <a href="/adminpdb" class="btn btn-secondary btn-back">Kembali</a>

  <link href="/img/favicon.png" rel="icon">
  <link href="/img/bps.png" rel="bps">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="/css/style.css" rel="stylesheet">
</head>

<div class="form-container">
    <div class="container mt-5">
        <h2>Edit Data PDB Lapangan Usaha</h2>
        <form action="<?= site_url('adminpdb/' . $cat1['id']) ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="Lapangan_Usaha">Lapangan Usaha:</label>
            <input type="text" class="form-control" id="Lapangan_Usaha" name="Lapangan_Usaha" value="<?= $cat1['Lapangan_Usaha'] ?>" required>
        </div>
        <div class="form-group">
            <label for="Triwulan_I">Triwulan I:</label>
            <input type="number" class="form-control" id="Triwulan_I" name="Triwulan_I" value="<?= $cat1['Triwulan_I'] ?>" required>
        </div>
        <div class="form-group">
            <label for="Triwulan_II">Triwulan II:</label>
            <input type="number" class="form-control" id="Triwulan_II" name="Triwulan_II" value="<?= $cat1['Triwulan_II'] ?>" required>
        </div>
        <div class="form-group">
            <label for="Triwulan_III">Triwulan III:</label>
            <input type="number" class="form-control" id="Triwulan_III" name="Triwulan_III" value="<?= $cat1['Triwulan_III'] ?>" required>
        </div>
        <div class="form-group">
            <label for="Triwulan_IV">Triwulan IV:</label>
            <input type="number" class="form-control" id="Triwulan_IV" name="Triwulan_IV" value="<?= $cat1['Triwulan_IV'] ?>" required>
        </div>
        <div class="form-group">
            <label for="Tahunan">Tahunan:</label>
            <input type="number" class="form-control" id="Tahunan" name="Tahunan" value="<?= $cat1['Tahunan'] ?>" required>
        </div>
        <div class="form-group">
            <label for="Tahun">Tahun:</label>
            <input type="number" class="form-control" id="Tahun" name="Tahun" value="<?= $cat1['Tahun'] ?>" required>
        </div>
       <div class="btn-container">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="/adminpdb" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>