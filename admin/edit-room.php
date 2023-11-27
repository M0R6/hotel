<h3> Edit Kamar </h3>
<?php 
include 'koneksi.php';
$idkamar = $_GET['idkamar'];
$data = mysqli_query($koneksi,"select * from room where idkamar='$idkamar'");
while($tampil = mysqli_fetch_array($data)){
    ?>
    <form method="post" action="edit-aksi-room.php">
    <table>
        <tr>
            <td> ID Kamar </td>
            <td> <input type="number" name="idkamar" value="<?php echo $tampil['idkamar']; ?>"> </td>
        </tr>
        <tr>
            <td> Tipe Kamar </td>
            <td> <input type="text" name="tipekamar" value="<?php echo $tampil['tipekamar']; ?>"> </td>
        </tr>
        <tr>
            <td>Harga</td>
            <td> <input type="text" name="harga" value="<?php echo $tampil['harga']; ?>"> </td>
        </tr>
        <tr>
            <td>Ketersediaan</td>
            <td> <input type="text" name="ketersediaan" value="<?php echo $tampil['ketersediaan']; ?>"> </td>
        </tr>
        <tr>
            <td><input type="submit" value="Simpan"></td>
        </tr>
</form>
<?php
}
?>