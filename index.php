<?php
session_start();
include "config/koneksi.php";

if (empty($_SESSION['user'])) {
  $login_status = false;
} else {
  $login_status = true;
}

$user_level = "";

$email_user = (isset($_SESSION['user'])) ? $_SESSION['user'] : "";

if (!empty($email_user)) {
  $query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE email='$email_user'");
  $read = mysqli_fetch_array($query);
  $nama_user = $read['nama'];
  $user_level = ($read['level'] == 1) ? "admin" : "user";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Naraku Cafe </title>

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <link href="css/styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/additional.css">

  <!-- ICON -->
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="index.php">Naraku Cafe</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
      <i class="fas fa-bars"></i>
    </button>
    <!-- Navbar Search-->
    <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
      <div class="input-group">
        <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
        <button class="btn btn-primary" id="btnNavbarSearch" type="button">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </form> -->
    <!-- Navbar-->
    <div class="ms-auto">
      <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
          <?php
          if ($login_status) { ?>
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw me-2"></i><?php echo $nama_user . " (" . $user_level . ")"; ?></a>
          <?php
          } else { ?>
            <a href="login.php" class="btn btn-primary">Login</a>
          <?php
          } ?>
          <ul class="dropdown-menu dropdown-menu-end mt-2" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#!">My Profile</a></li>
            <li><a class="dropdown-item" href="#!">Change Password</a></li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item" href="config/ceklogout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <div id="layoutSidenav">

    <!-- Sidebar Start -->
    <div id="layoutSidenav_nav">
      <?php include "page/sidebar.php"; ?>
    </div>
    <!-- End Sidebar -->

    <!-- Main Content -->
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <?php
          $hal = (isset($_GET['hal'])) ? $_GET['hal'] : "";
          if (empty($hal)) {
            include "page/dashboard.php";
          } else if ($hal == "konsumen") {
            include "page/konsumen/datakonsumen.php";
          } else if ($hal == "makanan") {
            include "page/makanan/datamakanan.php";
          } else if ($hal == "tambahmakanan") {
            include "page/makanan/tambahmakanan.php";
          }
          ?>
        </div>
      </main>
    </div>
    <!-- End Main -->

    <!-- Modal -->
    <?php include "page/makanan/tambahmakanan.php"; ?>
    <!-- <input type="text" value="<?php echo $_SESSION['user']; ?>"> -->
  </div>

  <!-- JS Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
  <script src="assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
  <script src="js/datatables-simple-demo.js"></script>
</body>

</html>