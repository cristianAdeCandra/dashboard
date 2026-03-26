<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
    <a class="navbar-brand" href="#">Keuangan</a>
    <div>
        <a href="pengeluaran/tambah.php" class="btn btn-success">+ Pengeluaran</a>
        <a href="investasi/tambah.php" class="btn btn-primary">+ Investasi</a>
    </div>
</div>

<div class="text-white">
    Halo, <?= $_SESSION['username']; ?> |
    <a href="auth/logout.php" class="btn btn-danger btn-sm">Logout</a>
</div>
</nav>
