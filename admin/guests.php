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
                <a href="index.php"> <img class="logo" src="logo.svg"> </a>
                <img class="logo2" src="#">
                <ul> <li> <a href="input-guest.php"> Input Data </a> </li> </ul>
                <ul> <li> <a href="index.php"> Home </a> </li> </ul>
        </nav>
        <div class="table">
        <table border = "1">
            <tr>
                <td> ID Order </td>
                <td> Waktu Pemesanan </td>
                <td> ID Pegawai </td>
                <td> Nama Pemesan </td>
                <td> ID Kamar </td>
                <td> Harga Permalam </td>
                <td> Night(s) </td>
                <td> Check-in </td>
                <td> Check-out </td>
                <td> Harga Total </td>
                <td> Status </td>
                <td> Edit </td>
                <td> Aktifkan </td>
                <td> Nonaktifkan </td>
            </tr>
            <?php
            include '../koneksi.php';
            $data = mysqli_query($koneksi,"select * from tamu");
            while($d=mysqli_fetch_array($data)) {
                ?>
                <tr>
                <td><?php echo $d['idorder']?></td>
                <td><?php echo $d['ordertime']?></td>
                <td><?php echo $d['idpgw']?></td>
                <td><?php echo $d['namatamu']?></td>
                <td><?php echo $d['idkamar']?></td>
                <td><?php echo $d['harga']?></td>
                <td><?php echo $d['nights']?></td>
                <td><?php echo $d['checkin']?></td>
                <td><?php echo $d['checkout']?></td>
                <td><?php echo $d['totalharga']?></td>
                <td><?php echo $d['status']?></td>
                <td><a href="edit-tamu.php?idorder=<?php echo $d['idorder']; ?>" class="roombuttonh"> <img src="editr.svg" alt="EDIT" height="30" width="30"> </a> </td>
                <td><a href="aktivasi-tamu.php?idorder=<?php echo $d['idorder']; ?>" class="roombuttonh"> ACTIVATE </a> </td>
                <td><a href="nonaktif-tamu.php?idorder=<?php echo $d['idorder']; ?>" class="roombuttonr"> NONACTIVATE </a> </td>
                </tr>
                <?php              
            } 
            ?>
        </table> <br>
        </div>
    </div>
    </body>
</html>