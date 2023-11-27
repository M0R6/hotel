<?php
include 'koneksi.php';

$idpgw = $_GET['idpgw'];
mysqli_query($koneksi,"delete from pegawai where idpgw='$idpgw'");

header("location: employees.php");

?>