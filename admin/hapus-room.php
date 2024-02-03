<?php
include '../koneksi.php';

$idkamar = $_GET['idkamar'];
mysqli_query($koneksi,"delete from room where idkamar='$idkamar'");

header("location: room.php");

?>