<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Daftar Seminar
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

            <div class="container-create-pendaftaran">
        <form action="<?=base_url('mahasiswa/pendaftaran/store')?>" method="post" enctype="multipart/form-data">
    <table>
        <h2>Daftar Seminar</h2>
        
        <tr>
            
            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" placeholder="Nama" aria-label="Nama" aria-describedby="basic-addon1" name="nama" required>
            <div class="invalid-feedback">
                    <?= $validation->getError('nama') ?>
            </div>
            <br>
            <input type="text" class="form-control <?= ($validation->hasError('npm')) ? 'is-invalid' : ''; ?>" placeholder="NPM" aria-label="NPM" aria-describedby="basic-addon1" name="npm" required>
            <div class="invalid-feedback">
                    <?= $validation->getError('npm') ?>
            </div>
            <br>
            <input type="text" class="form-control <?= ($validation->hasError('angkatan')) ? 'is-invalid' : ''; ?>" placeholder="Angkatan" aria-label="Angkatan" aria-describedby="basic-addon1" name="angkatan" required>
            <div class="invalid-feedback">
                    <?= $validation->getError('angkatan') ?>
            </div>
            <br>
            <select class="form-select" aria-label="Default select example" id="jenis_seminar" name="jenis_seminar" required placeholder="Jenis Semianr">
                    <option selected>Jenis Seminar</option>
                    <option value="Kerja Praktik">Kerja Praktik</option>
                    <option value="Usul">Usul</option>
                    <option value="Hasil">Hasil</option>
                    <option value="Magang">Magang</option>
                    <option value="Studi Independen">Studi Independen</option>
                    <option value="Riset">Riset</option>
                </select>
            <br>
            <select class="form-select" aria-label="Default select example" id="dosen" name="dosen" required placeholder="Dosen">
                <option selected>Dosen</option>
                <?php foreach ($dosen_list as $dosen_item) : ?>
                    <option value="<?= $dosen_item['id'] ?>"><?= $dosen_item['nama'] ?></option>
                <?php endforeach; ?>
            </select>
            <br>
            <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" placeholder="Judul" aria-label="Judul" aria-describedby="basic-addon1" name="judul" required>
            <div class="invalid-feedback">
                    <?= $validation->getError('judul') ?>
            </div>
            <br>
            <input type="text" class="form-control <?= ($validation->hasError('jurusan')) ? 'is-invalid' : ''; ?>" placeholder="Jurusan" aria-label="Jurusan" aria-describedby="basic-addon1" name="jurusan" required>
            <div class="invalid-feedback">
                    <?= $validation->getError('jurusan') ?>
            </div>
            <br>
            <input type="text" class="form-control <?= ($validation->hasError('fakultas')) ? 'is-invalid' : ''; ?>" placeholder="Fakultas" aria-label="Fakultas" aria-describedby="basic-addon1" name="fakultas" required>
            <div class="invalid-feedback">
                    <?= $validation->getError('fakultas') ?>
            </div>
            <br>
            <input type="text" class="form-control <?= ($validation->hasError('lokasi')) ? 'is-invalid' : ''; ?>" placeholder="Lokasi" aria-label="Lokasi" aria-describedby="basic-addon1" name="lokasi" required>
            <div class="invalid-feedback">
                    <?= $validation->getError('lokasi') ?>
            </div>
            <br>
            <input type="datetime-local" class="form-control <?= ($validation->hasError('waktu')) ? 'is-invalid' : ''; ?>" placeholder="Waktu" aria-label="Waktu" aria-describedby="basic-addon1" name="waktu" required>
            <div class="invalid-feedback">
                    <?= $validation->getError('waktu') ?>
            </div>
            
        </tr>
        <br>
        <tr>
            <td><div class="col text-center"> <button class="btn btn-warning" type="submit" value="Simpan">Simpan</button></div></td>
        </tr>
    </form>
    </div>   
        
			

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