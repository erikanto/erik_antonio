<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style type="text/css">
        body{
            background-image: url("gambar.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Update Data Barang</h1>
        <?php
            include 'koneksi.php';
            $id=$_GET['id'];
            $data=mysqli_query($koneksi, "SELECT * FROM data_barang WHERE id='$id' ") or die(mysqli_error($koneksi));
            $baris=mysqli_fetch_array($data);
        ?>
        <div class="col-md-6">
        <form action="prosesupdate.php?id=<?php echo $id ?>" method="post">
        <label for="id">ID</label>
                <input type="number" class="form-control" name="id">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama">
                <label for="jumlah">Jumlah</label>
                <input type="text" class="form-control" name="jumlah">
                <button class="btn btn-primary mt-1" type="submit" name="button">Simpan</button>
        </form>
        </div>
    </div>
</body>
</html>