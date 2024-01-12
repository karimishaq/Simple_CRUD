<?php
    include("../header.php");
?>
        <form action="aksi_tambah.php" method="POST">
            <label for="">Nama : </label><br>
            <input type="text" name="nama"><br>
            <label for="">Email : </label><br>
            <input type="text" name="email"><br>
            <label for="">Password : </label><br>
            <input type="text" name="password"><br>
            <input type="submit" Value="Simpan">
        </form>
<?php
    include("../footer.php");
?>