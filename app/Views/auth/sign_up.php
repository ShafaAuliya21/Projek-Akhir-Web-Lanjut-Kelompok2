<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url("assets/css/signup.css")?>">
    <title>Daftar</title>
</head>
<body>

    <!----------------------- Main Container -------------------------->

     <div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!----------------------- Login Container -------------------------->

       <div class="row border rounded-5 p-3 bg-white shadow box-area">

    <!--------------------------- Left Box ----------------------------->

       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #0174BE;">
           <div class="featured-image mb-3">
            <img src="<?= base_url('assets/img/SignUp.png')?>" class="img-fluid" style="width: 250px;">
           </div>
           <p class="text-white fs-2" style="font-weight: 600;">Halo SISprovers</p>
           <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Silahkan melakukan pendaftaran akun terlebih dahulu</small>
       </div> 

    <!-------------------- ------ Right Box ---------------------------->
        
       <div class="col-md-6 right-box">
          <div class="row align-items-center">
                <div class="header-text mb-4">
                     <h2><?=lang('Auth.register')?></h2>
                     <p>Silahkan membuat akun</p>
                </div>
                <form action="<?= url_to('register') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control form-control-lg bg-light fs-6 <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                   name="email" aria-describedby="emailHelp" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6 <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>"
                                   name="username" aria-describedby="emailHelp" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                    </div>
                    <br>
                    <div class="input-group mb-1">
                        <select class="form-select" aria-label="Default select example" name="role" id="role" required placeholder="Role">
                            <option selected disabled>Pilih Role</option>
                            <option value="dosen">Dosen</option>
                            <option value="mahasiswa">Mahasiswa</option>
                        </select>
                    </div>
                    <br>
                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary"><small>Ingat Saya</small></label>
                        </div>
                    </div>
                    <div class="input-group mb-3">

                        <button type="submit" class="btn btn-primary btn-warning w-100 fs-6">Daftar</button>
       </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-light w-100 fs-6"><img src="<?= base_url('assets/img/google.png')?>" style="width:20px" class="me-2"><small>Daftar dengan Google</small></button>
                    </div>
                    <div class="don't have account">
                            <center><small>Memiliki Akun</small> <small><a href="<?= base_url('sign_in')?>" class="text-warning">Masuk</a></small></center>
                    </div>
                </form>
                
          </div>
       </div> 

      </div>
    </div>

</body>
</html>