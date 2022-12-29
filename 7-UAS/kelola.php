<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--Bootstrap --> 
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <script src="js/bootstrap.bundle.min.js" ></script>

    <!--Font Awesome-->
    <link rel="stylesheet" href="font awesome/css/font-awesome.min.css">
    <title>Data Mahasiswa</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light mb-3">
        <div class="container-md">
          <a class="navbar-brand" href="#">    UAS PBO   </a>
        </div>
      </nav>
      <div class="container">
        <form method="POST" action="proses.php">
        <div class="mb-3 row">
            <label for="NIM" class="col-sm-2 col-form-label">
              NIM
            </label>
              <div class="col-sm-10">
              <input type="number" class="form-control" name="nim" placeholder="contoh: 21051214003">
              </div>
        </div>
        <div class="mb-3 row">
          <label for="Nama" class="col-sm-2 col-form-label">
            NAMA
          </label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="nama_mhs" placeholder="Nama Lengkap">
            </div>
      </div>
      <div class="mb-3 row">
        <label for="Jenis Kelamin" class="col-sm-2 col-form-label">
          JENIS KELAMIN
        </label>
          <div class="col-sm-10">
            <select name="jk_mhs"  class="form-select">
              <option selected>Jenis Kelamin</option>
              <option value="Laki-laki">L</option>
              <option value="Perempuan">P</option>
            </select>
          </div>
        </div>
        <div class="mb-3 row">
          <label for="Alamat" class="col-sm-2 col-form-label">
           ALAMAT
          </label>
            <div class="col-sm-10">
              <textarea class="form-control" name="alamat_mhs" rows="3"></textarea>
            </div>
        </div>
        <div class="mb-3 row">
          <label for="Program Studi" class="col-sm-2 col-form-label">
            PRODI
          </label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="prodi">
            </div>
      </div>
      <div class="mb-3 row">
        <label for="Email" class="col-sm-2 col-form-label">
          EMAIL
        </label>
          <div class="col-sm-10">
          <input type="text" class="form-control" name="email_mhs">
          </div>
    </div>
    <div class="mb-3 row">
      <label for="foto" class="col-sm-2 col-form-label">
        FOTO MAHASISWA
      </label>
        <div class="col-sm-10">
          <input class="form-control" type="file" name="foto">
        </div>
      </div>
      <div class="mb-3 row mt-4">
        <div class="col">
          
          <button type="submit" class="btn btn-primary btn-sm">
                Tambah
                </button>
          <a href="index.php" type="button" class="btn btn-danger btn-sm">
            Batal
          </a>
        </div>
      </div>
    </form>
    </div>
</body>
</html>