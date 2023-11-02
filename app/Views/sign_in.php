<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url("assets/css/signin.css")?>">
    <title>Masuk</title>
</head>
<body>

    <!----------------------- Main Container -------------------------->

     <div class="container d-flex justify-content-center align-items-center min-vh-100">

    <!----------------------- Login Container -------------------------->

       <div class="row border rounded-5 p-3 bg-white shadow box-area">

    <!--------------------------- Left Box ----------------------------->

       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #0174BE;">
           <div class="featured-image mb-3">
            <img src="assets/img/SignIn.png" class="img-fluid" style="width: 250px;">
           </div>
           <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Halo SISprovers</p>
           <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Untuk lanjut silakan melakukan verifikasi akun dahulu</small>
       </div> 

    <!-------------------- ------ Right Box ---------------------------->
        
       <div class="col-md-6 right-box">
          <div class="row align-items-center">
                <div class="header-text mb-4"> 
                     <h2>Masuk</h2>
                     <p class="text-secondary">Selamat Datang Kembali</p>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Alamat email atau nama pengguna">
                </div>
                <div class="input-group mb-1">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Kata Sandi">
                </div>
                <div class="input-group mb-5 d-flex justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck">
                        <label for="formCheck" class="form-check-label text-secondary"><small>Ingat Saya</small></label>
                    </div>
                    <div class="forgot">
                        <small><a href class="text-warning">Lupa password? </a></small>
                    </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-warning w-100 fs-6">Masuk</button>
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-light w-100 fs-6"><img src="assets/img/google.png" style="width:20px" class="me-2"><small>Masuk dengan Google</small></button>
                </div>

                <div class="don't have account">
                        <center><small>Tidak memiliki akun</small> <small><a href="<?= base_url('sign_up')?>" class="text-warning">Daftar</a></small></center>
                    </div>
          </div>
       </div> 

      </div>
    </div>

</body>
</html>