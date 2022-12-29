<?php
include 'connection.php';

$id_mhs = $_POST['id_mhs'];
$nim_mhs = $_POST['nim_mhs'];
$nama_mhs = $_POST['nama_mhs'];
$jk_mhs = $_POST['jk_mhs'];
$alamat_mhs = $_POST['alamat_mhs'];
$prodi = $_POST['prodi'];
$foto = "img1.png";
$email_mhs = $_POST['email_mhs'];

$query = "UPDATE tbl_mhs SET nim_mhs = '$nim_mhs', nama_mhs = '$nama_mhs', jk_mhs = '$jk_mhs', alamat_mhs = '$alamat_mhs', prodi = '$prodi', email_mhs = '$email_mhs' WHERE id_mhs = '$id_mhs' ";
$sql = mysqli_query($conn, $query);

if ($sql) {
    header("location: index.php");
} else {
    echo $query;
}