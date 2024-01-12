<?php
    include("../konek.php");
    $nama=mysqli_real_escape_string($koneksi, $_POST["nama"]);
    $email=$_POST["email"];
    $password=$_POST["password"];

    mysqli_query($koneksi, "INSERT INTO users(nama, email, password) VALUES('$nama', '$email', '$password')");
    header("location:index.php");
?>