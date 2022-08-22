<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    SISAKA - Sistem Akademik 
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
  <style>
    .avatar-upload {
    position: relative;
    max-width: 205px;
    margin: 10px auto;
    }
    .avatar-upload .avatar-edit {
    position: absolute;
    right: 12px;
    z-index: 1;
    top: 10px;
    }
    .avatar-upload .avatar-edit input {
    display: none;
    }
    .avatar-upload .avatar-edit input + label {
    display: inline-block;
    width: 34px;
    height: 34px;
    margin-bottom: 0;
    border-radius: 100%;
    background: #ffffff;
    border: 1px solid transparent;
    box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
    cursor: pointer;
    font-weight: normal;
    transition: all 0.2s ease-in-out;
    }
    .avatar-upload .avatar-edit input + label:hover {
    background: #f1f1f1;
    border-color: #d6d6d6;
    }
    .avatar-upload .avatar-edit input + label:after {
    content: "\f040";
    font-family: "FontAwesome";
    color: #757575;
    position: absolute;
    top: 10px;
    left: 0;
    right: 0;
    text-align: center;
    margin: auto;
    }
    .avatar-upload .avatar-preview {
    width: 192px;
    height: 192px;
    position: relative;
    border-radius: 100%;
    border: 6px solid #f8f8f8;
    box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
    }
    .avatar-upload .avatar-preview > div {
    width: 100%;
    height: 100%;
    border-radius: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    }
    ::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 5px;
  height: 5px;
}
.form-group{
              padding-left:2rem;
              padding-right:2rem;
            }
</style>
</head>

<body class="g-sidenav-show  bg-gray-100">
    <?php
      session_start();
      if ($_SESSION['status']!="login") {
          header("Location:login.php?pesan=belum_login");
      }
    ?>
    <?php include "sidenav.php";?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php 
        include "topnav.php"
    ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <?php 
        include "../alert.php"; 
        $opsi_agama = ["Islam", "Katolik", "Hindu", "Budha", "Konghucu", "Protestan"];
        
      ?>
      <div class="row">
        <div class="col-12">
        <?php
            include "../koneksi.php";
  
            function input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
                // cek apakah data kiriman form dari method post 
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nama = input($_POST["nama"]);
                $asal_sekolah = input($_POST["asal_sekolah"]);
                $agama = input($_POST["agama"]);
                $jenis_kelamin = input($_POST["j_kelamin"]);
                $alamat = input($_POST["alamat"]);
                $nama_file = $_FILES['foto']['name'];
                $file_tmp = $_FILES['foto']['tmp_name'];
            // query input ke dalam tabel siswa
                $sql = "INSERT INTO tb_siswa (nama, alamat, j_kelamin, agama, asal_sekolah, foto) 
                        values ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$asal_sekolah', '$nama_file')";
                $hasil = mysqli_query($kon, $sql);
                if ($hasil) {
                    move_uploaded_file($file_tmp, '../gambar/mahasiswa/'.$nama_file);
                    echo("<script>location.href = './mahasiswa-data.php?success=1';</script>");
                  } else {
                    echo("<div class = 'alert alert-danger' role='alert'> Data Gagal Disimpan!! </div>");
                  }
                }
        ?>
          <div class="card mb-4">
            <div class="card-header pb-0">
              <div class="d-flex justify-content-between align-items-center">
                <h4>Daftar Siswa Baru</h4>
              </div>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
            <form role="form text-left text-lg" action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <div class="avatar-upload">
                    <div class="avatar-edit">
                      <input type='file' id="imageUpload" name="foto" accept=".png, .jpg, .jpeg" />
                      <label for="imageUpload"></label>
                    </div>
                    <div class="avatar-preview">
                      <div id="imagePreview" style="background-image: url(<?php echo '../gambar/mahasiswa/'.$data['foto']; ?>);">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label>Nama Siswa</label>
                  <div class="input-group mb-3">
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan nama siswa">
                  </div>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <div class="input-group mb-2">
                        <div class="form-check me-auto">
                            <input class="form-check-input" type="radio" name="j_kelamin" value="Laki - Laki">
                            <label class="form-check-label">Laki - Laki</label>
                        </div>
                        <div class="form-check me-auto">
                            <input class="form-check-input" type="radio" name="j_kelamin" value="Perempuan">
                            <label class="form-check-label">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Asal Sekolah</label>
                    <div class="input-group mb-3">
                        <input type="text" name="asal_sekolah" class="form-control" placeholder="Masukkan Sekolah Asal">
                    </div>
                </div>
                <div class="form-group">
                  <label>Agama</label>
                  <div class="input-group mb-3">
                    <select class="form-select" aria-label="Default select example" name="agama">
                    <?php                                                
                          echo "<option selected>Pilih Agama</option>";
                          foreach ($opsi_agama as $key => $value) {
                            echo "<option value ='$value'> $value </option>";
                          }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <div class="input-group mb-3">
                    <textarea name="alamat" class="form-control" placeholder="Masukkan alamat" row="3"></textarea>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" class="btn bg-gradient-success btn-lg mt-4 mb-3 w-40 ms-4">Simpan</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
    
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.5"></script>
  <script src="../assets/js/jquery/jquery.min.js"></script>

  <script>
        $(document).ready(function () {
            $('.deletebtn').on('click', function () {
                $('#deletemodal').modal('show');
                $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();
                console.log(data);
                let dataNim = $(this).data('nim');
                let dataNama = $(this).data('nama');
                $("#set-nim").html(dataNama);
                $('#delete_id').val(dataNim);
            });
        });
  </script>

  <script>
         const image_input = document.querySelector("#imageUpload");

        image_input.addEventListener("change", function() {
        const reader = new FileReader();
        reader.addEventListener("load", () => {
            const uploaded_image = reader.result;
            document.querySelector("#imagePreview").style.backgroundImage = `url(${uploaded_image})`;
        });
        reader.readAsDataURL(this.files[0]);
        });
    </script>
</body>

</html>