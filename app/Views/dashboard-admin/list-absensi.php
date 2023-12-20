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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
        <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css')?>">        
        <link rel="stylesheet" href="<?=base_url('assets/css/dashboard.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/custom.css')?>">
        <link rel="stylesheet" href="<?=base_url('assets/css/style.css')?>">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
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
                    <a href="#" list-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					
				 <li  class="d-lg-none d-md-block d-xl-none d-sm-block">
                    <a href="#"><i class="material-icons">person</i><span>user</span></a>
                </li>
				
				</div>
			
                <li class="dropdown">
                    <a href="#pageSubmenu2" list-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
					<i class="material-icons">apps</i><span>list</span></a>
                    <ul class="collapse list-unstyled menu" id="pageSubmenu2">
                        <li>
                            <a href="<?= base_url('admin/mahasiswa') ?>">list Mahasiswa</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/dosen') ?>">list Dosen</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/berkas') ?>">list Berkas</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/pendaftar')?>">list Pendaftar</a>
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
					
                    <button class="d-inline-block d-lg-none ml-auto more-button" type="button" list-toggle="collapse"
					list-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="material-icons">more_vert</span>
                    </button>

                    <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">   
                            <li class="dropdown">
                    <a href="#homeSubmenu1" list-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
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
					
					<div class="row ">
                        <div class="col-lg-12 col-md-12">
                            <div class="card" style="min-height: 485px">
                                <div class="card-header card-header-text">
                                    <h4 class="card-title">List Absensi Seminar</h4>
                                    <p class="category">Sistem Informasi Pendaftaran Seminar Proposal Ilmu Komputer FMIPA Universitas Lampung.</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-striped table-bordered" id="example" style="width:100%">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>NPM</th>
                                                 <th>Angkatan</th>                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $no = 1;
                                            foreach ($list as $list) { ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $list['nama'] ?></td>
                                                <td><?= $list['npm'] ?></td>
                                                <td><?= $list['angkatan'] ?></td>
                                            </tr>
                                            <?php }
                                        ?>
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
					
					</div>
	
        </div>
    </div>
					

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="<?=base_url('assets/js/jquery-3.3.1.slim.min.js')?>"></script>
   <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
   <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
   <script src="<?=base_url('assets/js/jquery-3.3.1.min.js')?>"></script>
   <script src="<?=base_url('assets/js/popper.min.js')?>"></script>
   <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>

   <script src="<?=base_url('assets/js/datatables.js')?>"></script>
   
  
  
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