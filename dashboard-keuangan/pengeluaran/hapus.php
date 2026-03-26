<?php
include '../config/koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM pengeluaran WHERE id='$id'");

header("Location: tampil.php");
?>