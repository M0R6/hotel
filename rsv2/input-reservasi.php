<?php
session_start();
include 'koneksi.php';

$idrsv = $_POST['idrsv'];
$uname = $_SESSION['username']; 
$nama = $_SESSION['nama']; 
$nik = $_POST['nik'];
$namaktp = $_POST['namaktp'];
$unit = $_POST['unit'];
$cidate = $_POST['cidate'];
$codate = $_POST['codate'];
$rooms = $_POST['rooms'];
$adults = $_POST['adults'];
$children = $_POST['children'];

mysqli_query($koneksi, "insert into reservasi values('$idrsv', '$uname', '$nama', '$nik', '$namaktp', '$unit', '$cidate', '$codate', '$rooms', '$adults', '$children')");
header("location:before-receipt.php");
?>