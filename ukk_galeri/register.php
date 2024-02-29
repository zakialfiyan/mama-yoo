<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Registrasi</title>

  <style>
    .label {
      margin-left: 440px;
      padding: 7px;
      background-color: #F0FFFF;
      border: 3px;
      border-color: black !important;
      border-radius: 2px;
      
    }

    h1 {
      margin-top: 120px !important;
      margin-left: 450px;
      margin-bottom: 40px !important;
      color: black !important;
    }

    .btn {
      margin-left: 495px;
      margin-top: 20px;
    }

    .container {
      background-color: white;

    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="container">
  <h1>Registrasi</h1>
  <form action="proses_register.php" method="post">

    <table>
      <tr>
        <td></td>
        <td><input type="text" class="label" name="username" placeholder="Username"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="password" class="label" name="password" placeholder="Password"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="email" class="label" name="email" placeholder="Email"></td>
      </tr>
      <tr>
        <td> </td>
        <td><input type="text" class="label" name="namalengkap" placeholder="Nama"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="text" class="label" name="alamat" placeholder="Alamat"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Register" class="btn btn-primary"></td>
      </tr>
      <tr>
        <td></td>
        <td><a href="login.php" class="btn btn-outline-secondary">L o g i n</a></td>
      </tr>
    </table>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>