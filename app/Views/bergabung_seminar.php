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
                    <a href="<?=base_url('admin')?>" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
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

                <li  class="">
                    <a href="<?= base_url('mahasiswa/review')?>" class="dashboard">Review</a>
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
        
        <div class="container-fluid">
        <div class="row">

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title ">Bergabung Seminar</h5>
                        <p class="card-text mb-2">Bergabunglah dalam seminar ini untuk mendapatkan wawasan mendalam,<br> 
                            meraih inspirasi baru, dan membangun koneksi bernilai! </p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
                        <button class="btn btn-primary">Absensi</button>
                    </div>
        <button type="button" class="btn btn-primary launch" data-toggle="modal" data-target="#staticBackdrop"> <i class="fa fa-info"></i> Bergabung
    </button>
<!-- Vertically centered modal -->
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body ">
                <div class="text-right">
                    <i class="fa fa-close close" data-dismiss="modal"></i>
                </div>
                <div class="px-4 py-5">
                    <h5 class="text-uppercase">Bergabung Seminar</h5>
                    <!-- Absensi Form -->
                    <form action="<?= base_url('mahasiswa/bergabung_seminar/absen'); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="npm">Nama:</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                            <input type="hidden" name="id_pendaftar" value="<?= $jadwal['id']?>">
                        </div>
                        <div class="form-group">
                            <label for="npm">NPM:</label>
                            <input type="text" class="form-control" id="npm" name="npm" required>
                        </div>
                        <div class="form-group">
                            <label for="photo">Bukti Absen:</label>
                            <input type="file" class="form-control" id="photo" name="foto" accept="image/*" required>
                        </div>
                        <div class="text-center mt-5">
                            <button type="submit" class="btn btn-success">Submit Absensi</button>
                        </div>
                    </form>
                    <!-- End Absensi Form -->

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