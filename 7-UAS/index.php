<?php
include 'connection.php';

$query = "SELECT * FROM tbl_mhs";
$sql = mysqli_query($conn, $query);

?>

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
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-md">
          <a class="navbar-brand" href="#">    UAS PBO   </a>
        </div>
      </nav>

      <!--Judul-->
      <figure class="text-center">
        <blockquote class="blockquote">
          <p>Data Mahasiswa yang Berhasil Disimpan dalam Database </p>
        </blockquote>
        <figcaption class="blockquote-footer">
          CRUD <cite title="Source Title">(Creat, Read, Update, Delete)</cite>
        </figcaption>
        <a href="kelola.php" type="button" class="btn btn-primary mb-3 mt-1">
            <i class="fa fa-plus"></i>
            Tambah Data
        </a>
      </figure>
      <div class="table-responsive">
        <table class="table align-middle container table-bordered table table-hover">
          <thead>
            <tr>
              
              <th><center>No.</center></th>
              <th><center>NIM</center></th>
              <th><center>NAMA</center></th>
              <th><center>JENIS KELAMIN</center></th>
              <th><center>ALAMAT</center></th>
              <th><center>PRODI</center></th>
              <th><center>EMAIL</center></th>
              <th><center>FOTO</center></th>
              <th><center>AKSI</center></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            while($data = mysqli_fetch_assoc($sql)){

            ?>
            <tr>
              <td><?php echo $i++ ?></td>
              <td><?php echo $data['nim_mhs'] ?></td>
              <td><?php echo $data['nama_mhs'] ?></td>
              <td><?php echo $data['jk_mhs'] ?></td>
              <td><?php echo $data['alamat_mhs'] ?></td>
              <td><?php echo $data['prodi'] ?></td>
              <td><?php echo $data['email_mhs'] ?></td>
              <td>
                <center>
                <img src="img/img1.jpg" alt="" style="width: 200px;">
            </td>
              <td>
                <a href="edit.php?id=<?php echo $data['id_mhs'] ?>" type="button" class="btn btn-success btn-sm"> 
                  <i class="fa fa-pencil"></i>
                </a>
                <a href="hapus_mhs.php?id=<?php echo $data['id_mhs'] ?>" type="button" class="btn btn-danger btn-sm">
                  <i class="fa fa-trash"></i>
                </button>
              </center>
              </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
     </div>   
</body>
</html>