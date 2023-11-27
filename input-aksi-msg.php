<?php
include 'koneksi.php';

$idqna = $_POST['idqna'];
$fname = $_POST['fname'];
$email = $_POST['email'];
$msg = $_POST['msg'];

mysqli_query($koneksi, "insert into qna values('$idqna', '$fname', '$email', '$msg')");
header("location:http://localhost/hotel/?#contacts");
?>