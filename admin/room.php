<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title> Units availability check </title>
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
                <img class="logo2" src="unitsavail.svg">
                <ul> <li> <a href="input-room.php"> Input </a> </Data </a> </li> </ul>
                <ul> <li> <a href="index.php"> Home </a> </li> </ul>
        </nav>
        <div class="table" style="overflow: auto">
        <table border = "1">
            <tr>
                <td> ID Kamar </td>
                <td> Tipe Kamar </td>
                <td> Harga </td>
                <td> Ketersediaan </td>
                <td> Aksi </td>
                <td> Edit </td>
                <td> Buat Tersedia </td>
                <td> Buat Tidak Tersedia </td>
            </tr>
            <?php
            include '../koneksi.php';
            $data = mysqli_query($koneksi,"select * from room");
            while($d=mysqli_fetch_array($data)) {
                ?>
                <tr>
                <td><?php echo $d['idkamar']?></td>
                <td><?php echo $d['tipekamar']?></td>
                <td><?php echo $d['harga']?></td>
                <td><?php echo $d['ketersediaan']?></td>
                <td><a href="hapus-room.php?idkamar=<?php echo $d['idkamar']; ?>" class="roombuttonr"> HAPUS </a> </td>
                <td><a href="edit-room.php?idkamar=<?php echo $d['idkamar']; ?>" class="roombuttonh"> <img src="editr.svg" alt="EDIT" height="30" width="30"> </a> </td>
                <td><a href="tersedia.php?idkamar=<?php echo $d['idkamar']; ?>" class="roombuttonh"> CLICK </a> </td>
                <td><a href="tidak-tersedia.php?idkamar=<?php echo $d['idkamar']; ?>" class="roombuttonr"> CLICK </a> </td>
                </tr>
                <?php              
            } 
            ?>
        </table> <br>
        </div>
    </div>
    </body>
</html>