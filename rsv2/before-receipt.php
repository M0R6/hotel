<?php
    include "koneksi.php";
    $data = mysqli_query($koneksi,"select * from reservasi");
    while($d=mysqli_fetch_array($data)) 
    $pusing = $d['idrsv'];
    header("location:receipt.php?idrsv=$pusing");
?>