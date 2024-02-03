<?php
include '../koneksi.php';

$idkamar = $_POST['idkamar'];
$tipekamar = $_POST['tipekamar'];
$ketersediaan = $_POST['ketersediaan'];
$harga = $_POST['harga'];

mysqli_query($koneksi, "update room set idkamar='$idkamar', tipekamar='$tipekamar', ketersediaan='$ketersediaan', harga='$harga' where idkamar='$idkamar'");
header("location:room.php");
?>