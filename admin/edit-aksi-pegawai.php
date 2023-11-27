<?php
include 'koneksi.php';

$idpgw = $_POST['idpgw'];
$namapgw = $_POST['namapgw'];
$shift = $_POST['shift'];
$absensi_rn = $_POST['absensi_rn'];

mysqli_query($koneksi, "update pegawai set idpgw='$idpgw', namapgw='$namapgw', shift='$shift', absensi_rn='$absensi_rn' where idpgw='$idpgw'");
header("location:employees.php");
?>