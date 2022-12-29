<?php
include 'connection.php';

$Id = $_GET['id_mhs'];
$query = "DELETE FROM tbl_mhs WHERE id_mhs = '$Id';";
$sql = mysqli_query($conn, $query);

if ($sql) {
    header("location: index.php");
} else {
    echo $query;
}