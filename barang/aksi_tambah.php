<?php
    include("../konek.php");
    $nama=mysqli_real_escape_string($koneksi, $_POST["nama"]);
    $harga=$_POST["harga"];

    mysqli_query($koneksi, "INSERT INTO barang(nama, harga) VALUES('$nama', '$harga')");
    header("location:index.php");
?>