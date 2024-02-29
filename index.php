<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <!-- <h1 style="text-align: center; margin-top: 20px;"></h1> -->
  <?php
  session_start();
  if (!isset($_SESSION['userid'])) {
  ?>
    <ul>
      <li><a href="register.php">Register</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>
  <?php
  } else {
  ?>


    <nav class="navbar sticky-top navbar-expand-lg bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><?= $_SESSION['namalengkap'] ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="album.php">Album</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="foto.php">Foto</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Akun
              </a>
            
              <ul class="dropdown-menu">
                <li class="dropdown-item">
                  <a class="nav-link active" href="logout.php">
                    Logout</a>
                </li>
              </ul>
            </li>

          </ul>

        </div>
      </div>
    </nav>


























  <?php
  }
  ?>

  <table class="table  table-bordered table-hover " style="width : 720px justify-center">
    <thead class="table" style="text-align: center;">
      <tr>
        
        <th scope="col">Judul</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Foto</th>
        <th scope="col">Uploader</th>
        <th scope="col">Jumlah Like</th>
        <th scope="col">Aksi</th>
      </tr>
      <?php
      include "koneksi.php";
      $sql = mysqli_query($conn, "select * from foto,user where foto.userid=user.userid");
      while ($data = mysqli_fetch_array($sql)) {
      ?>
    </thead>
    <tbody>
      <tr>
        
        <td><?= $data['judulfoto'] ?></td>
        <td><?= $data['deskripsifoto'] ?></td>
        <td>
          <img src="gambar/<?= $data['lokasifile'] ?>" width="200px">
        </td>
        <td><?= $data['namalengkap'] ?></td>
        <td>
          <?php
          $fotoid = $data['fotoid'];
          $sql2 = mysqli_query($conn, "select * from likefoto where fotoid='$fotoid'");
          echo mysqli_num_rows($sql2);
          ?>
        </td>
        <td>
          <a href="like.php?fotoid=<?= $data['fotoid'] ?>" class="btn btn-danger">Like</a>


          <a href="komentar.php?fotoid=<?= $data['fotoid'] ?>" class="btn btn-dark">Komentar</a>
        </td>
      </tr>
    </tbody>
  <?php
      }
  ?>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>