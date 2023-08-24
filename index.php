<?php
// Create database connection using config file
include_once("config.php");

//mengambil semua data dari tabel karyawan digabung dengan data dari jabatan_karyawan yang memiliki nilai id_jabatan_karyawan yang sama
$result = mysqli_query($mysqli, "SELECT * FROM karyawan LEFT JOIN jabatan_karyawan ON karyawan.id_jabatan_karyawan = jabatan_karyawan.id_jabatan_karyawan ORDER BY karyawan.id_jabatan_karyawan DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Rasyid Noor Imamsyah</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="./index.php" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard</p>
                  </a>
                </li>
              </ul>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="jabatan/jabatan.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Jabatan</p>
                  </a>
                </li>
              </ul>
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
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>150</h3>

                  <p>New Orders</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px">%</sup></h3>

                  <p>Bounce Rate</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>44</h3>

                  <p>User Registrations</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>65</h3>

                  <p>Unique Visitors</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>

          <a href="karyawan/tambahdata.php" type="button" class="btn btn-success mb-3">+ Tambah Data Karyawan</a>
          <div class="card">

            <!-- menampilkan notifikasi untuk mengetahui apakah data berhasil ditambah atau di update -->
            <?php
            if (isset($_GET['alert'])) { ?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                Data Berhasil Ditambah
              </div>
            <?php
              unset($_GET['alert']);
            } ?>
            <?php
            if (isset($_GET['hasil'])) { ?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                Data Berhasil Di Update
              </div>
            <?php
              unset($_GET['hasil']);
            } ?>
            <!-- menampilkan notifikasi untuk mengetahui apakah data berhasil ditambah atau di update -->

            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 10px">No.</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Nomor telepon</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>

                  <!-- menampilkan data dari tabel karyawan dan jabatan_karyawan database ke dalam tabel -->
                  <?php
                  $no = 1;
                  while ($data = mysqli_fetch_array($result)) : ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $data['nama_karyawan']; ?></td>
                      <td><?php echo $data['nama_jabatan_karyawan']; ?></td>
                      <td><?php echo $data['no_telp']; ?></td>
                      <td>
                        <img class='img-fluid' src="foto/<?php echo $data['foto']; ?>" width='50' height='50' alt='Photo'>
                      </td>
                      <td>
                        <a href="karyawan/editdata.php?id=<?php echo $data['id_karyawan'] ?>" type="button" class="btn btn-warning">
                          <i class="fa fa-edit"></i></a> |
                        <a href="karyawan/hapusdata.php?id=<?php echo $data['id_karyawan']; ?>&idj=<?php echo $data['id_jabatan_karyawan']; ?>&foto=<?php echo $data['foto']; ?>" type='button' class='btn btn-danger alert_notif'>
                          <i class='fa fa-trash'></i>
                        </a>
                      <td>
                    <tr>
                    <?php endwhile ?>
                    <!-- menampilkan data dari tabel karyawan dan jabatan_karyawan database ke dalam tabel -->

                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>

        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
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
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>

  <!-- menampilkan notifikasi untuk konfirmasi sebelum menghapus data -->
  <script>
    $('.alert_notif').on('click', function() {
      var getLink = $(this).attr('href');
      Swal.fire({
        title: "Yakin hapus data?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        confirmButtonText: 'Ya',
        cancelButtonColor: '#3085d6',
        cancelButtonText: "Batal"
      }).then(result => {
        //jika klik ya maka arahkan ke proses.php
        if (result.isConfirmed) {
          window.location.href = getLink
        }
      })
      return false;
    });
  </script>
  <!-- menampilkan notifikasi untuk konfirmasi sebelum menghapus data -->

  <!-- menampilkan notifikasi pada halamana index.php ketika data berhasil dihapus -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.7/dist/sweetalert2.all.min.js"></script>
  <?php if (@$_GET['hapus']) { ?>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Sukses',
        text: 'data berhasil dihapus',
        timer: 3000,
        showConfirmButton: false
      })
    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
  <?php unset($_GET['hapus']);
  } ?>
  <!-- menampilkan notifikasi pada halamana index.php ketika data berhasil dihapus -->

</body>

</html>