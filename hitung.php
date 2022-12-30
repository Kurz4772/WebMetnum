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
  <div class="row justify-content-around mt-5">
    <div class="col-4">
      <div class="card">
        <div class="card-header text-center">
          Jumlah Bahan di Gudang
        </div>
        <form action="hasil.php" method="get">
          <div class="mb-3 ms-2 me-2">
            <label for="GypsumCasting" class="form-label">Gypsum casting</label>
            <input type="text" class="form-control" id="GypsumCasting" name="GypsumCasting" placeholder="jumlah gypsum casting" required>
          </div>
          <div class="mb-3 ms-2 me-2">
            <label for="Rofing" class="form-label">Rofing</label>
            <input type="text" class="form-control" id="Rofing" name="Rofing" placeholder="jumlah rofing" required>
          </div>
          <div class="mb-3 ms-2 me-2">
            <label for="SemenPutih" class="form-label">Semen Putih</label>
            <input type="text" class="form-control" id="SemenPutih" name="SemenPutih" placeholder="jumlah semen putih" required>
          </div>
          <div class="d-grid gap-2 ms-2 me-2 mb-3">
            <button type="submit" class="btn btn-primary" name="btnhitung">Hitung</button>
          </div>
        </form>
      </div>

    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-header text-center">
          Petunjuk Penggunaan
        </div>
        <p class="ms-2 me-2 mt-2">Persamaan yang digunakan : </p>
        <table class="table">
          <tr class="ms-2 me-2">
            <td>1.5x</td>
            <td>2.5y</td>
            <td>0.75z</td>
          </tr>
          <tr class="ms-2 me-2">
            <td>2x</td>
            <td>3y</td>
            <td>1.5z</td>
          </tr>
          <tr class="ms-2 me-2">
            <td>0.5x</td>
            <td>1y</td>
            <td>1z</td>
          </tr>
        </table>
        <p class="ms-2 me-2 mt-2">Keterangan : </p>
        <p class="ms-2 me-2 mt-2">x = gypsum Panjang</p>
        <p class="ms-2 me-2">y = gypsum CP Merak </p>
        <p class="ms-2 me-2">z = gypsum Layang-layang </p>
      </div>
    </div>
  </div>

</body>

</html>