<?php
    include("../konek.php");
    $id=$_POST["id"];
    $nama=mysqli_real_escape_string($koneksi, $_POST["nama"]);
    $harga=$_POST["harga"];
    
    mysqli_query($koneksi, "UPDATE barang SET nama='$nama', harga='$harga' WHERE id='$id'");
    header("location:index.php");
?>