<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
      h1{
        padding-top: 3rem;
      }
      form{
        padding-top: 6rem;
      }
      .btn{
        margin-top: 1rem;
      }
      </style>
    <title>Login</title>
  </head>
  <body>
    <div class="container">
      <?php
        include 'alert.php'
      ?>
      <h1 class="text-center">Login Admin</h1>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <form class="row-g-3" action="proseslogin.php" method="post">
              <div class="col-12">
                <label for="email">Nama</label>
                <input type="name" name="name" id="name" class="form-control">
              </div>
              <div class="col-12">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
              </div>
              <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary" name="button">Login</button>
              </div>
            </form>
          </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  </body>
</html>