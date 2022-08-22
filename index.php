<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title> SISAKA - Sistem Akademik </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
    <?php
      session_start();
      if ($_SESSION['status']!="login") {
          header("Location:login.php?pesan=belum_login");
      }
    ?>
    <?php include "pages/index-sidenav.php";?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php include "pages/topnav.php"?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <!-- Total Data -->
    <?php
      include "koneksi.php";
      $siswa = mysqli_query($kon,"SELECT COUNT(id) AS Jumlah from tb_siswa");
      $hasil = mysqli_fetch_array($siswa);
    ?>
      <div class="row">
        <div class="col-xl-8 col-sm-6 mb-xl-0 mb-2">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Pendaftar Baru</p>
                    <h5 class="font-weight-bolder mb-0">
                      <?php echo "{$hasil['Jumlah']}"; ?>
                    </h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-info shadow text-center border-radius-md">
                    <i class="fas fa-users text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-4 mb-xl-0 mb-2">
          <a href="./pages/tambah_data.php">
            <button class="btn btn-lg bg-gradient-info w-100 h-100" style="font-size: 27px">Daftar</button>
            </a>
            
        </div>
        </div>
        
      <div class="row mt-4 g-4">
        <div class="col-lg-6">
          <div class="card h-100 p-2">
            <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100">
              <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-2">
                <div class="row justify-content-center align-items-center">
                  <div class="col-4">
                    <img src="assets/img/man.png" class="img-thumbnail border-0" alt="">
                  </div>
                  <div class="col-8">
                    <h5 class=" font-weight-bolder mb-2 pt-2">Data Pendaftar</h5>
                    <p class="">Daftar nama siswa yang sudah mendaftar.</p>
                    <a class=" text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="./pages/mahasiswa-data.php">
                      Lihat Selengkapnya
                      <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card h-100 p-2">
            <div class="overflow-hidden position-relative border-radius-lg bg-cover h-100">
              <div class="card-body position-relative z-index-1 d-flex flex-column h-100 p-2">
                <div class="row justify-content-center align-items-center">
                  <div class="col-4">
                    <img src="assets/img/add-user.png" class="img-thumbnail border-0" alt="">
                  </div>
                  <div class="col-8">
                    <h5 class=" font-weight-bolder mb-2 pt-2">Pendaftaran Siswa Baru</h5>
                    <p class="">Bagi Pendaftar yang ingin mendaftar silahkan melalui halaman berikut ini.</p>
                    <a class=" text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="./pages/tambah_data.php">
                      Lihat Selengkapnya
                      <i class="fas fa-arrow-right text-sm ms-1" aria-hidden="true"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer is here -->
      <?php include "pages/footer.php";?>
      <!-- The end of footer is here -->
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/soft-ui-dashboard.min.js?v=1.0.5"></script>
</body>

</html>