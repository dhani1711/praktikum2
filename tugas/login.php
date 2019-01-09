<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title></title>
    <link rel="stylesheet" href="master.css">
  </head>
  <body>
    <form action="login.php" method="post">
    <?php
      if(!isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username == "user" && $password == "pass"){
            echo "<h1>Selamat datang</h1>";
        }
        else {
            echo "<h1>Login Gagal</h1>";
        }
      }
        
    ?>
    </form>
  </body>
</html>