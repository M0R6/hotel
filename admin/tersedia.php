<?php
include 'koneksi.php';

$idkamar = $_GET['idkamar'];

mysqli_query($koneksi, "update room set ketersediaan='TERSEDIA' where idkamar='$idkamar'");
header("location:room.php");
?>