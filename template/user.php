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

    <title>User</title>

    <!-- vendor css -->
    <link href="../lib/fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/jqvmap/jqvmap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css" rel="stylesheet">

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
              <h6 class="tx-semibold mg-b-0"><?php echo $_SESSION['username'] ?></h6>
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
          <li class="nav-item"><a href="data_order.php" class="nav-link"><i data-feather="shopping-bag"></i> <span>Order</span></a></li>
          <li class="nav-label mg-t-25">Web Apps</li>
          <li class="nav-item active"><a href="app-calendar.html" class="nav-link"><i data-feather="calendar"></i> <span>User</span></a></li>
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
                  <li class="breadcrumb-item"><a href="#">Web Apps</a></li>
                  <li class="breadcrumb-item active" aria-current="page">User</li>
                </ol>
              </nav>
            </div>
          </div>
          <a href="#tambah" data-toggle="modal" class="btn btn-success">Tambah</a>
          <br><br>
          <div class="row">
            <div class="col-md-8">
              <div data-label="Example" class="df-example demo-table">
                <table class="table table-bordered mg-b-0" id="listUser">
                  <thead>
                    <tr>
                      <th scope="col">No.</th>
                      <th scope="col">Username</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        $data = $database->select("tb_user", [
                            "id_user",
                            "username",
                            "password"
                        ]);
                        $no = 1;
                        foreach ($data as $d){
                    ?>
                      <tr>
                          <th scope="row"><?php echo $no++; ?></th>
                          <td><?php echo $d['username']; ?></td>
                          <td>
                              <a href="#edit<?php echo $d['id_user'] ?>" data-toggle="modal" class="btn btn-primary">Edit</a>
                              <a href="#editPass<?php echo $d['id_user'] ?>" data-toggle="modal" class="btn btn-warning">Edit Password</a>
                              
                              <a href="hapus_user.php?id=<?php echo $d['id_user']; ?>" class="btn btn-danger">Hapus</a>
                          </td>
                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div><!-- df-example -->
            </div>
          </div><!-- row -->
          </div><!-- row -->
        </div><!-- container -->
      </div>
    </div>
    <?php
        $data = $database->select("tb_user", [
            "id_user",
            "username",
            "password"
        ]);
        foreach ($data as $d){
    ?>
    <div class="modal fade" id="edit<?php echo $d['id_user'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered wd-sm-400" role="document">
        <div class="modal-content">
          <div class="modal-body pd-20 pd-sm-40">
            <a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </a>

            <div>
              <h4>Edit Username</h4>
              <p class="tx-color-03">Masukkan Username.</p>
                <form action="edit_user.php" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="username" name="username" value="<?php echo $d['username']; ?>">
                    </div>
                    <input type="hidden" value="<?php echo $d['id_user'] ?>" name="id_user">
                    <button class="btn btn-primary btn-block">Save</button>
                </form>
            </div>
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
    <?php } ?>

    <?php
        $data = $database->select("tb_user", [
            "id_user",
            "username",
            "password"
        ]);
        foreach ($data as $d){
    ?>
    <div class="modal fade" id="editPass<?php echo $d['id_user'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered wd-sm-400" role="document">
        <div class="modal-content">
          <div class="modal-body pd-20 pd-sm-40">
            <a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </a>

            <div>
              <h4>Edit Password</h4>
              <p class="tx-color-03">Masukkan password.</p>
                <form action="edit_pass.php" method="POST">
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="password" name="password" id="pass<?php echo $d['id_user'] ?>">
                    </div>
                    <div class="form-group pass">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" placeholder="confirm password" name="confPass" id="confPass<?php echo $d['id_user'] ?>">
                    </div>
                    <div style="color:green;" id="CheckPasswordMatch<?php echo $d['id_user'] ?>"></div>
                    <input type="hidden" value="<?php echo $d['id_user'] ?>" name="id_user">
                    <button class="btn btn-primary btn-block" id="savePass<?php echo $d['id_user'] ?>" disabled>Save</button>
                </form>
            </div>
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->
    <?php } ?>

    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered wd-sm-400" role="document">
        <div class="modal-content">
          <div class="modal-body pd-20 pd-sm-40">
            <a href="" role="button" class="close pos-absolute t-15 r-15" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </a>

            <div>
              <h4>Tambah User</h4>
              <p class="tx-color-03">Masukkan Username dan password.</p>
                <form action="buat_user.php" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="username" name="username">
                    </div>
                    <div class="form-group">
                        <div class="d-flex justify-content-between mg-b-5">
                        <label class="mg-b-0-f">Password</label>
                        </div>
                        <input type="password" class="form-control" placeholder="password" name="password">
                    </div>
                    <button class="btn btn-primary btn-block">Save</button>
                </form>
            </div>
          </div><!-- modal-body -->
        </div><!-- modal-content -->
      </div><!-- modal-dialog -->
    </div><!-- modal -->

    <script src="../lib/jquery/jquery.min.js"></script>
    <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/feather-icons/feather.min.js"></script>
    <script src="../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

    <script src="../js/template/dashforge.js"></script>
    <script src="../js/template/dashforge.aside.js"></script>
    <script src="../js/template/dashforge.sampledata.js"></script>
    <?php
        $data = $database->select("tb_user", [
            "id_user",
            "username",
            "password"
        ]);
        foreach ($data as $d){
    ?>
    <script>
      $(document).ready( function () {
          $('#listUser').DataTable();
      } );

      function checkPasswordMatch<?php echo $d['id_user'] ?>() {
        var password<?php echo $d['id_user'] ?> = $("#pass<?php echo $d['id_user'] ?>").val();
        var confirmPassword<?php echo $d['id_user'] ?> = $("#confPass<?php echo $d['id_user'] ?>").val();
        // console.log(password<?php //echo $d['id_user'] ?>);
        // console.log(confirmPassword<?php //echo $d['id_user'] ?>);
        if (password<?php echo $d['id_user'] ?> != confirmPassword<?php echo $d['id_user'] ?>){
            $("#CheckPasswordMatch<?php echo $d['id_user'] ?>").html("Password Tidak Sama!");
            $("#savePass<?php echo $d['id_user'] ?>").prop('disabled', true);
        }else{
            $("#CheckPasswordMatch<?php echo $d['id_user'] ?>").html("Password Sama.");
            $("#savePass<?php echo $d['id_user'] ?>").removeAttr("disabled");
        }
      }
      $(document).ready(function () {
        $("#confPass<?php echo $d['id_user'] ?>").keyup(checkPasswordMatch<?php echo $d['id_user'] ?>);
      });
    </script>
    <?php } ?>
  </body>
</html>
