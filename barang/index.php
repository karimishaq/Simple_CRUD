<?php
    include("../header.php");
?>
        <section id="isi">
            <a href="tambah.php"><button>Tambah</button></a>
            <table class="tabelku">
            <tr>
                <th>Id</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
            <?php
                include("../konek.php");
                $hasil=mysqli_query($koneksi, "SELECT * FROM barang");

                while($a=mysqli_fetch_array($hasil)){
            ?>
                    <tr>
                        <td><?=$a["id"]?></td>
                        <td><?=$a["nama"]?></td>
                        <td><?=$a["harga"]?></td>
                        <td>
                            <a href="<?="hapus.php?id=".$a["id"]?>"><button>Hapus</button></a>
                            <a href="<?="ubah.php?id=".$a["id"]?>"><button>Ubah</button></a>
                        </td>
                    <tr>
            <?php
                }
                mysqli_close($koneksi);
            ?>
            </table>
        </section>
<?php
    include("../footer.php")
?>