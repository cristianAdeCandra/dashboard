<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark d-flex justify-content-center align-items-center" style="height:100vh;">

<div class="card p-4" style="width:300px;">
    <h3 class="text-center">Login</h3>

    <form action="proses_login.php" method="POST">
        <input type="text" name="username" class="form-control mb-2" placeholder="Username">
        <input type="password" name="password" class="form-control mb-2" placeholder="Password">
        <button class="btn btn-primary w-100">Login</button>
    </form>

    <a href="register.php" class="text-center mt-2">Daftar</a>
</div>

</body>
</html>