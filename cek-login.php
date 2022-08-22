<?php
    session_start();
    include "koneksi.php";

    // mengambil data dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // menyeleksi data pada database
    $data = mysqli_query($kon, "SELECT * FROM user WHERE username = '$username' and password = '$password'");
    $cek = mysqli_num_rows($data);

    if ($cek > 0) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("Location:index.php");
    } else {
        header("Location:login.php?pesan=gagal");
    }
?>