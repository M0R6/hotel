<?php
session_start();
if (!isset($_SESSION['nama']) || empty($_SESSION['nama'])) {
	header("location: ../index.php"); // Ganti "index.php" dengan halaman login Anda
	exit();
 } 
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title> Data Pegawai </title>
        <style>
            .roombuttonr {
                display: inline-block;
                padding: 8px 12px;
                text-align: center;
                text-decoration: none;
                cursor: pointer;
                border: 1px solid red;
                border-radius: 4px;
                background-color: red;
                color: white;
                }
            .roombuttonr:hover {
                text-decoration: underline;
                }
            .roombuttonh {
                display: inline-block;
                padding: 8px 12px;
                text-align: center;
                text-decoration: none;
                cursor: pointer;
                border: 1px solid green;
                border-radius: 4px;
                background-color: green;
                color: white;
                }
            .roombuttonh:hover {
                text-decoration: underline;
                }
            .roombuttonh img{
                vertical-align: middle;
                
            }
        </style>
    </head>
    <body>
    <div class="wrapper"> 
        <nav class="navbar"> 
                <img class="logo" src="logo.svg">
                <img class="logo2" src="#">
                <ul> <li> <a href="input-room.php"> Input Data </a> </li> </ul>
                <ul> <li> <a href="index.php"> Home </a> </li> </ul>
        </nav>
        <div class="table">
        <table border = "1">
            <tr>
                <td> ID Pegawai </td>
                <td> Nama Pegawai </td>
                <td> Shift </td>
                <td> Absensi Saat Ini </td>
                <td> Edit </td>
                <td> Aksi </td>
                <td> Buat Tersedia </td>
                <td> Buat Tidak Tersedia </td>
            </tr>
            <?php
            include '../koneksi.php';
            $data = mysqli_query($koneksi,"select * from pegawai");
            while($d=mysqli_fetch_array($data)) {
                ?>
                <tr>
                <td><?php echo $d['idpgw']?></td>
                <td><?php echo $d['namapgw']?></td>
                <td><?php echo $d['shift']?></td>
                <td><?php echo $d['absensi_rn']?></td>
                <td><a href="edit-pegawai.php?idpgw=<?php echo $d['idpgw']; ?>" class="roombuttonh"> <img src="editr.svg" alt="EDIT" height="30" width="30"> </a> </td>
                <td><a href="hapus-pegawai.php?idpgw=<?php echo $d['idpgw']; ?>" class="roombuttonr"> HAPUS </a> </td>
                <td><a href="bekerja.php?idpgw=<?php echo $d['idpgw']; ?>" class="roombuttonh"> CLICK </a> </td>
                <td><a href="tidak-bekerja.php?idpgw=<?php echo $d['idpgw']; ?>" class="roombuttonr"> CLICK </a> </td>
                </tr>
                <?php              
            } 
            ?>
        </table> <br>
        </div>
    </div>
    </body>
</html>