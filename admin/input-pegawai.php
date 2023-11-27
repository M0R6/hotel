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
<form method = "post" action="input-aksi-pegawai.php">
    <table>
    <tr>
            <td> ID Pegawai </td>
            <td> <input type="number" name="idpgw"> </td>
        </tr>
        <tr>
            <td> Nama Pegawai </td>
            <td> <input type="text" name="namapgw"> </td>
        </tr>
        <tr>
            <td> Shift </td>
            <td> <input type="text" name="shift"> </td>
        </tr>
        <tr>
            <td> Absensi Saat Ini </td>
            <td> <input type="text" name="absensi_rn"> </td>
        </tr>
        <tr>
            <td><input type="submit" value="Simpan"></td>
        </tr>
        </form>
    </table>
</div>
</body>
</html>