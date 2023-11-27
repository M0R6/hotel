<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($koneksi, "insert into user values('$id', '$nama', '$username', '$password', 'user')");
header("location:/hotel/auth/login?pesan=berhasil-regist");
?>