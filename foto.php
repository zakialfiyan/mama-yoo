<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Foto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<style>
        .alb {
            padding: 5px;
            margin-top: 12px;
            border-radius: 5px;
        }

        .btn {
            margin-left: 20px;
        }

        .table {
            width: 90%;
            margin-left: 40px;
        }
</style>
</head>
<body>
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
                                <a class="nav-link active" href="logout.php">Logout</a>
                            </li>
                        </ul>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <form action="tambah_foto.php" method="post" enctype="multipart/form-data" style="margin-top: 20px; margin-left: 40px; margin-bottom: 20px;">
        <table>
            <h3>Tambah Foto</h3>
            <tr>
            <td></td>
                <td><input type="text" name="judulfoto" placeholder="Nama Foto" class="alb" style="margin-right: 20px;"></td>
                <td></td>
                <td><input type="text" name="deskripsifoto" placeholder="Deskripsi" class="alb" style="margin-right: 20px;"></td>
                
            </tr>
        </table>
        
        
        <td><input type="file" name="lokasifile" class="lok" style="margin-top: 20px; margin-left: 5px; "></td>
        
            <td class="fto">Album</td>
               <td>
                   <select name="albumid">
                   <?php
                       include "koneksi.php";
                       $userid=$_SESSION['userid'];
                       $sql=mysqli_query($conn,"select * from album where userid='$userid'");
                       while($data=mysqli_fetch_array($sql)){
                   ?>
                           <option value="<?=$data['albumid']?>"><?=$data['namaalbum']?></option>
                   <?php
                       }
                   ?>
                   </select>
                   
               </td>
            </tr>
       
               
       

        </table>
        
                
                <br>
                <tr>
                <td><input type="submit" value="Tambah" style="margin-left: 5px; margin-top:20px;" class="btn btn-outline-primary"></td>
                </tr>
    
    </form>

    <table border="1" cellpadding=5 cellspacing=0 class="table table-hover table-bordered">
        <tr>
            <thead class="table-light">
           
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Tanggal Unggah</th>
            <th>Foto</th>
            <th>Album</th>
            <th>Disukai</th>
            <th>Aksi</th>

            </thead>
            
        </tr>
        <?php
            include "koneksi.php";
            $userid=$_SESSION['userid'];
            $sql=mysqli_query($conn,"select * from foto,album where foto.userid='$userid' and foto.albumid=album.albumid");
            while($data=mysqli_fetch_array($sql)){
        ?>
                <tr>
                    
                    <td><?=$data['judulfoto']?></td>
                    <td><?=$data['deskripsifoto']?></td>
                    <td><?=$data['tanggalunggah']?></td>
                    <td>
                        <img src="gambar/<?=$data['lokasifile']?>" width="200px">
                    </td>
                    <td><?=$data['namaalbum']?></td>
                    <td>
                        <?php
                            $fotoid=$data['fotoid'];
                            $sql2=mysqli_query($conn,"select * from likefoto where fotoid='$fotoid'");
                            echo mysqli_num_rows($sql2);
                        ?>
                    </td>
                    <td>
                        <a href="hapus_foto.php?fotoid=<?=$data['fotoid']?>" class="btn btn-danger">Hapus</a>
                        <a href="edit_foto.php?fotoid=<?=$data['fotoid']?>" class="btn btn-info">Edit</a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>