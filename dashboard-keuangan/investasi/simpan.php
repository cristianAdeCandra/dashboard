<?php
include '../config/koneksi.php';

$nama = $_POST['nama'];
$modal = $_POST['modal'];
$nilai = $_POST['nilai'];
$tanggal = $_POST['tanggal'];

mysqli_query($koneksi, "INSERT INTO investasi 
VALUES('', '$nama', '$modal', '$nilai', '$tanggal')");

header("Location: tampil.php");
?>