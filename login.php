<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Login</title>
  <style>
    .label {
      margin-left: 440px;
      padding: 7px;
      background-color: #F0FFFF;
      border: 3px;
      border-radius: 2px;
      border-color: black !important;
    }

    h1 {
      margin-top: 120px !important;
      margin-left: 485px;
      margin-bottom: 40px !important;
      color: black !important;
    }

    .btn {
      margin-left: 493px;
      margin-top: 20px;
    }

    .container {
      background-color: white;

    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="container">
  <h1>Login</h1>
  <form action="proses_login.php" method="post">
    <table>
      <tr>
        <td></td>
        <td><input type="text" name="username" class="label" placeholder="Username"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="password" name="password" class="label" placeholder="Password"></td>
      </tr>

      <tr>
        <td></td>
        <td><input type="submit" value="L o g i n" class="btn btn-primary"></td>
      </tr>
      <tr>
        <td></td>
        <td><a href="register.php" class="btn btn-outline-secondary">Register</a>
      </tr>
    </table>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>


<!-- <!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Login</title>
  <style>
    body {
      background-color: #f8f9fa;
      padding: 20px;
      width: ;
      
    }
    .container {
      width: 500px !important;
      margin-top: 20px;;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-label {
      font-weight: bold;
      margin-left: 20px;
    }
    .form-control {
      border-radius: ;
      width: 350px !important;
      margin-left: 50px;
    }
    .btn-login {
      border-radius: 5px;
      margin-left: 180px;
      margin-top: 10px;
    }
    .blm {
        margin-top: 40px;
        margin-left: 50px;
    }

  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container">
  <h2 class="text-center mb-2 mt-3">Login</h2>
  <form action="proses_register.php" method="post">
    <div class="row mb-3"> 
      <div class="col-12">
        <label for="exampleInputEmail1" class="form-label"></label>
        <input type="text" class="form-control" id="" aria-describedby="" name="username" placeholder="Username">
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-12">
        <label for="exampleInputPassword1" class="form-label"></label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
      </div>
    </div>
    <div class="row mb-3">
      <div class="col-12">
        <button type="submit" class="btn btn-info btn-login">Login</button>
        <br>
        <a href="register.php" class="blm">Belum memiliki akun?</a>
      </div>
    </div>
    
  </form> 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html> -->