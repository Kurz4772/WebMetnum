<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


</head>

<body style="background-image: url(images/fab99806522f06ccf54923e21993c894.jpg); background-size: cover;" ;>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">

        <?php
        if (isset($_SESSION['error'])) {
        ?>
          <div class="alert alert-warning" role="alert">
            <?php echo $_SESSION['error'] ?>
          </div>
        <?php
        }
        ?>

        <?php
        if (isset($_SESSION['message'])) {
        ?>
          <div class="alert alert-success" role="alert">
            <?php echo $_SESSION['message'] ?>
          </div>
        <?php
        }
        ?>

        <div class="card">
          <div class="card-header text-center">
            Halaman Registrasi
          </div>
          <form action="cekregis.php" method="post">
            <div class="card-body">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">
                  <!--icon user-->
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                  </svg>
                </span>
                <input type="text" class="form-control" id="username" name="username" value="<?php echo @$_SESSION['username'] ?>" aria-describedby="basic-addon3" placeholder="Masukkan Username" required>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">
                  <!--icon password-->
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key-fill" viewBox="0 0 16 16">
                    <path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                  </svg>
                  </svg>
                </span>
                <input type="password" class="form-control" id="password" name="password" value="<?php echo @$_SESSION['password'] ?>" aria-describedby="basic-addon3" placeholder="Masukkan Password" required>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">
                  <!--icon alamat-->
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                    <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                  </svg>
                </span>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo @$_SESSION['alamat'] ?>" aria-describedby="basic-addon3" placeholder="Masukkan Alamat" required>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">
                  <!--icon no_telp-->
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-plus-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM12.5 1a.5.5 0 0 1 .5.5V3h1.5a.5.5 0 0 1 0 1H13v1.5a.5.5 0 0 1-1 0V4h-1.5a.5.5 0 0 1 0-1H12V1.5a.5.5 0 0 1 .5-.5z" />
                  </svg>
                </span>
                <input type="number" class="form-control" id="no_telp" name="no_telp" value="<?php echo @$_SESSION['no_telp'] ?>" aria-describedby="basic-addon3" placeholder="Masukkan No Telp" required>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">
                  <!--icon umur-->
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
                    <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                    <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z" />
                  </svg>
                </span>
                <input type="number" class="form-control" id="umur" name="umur" value="<?php echo @$_SESSION['umur'] ?>" aria-describedby="basic-addon3" placeholder="Masukkan Umur" required>
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">
                  <!--icon pekerjaan-->
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-briefcase-fill" viewBox="0 0 16 16">
                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v1.384l7.614 2.03a1.5 1.5 0 0 0 .772 0L16 5.884V4.5A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5z" />
                    <path d="M0 12.5A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5V6.85L8.129 8.947a.5.5 0 0 1-.258 0L0 6.85v5.65z" />
                  </svg>
                </span>
                <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" value="<?php echo @$_SESSION['pekerjaan'] ?>" aria-describedby="basic-addon3" placeholder="Masukkan Pekerjaan" required>
              </div>
              <div class="row mb-3">
                <button type="submit" class="btn btn-primary" name="btnregis">Masuk</button>
              </div>
              <p class="text-center">Sudah Punya Akun? Silahkan<a href="login.php"> Login </a> </p>
            </div>
          </form>
        </div>
      </div>


    </div>

  </div>

</body>

</html>
<?php
session_destroy();
?>