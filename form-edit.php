<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: index.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM produk WHERE id=$id";
$query = mysqli_query($db, $sql);
$produk = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>

<body>
    <header>
        <h3>Tambah Data Barang</h3>
    </header>

    <form action="proses_edit.php" method="POST">

        <fieldset>
        
        <p>
            <input type="hidden" name="id" value="<?php echo $produk['id'] ?>" />
        </p>

        <p>
            <label for="nama">Nama Barang: </label>
            <input type="text" name="nama_barang" value="<?php echo $produk['nama_barang'] ?>" />
        </p>
        <p>
            <label for="keterangan" >Keterangan: </label>
            <textarea name="keterangan" > <?php echo $produk['keterangan'] ?> </textarea>
        </p>
        <p>
            <label for="Harga">Harga: </label>
            <textarea name="harga">  <?php echo $produk['harga'] ?> </textarea>
        </p>
        <p>
            <label for="Jumalh">Jumlah: </label>
            <textarea name="jumlah">  <?php echo $produk['jumlah'] ?> </textarea>
        </p>
       
        <p>
            <input type="submit" value="Simpan" name="simpan" />
        </p>

        </fieldset>

    </form>

    </body>
</html>