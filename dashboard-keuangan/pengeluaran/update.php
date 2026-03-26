<?php
include '../config/koneksi.php';

$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$kategori = $_POST['kategori'];
$jumlah = $_POST['jumlah'];
$catatan = $_POST['catatan'];

mysqli_query($koneksi, "UPDATE pengeluaran SET 
tanggal='$tanggal',
kategori='$kategori',
jumlah='$jumlah',
catatan='$catatan'
WHERE id='$id'");

header("Location: tampil.php");
?>