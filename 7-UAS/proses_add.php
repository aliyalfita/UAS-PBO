<?php
include 'connection.php';

$nim_mhs = $_POST['nim_mhs'];
$nama_mhs = $_POST['nama_mhs'];
$jk_mhs = $_POST['jk_mhs'];
$alamat_mhs = $_POST['alamat_mhs'];
$prodi = $_POST['prodi'];
$email_mhs = $_POST['email_mhs'];
$foto =" ";

$query = "INSERT INTO tbl_mhs VALUES(null, '$nim_mhs', '$nama_mhs', '$jk_mhs', '$alamat_mhs', '$prodi', '$email_mhs', '$foto')";
$sql = mysqli_query($conn, $query);

if ($sql) {
    header("location: index.php");
} else {
    echo $query;
}