<?php
    include("../header.php");
?>
        <form action="aksi_tambah.php" method="POST">
            <label for="">Nama : </label><br>
            <input type="text" name="nama"><br>
            <label for="">Harga : </label><br>
            <input type="text" name="harga"><br>
            <input type="submit" Value="Simpan">
        </form>
<?php
    include("../footer.php");
?>