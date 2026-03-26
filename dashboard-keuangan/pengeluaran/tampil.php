<?php include '../config/koneksi.php'; ?>
<table border="1">
<tr>
    <th>Tanggal</th>
    <th>Kategori</th>
    <th>Jumlah</th>
    <th>Catatan</th>
    <th>Aksi</th>
</tr>

<?php
$data = mysqli_query($koneksi, "SELECT * FROM pengeluaran");

while($d = mysqli_fetch_array($data)){
?>
<tr>
    <td><?= $d['tanggal']; ?></td>
    <td><?= $d['kategori']; ?></td>
    <td><?= $d['jumlah']; ?></td>
    <td><?= $d['catatan']; ?></td>
    <td>
        <a href="edit.php?id=<?= $d['id']; ?>">Edit</a> |
        <a href="hapus.php?id=<?= $d['id']; ?>" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
    </td>
</tr>
<?php } ?>
</table>