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
  <div class="container-list">
    <br>
    <div class="data-box">
        <div class="data-list-pendaftaran">
            <br>
        <h2 class="data-pendaftaran"> Data Pendaftaran </h2>
        </div>
    </div>
    <div class="table-box">
    <div class="tambah-data-box">
        <a class="btn btn-success" href="<?=base_url('/mahasiswa/pendaftaran')?>">Tambah</a>
    </div>
    <table class="table1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Angkatan</th>
                <th>Jenis</th>
                <th>Judul</th>
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

                
                <td class="d-flex justify-content">
                    <a href="<?= base_url('mahasiswa/pendaftaran/' . $pendaftaran['id'])?>" class="btn btn-primary mr-2 mb-2">Detail</a>
                    <br>
                    <a href="<?= base_url('mahasiswa/pendaftaran/' . $pendaftaran['id'] . '/edit')?>" class="btn btn-warning mr-2 mb-2">Edit</a>
                    <br>
                    <form action="<?= base_url('mahasiswa/pendaftaran/' . $pendaftaran['id'])?>" method="post">
                        <input type="hidden" name="_method" value="DELETE" class="delete-form mr-2 mb-2">
                        <?= csrf_field()?>
                        <button type="submit" class="btn btn-danger">Delete</button>
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
  </body>
  
  </html>