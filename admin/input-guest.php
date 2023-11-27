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
                    <li> <a href="guests.php"> Tamu </a> </li>
                </ul>
        </nav>
<h3> <br><br> Tambahkan Data Tamu </h3>
<form method = "post" action="input-aksi-guest.php">
    <table>
        <tr>
            <td> ID Order </td>
            <td> <input type="number" name="idorder"> </td>
        </tr>
        <tr>
            <td> Waktu Pemesanan </td>
            <td> <input type="datetime-local" name="ordertime"> </td>
        </tr>
        <tr>
            <td> Nama Pemesan </td>
            <td> <input type="text" name="namatamu"> </td>
        </tr>
        <tr>
            <td> ID Kamar </td>
            <td> <input type="number" name="idkamar"> </td>
        </tr>
        <tr>
            <td> Harga Permalam </td>
            <td> <input type="number" name="harga"> </td>
        </tr>
        <tr>
            <td> Night(s) </td>
            <td> <input type="number" name="nights"> </td>
        </tr>
        <tr>
            <td> Check-in Date </td>
            <td> <input type="datetime-local" name="checkin"> </td>
        </tr>
        <tr>
            <td> Check-out Date </td>
            <td> <input type="datetime-local" name="checkout"> </td>
        </tr>
        <tr>
            <td> totalharga </td>
            <td> <input type="number" name="totalharga" placeholder="auto-calculate when it's saved"> </td>
        </tr>
        <tr>
            <td> Status </td>
            <td> <input type="text" name="status" placeholder="tidak perlu diisi"> </td>
        </tr>
        <tr>
            <td><input type="submit" value="Simpan"></td>
        </tr>
        </form>
    </table>
</div>
</body>
</html>