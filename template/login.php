<?php 
session_start();

if(isset($_SESSION['username'])){ 
  header("location: data_order.php"); 
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../../img/template/favicon.png">

    <title>Login</title>

    <!-- vendor css -->
    <link href="../lib/fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="../css/template/dashforge.css">
    <link rel="stylesheet" href="../css/template/dashforge.dashboard.css">
  </head>
  <body>

    <header class="navbar navbar-header navbar-header-fixed">
      <a href="#" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
      <div class="navbar-brand">
        <a href="../index.php" class="df-logo">Biru<span>Software</span></a>
      </div><!-- navbar-brand -->
    </header><!-- navbar -->

    <div class="content content-fixed content-auth">
      <div class="container">
        <div class="media align-items-stretch justify-content-center ht-100p pos-relative">
          <div class="sign-wrapper mg-lg-l-50 mg-xl-l-60">
            <div class="wd-100p">
              <h3 class="tx-color-01 mg-b-5">Sign In</h3>
              <p class="tx-color-03 tx-16 mg-b-40">Welcome back! Please signin to continue.</p>
                <form action="cek_login.php" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="username" name="username">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mg-b-5">
                        <label class="mg-b-0-f">Password</label>
                        </div>
                        <input type="password" class="form-control" placeholder="password" name="password">
                        <div style="color: red;margin-bottom: 15px;">
                            <?php
                                if(isset($_COOKIE["message"])){
                                    echo $_COOKIE["message"];
                                }
                            ?>
                        </div>
                    </div>
                    <button class="btn btn-brand-02 btn-block">Sign In</button>
                </form>
            </div>
          </div><!-- sign-wrapper -->
        </div><!-- media -->
      </div><!-- container -->
    </div><!-- content -->

    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/feather-icons/feather.min.js"></script>
    <script src="../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script src="../js/template/dashforge.js"></script>
  </body>
</html>
