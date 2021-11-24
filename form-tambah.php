<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>

<body>
    <header>
        <h3>Tambah Data Barang</h3>
    </header>

    <form action="proses_tambah.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama Barang: </label>
            <input type="text" name="nama_barang" />
        </p>
        <p>
            <label for="keterangan">Keterangan: </label>
            <textarea name="keterangan"></textarea>
        </p>
        <p>
            <label for="Harga">Harga: </label>
            <textarea name="harga"></textarea>
        </p>
        <p>
            <label for="Jumalh">Jumlah: </label>
            <textarea name="jumlah"></textarea>
        </p>
       
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>