<?php 
session_start();

require '../koneksi.php';

if($_SESSION['username'] == NULL){ 
  header("location: login.php"); 
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/template/favicon.png">

    <title>Dashboard</title>

    <!-- vendor css -->
    <link href="../lib/fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/jqvmap/jqvmap.min.css" rel="stylesheet">

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="../css/template/dashforge.css">
    <link rel="stylesheet" href="../css/template/dashforge.dashboard.css">
  </head>
  <body>

    <aside class="aside aside-fixed">
      <div class="aside-header">
        <a href="../index.php" class="aside-logo">Biru<span>Software</span></a>
        <a href="" class="aside-menu-link">
          <i data-feather="menu"></i>
          <i data-feather="x"></i>
        </a>
      </div>
      <div class="aside-body">
        <div class="aside-loggedin">
          <div class="d-flex align-items-center justify-content-start">
            <a href="" class="avatar"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></a>
            <div class="aside-alert-link">
              <!-- <a href="" class="new" data-toggle="tooltip" title="You have 2 unread messages"><i data-feather="message-square"></i></a>
              <a href="" class="new" data-toggle="tooltip" title="You have 4 new notifications"><i data-feather="bell"></i></a> -->
              <a href="logout.php" data-toggle="tooltip" title="Sign out"><i data-feather="log-out"></i></a>
            </div>
          </div>
          <div class="aside-loggedin-user">
            <a href="#loggedinMenu" class="d-flex align-items-center justify-content-between mg-b-2" data-toggle="collapse">
              <h6 class="tx-semibold mg-b-0"><?php echo $_SESSION['username']; ?></h6>
              <i data-feather="chevron-down"></i>
            </a>
            <p class="tx-color-03 tx-12 mg-b-0">Administrator</p>
          </div>
          <div class="collapse" id="loggedinMenu">
            <ul class="nav nav-aside mg-b-0">
              <!-- <li class="nav-item"><a href="" class="nav-link"><i data-feather="edit"></i> <span>Edit Profile</span></a></li>
              <li class="nav-item"><a href="" class="nav-link"><i data-feather="user"></i> <span>View Profile</span></a></li>
              <li class="nav-item"><a href="" class="nav-link"><i data-feather="settings"></i> <span>Account Settings</span></a></li>
              <li class="nav-item"><a href="" class="nav-link"><i data-feather="help-circle"></i> <span>Help Center</span></a></li> -->
              <li class="nav-item"><a href="logout.php" class="nav-link"><i data-feather="log-out"></i> <span>Sign Out</span></a></li>
            </ul>
          </div>
        </div><!-- aside-loggedin -->
        <ul class="nav nav-aside">
          <li class="nav-label">Dashboard</li>
          <li class="nav-item active"><a href="data_order.php" class="nav-link"><i data-feather="shopping-bag"></i> <span>Order</span></a></li>
          <li class="nav-label mg-t-25">Web Apps</li>
          <li class="nav-item"><a href="user.php" class="nav-link"><i data-feather="calendar"></i> <span>User</span></a></li>
        </ul>
      </div>
    </aside>

    <div class="content ht-100v pd-0">
      <!-- <div class="content-header">
        <div class="content-search">
          <i data-feather="search"></i>
          <input type="search" class="form-control" placeholder="Search...">
        </div>
        <nav class="nav">
          <a href="" class="nav-link"><i data-feather="help-circle"></i></a>
          <a href="" class="nav-link"><i data-feather="grid"></i></a>
          <a href="" class="nav-link"><i data-feather="align-left"></i></a>
        </nav>
      </div> --><!-- content-header -->

      <div class="content-body">
        <div class="container pd-x-0">
          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Order</li>
                </ol>
              </nav>
            </div>
          </div>

          <div class="row row-xs">
          <div data-label="Example" class="df-example demo-table">
            <div class="table-responsive">
                <table class="table table-bordered mg-b-0">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Keinginan</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Domain</th>
                        <th scope="col">Hosting</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $data = $database->select("tb_order", [
                        "id_order",
                        "jenis",
                        "keinginan",
                        "deskripsi",
                        "domain",
                        "hosting"
                    ]);
                    $no = 1;
                    foreach ($data as $d){
                ?>
                    <tr>
                        <th scope="row"><?php echo $no++; ?></th>
                        <td><?php echo $d['jenis']; ?></td>
                        <td><?php echo $d['keinginan']; ?></td>
                        <td><?php echo $d['deskripsi']; ?></td>
                        <td><?php echo $d['domain']; ?></td>
                        <td><?php echo $d['hosting']; ?></td>
                        <td>
                            <a href="#modalFitur<?php echo $d['id_order'] ?>" data-toggle="modal" class="btn btn-primary">Fitur</a>
                            
                            <a href="hapus.php?id=<?php echo $d['id_order']; ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
                </table>
            </div><!-- table-responsive -->
            </div><!-- df-example -->
          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>
    
    <?php 
        $fitur = $database->select("tb_fitur", [
            "id_fitur",
            "id_order",
            "fitur"
        ]);
        $order = $database->select("tb_order", [
            "id_order",
            "jenis",
            "keinginan",
            "deskripsi",
            "domain",
            "hosting"
        ]);
        foreach($order as $o){
    ?>
    <div class="modal fade" id="modalFitur<?php echo $o['id_order']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body pd-20 pd-sm-30">
            <h4 class="tx-18 tx-sm-20 mg-b-3">Daftar Fitur</h4>
            <p class="mg-b-20 tx-color-03"></p>
            <a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </a>
            <div class="bd">
                <?php 
                    foreach($fitur as $f){
                        if($f['id_order'] == $o['id_order']){
                ?>
                <ul class="list-unstyled">
                <li class="media pd-y-10 pd-x-15">
                  <div class="media-body mg-l-15">
                    <label><?php echo $f['fitur'] ?></label>
                  </div><!-- media-body -->
                  <a href="hapus_fitur.php?id_fitur=<?php echo $f['id_fitur']; ?>" class="btn btn-white rounded-circle btn-icon mg-l-15"><i data-feather="x"></i></a>
                </li><!-- media -->
                    <?php } ?>
                <?php } ?>
            </div>

            <div class="d-flex justify-content-end mg-t-30">
              <button type="button" class="btn btn-white" data-dismiss="modal">Cancel</button>
            </div>
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
    <?php } ?>

    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/feather-icons/feather.min.js"></script>
    <script src="../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script src="../js/template/dashforge.js"></script>
    <script src="../js/template/dashforge.aside.js"></script>
    <script src="../js/template/dashforge.sampledata.js"></script>
    <script src="../js/template/dashboard-one.js"></script>
  </body>
</html>
