<?php
    session_start();
    $nama=$_POST["nama"];
    $password=$_POST["password"];
    include("konek.php");
    $hasil=mysqli_query($koneksi, "SELECT * from users where nama='$nama' AND password='$password'");
    $data=mysqli_fetch_array($hasil);

    if($data==NULL)echo("gagal");
    else{
        session_start();
        $_SESSION["login"]=true;
        header("location:users");
    }
?>