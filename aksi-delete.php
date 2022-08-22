<?php
    include "./koneksi.php";
    if (isset($_POST['id'])) {
        $id = htmlspecialchars($_POST["id"]);
        $sql = "DELETE FROM tb_siswa WHERE id = '$id'";
        $hasilM = mysqli_query($kon, $sql);
        if ($hasilM) {
            header("Location:./pages/mahasiswa-data.php?delete=1");
        } else {
            echo ("<div class = 'alert alert-danger'> Data gagal dihapus.</div>");
        }
    } else{
        die("Akses Dilarang");
    } 
?>