<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Dashboard
		</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">
	    <!----css3---->
        
        <link rel="stylesheet" href="<?=base_url('assets/css/dashboard.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/custom.css')?>">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
	
	<!--google material icon-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"
      rel="stylesheet">
  </head>
  <body>
  <div class="container">
        <div class="profile-box">
        <div class = "profile-saya">
            <h1> Detail </h1>
        <div class="text">
            <p>Nama : <?= $pendaftaran['nama'] ?></p>
            <p>NPM : <?= $pendaftaran['npm']?></p>
            <p>Angkatan : <?= $pendaftaran['angkatan']?></p>
            <p>Jenis Seminar : <?= $pendaftaran['jenis_seminar']?></p>
            <p>Judul : <?= $pendaftaran['judul']?></p>
            <p>Jurusan : <?= $pendaftaran['jurusan']?></p>
            <p>Fakultas : <?= $pendaftaran['fakultas']?></p>
            <p>Lokasi : <?= $pendaftaran['lokasi']?></p>
            <p>Waktu : <?= $pendaftaran['waktu']?></p>
            <br>

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  
  </html>