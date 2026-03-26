<?php
include '../config/koneksi.php';

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM pengeluaran WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<h2>Edit Pengeluaran</h2>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?= $d['id']; ?>">

    Tanggal: <input type="date" name="tanggal" value="<?= $d['tanggal']; ?>"><br>
    Kategori: <input type="text" name="kategori" value="<?= $d['kategori']; ?>"><br>
    Jumlah: <input type="number" name="jumlah" value="<?= $d['jumlah']; ?>"><br>
    Catatan: <textarea name="catatan"><?= $d['catatan']; ?></textarea><br>

    <button type="submit">Update</button>
</form>