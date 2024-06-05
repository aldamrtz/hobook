<?php
    $koneksi = mysqli_connect("localhost", "root", "", "hobook_db");

    $namalengkap = $_POST['namalengkap'];
    $nomortelepon = $_POST['nomortelepon'];
    $email = $_POST['email'];
    $checkin = $_POST['checkin'];
    $jumlahdewasa = $_POST['jumlahdewasa'];
    $jumlahanakanak = $_POST['jumlahanakanak'];
    $jumlahmalam = $_POST['jumlahmalam'];
    $tipekamar = $_POST['tipekamar'];

    $query = "INSERT INTO reservasi (namalengkap, nomortelepon, email, checkin, jumlahdewasa, jumlahanakanak, jumlahmalam, tipekamar) VALUES ('$namalengkap', '$nomortelepon', '$email', '$checkin', '$jumlahdewasa', '$jumlahanakanak', '$jumlahmalam', '$tipekamar')";
    mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

    header("location: ReservasiOnline.html");
?>
