<?php
include 'koneksi.php';

$idrsv = $_POST['idrsv'];
$unit = $_POST['unit'];
$cidate = $_POST['cidate'];
$codate = $_POST['codate'];
$rooms = $_POST['rooms'];
$adults = $_POST['adults'];
$children = $_POST['children'];

mysqli_query($koneksi, "insert into reservasi values('$idrsv', '$unit', '$cidate', '$codate', '$rooms', '$adults', '$children')");
header("location:before-receipt.php");
?>