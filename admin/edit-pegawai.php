<h3> Edit Data Pegawai </h3>
<?php 

session_start();
if (!isset($_SESSION['nama']) || empty($_SESSION['nama'])) {
	header("location: ../index.php"); // Ganti "index.php" dengan halaman login Anda
	exit();
 } 

include '../koneksi.php';
$idpgw = $_GET['idpgw'];
$data = mysqli_query($koneksi,"select * from pegawai where idpgw='$idpgw'");
while($tampil = mysqli_fetch_array($data)){
    ?>
    <form method="post" action="edit-aksi-pegawai.php">
    <table>
        <tr>
            <td> ID Pegawai </td>
            <td> <input type="number" name="idpgw" value="<?php echo $tampil['idpgw']; ?>"> </td>
        </tr>
        <tr>
            <td> Nama Pegawai </td>
            <td> <input type="text" name="namapgw" value="<?php echo $tampil['namapgw']; ?>"> </td>
        </tr>
        <tr>
            <td> Shift </td>
            <td> <input type="text" name="shift" value="<?php echo $tampil['shift']; ?>"> </td>
        </tr>
        <tr>
            <td> Absensi Saat Ini </td>
            <td> <input type="text" name="absensi_rn" value="<?php echo $tampil['absensi_rn']; ?>"> </td>
        </tr>
        <tr>
            <td><input type="submit" value="Simpan"></td>
        </tr>
</form>
<?php
}
?>