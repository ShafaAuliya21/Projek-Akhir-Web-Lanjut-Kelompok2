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
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendor/styles/core.css')?>">
        <link rel="stylesheet" type="text/css" href="<?=base_url('vendor/styles/icon-font.min.css')?>">
        <link rel="stylesheet" type="text/css" href="<?=base_url('src/plugins/datatables/css/dataTables.bootstrap4.min.css')?>">
        <link rel="stylesheet" type="text/css" href="<?=base_url('src/plugins/datatables/css/responsive.bootstrap4.min.css')?>">
        <link rel="stylesheet" type="text/css" href="<?=base_url('assets/vendor/styles/style.css')?>">
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
  
<div class="wrapper">

<div class="body-overlay"></div>

        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><span>SisPro</span></h3>
            </div>
            <ul class="list-unstyled components">
			<li>
                    <a href="<?=base_url('mahasiswa')?>" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>
		
		      <div class="small-screen navbar-display">
                <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                    <a href="#" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					
				 <li  class="d-lg-none d-md-block d-xl-none d-sm-block">
                    <a href="#"><i class="material-icons">person</i><span>user</span></a>
                </li>
				
				</div>

                <li class="dropdown">
                    <a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">app_registration</i><span>Pendaftaran</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu2">
                        <li>
                            <a href="<?= base_url('mahasiswa/berkas') ?>">Form Berkas</a>
                        </li>
                        <li>
                            <a href="<?= base_url('mahasiswa/list_pendaftaran')?>">Form Pendaftaran</a>
                        </li>
                    </ul>
                </li>

                <li  class="active">
					<a href="<?=base_url('mahasiswa/jadwal_seminar')?>" class="dashboard"><i class="material-icons">event_note</i><span>Jadwal Seminar</span></a>
                </li>
			
            </ul>
           
        </nav>
		
        <!-- Page Content  -->
        <div id="content">
		
		<div class="top-navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="d-xl-block d-lg-block d-md-mone d-none">
                        <span class="material-icons">arrow_back_ios</span>
                    </button>
					
					<a class="navbar-brand" href="#"> Dashboard </a>
					
                    <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="material-icons">more_vert</span>
                    </button>

                    <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">   
                            <li class="dropdown">
                    <a href="#homeSubmenu1" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
					<?= user()->username;?> <i class="material-icons">person</i></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?=base_url('logout')?>">Logout</a>
                        </li>
                    </ul>
                </li>
                        </ul>
                    </div>
                </div>
            </nav>
	    </div>

        <div class="main-content">
        
		<div class="pd-ltr-20">
			<div class="card-box pd-20 height-100-p mb-30">
				<div class="row align-items-center">
					<div class="col-md-4">
						<img src=<?=base_url('assets/img/Dashboard-Mahasiswa.png')?>>
					</div>
					<div class="col-md-8">
						<h4 class="font-20 weight-500 mb-10">
							Selamat Datang <div class="weight-600 font-30 text-blue">Shafa Auliya</div>
						</h4>
						<p class="font-18 max-width-600">Sistem ini, dapat mengakses informasi terkini tentang seminar yang sedang berlangsung, mengelola pendaftaran, dan melihat jadwal serta materi seminar yang akan datang. 
				</div>
			</div>
        </div>

			<div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                       <span class="material-icons">equalizer</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Berkas</strong></p>
                                    <h3 class="card-title"><?= $dataAllBerkas; ?> Berkas</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info">info</i>
                                        <a href="<?= base_url('mahasiswa/berkas') ?>">Lihat Berkas</a>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                       <span class="material-icons">equalizer</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <p class="category"><strong>Pendaftar</strong></p>
                                    <h3 class="card-title"><?= $dataAllPendaftaran; ?> Pendaftar</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info">info</i>
                                        <a href="<?= base_url('mahasiswa/list_pendaftaran') ?>">Lihat Pendaftar</a>
                                    </div>
                                </div>
                            </div>
                        </div>	
					</div>	
                    
                    
                        <!-- Simple Datatable start -->
                        <div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Jadwal Peserta Seminar</h4>
					</div>
					<div class="pb-20">
						<table class="data-table table stripe hover nowrap">
							<thead>
								<tr>
                                    <th>No</th>
									<th>Nama</th>
									<th>NPM</th>
									<th>Jenis Seminar</th>
                                    <th>Judul Seminar</th>
                                    <th>Tempat</th>
                                    <th>Waktu</th>
								</tr>
							</thead>
							<tbody>
                                    <?php $row=1; foreach($dataPendaftaran as $jadwal): ?>
                                        <tr>
                                            <td><?= $row++;?></td>
											<td><?= $jadwal['nama']?></td>
											<td><?= $jadwal['npm']?></td>
											<td><?= $jadwal['jenis_seminar']?></td>
											<td><?= $jadwal['judul']?></td>
											<td><?= $jadwal['lokasi']?></td>
											<td><?= $jadwal['waktu']?></td>
                                        </tr>
                                        
                                        <?php endforeach; ?>
                                    </tbody>
						</table>
					</div>
				</div>
        </div>
    </div>

	<footer class="footer">
                <div class="container-fluid">
				<div class="row">
				<div class="col-md-6">
                <nav class="d-flex">
              
                </div>
				<div class="col-md-6">
				<p class="copyright d-flex justify-content-end"> &copy 2023 SisPro Ilmu Komputer Universitas Lampung </p>
                        
				</div>
				</div>
				</div>
                </footer>
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="<?=base_url('assets/js/jquery-3.3.1.slim.min.js')?>"></script>
   <script src="<?=base_url('assets/js/popper.min.js')?>"></script>
   <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
   <script src="<?=base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
  
  
  <script type="text/javascript">
  $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
				$('#content').toggleClass('active');
            });
			
			 $('.more-button,.body-overlay').on('click', function () {
                $('#sidebar,.body-overlay').toggleClass('show-nav');
            });
			
        });

</script>
  
  </body>
  
  </html>