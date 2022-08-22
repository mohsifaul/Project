
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <title>
    Login Form
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
    <div class="page-header min-vh-75">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
            <div class="card mt-6 pb-2">
              <div class="card-header pb-2 text-left bg-transparent">
                <h3 class="font-weight-bolder text-info text-gradient">Selamat Datang, </h3>
                <p class="mb-0 fw-light">Masukkan username dan password untuk masuk!</p>
              </div>
              <div class="card-body">
              <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "gagal") {
                        echo "<div class='alert alert-danger font-weight-bold' style='color:white;'>
                        <i class='fas fa-exclamation-circle mr-3'></i> Username atau Password Salah!!
                        </div>";
                    } elseif ($_GET['pesan'] == "belum_login") {
                        echo "<div class='alert alert-info font-weight-bold text-center' style='color:white;'><i class='fas fa-info-circle mr-3'></i> Silahkan Login.</div>";
                    } elseif ($_GET['pesan'] == "logout") {
                        echo "<div class='alert alert-danger font-weight-bold text-center' style='color:white;'><i class='fas fa-info-circle mr-3'></i> Anda telah Log Out. Silahkan Login Kembali.</div>";
                    } elseif ($_GET['pesan'] == "berhasil") {
                        echo "<div class='alert alert-success font-weight-bold text-center' style='color:white;'><i class='fas fa-check-circle mr-3'></i> Pendaftaran akun berhasil</div>";
                    }
                }
              ?>
                <form role="form" class="user" method="post" action="cek-login.php">
                  <label>Username</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan username" name="username">
                  </div>
                  <label>Password</label>
                  <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" name="password">
                  </div>
                  <div class="text-center">
                    <button type="submit" name="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Masuk</button>
                  </div>
                </form>
              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-1 text-sm mx-auto">
                  Anda tidak memiliki akun admin?
                  <a href="register.php" class="text-info text-gradient font-weight-bold">Daftar</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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