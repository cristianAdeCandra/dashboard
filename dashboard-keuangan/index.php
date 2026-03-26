<?php
session_start();
include 'config/koneksi.php';

if (!isset($_SESSION['username'])) {
    header("Location: auth/login.php");
    exit;
}

// total pengeluaran
$query = mysqli_query($koneksi, "SELECT SUM(jumlah) as total FROM pengeluaran");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #53f0de;
            color: white;
        }
        .sidebar {
            height: 100vh;
            background: #53f0de;
            padding: 20px;
        }
        .card-custom {
            background: #53f0de;
            border: none;
            border-radius: 15px;
        }
    </style>
</head>

<body>

<div class="container-fluid">
<div class="row">

    <!-- SIDEBAR -->
    <div class="col-md-2 sidebar">
        <h4>💰 Keuangan</h4>
        <hr>
        <p>Halo, <?= $_SESSION['username']; ?></p>

        <a href="index.php" class="btn btn-outline-light w-100 mb-2">Dashboard</a>
        <a href="pengeluaran/tampil.php" class="btn btn-outline-light w-100 mb-2">Pengeluaran</a>
        <a href="investasi/tampil.php" class="btn btn-outline-light w-100 mb-2">Investasi</a>
        <a href="auth/logout.php" class="btn btn-danger w-100 mt-3">Logout</a>
    </div>

    <!-- CONTENT -->
    <div class="col-md-10 p-4">

        <h3>Dashboard</h3>

        <div class="row mt-4">

            <!-- TOTAL PENGELUARAN -->
            <div class="col-md-4">
                <div class="card card-custom p-3">
                    <h6>Total Pengeluaran</h6>
                    <h3>Rp <?= number_format($data['total'] ?? 0); ?></h3>
                </div>
            </div>

            <!-- CARD TAMBAHAN -->
            <div class="col-md-4">
                <div class="card card-custom p-3">
                    <h6>Status</h6>
                    <h5 class="text-success">Aktif</h5>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-custom p-3">
                    <h6>User</h6>
                    <h5><?= $_SESSION['username']; ?></h5>
                </div>
            </div>

        </div>

        <!-- GRAFIK -->
        <div class="card card-custom p-4 mt-4">
            <h5>Grafik Pengeluaran</h5>
            <canvas id="grafikPengeluaran"></canvas>
        </div>

    </div>

</div>
</div>

<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
$data_grafik = mysqli_query($koneksi, "
    SELECT kategori, SUM(jumlah) as total 
    FROM pengeluaran 
    GROUP BY kategori
");

$kategori = [];
$total = [];

while($d = mysqli_fetch_array($data_grafik)){
    $kategori[] = $d['kategori'];
    $total[] = $d['total'];
}
?>

<script>
const ctx = document.getElementById('grafikPengeluaran');

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?= json_encode($kategori); ?>,
        datasets: [{
            label: 'Pengeluaran',
            data: <?= json_encode($total); ?>
        }]
    }
});
</script>

</body>
</html>