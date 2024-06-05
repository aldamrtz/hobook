<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "hobook_db");

if(isset($_POST["register"])){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
  
    // Query untuk menyimpan data pengguna ke dalam tabel user
    $query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
    mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

    header("location: login.php");
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="styleLogin.css">
    </head>
    <body>
        <div class="container">
          <h1>DAFTAR HOBOOK</h1>
            <form method="POST" action="">
                <label for="username">Username</label>
                <br>
                <input name="username" id="username" type="text">
                <br>
                <label for="email">Email</label>
                <br>
                <input name="email" id="email" type="text">
                <br>
                <label for="Password">Password</label>
                <br>
                <input name="password" id="password" type="password">
                <br>
                <button type="submit" name="register">Daftar</button>
                <p> Sudah punya akun? </p>
                  <a href="login.php">Login di sini</a>
            </form>
        </div>
    </body>
</html>