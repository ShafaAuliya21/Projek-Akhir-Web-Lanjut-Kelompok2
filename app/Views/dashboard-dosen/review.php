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
                    <a href="<?=base_url('dosen')?>" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
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
                            <a href="<?= base_url('dosen/berkas') ?>">Form Berkas</a>
                        </li>
                        <li>
                            <a href="<?= base_url('dosen/list_pendaftaran')?>">Form Pendaftaran</a>
                        </li>
                        
                    </ul>
                </li>

                <li  class="active">
                    <a href="<?= base_url('dosen/jadwal_seminar')?>" class="dashboard"><i class="material-icons">event_note</i><span>Jadwal Seminar</span></a>
                </li>

                <li  class="">
                <a href="<?= base_url('dosen/review')?>" class="dashboard"><i class="material-icons">reviews</i><span>Review</span></a>
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
        <div class="row ">
                        <div class="col-lg-12 col-md-12">
                            <div class="card" style="min-height: 485px">
                                <div class="card-header card-header-text">
                                    <h4 class="card-title">Daftar Seminar</h4>
                                    <p class="category">Sistem Informasi Pendaftaran Seminar Proposal Ilmu Komputer FMIPA Universitas Lampung.</p>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>NPM</th>
                                                <th>Jenis Seminar</th>
                                                <th>Judul</th>
                                                <th>Kritik dan Saran</th>
                                                <th>Nilai</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            $no = 1;
                                            $i = 0;
                                            foreach ($pendaftaran as $data) { ?>

                                            <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $data['nama'] ?></td>
                                            <td><?= $data['npm'] ?></td>
                                            <td><?= $data['jenis_seminar'] ?></td>
                                            <td><?= $data['judul'] ?></td>
                                
                                            <?php 
                                            if (empty($reviews[$data['id']])) {
                                                $reviews[$data['id']][0]['nilai'] = null;
                                                $reviews[$data['id']][0]['kritik_saran'] = null;?>
                                            <td><?= $reviews[$data['id']][0]['kritik_saran']?></td>
                                            <td><?= $reviews[$data['id']][0]['nilai']?></td>
                                            <td>
                                                <a class="btn btn-success me-2" href="<?= base_url('dosen/review/' . $data['id']) ?>">Review</a>
                                            </td>

                                            <?php } else {
                                                $reviewData = $reviews[$data['id']][0];

                                                $kritik_saran = isset($reviewData['kritik_saran']) ? $reviewData['kritik_saran'] : "-";
                                                $nilai = isset($reviewData['nilai']) ? $reviewData['nilai'] : 0;

                                                ?>
                                                <td><?= $kritik_saran ?></td>
                                                <td><?= $nilai ?></td>
                                            <?php } ?>

                                            </tr>

                                            <?php }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
			
        });

</script>
  
  </body>
  
  </html>