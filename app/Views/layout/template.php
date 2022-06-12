<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIDOMASPAR</title>



      <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-red">
            <div class="container">
                <a href="<?php echo base_url('assets') ?>index3.html" class="navbar-brand">
                    <!-- <img src="<?php echo base_url('assets') ?>dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
                    <span class="brand-text font-weight text-light"><font face="mistral"> SIDOMASPAR </font></span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-light">Profil</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="<?php echo base_url('/ormas') ?>" class="dropdown-item">Gambaran Umum Ormas </a></li>
                                <li><a href="<?php echo base_url('/parpol') ?>" class="dropdown-item">Gambaran Umum Parpol</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-light">Info Grafis dan Pemetaan</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="<?php echo base_url('/suara') ?>" class="dropdown-item">Peta Sebaran Suara Parpol</a></li>
                                <li><a href="<?php echo base_url('/ormas_parpol') ?>" class="dropdown-item">Peta Keberadaan Ormas dan Parpol</a></li>
                                <li><a href="<?php echo base_url('/data_pemilih') ?>" class="dropdown-item">Peta Data Pemilih</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-light">Master Data</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">

                                <li class="dropdown-submenu dropdown-hover">
                                    <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Ormas</a>
                                    <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">

                                        <!-- Level three dropdown-->
                                        <li class="dropdown-submenu">
                                            <a href="#" role="button" data-toggle="dropdown" class="dropdown-item ">Ormas Berbadan Hukum</a>
                                            <a href="#" role="button" data-toggle="dropdown" class="dropdown-item ">Ormas Tidak Berbadan Hukum</a>
                                            <a href="#" role="button" data-toggle="dropdown" class="dropdown-item ">Yayasan Lembaga</a>
                                        </li>

                                    </ul>
                                </li>
                                <!-- End Level two -->


                                <li class="dropdown-submenu dropdown-hover">
                                    <a id="dropdownSubMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Parpol</a>
                                    <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">

                                        <!-- Level three dropdown-->
                                        <li class="dropdown-submenu">
                                            <a href="#" role="button" data-toggle="dropdown" class="dropdown-item ">Parpol yang Duduk di DPRD</a>
                                            <a href="#" role="button" data-toggle="dropdown" class="dropdown-item ">Parpol yang Tidak Duduk di DPRD</a>
                                        </li>

                                    </ul>
                                </li>
                                <!-- End Level two -->

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle text-light">Layanan</a>
                            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                                <li><a href="#" class="dropdown-item">Surat Keterangan</a></li>
                                <li><a href="#" class="dropdown-item">Surat Tanda Lapor Keberadaan</a></li>
                                <li><a href="#" class="dropdown-item">Bantuan Keuangan</a></li>
                            </ul>
                        </li>

                    </ul>

                    <!-- SEARCH FORM
                    <form class="form-inline ml-0 ml-md-3">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->
                </div>


            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                        </div><!-- /.col -->

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container">
                    <div class="row">


                        <?php $this->renderSection('content') ?>



                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->

            <!-- Default to the left -->
            <strong>Kesbangpol Kabupaten Pringsewu
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->


    
<!-- jQuery -->
<script src="<?php echo base_url('assets') ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url('assets') ?>/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets') ?>/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets') ?>/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url('assets') ?>/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets') ?>/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url('assets') ?>/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets') ?>/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url('assets') ?>/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url('assets') ?>/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url('assets') ?>/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url('assets') ?>/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url('assets') ?>/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets') ?>/dist/js/adminlte.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

</body>

</html>