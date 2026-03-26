<?php include '../config/koneksi.php'; ?>

<h2>Data Investasi</h2>

<table border="1">
<tr>
    <th>Nama</th>
    <th>Modal</th>
    <th>Nilai Sekarang</th>
    <th>Status</th>
</tr>

<?php
$data = mysqli_query($koneksi, "SELECT * FROM investasi");

while($d = mysqli_fetch_array($data)){
    $selisih = $d['nilai_sekarang'] - $d['modal'];

    if($selisih > 0){
        $status = "Naik";
    } elseif($selisih < 0){
        $status = "Turun";
    } else {
        $status = "Tetap";
    }
?>
<tr>
    <td><?= $d['nama_investasi']; ?></td>
    <td><?= $d['modal']; ?></td>
    <td><?= $d['nilai_sekarang']; ?></td>
    <td><?= $status; ?></td>
</tr>
<?php } ?>

</table>