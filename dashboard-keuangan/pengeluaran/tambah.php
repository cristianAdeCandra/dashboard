<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pengeluaran</title>
</head>
<body>

<h2>Tambah Pengeluaran</h2>

<form action="simpan.php" method="POST">
    Tanggal: <input type="date" name="tanggal"><br>
    Kategori: <input type="text" name="kategori"><br>
    Harga: <input type="number" name="jumlah"><br>
    Catatan: <textarea name="catatan"></textarea><br>
    <button type="submit">Simpan</button>
</form>

</body>
</html>