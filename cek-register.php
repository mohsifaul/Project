<?php  
    include 'koneksi.php';
    error_reporting(0);
    session_start();
    
    if (isset($_SESSION['username'])) {
        header("Location: index.php");
    }
    
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
    
        if ($password == $cpassword) {
            $sql = "SELECT username FROM user WHERE username ='$username'";
            $result = mysqli_query($kon, $sql);
            if (!$result->num_rows > 0) {
                $sql = "INSERT INTO user (username, password)
                        VALUES ('$username', '$password')";
                $result = mysqli_query($kon, $sql);
                if ($result) {
                    header("Location:login.php?pesan=berhasil");
                    $username = "";
                    $_POST['password'] = "";
                    $_POST['cpassword'] = "";
                } else {
                    header("Location:register.php?pesan=gagal");
                }
            } else {
                header("Location:register.php?pesan=terdaftar");
            }
        } else {
            header("Location:register.php?pesan=tidak_sama");
        }
    } else {
        echo 'gagal';
    }
?>