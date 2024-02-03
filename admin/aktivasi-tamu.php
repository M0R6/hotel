<?php
include '../koneksi.php';

$ido = $_GET['idorder'];

mysqli_query($koneksi, "update tamu set status='CHECK-IN' where idorder='$ido'");
header("location:guests.php");
?>