<?php
    session_start();

    $koneksi = mysqli_connect("localhost", "root", "", "hobook_db");

    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = mysqli_query($koneksi, $query);

        if(mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['status'] = "login";
            header('location: index.html');
        } else {
            header("location: login.php?pesan=gagal");
        }
    }
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="styleLogin.css">
    </head>
    <body>
        <div class="container">
          <h1>WELCOME TO HOBOOK</h1>
            <form method="POST" action="">
                <input name="login" type="submit" value="LOGIN" >
                <label for="username">Username</label>
                <br>
                <input name="username" id="username" type="text">
                <br>
                <label for="password">Password</label>
                <br>
                <input name="password" id="password" type="password">
                <br>
                <?php

                if(isset($_GET["pesan"])): ?>
                <p>Email dan Password yang anda masukan salah !!!</p>
                <?php endif;
                ?>
                <button type="submit" name="login">Log In</button>
                <p> Belum punya akun?
                  <a href="daftar.php">Daftar di sini</a>
                </p>
            </form>
        </div>
    </body>
</html> 