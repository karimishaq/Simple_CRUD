<?php
    include("../header.php");
?>
        <form action="aksi_ubah.php" method="POST">
            <?php
                $id=$_GET["id"];
                include("../konek.php");
                $hasil=mysqli_query($koneksi, "SELECT * FROM users WHERE id='$id'");
                $data=mysqli_fetch_array($hasil);
            ?>
            <input type="hidden" name="id" value="<?=$id?>">
            <label for="">Nama : </label><br>
            <input type="text" name="nama" value="<?=$data['nama']?>"><br>
            <label for="">Email : </label><br>
            <input type="text" name="email" value="<?=$data['email']?>"><br>
            <label for="">Password : </label><br>
            <input type="text" name="password" value="<?=$data['password']?>"><br>
            <input type="submit" Value="Simpan">
        </form>
    </body>
</html>