<?php
include 'connection.php';

$nim = $_POST['nim'];
$nama = $_POST['nama_mhs'];
$gender = $_POST['jk_mhs'];
$alamat = $_POST['alamat_mhs'];
$prodi = $_POST['prodi'];
$foto = "img1.jpg";
$email = $_POST['email_mhs'];

$query = "INSERT INTO tbl_mhs VALUES(null, '$nim', '$nama', '$gender', '$alamat', '$prodi', '$foto', '$email')";
$sql = mysqli_query($conn, $query);

if ($sql) {
    header("location: index.php");
} else {
    echo $query;
}