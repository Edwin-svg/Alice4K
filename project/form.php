<?php 
 
include 'koneksi.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: index.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
 
?>

<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- My css -->
    <link rel="stylesheet" href="form.css">
    <!-- Akhir My Css -->

    
    <title>Alice Peduli</title>
  </head>
  <body>

    <!-- Form Login dan Daftar -->

    <div class="container">
      <div class="blueBg">
        <div class="box signin">
          <h2>Alredy Have An Account ?</h2>
          <button class="signinBtn">Sign in</button>
        </div>
        <div class="box signup">
          <h2>Don't Have An Account ?</h2>
          <button class="signupBtn">Sign up</button>
        </div>
      </div>
      <div class="formBx">
        <div class="form signinForm">
          <form action="" method="POST">
            <h3>Sign In</h3>
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="submit" >
            <a href="#" class="forgot">Forgot Password</a>
          </form>
        </div>

        <div class="form signup1Form">
          <form action="" method="POST">
            <h3>Sign Up</h3>
            <input type="text" name="username" placeholder="Username">
            <input type="email" name="email" placeholder="Email Address">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="cpassword" placeholder="Confirm Password">
            <input type="submit" name="regist" value="Register">
          </form>
          <?php 
          if (isset($_POST['regist']))
          {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $cpassword =$_POST['cpassword'];
         
            if ($password == $cpassword) {
                $sql = "SELECT * FROM users WHERE email='$email'";
                $result = mysqli_query($conn, $sql);
                if (!$result->num_rows > 0) {
                    $sql = "INSERT INTO users (username, email, password)
                            VALUES ('$username', '$email', '$password')";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                        $username = "";
                        $email = "";
                        $_POST['password'] = "";
                        $_POST['cpassword'] = "";
                    } else {
                        echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
                    }
                } else {
                    echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
                }
                 
            } else {
                echo "<script>alert('Password Tidak Sesuai')</script>";
            }
          }
          ?>
        </div>
      </div>
    </div>

    <!-- Akhir Form Login Dan Daftar -->



    <!-- java script -->
    <script>
      const signinBtn = document.querySelector('.signinBtn');
      const signupBtn = document.querySelector('.signupBtn');
      const formBx = document.querySelector('.formBx');
      const body = document.querySelector('body');

      signupBtn.onclick = function(){
        formBx.classList.add('active')
        body.classList.add('active')
      }

      signinBtn.onclick = function(){
        formBx.classList.remove('active')
        body.classList.remove('active')
      }
    </script>

    <!-- akhir javascript -->
  </body>
  </html>