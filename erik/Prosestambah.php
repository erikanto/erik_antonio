<?php
include 'koneksi.php';

$id=$_POST['id'];
$nama=$_POST['nama'];
$jumlah=$_POST['jumlah'];

$query=mysqli_query($koneksi,"INSERT INTO data_barang(id, nama, jumlah) VALUES ('$id', '$nama','$jumlah')")
or die(mysqli_error($koneksi));

if ($query){
    header("Location: tambah.php");
}else{
    echo"Gagal Input Data";
}

?>