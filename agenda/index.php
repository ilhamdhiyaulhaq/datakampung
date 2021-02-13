<?php 
session_start();
if($_SESSION["status"] == "") {
    header("location: login.php");
}
$data_user = $_SESSION["nama_user"];
$data_level = $_SESSION["level"];

?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php 
        @$p = $_GET["page"];
        if($p == "dashboard") {
            ?>
                <title>Dashboard</title>
            <?php
        } else if ($p == "tb_warga") {
            ?>
                <title>Data Warga</title>
            <?php
        } else if ($p == "tb_agenda") {
            ?>
                <title>Agenda Kegiatan</title>
            <?php
        }else if ($p == "tb_rtrw") {
            ?>
                <title>Data Ketua RT dan RW</title>
            <?php
        }else if ($p == "user") {
            ?>
                <title>Data Pengguna</title>
            <?php
        }else if ($p == "") {
            ?>
                <title>Dashboard</title>
            <?php
        } else if ($p == "Rt1") {
            ?>
                <title>Data RT 1</title>
            <?php
        } else if ($p == "Rt2") {
            ?>
                <title>Data RT 2</title>
            <?php
        } else if ($p == "Rt3") {
            ?>
                <title>Data RT 3</title>
            <?php
        } else if ($p == "Rt4") {
            ?>
                <title>Data RT 4</title>
            <?php
        } else if ($p == "Rt5") {
            ?>
                <title>Data RT 5</title>
            <?php
        } else if ($p == "Rt6") {
            ?>
                <title>Data RT 6</title>
            <?php
        } else if ($p == "Rt7") {
            ?>
                <title>Data RT 7</title>
            <?php
        } else if ($p == "Rt8") {
            ?>
                <title>Data RT 8</title>
            <?php
        } else if ($p == "Rt9") {
            ?>
                <title>Data RT 9</title>
            <?php
        } else if ($p == "Rt10") {
            ?>
                <title>Data RT 10</title>
            <?php
        }
    ?>
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
        <link rel="stylesheet" href="dist/css/waktu.css">
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="http://localhost/phpdasar/adminlte/" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="?page=rekap" class="nav-link">Rekapitulasi</a>
            </li>
            </ul>

            <form class="form-inline ml-auto" style="color:#d3d3d3;">
				<div class="input-group input-group-sm">
					<div class="input-group-append">
                    <div class="titik">
                        <p id="tanggal"><?= date('l, d-M-Y'); ?></p>
                        <p id="jam"></p> :
                        <p id="menit"></p> :
                        <p id="detik"></p>
                    </div>
					</div>
				</div>
			</form>

            <!-- Right navbar links -->
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
            <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">DataKamp <b>System</b></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                <img src="dist/img/avatar04.png" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                <p class="d-block" style="color:white;"><?= $data_user; ?></p>
                <span class="badge badge-success"><?= $data_level; ?></span>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->
                    <?php 
                    if($data_level == "Administator") {
                    ?>
                        <li class="nav-item">
                            <a href="http://datakampungsystem.ga" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <span class="badge badge-primary right">3 Info</span>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="?page=tb_agenda" class="nav-link">
                                <i class="nav-icon fas fa-calendar-week"></i>
                                <p>
                                    Agenda
                                </p>
                            </a>
                        </li>

                        <li class="nav-item has-treeview">
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Data Warga
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="?page=tb_warga" class="nav-link">
                                            <i class="nav-icon far fa-circle text-success"></i>
                                            <p>Seluruh Warga</p>
                                        </a>
                                    </li>
                                    <li class="nav-item has-treeview">
                                            <a href="#" class="nav-link">
                                            <i class="nav-icon far fa-circle text-danger"></i>
                                                <p>
                                                    Warga Tiap RT
                                                    <i class="fas fa-angle-left right"></i>
                                                </p>
                                            </a>
                                            <ul class="nav nav-treeview">
                                                <li class="nav-item">
                                                    <a href="?page=Rt1" class="nav-link">
                                                        <p>Warga RT 1</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="?page=Rt2" class="nav-link">
                                                        <p>Warga RT 2</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="?page=Rt3" class="nav-link">
                                                        <p>Warga RT 3</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="?page=Rt4" class="nav-link">
                                                        <p>Warga RT 4</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="?page=Rt5" class="nav-link">
                                                        <p>Warga RT 5</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="?page=Rt6" class="nav-link">
                                                        <p>Warga RT 6</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="?page=Rt7" class="nav-link">
                                                        <p>Warga RT 7</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="?page=Rt8" class="nav-link">
                                                        <p>Warga RT 8</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="?page=Rt9" class="nav-link">
                                                        <p>Warga RT 9</p>
                                                    </a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="?page=Rt10" class="nav-link">
                                                        <p>Warga RT 10</p>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    <li class="nav-item">
                                        <a href="?page=tb_rtrw" class="nav-link">
                                            <i class="nav-icon far fa-circle text-primary"></i>
                                            <p>Data Ketua RT dan RW</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-bar"></i>
                                    <p>
                                        Kas Warga
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="?page=publik_masuk" class="nav-link">
                                            <i class="nav-icon far fa-circle text-success"></i>
                                            <p>Pemasukan Kas Warga</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="?page=publik_keluar" class="nav-link">
                                            <i class="nav-icon far fa-circle text-danger"></i>
                                            <p>Pengeluaran Kas Warga</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="?page=rekap" class="nav-link">
                                            <i class="nav-icon far fa-circle text-primary"></i>
                                            <p>Rekap Kas Warga</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                            <a href="?page=laporan" class="nav-link">
                            <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Laporan Kas
                                </p>
                            </a>
                            </li>
                            <li class="nav-header">Settings</li>
                                    <li class="nav-item">
                                        <a href="?page=administator" class="nav-link">
                                            <i class="nav-icon far fa-user"></i>
                                            <p>
                                            Users
                                            <span class="badge badge-warning right">4 level</span>
                                            </p>
                                        </a>
                                    </li>    
                            <?php 
                            } elseif($data_level == "Bendahara") {
                            ?>
                            <li class="nav-item">
                            <a href="http://datakampungsystem.ga" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <span class="badge badge-primary right">3 Info</span>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="?page=publik_agenda" class="nav-link">
                                <i class="nav-icon fas fa-calendar-week"></i>
                                <p>
                                    Agenda
                                </p>
                            </a>
                        </li>
                        
                        <li class="nav-item has-treeview">
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Data Warga
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="?page=publik_warga" class="nav-link">
                                            <i class="nav-icon far fa-circle text-success"></i>
                                            <p>Seluruh Warga</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="?page=publik_rtrw" class="nav-link">
                                            <i class="nav-icon far fa-circle text-primary"></i>
                                            <p>Data Ketua RT dan RW</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-chart-bar"></i>
                                    <p>
                                        Kas Warga
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="?page=i_kas_masuk" class="nav-link">
                                            <i class="nav-icon far fa-circle text-success"></i>
                                            <p>Pemasukan Kas Warga</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="?page=o_kas_keluar" class="nav-link">
                                            <i class="nav-icon far fa-circle text-danger"></i>
                                            <p>Pengeluaran Kas Warga</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="?page=rekap" class="nav-link">
                                            <i class="nav-icon far fa-circle text-primary"></i>
                                            <p>Rekap Kas Warga</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="?page=laporan" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                    <p>
                                        Laporan Kas
                                    </p>
                                </a>
                            </li>
                            <li class="nav-header">Settings</li>
                                <li class="nav-item">
                                    <a href="?page=user_bendahara" class="nav-link">
                                        <i class="nav-icon far fa-user"></i>
                                        <p>
                                        Users
                                        <span class="badge badge-warning right">4 level</span>
                                        </p>
                                    </a>
                                </li>    
                            <?php 
                                } elseif ($data_level == "Publik") {
                            ?>
                            <li class="nav-item">
                            <a href="http://datakampungsystem.ga" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <span class="badge badge-primary right">3 Info</span>
                                </p>
                            </a>
                            </li>

                            <li class="nav-item">
                            <a href="?page=publik_agenda" class="nav-link">
                                <i class="nav-icon fas fa-calendar-week"></i>
                                <p>
                                    Agenda
                                </p>
                            </a>
                            </li>

                            <li class="nav-item">
                                <a href="?page=publik_warga" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                    <p>Seluruh Warga</p>
                               </a>
                            </li>

                            <li class="nav-item">
                                <a href="?page=publik_rekapkas" class="nav-link">
                                <i class="nav-icon fas fa-chart-bar"></i>
                                    <p>Rekap Kas Warga</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="?page=laporan" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                    <p>
                                        Laporan Kas
                                    </p>
                                </a>
                            </li>
                            <li class="nav-header">Settings</li>
                                <li class="nav-item">
                                    <a href="?page=publik" class="nav-link">
                                        <i class="nav-icon far fa-user"></i>
                                        <p>
                                        Users
                                        <span class="badge badge-warning right">4 level</span>
                                        </p>
                                    </a>
                                </li>    
                            <?php 
                                } elseif($data_level == "Developer") {
                            ?>
                                 <li class="nav-item">
                                    <a href="http://datakampungsystem.ga" class="nav-link">
                                        <i class="nav-icon fas fa-tachometer-alt"></i>
                                        <p>
                                            Dashboard
                                            <span class="badge badge-primary right">3 Info</span>
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="?page=tb_agenda" class="nav-link">
                                        <i class="nav-icon fas fa-calendar-week"></i>
                                        <p>
                                            Agenda
                                        </p> 
                                    </a>
                                </li>

                                <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-users"></i>
                                        <p>
                                            Data Warga
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="?page=tb_warga" class="nav-link">
                                                <i class="nav-icon far fa-circle text-success"></i>
                                                <p>Seluruh Warga</p>
                                            </a>
                                        </li>
                                        <li class="nav-item has-treeview">
                                                <a href="#" class="nav-link">
                                                <i class="nav-icon far fa-circle text-danger"></i>
                                                    <p>
                                                        Warga Tiap RT
                                                        <i class="fas fa-angle-left right"></i>
                                                    </p>
                                                </a>
                                                <ul class="nav nav-treeview">
                                                    <li class="nav-item">
                                                        <a href="?page=Rt1" class="nav-link">
                                                            <p>Warga RT 1</p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="?page=Rt2" class="nav-link">
                                                            <p>Warga RT 2</p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="?page=Rt3" class="nav-link">
                                                            <p>Warga RT 3</p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="?page=Rt4" class="nav-link">
                                                            <p>Warga RT 4</p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="?page=Rt5" class="nav-link">
                                                            <p>Warga RT 5</p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="?page=Rt6" class="nav-link">
                                                            <p>Warga RT 6</p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="?page=Rt7" class="nav-link">
                                                            <p>Warga RT 7</p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="?page=Rt8" class="nav-link">
                                                            <p>Warga RT 8</p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="?page=Rt9" class="nav-link">
                                                            <p>Warga RT 9</p>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="?page=Rt10" class="nav-link">
                                                            <p>Warga RT 10</p>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        <li class="nav-item">
                                            <a href="?page=tb_rtrw" class="nav-link">
                                                <i class="nav-icon far fa-circle text-primary"></i>
                                                <p>Data Ketua RT dan RW</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                 <li class="nav-item has-treeview">
                                    <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-chart-bar"></i>
                                        <p>
                                            Kas Warga
                                            <i class="fas fa-angle-left right"></i>
                                        </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                        <li class="nav-item">
                                            <a href="?page=i_kas_masuk" class="nav-link">
                                                <i class="nav-icon far fa-circle text-success"></i>
                                                <p>Pemasukan Kas Warga</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="?page=o_kas_keluar" class="nav-link">
                                                <i class="nav-icon far fa-circle text-danger"></i>
                                                <p>Pengeluaran Kas Warga</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="?page=rekap" class="nav-link">
                                                <i class="nav-icon far fa-circle text-primary"></i>
                                                <p>Rekap Kas Warga</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="?page=laporan" class="nav-link">
                                    <i class="nav-icon fas fa-file"></i>
                                        <p>
                                            Laporan Kas
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-header">Settings</li>
                                    <li class="nav-item">
                                        <a href="?page=user" class="nav-link">
                                            <i class="nav-icon far fa-user"></i>
                                            <p>
                                            Users
                                            <span class="badge badge-warning right">4 level</span>
                                            </p>
                                        </a>
                                    </li>    
                                <?php 
                                }
                                ?>
                                <li class="nav-item">
                                    <a href="login.php" class="nav-link" onclick="return confirm('Apakah anda ingin keluar ?')">
                                    <i class="nav-icon fas fa-sign-out-alt"></i>
                                        <p class="text">Logout</p>
                                    </a>
                                </li>    
                            </li>
                    </ul>
            </nav>
            <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
            </div>

    <!-- /. WEB DINAMIS DISINI ############################################################################### -->
            <!-- Main content -->
            <section class="content mb-5">
            <div class="container-fluid">
                <div>
                        <?php
                        
                            if(isset($_GET["page"])) {
                                @$page = $_GET["page"];

                                switch ($page) {
                                    case 'developer':
                                        require 'home/admin2.php';
                                        break;
                                    case 'admin':
                                        require 'home/admin.php';
                                        break;
                                    case 'bendahara':
                                        require 'home/bendahara.php';
                                        break;
                    
                                    // data warga
                                    case 'tb_warga':
                                        require 'page/tb_warga.php';
                                        break;
                                    case 'publik_warga':
                                        require 'page/publik_warga.php';
                                        break;
                                    case 'add_warga':
                                        require 'page/add_warga.php';
                                        break;
                                    case 'del_warga':
                                        require 'page/del_warga.php';
                                        break;
                                    case 'edit_warga':
                                        require 'page/edit_warga.php';
                                        break;
                                    
                                    // agenda
                                    case 'tb_agenda':
                                        require 'agenda/tb_agenda.php';
                                        break;
                                    case 'publik_agenda':
                                        require 'agenda/publik_agenda.php';
                                        break;
                                    case 'add_agenda':
                                        require 'agenda/add_agenda.php';
                                        break;
                                    case 'del_agenda':
                                        require 'agenda/del_agenda.php';
                                        break;
                                    case 'edit_agenda':
                                        require 'agenda/edit_agenda.php';
                                        break;

                                    // Warga Rt 1 
                                    case 'Rt1':
                                        require 'wargaperRT/Rt1/Rt1.php';
                                        break;
                                    case 'delrt':
                                        require 'wargaperRT/Rt1/delrt.php';
                                        break;
                                    case 'editrt':
                                        require 'wargaperRT/Rt1/editrt.php';
                                        break;
                                    // Warga Rt 2
                                    case 'Rt2':
                                        require 'wargaperRT/Rt2/Rt2.php';
                                        break;
                                    case 'delrt2':
                                        require 'wargaperRT/Rt2/delrt2.php';
                                        break;
                                    case 'editrt2':
                                        require 'wargaperRT/Rt2/editrt2.php';
                                        break;
                                    // Warga Rt 3
                                    case 'Rt3':
                                        require 'wargaperRT/Rt3/Rt3.php';
                                        break;
                                    case 'delrt3':
                                        require 'wargaperRT/Rt3/delrt3.php';
                                        break;
                                    case 'editrt3':
                                        require 'wargaperRT/Rt3/editrt3.php';
                                        break;
                                    // Warga Rt 4
                                    case 'Rt4':
                                        require 'wargaperRT/Rt4/Rt4.php';
                                        break;
                                    case 'delrt4':
                                        require 'wargaperRT/Rt4/delrt4.php';
                                        break;
                                    case 'editrt4':
                                        require 'wargaperRT/Rt4/editrt4.php';
                                        break;
                                    // Warga Rt 5
                                    case 'Rt5':
                                        require 'wargaperRT/Rt5/Rt5.php';
                                        break;
                                    case 'delrt5':
                                        require 'wargaperRT/Rt5/delrt5.php';
                                        break;
                                    case 'editrt5':
                                        require 'wargaperRT/Rt5/editrt5.php';
                                        break;
                                    //  Warga Rt 6
                                    case 'Rt6':
                                        require 'wargaperRT/Rt6/Rt6.php';
                                        break;
                                    case 'delrt6':
                                        require 'wargaperRT/Rt6/delrt6.php';
                                        break;
                                    case 'editrt6':
                                        require 'wargaperRT/Rt6/editrt6.php';
                                        break;
                                    //  Warga Rt 7
                                    case 'Rt7':
                                        require 'wargaperRT/Rt7/Rt7.php';
                                        break;
                                    case 'delrt7':
                                        require 'wargaperRT/Rt7/delrt7.php';
                                        break;
                                    case 'editrt7':
                                        require 'wargaperRt/Rt7/editrt7.php';
                                        break;
                                    // Warga Rt 8
                                    case 'Rt8':
                                        require 'wargaperRT/Rt8/Rt8.php';
                                        break;
                                    case 'delrt8':
                                        require 'wargaperRT/Rt8/delrt8.php';
                                        break;
                                    case 'editrt8':
                                        require 'wargaperRT/Rt8/editrt8.php';
                                        break;
                                    //  Warga Rt 9
                                    case 'Rt9':
                                        require 'wargaperRT/Rt9/Rt9.php';
                                        break;
                                     case 'delrt9':
                                        require 'wargaperRT/Rt9/delrt9.php';
                                        break;
                                    case 'editrt9':
                                        require 'wargaperRT/Rt9/editrt9.php';
                                        break;
                                    //  Warga Rt 10
                                    case 'Rt10':
                                        require 'wargaperRT/Rt10/Rt10.php';
                                        break;
                                    case 'delrt10':
                                        require 'wargaperRT/Rt10/delrt10.php';
                                        break;
                                    case 'editrt10':
                                        require 'wargaperRT/Rt10/editrt10.php';
                                        break;
                                    //  Data Ketua RT
                                    case 'tb_rtrw':
                                        require 'ketuartrw/tb_rtrw.php';
                                        break;
                                    case 'add_rtrw':
                                        require 'ketuartrw/add_rtrw.php';
                                        break;
                                    case 'del_rtrw':
                                        require 'ketuartrw/del_rtrw.php';
                                        break;
                                    case 'edit_rtrw':
                                        require 'ketuartrw/edit_rtrw.php';
                                        break;
                                    case 'publik_rtrw':
                                        require 'ketuartrw/publik_rtrw.php';
                                        break;
                                    // Data User
                                    case 'user':
                                        require 'admin/data_user.php';
                                        break;
                                    case 'publik':
                                        require 'admin/publik.php';
                                        break;
                                    case 'user_bendahara':
                                        require 'admin/user_bendahara.php';
                                        break;
                                    case 'administator':
                                        require 'admin/administator.php';
                                        break;
                                    case 'add_user':
                                        require 'admin/add_user.php';
                                        break;
                                    case 'del_user':
                                        require 'admin/del_user.php';
                                        break;
                                    case 'edit_user':
                                        require 'admin/edit_user.php';
                                        break;
                                    case 'edit_administator':
                                        require 'admin/edit_administator.php';
                                        break;
                                    case 'edit_bendahara':
                                        require 'admin/edit_bendahara.php';
                                        break;
                                    // kas warga
                                    case 'rekap':
                                        require 'kas_warga/rekap_kaswarga.php';
                                        break;
                                    case 'publik_rekapkas':
                                        require 'kas_warga/publik_rekapkas.php';
                                        break;
                                    // kas masuk
                                    case 'publik_masuk':
                                        require 'kas_warga/masuk/publik_masuk.php';
                                        break;
                                    case 'i_kas_masuk':
                                        require 'kas_warga/masuk/data_kaswarga.php';
                                        break;
                                    case 'i_add_masuk':
                                        require 'kas_warga/masuk/add_kas.php';
                                        break;
                                    case 'i_del_kas':
                                        require 'kas_warga/masuk/del_kas.php';
                                        break;
                                    case 'i_update_kas':
                                        require 'kas_warga/masuk/update_kas.php';
                                        break;
                                    // kas keluar
                                    case 'publik_keluar':
                                        require 'kas_warga/keluar/publik_keluar.php';
                                        break;
                                    case 'o_kas_keluar':
                                        require 'kas_warga/keluar/data_kaswarga.php';
                                        break;
                                    case 'o_add_keluar':
                                        require 'kas_warga/keluar/add_kas.php';
                                        break;
                                    case 'o_del_kas':
                                        require 'kas_warga/keluar/del_kas.php';
                                        break;
                                    case 'o_update_kas':
                                        require 'kas_warga/keluar/update_kas.php';
                                        break;
                                    // cetak
                                    case 'laporan':
                                        require 'laporan/lap_kaswarga.php';
                                        break;
                                    case 'cetak':
                                        require 'cetak/cetak_kasfull.php';
                                        break;
                                    default:
                                        require '<center><h1>ERROR !</h1></center>';
                                        break;
                                }
                            } else {
                                if($data_level == "Administator") {
                                    include 'home/admin.php';
                                } elseif($data_level == "Bendahara") {
                                    include 'home/bendahara.php';
                                } elseif($data_level == "Developer") {
                                    include 'home/admin2.php';
                                } elseif($data_level == "Publik") {
                                    include 'home/publik.php';
                                }
                            }
                        ?>
                </div>
            </div>
            </section>
        </div>
        <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
        V.0.1
        </div>
        Copyright &copy;<a target="_blank" href="https://web.facebook.com/blantarajempols/"><strong>  <i class="fab fa-facebook-square"></i>  ulhaq software house</strong></a>
        All rights reserved.
    </footer>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

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
        window.setTimeout("waktu()", 1000);

        function waktu() {
            var waktu = new Date();
            setTimeout("waktu()", 1000);
            document.getElementById("jam").innerHTML = waktu.getHours();
            document.getElementById("menit").innerHTML = waktu.getMinutes();
            document.getElementById("detik").innerHTML = waktu.getSeconds();
        }
    </script>
    </body>
</html>
