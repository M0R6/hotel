<?php
include '../koneksi.php';

$ido = $_POST['idorder'];
$ot = $_POST['ordertime'];
$ng = $_POST['namatamu'];
$idkamar = $_POST['idkamar'];
$hp = $_POST['harga'];
$ci = $_POST['checkin'];
$co = $_POST['checkout'];
$n = $_POST['nights'];
$tot = $hp * $n;
$st = "BELUM CHECK-IN";

mysqli_query($koneksi, "insert into tamu values('$ido', '$ot', '$ng', '$idkamar', '$hp', '$n', '$ci', '$co', '$tot', '$st')");
header("location:guests.php");
?>

<!-- $jarak = $tgl2 - $tgl1;

$hari = $jarak / 60 / 60 / 24; -->