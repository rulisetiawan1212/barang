<?php
session_start();
// Jika bisa login maka ke index.php
if (isset($_SESSION['login'])) {
  header('location:index.php');
  exit;
}

// Memanggil atau membutuhkan file function.php
require 'functions.php';

// jika tombol yang bernama login diklik
if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  // password menggunakan md5

  // mengambil data
  $result = mysqli_query($mysqli, "SELECT * FROM admin WHERE username = '$username' ");
  $result = mysqli_query($mysqli, "SELECT * FROM admin WHERE password = '$password' ");

  $cek = mysqli_num_rows($result);

  if ($cek > 0) {
    $_SESSION['login'] = true;

    header('location:index.php');
    exit;
  }

  $error = true;
}

?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Login</title>
</head>

<body>


  <!-- Ini Error jika tidak bisa login -->
  <?php if (isset($error)) : ?>
    <?php echo '<script>alert("Username atau Password Salah!");</script>'; ?>
  <?php endif; ?>
  <!-- form login -->

  <div class="container">
    <H2> Login | Admin </H2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      <div class="form-group">
        <input type="text" placeholder="Masukkan Username" name="username" autocomplete="off" required>
      </div>
      <br>
      <div class="form-group">
        <input type="password" placeholder="Masukkan Password" name="password" autocomplete="off" required>
      </div>
      <br>
      <input type="submit" value="Login" name="login">
      <br>
      <br>

      <center><a href="register.php">Register</a> </center>
    </form>
  </div>


</body>

</html>