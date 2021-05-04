<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA</title>
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
        <h1>Tabel Data Barang</h1>
        <p><a href="tambah.php">Tambahkan Data</a></p>
        <table border="1" class="text-center">
            <thead>
                <th>ID</th>
                <th>Nama</th>
                <th>Jumlah</th>
                <th>Tindakan</th>
            </thead>
            <tbody>
            <?php
            include 'koneksi.php';
            $data=mysqli_query($koneksi, "SELECT * From data_barang") or die(mysqli_error($koneksi));
            foreach($data as $baris){ ?>
            <tr>
                <td><?php echo $baris['id'] ?></td>
                <td><?php echo $baris['nama'] ?></td>
                <td><?php echo $baris['jumlah'] ?></td>
                <td>
                    <a href="update.php?id=<?php echo $baris['id'] ?>" class="btn btn-primary">Update Data</a>
                    <a href="hapus.php?id=<?php echo $baris['id'] ?>" class="btn btn-primary">Hapus Data</a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
