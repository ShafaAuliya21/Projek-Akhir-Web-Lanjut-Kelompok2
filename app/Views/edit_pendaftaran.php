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
  <div class="container-create">
        <div class="profile-box">
        <div class = "profile-saya">
            <h1 class="input-pendaftaran"> Edit Pendaftaran </h1>
            <br>
        <div class="text">
        <form action="<?=base_url('mahasiswa/pendaftaran/' . $pendaftaran['id'])?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        <?= csrf_field()?>
        <table>
        <tr>
            <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" placeholder="Nama" aria-label="Nama" aria-describedby="basic-addon1" name="nama" value="<?= $pendaftaran['nama']?>" required>
            <div class="invalid-feedback">
                    <?= $validation->getError('nama') ?>
            </div>
            
        </tr>
        <br>
        <tr>
            <input type="text" class="form-control <?= ($validation->hasError('npm')) ? 'is-invalid' : ''; ?>" placeholder="NPM" aria-label="NPM" aria-describedby="basic-addon1" name="npm" value="<?= $pendaftaran['npm']?>" required>
            <div class="invalid-feedback">
                    <?= $validation->getError('npm') ?>
            </div>
            
        </tr>
        <br>
        <tr>
            <input type="text" class="form-control <?= ($validation->hasError('angkatan')) ? 'is-invalid' : ''; ?>" placeholder="Angkatan" aria-label="Angkatan" aria-describedby="basic-addon1" name="angkatan" value="<?= $pendaftaran['angkatan']?>" required>
            <div class="invalid-feedback">
                    <?= $validation->getError('angkatan') ?>
            </div>
            
        </tr>
        <br>
        <tr>
        <select class="form-select" aria-label="Default select example" id="jenis_seminar" name="jenis_seminar" required placeholder="Jenis Seminar">
                    <option>Jenis Seminar</option>
                    <option value="kerja_praktik">Kerja Praktik</option>
                    <option value="usul">Usul</option>
                    <option value="hasil">Hasil</option>
                    <option value="magang">Magang</option>
                    <option value="studi_independen">Studi Independen</option>
                    <option value="riset">Riset</option>
                </select>
        </tr>
        <br>
        <tr>
            <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" placeholder="Judul" aria-label="Judul" aria-describedby="basic-addon1" name="judul" value="<?= $pendaftaran['judul']?>" required>
            <div class="invalid-feedback">
                    <?= $validation->getError('judul') ?>
            </div>
            
        </tr>
        <br>
        <tr>
            <input type="text" class="form-control <?= ($validation->hasError('jurusan')) ? 'is-invalid' : ''; ?>" placeholder="Jurusan" aria-label="Jurusan" aria-describedby="basic-addon1" name="jurusan" value="<?= $pendaftaran['jurusan']?>" required>
            <div class="invalid-feedback">
                    <?= $validation->getError('jurusan') ?>
            </div>
            
        </tr>
        <br>

        <tr>
            <input type="text" class="form-control <?= ($validation->hasError('fakultas')) ? 'is-invalid' : ''; ?>" placeholder="Fakultas" aria-label="Fakultas" aria-describedby="basic-addon1" name="fakultas" value="<?= $pendaftaran['fakultas']?>" required>
            <div class="invalid-feedback">
                    <?= $validation->getError('fakultas') ?>
            </div>
            
        </tr>
        <br>

        <tr>
            <input type="text" class="form-control <?= ($validation->hasError('lokasi')) ? 'is-invalid' : ''; ?>" placeholder="Lokasi" aria-label="Lokasi" aria-describedby="basic-addon1" name="lokasi" value="<?= $pendaftaran['lokasi']?>" required>
            <div class="invalid-feedback">
                    <?= $validation->getError('lokasi') ?>
            </div>
            
        </tr>
        <br>

        <tr>
            <input type="datetime-local" class="form-control <?= ($validation->hasError('waktu')) ? 'is-invalid' : ''; ?>" placeholder="Waktu" aria-label="Waktu" aria-describedby="basic-addon1" name="waktu" value="<?= $pendaftaran['waktu']?>" required>
            <div class="invalid-feedback">
                    <?= $validation->getError('judul') ?>
            </div>
            
        </tr>
        <br>
        <tr>
            <td><div class="col text-center"> <button class="btn btn-warning" type="submit" value="Simpan">Simpan</button></div></td>
        </tr>
        </table>
    </form>

            </div>
        </div>
    </div>   
  </body>
  
  </html>