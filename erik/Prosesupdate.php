<?php
include 'koneksi.php';
$idlama=$_GET['id'];
$id=$_POST['id'];
$nama=$_POST['nama'];
$jumlah=$_POST['jumlah'];

$query=mysqli_query($koneksi, "UPDATE data_barang SET id='$id', nama='$nama', jumlah='$jumlah' WHERE id='$idlama' ")
or die(mysqli_error($koneksi));

if($query){
    header("Location: index.php");
} else{
    echo "Data Gagal di Update";
}
?>