<?php
include 'koneksi.php';

$idpgw = $_GET['idpgw'];

mysqli_query($koneksi, "update pegawai set absensi_rn='BEKERJA' where idpgw='$idpgw'");
header("location:employees.php");
?>