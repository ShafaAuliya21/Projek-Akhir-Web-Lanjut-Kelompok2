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
  
<div class="wrapper">

<div class="body-overlay"></div>

        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><span>SisPro</span></h3>
            </div>
            <ul class="list-unstyled components">
			<li>
                    <a href="<?=base_url('/admin')?>" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
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
					<i class="material-icons">apps</i><span>Data</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu2">
                        <li>
                            <a href="<?= base_url('admin/mahasiswa') ?>">Data Mahasiswa</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/dosen') ?>">Data Dosen</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/berkas') ?>">Data Berkas</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/pendaftar') ?>">Data Pendaftar</a>
                        </li>
                    </ul>
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

                    <!-- <li>
                            <a href="<?=base_url('mahasiswa/profil')?>">Profile</a>
                        </li> -->

                    <li>
                            <a href="<?= base_url('admin/profile/' . $admin['id']) . '/edit'?>">Edit Profile</a>
                        </li>

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
			
			<div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-warning">
                                       <span class="material-icons">equalizer</span>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <h3 class="category"><strong>Pengguna</strong></h3>
                                    <p class="card-title"><?= $alluser ?> Pengguna</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <i class="material-icons text-info">info</i>
                                        <a href="<?= base_url('admin/mahasiswa') ?>">Lihat Pengguna</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header">
                                    <div class="icon icon-info">
                                    
                                <span class="material-icons">equalizer
                                </span>
                              </div>
                                </div>
                                <div class="card-content">
                                    <h3 class="category"><strong>Pendaftar Seminar</strong></h3>
                                    <p class="card-title"><?= $allPendaftar ?> Pendaftar</p>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                    <i class="material-icons">date_range </i> <a href="<?= base_url('admin/pendaftar') ?>"> Lihat Pendaftar Seminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					<div class="row">
                        <div class="col-lg-12 col-md-12" style="width:100%">
                            <div class="card" style="min-height: 485px">
                                <div class="card-header card-header-text">
                                    <h4 class="card-title">Daftar Pengguna</h4>
                                    <p class="category">Sistem Informasi Pendaftaran Seminar Proposal Ilmu Komputer FMIPA Universitas Lampung.</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                    <thead class="text-primary">
                                            <tr>
                                                <th>No</th>
                                                <th>Email</th>
                                                <th>Username</th>
                                                <th>Role</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $no = 1;
                                            foreach ($user as $data) { ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $data['email'] ?></td>
                                                <td><?= $data['username'] ?></td>
                                                <td><?= $data['name'] ?></td>
                                                
                                            </tr>
                                            <?php }
                                        ?>
                                        </tbody>
                                    </table>
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
					
					</div>			
				
        </div>
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
			
        })  
    
</script>

  </body>
  
  </html>