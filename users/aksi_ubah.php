<?php
    include("../konek.php");
    $id=$_POST["id"];
    $nama=mysqli_real_escape_string($koneksi, $_POST["nama"]);
    $email=$_POST["email"];
    $password=$_POST["password"];
    
    mysqli_query($koneksi, "UPDATE users SET nama='$nama', email='$email', password='$password' WHERE id='$id'");
    header("location:index.php");
?>