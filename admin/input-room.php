<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title> Units Input </title>
    </head>
    <body>
    <div class="wrapper"> 
        <nav class="navbar"> 
                <img class="logo" src="logo.svg">
                <img class="logo2" src="dInput.svg">
                <ul>   
                    <li> <a href="index.php"> Home </a> </li>
                    <li> <a href="room.php"> Units </a> </li>
                </ul>
        </nav>
<h3> <br><br> Tambahkan Data Kamar Baru</h3>
<form method = "post" action="input-aksi-room.php">
    <table>
        <tr>
            <td> ID Kamar </td>
            <td> <input type="number" name="idkamar"> </td>
        </tr>
        <tr>
            <td> Tipe Kamar </td>
            <td> <input type="text" name="tipekamar"> </td>
        </tr>
        <tr>
            <td>Harga</td>
            <td> <input type="text" name="harga"> </td>
        </tr>
        <tr>
            <td>Ketersediaan</td>
            <td> <input type="text" name="ketersediaan"> </td>
        </tr>
        <tr>
            <td><input type="submit" value="Simpan"></td>
        </tr>
        </form>
        <form method = "post" action="room.php">
        <tr>
            <td><input type="submit" value="Kembali"></td>
        </tr>
        </form>
    </table>
</div>
</body>
</html>