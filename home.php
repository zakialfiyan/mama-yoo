<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            background-color: white;
        }

        h2 {
            margin-left: 530px;
            margin-top: 30px;
            color: black;
            margin-bottom: 20px;
        }

        p {
            margin-left: 600px;
            color: black;
            margin-bottom: 30px;
        }

        .card {
            width: 1280px !important;
            margin-left: 20px;
            margin-right: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <h2>HALAMAN BERANDA</h2>
    <p>Selamat datang <b><?= $_SESSION['namalengkap'] ?></b></p>

    <div class="card" style="width: 18rem;">

        <div class="card-body">
            <h5 class="card-title">Menuju Halaman Galeri</h5>
            <p class="card-text"></p>
            <a href="index.php" class="btn btn-outline-primary">Galeri</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">

        <div class="card-body">
            <h5 class="card-title">Menuju Halaman Album</h5>
            <p class="card-text"></p>
            <a href="album.php" class="btn btn-outline-warning">Album</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">

        <div class="card-body">
            <h5 class="card-title">Menuju Halaman Foto</h5>
            <p class="card-text"></p>
            <a href="foto.php" class="btn btn-outline-success">Foto</a>
        </div>
    </div>
    <div class="card" style="width: 18rem;">

        <div class="card-body">
            <h5 class="card-title">LOGOUT</h5>
            <p class="card-text"></p>
            <a href="logout.php" class="btn btn-danger">LOGOUT</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>