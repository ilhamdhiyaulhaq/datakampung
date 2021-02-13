<?php 
require "functions.php";
session_start();

?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        Halaman Login System
    </title>
    <!-- Font Awesome -->
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
    <body class="hold-transition login-page">
        <div class="login-box">
        <div class="login-logo">
            <a href="../../index2.html"><b>Datakampung</b>Sistem</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
           
            <form action="" method="post">
                <div class="input-group mb-3">
                <input type="text" name="username" class="form-control" placeholder="Username">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                    </div>
                </div>
                </div>
                <div class="input-group mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                    <label for="remember">
                        Remember Me
                    </label>
                    </div>
                </div>
                <!-- /.col -->
                
                <!-- /.col -->
                </div>

                <div class="social-auth-links text-center mb-3">
                    <button type="submit" name="login" class="btn btn-block btn-primary">Sign In</button>
                    <a href="register.php" name="register" class="btn btn-block btn-danger">
                    Registration new membership
                    </a>
                </div>

            </form>
           
        </div>
        </div>

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
    </body>
</html>

<script type="text/javascript">
    function change()
    {
    var x = document.getElementById('pass').type;
    if (x == 'password')
    {
        document.getElementById('pass').type = 'text';
        document.getElementById('mybutton').innerHTML;
    }
    else
    {
        document.getElementById('pass').type = 'password';
        document.getElementById('mybutton').innerHTML;
    }
    }
</script>
<?php

    if(isset($_POST["login"])) {

        $username=mysqli_real_escape_string($conn,$_POST['username']);
        $password=mysqli_real_escape_string($conn,$_POST['password']);

        $query = "SELECT * FROM level WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn,$query);
        
        if(mysqli_num_rows($result) > 0) {
            // jika username dan password ada maka simpan kedalam session
            if($data_user = mysqli_fetch_assoc($result)) {
                $_SESSION["status"] = "login";
                $_SESSION["nama_user"] = $data_user["nama_user"];
                $_SESSION["level"] = $data_user["level"];

                echo "<script>
                    Swal.fire({title: 'Login Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
                    }).then((result) => {if (result.value)
                        {window.location = 'http://datakampungsystem.ga';}
                    })</script>";
            } else {
                echo "<script>
                    Swal.fire({title: 'Password yang anda masukan salah !',text: '',icon: 'error',confirmButtonText: 'OK'
                    }).then((result) => {if (result.value)
                        {window.location = 'login.php';}
                    })</script>";
		    
            }
        } 
        	
    }
    
    
?>