<?php
include 'koneksi.php';

session_start();

$us = $_POST['username'];
$pas = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from login where username='$us' and password='$pas'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $_SESSION['username'] = $user;
    $_SESSION['password'] = $pass;
    $_SESSION['status'] = "login";
    header('location:Index.html');
} else {
    header("location:login.php?pesan=gagal");
}
?>
    