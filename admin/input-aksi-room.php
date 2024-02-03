<?php
include '../koneksi.php';

$idkamar = $_POST['idkamar'];
$tipekamar = $_POST['tipekamar'];
$harga = $_POST['harga'];
$ketersediaan = $_POST['ketersediaan'];

mysqli_query($koneksi, "insert into room values('$idkamar', '$tipekamar', '$harga', '$ketersediaan')");
header("location:room.php");
?>