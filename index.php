<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>

<body>
    <header>
        <h3>Daftar Produk</h3>
    </header>

    <nav>
        <a href="form-tambah.php">[+] Tambah Produk Baru</a>
    </nav>

    <br>
    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran siswa baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM produk";
        $query = mysqli_query($db, $sql);

        while($barang = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$barang['id']."</td>";
            echo "<td>".$barang['nama_barang']."</td>";
            echo "<td>".$barang['keterangan']."</td>";
            echo "<td>".$barang['harga']."</td>";
            echo "<td>".$barang['jumlah']."</td>";

            echo "<td>";
            echo "<a href='form-read.php?id=".$barang['id']."'>Read</a> | ";
            echo "<a href='form-edit.php?id=".$barang['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$barang['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>