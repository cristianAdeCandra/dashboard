<?php
include '../config/koneksi.php';

$tanggal = $_POST['tanggal'];
$kategori = $_POST['kategori'];
$harga = $_POST['jumlah'];
$catatan = $_POST['catatan'];

mysqli_query($koneksi, "INSERT INTO pengeluaran 
VALUES('', '$tanggal', '$kategori', '$harga', '$catatan')");

header("Location: tampil.php");
?>