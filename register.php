<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <title>
    Register Form
  </title>
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
  <style>
    .card{
              box-shadow: 1px 2px 8px 5px rgba(0, 0, 0, 0.1);
            }
  </style>
</head>

<body class="">
  <main class="main-content mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card mt-4 pb-1">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Register Akun </h3>
                  <p class="mb-0 fw-light">Masukkan data diri anda!</p>
                </div>
                <!-- Cek Pesan -->
                <?php
                    if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "gagal") {
                            echo "<div class='alert alert-danger font-weight-bold text-white'>
                            <i class='icon fa fa-exclamation-circle mr-3'></i> Pendaftaran Gagal
                            </div>";
                        } elseif ($_GET['pesan'] == "terdaftar") {
                            echo "<div class='alert alert-info font-weight-bold text-center text-white'><i class='fas fa-info-circle mr-3'></i> Username telah Terdaftar</div>";
                        } elseif ($_GET['pesan'] == "tidak_sama") {
                            echo "<div class='alert alert-danger font-weight-bold text-center text-white'><i class='fas fa-info-circle mr-3'></i> Password tidak Sama</div>";
                        } 
                    }
                ?>
                <div class="card-body">
                  <form role="form" class="user" method="post" action="cek-register.php">
                    <label>Username</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" placeholder="Masukkan username" name="username">
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" name="password">
                    </div>
                    <label>Retype Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" name="cpassword">
                    </div>
                    <div class="text-center">
                      <input type="submit" name="submit" value="daftar" class="btn bg-gradient-info w-100 mt-4 mb-0">
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-0 text-sm mx-auto">
                    Anda sudah memiliki akun?
                    <a href="login.php" class="text-info text-gradient font-weight-bold">Login</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/soft-ui-dashboard.min.js?v=1.0.5"></script>
</body>

</html>