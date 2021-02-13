
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Log in</title>
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="dist/css/adminlte.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        <!-- Alert -->
        <script src="plugins/alert.js"></script>
        <link rel="stylesheet" href="dist/css/login.css">
</head>
<body class="hold-transition register-page">
    <div class="register-box">
      <div class="register-logo">
        <b>New</b>USER</a>
      </div>

      <div class="card">
        <div class="card-body register-card-body">
          <p class="login-box-msg">Register a new users</p>
          
          <form action="" method="post" class="">
            <div class="input-group mb-3">
              <input type="text" name="nama_user" class="form-control" placeholder="Full name" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="text" name="username" class="form-control" placeholder="Username" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" name="password" id="pass" class="form-control" placeholder="Password" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input type="password" name="password2" id="pass2"  class="form-control" placeholder="Retype password" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div class="input-group mb-3">
              <input class="form-control" type="hidden" name="level" value="Publik" readonly>
            </div>
            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="mybutton" onclick="change()" >
                  Show password
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block" name="register">Register</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

          <a href="login.php" class="text-center">Kemabli ke halaman login</a>
        </div>
        <!-- /.form-box -->
      </div><!-- /.card -->
    </div>
<!-- /.login-box -->

 <!-- jQuery -->
 <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="plugins/select2/js/select2.full.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- page script -->
    <script>
            $(function() {
                $("#example1").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                });
            });
    </script>

    <script>
            $(function() {
                //Initialize Select2 Elements
                $('.select2').select2()

                //Initialize Select2 Elements
                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })
            })
    </script>
    <script type="text/javascript">
      function change()
      {
      var x = document.getElementById('pass').type;
      var y = document.getElementById('pass2').type;
      if (x == 'password' & y == 'password')
      {
          document.getElementById('pass').type = 'text';
          document.getElementById('pass2').type = 'text';
          document.getElementById('mybutton').innerHTML;
      }
      else
      {
          document.getElementById('pass').type = 'password';
          document.getElementById('pass2').type = 'password';
          document.getElementById('mybutton').innerHTML;
      }
      }
    </script>

</body>
</html>

<?php 
require 'functions.php';



if(isset($_POST["register"])) {
  if(registrasi($_POST) > 0) {
    echo "<script>
    Swal.fire({title: 'Registrasi Berhasil !<br> Silahkan login dengan akun anda',text: '',icon: 'success',confirmButtonText: 'OK'
    }).then((result) => {if (result.value){
        window.location = 'login.php';
        }
    })</script>";
  } else {
    echo "<script>
    Swal.fire({title: 'Registrasi Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
    }).then((result) => {if (result.value){
    window.location = 'register.php';}
    })</script>";
  }
}
?>