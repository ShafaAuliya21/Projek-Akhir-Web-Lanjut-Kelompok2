<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Data Pendaftaran Seminar
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <!----css3---->

    <link rel="stylesheet" href="<?= base_url('assets/css/dashboard.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
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
                    <a href="<?= base_url('mahasiswa') ?>" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>

                <div class="small-screen navbar-display">
                    <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">

                    <li class="d-lg-none d-md-block d-xl-none d-sm-block">
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
                            <a href="<?= base_url('mahasiswa/list_pendaftaran') ?>">Form Pendaftaran</a>
                        </li>
                    </ul>
                </li>

                <li class="active">
                    <a href="<?= base_url('mahasiswa/jadwal_seminar') ?>" class="dashboard"><i class="material-icons">event_note</i><span>Jadwal Seminar</span></a>
                </li>
                <li  class="">
                <a href="<?= base_url('mahasiswa/review')?>" class="dashboard"><i class="material-icons">reviews</i><span>Review</span></a>
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

                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="material-icons">more_vert</span>
                        </button>

                        <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none" id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <li class="dropdown">
                                    <a href="#homeSubmenu1" data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle">
                                        <?= user()->username; ?> <i class="material-icons">person</i></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="<?= base_url('logout') ?>">Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="container-fluid">
                <div class="row ">
                    <div class="col-lg-12 col-md-12">
                        <div class="card" style="min-height: 485px">
                            <div class="card-header card-header-text">
                                <h3 class="card-title">Pendaftaran Seminar</h3>
                            </div>
                            <div class="card-content table-responsive">
                                <table class="table table-hover">
                                    <thead class="text-primary">
                                        <!-- DataTales Example -->

                                        <h6 class="m-0 font-weight-bold text-primary"></h6>
                                        <br>
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>NPM</th>
                                                <th>Angkatan</th>
                                                <th>Jenis</th>
                                                <th>Judul</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($pendaftaran as $pendaftaran) :

                                        ?>


                                            <tr>
                                                <td><?= $i ?></td>

                                                <td><?= $pendaftaran['nama'] ?></td>
                                                <td><?= $pendaftaran['npm'] ?></td>
                                                <td><?= $pendaftaran['angkatan'] ?></td>
                                                <td><?= $pendaftaran['jenis_seminar'] ?></td>
                                                <td><?= $pendaftaran['judul'] ?></td>


                                                <td class="d-flex justify-content">
                                                    <a href="<?= base_url('mahasiswa/pendaftaran/' . $pendaftaran['id']) ?>" class="btn btn-primary mr-2 mb-2">Detail</a>
                                                    <br>
                                                    <a href="<?= base_url('mahasiswa/pendaftaran/' . $pendaftaran['id'] . '/edit') ?>" class="btn btn-warning mr-2 mb-2">Edit</a>
                                                    <br>
                                                    <form action="<?= base_url('mahasiswa/pendaftaran/' . $pendaftaran['id']) ?>" method="post">
                                                        <input type="hidden" name="_method" value="DELETE" class="delete-form mr-2 mb-2">
                                                        <?= csrf_field() ?>
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <br>
                                            <?php
                                            $i++;
                                            ?>
                                        <?php endforeach; ?>
                                    </tbody>

                                </table>
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
                                </div>                                <div class="card-content table-responsive">
                                    <table class="table table-hover">
                                        <thead class="text-primary">
            <!-- DataTales Example -->
            
                <h6 class="m-0 font-weight-bold text-primary"></h6>
                <a href="<?= base_url('mahasiswa/pendaftaran') ?>" class="btn btn-success">Tambah Data</a>
                <br>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Angkatan</th>
                <th>Jenis</th>
                <th>Judul</th>
                <th>Status</th>
                <th>Aksi</th>
		    </tr>
        </thead>
        <tbody>
        <?php $i = 1;?>
            <?php foreach ($pendaftaran as $pendaftaran):
                
            ?>

                
            <tr>
                <td><?= $i?></td>
                
                <td><?= $pendaftaran['nama']?></td>
                <td><?= $pendaftaran['npm']?></td>
                <td><?= $pendaftaran['angkatan']?></td>
                <td><?= $pendaftaran['jenis_seminar']?></td>
                <td><?= $pendaftaran['judul']?></td>
                <td><?= $pendaftaran['status']?></td>


                
                <td class="d-flex justify-content">
                    <a href="<?= base_url('mahasiswa/pendaftaran/' . $pendaftaran['id'])?>" class="btn btn-info mr-2 mb-2">Detail</a>
                    <br>
                    <a href="<?= base_url('mahasiswa/pendaftaran/' . $pendaftaran['id'] . '/edit')?>" class="btn btn-warning mr-2 mb-2">Edit</a>
                    <br>
                    <form action="<?= base_url('mahasiswa/pendaftaran/' . $pendaftaran['id'])?>" method="post">
                        <input type="hidden" name="_method" value="DELETE" class="delete-form mr-2 mb-2">
                        <?= csrf_field()?>
                        <button type="submit" onclick="return konfirmasiHapus()" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            <br>
            <?php
                $i++;
            ?>
            <?php endforeach;?>
        </tbody>
		
	</table>
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

   <script>
        function konfirmasiHapus(){
            if(confirm("Apakah anda yakin ingin menghapus data ini?")){
                return true;
            }
            else{
                return false;
            }
        }
    </script>
  
  
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
