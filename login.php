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

        include "koneksi.php";

        session_start();


        if (isset($_POST['btnlogin'])) {
          $username = $_POST['username'];
          $password = $_POST['password'];

          $sql = "SELECT * FROM users WHERE username='$username' && password='$password'";
          $result = mysqli_query($conn, $sql);
          if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            header("Location: hitung.php");
            die();
          } else {
            echo '<center><div class="alert alert-warning">Username dan Password Salah</div></center>';
          }
        }


        ?>

        <div class="card">
          <div class="card-header text-center">
            Halaman Login
          </div>
          <form action="login.php" method="post">
            <div class="card-body">
              <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon3">
                  <!--icon user-->
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                  </svg>
                </span>
                <input type="text" class="form-control" id="username" name="username" aria-describedby="basic-addon3" placeholder="Masukkan Username" required>
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
              <div class="row mb-3">
                <button type="submit" class="btn btn-primary" name="btnlogin">Masuk</button>
              </div>
            </div>
          </form>
        </div>
      </div>


    </div>

  </div>

</body>

</html>
