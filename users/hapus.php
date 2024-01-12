<?php
    $id=$_GET["id"];
    include("../konek.php");
    mysqli_query($koneksi, "DELETE FROM users WHERE id='$id'");
    header("location:index.php");
?>