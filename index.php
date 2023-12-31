<?php
  include("config.php");

  $dataKaryawan = $mysqli -> query(
    "SELECT count(id_karyawan) as jumlah from karyawan"
  );
  $jumlah = $dataKaryawan -> fetch_array();
  $jumlahKaryawan = $jumlah['jumlah'];

  $dataJabatan = $mysqli -> query(
    "SELECT count(id_jabatan_karyawan) as jumlah from jabatan_karyawan"
  );
  $jumlahj = $dataJabatan -> fetch_array();
  $jumlahJabatan = $jumlahj['jumlah'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <style type="text/css">
    .barisActive {
      background-color: blueviolet !important;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
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

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
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
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="index.php" class="nav-link active">
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Karyawan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Karyawan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3><?php echo $jumlahKaryawan; ?></h3>

                  <p>Jumlah Karyawan</p>
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
                  <h3><?php echo $jumlahJabatan ?></sup></h3>

                  <p>Jumlah Jabatan</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="jabatan/jabatan.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><?php echo $jumlahKaryawan; ?></h3>

                  <p>Jumlah Karyawan</p>
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
                  <h3><?php echo $jumlahJabatan; ?></h3>

                  <p>Jumlah Jabatan</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="jabatan/jabatan.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>

          <a href="karyawan/tambahdata.php" type="button" class="btn btn-success mb-3">+ Tambah Data Karyawan</a>
          <div class="card">

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th><input class='checkbox' type='checkbox'></th>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Nomor telepon</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody></tbody>
                  <tfoot>
                  <tr>
                    <th><input class='checkbox' type='checkbox'></th>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Nomor telepon</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
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
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- menampilkan notifikasi untuk konfirmasi sebelum menghapus data -->
<script>
function confirmAndDelete(event) {
  var getLink = event.target.href;

    Swal.fire({
      title: "Data akan dihapus",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      confirmButtonText: 'Ya',
      cancelButtonColor: '#3085d6',
      cancelButtonText: "Batal"
    }).then(result => {
      if (result.isConfirmed) {
        window.location.href = getLink;
      }
    });

  return false;
}
</script>
<!-- menampilkan notifikasi untuk konfirmasi sebelum menghapus data -->

<!-- Page specific script -->
<script>
  $(document).ready(function(){
	$("#example1").DataTable({
    "processing" : true,
    "serverSide":true,
		"ajax": {
			"url" : "karyawan/data.php?action=table_data",
      error: function(jqXHR, ajaxOptions, thrownError) {
                  alert(thrownError + "\r\n" + jqXHR.statusText + "\r\n" + jqXHR.responseText + "\r\n" + ajaxOptions.responseText);
      },
			"dataType": "json",
      "type" : "POST"
		},
		"columns" : [
      {"data" : "checkbox"},
			{"data" : "no"},
      {"data": "nama_karyawan"},
			{"data": "nama_jabatan_karyawan"},
      {"data": "no_telp"},
      {"data": "foto"},
      {"data" : "aksi"},
		],
    "dom" : 'lBfrtip',
    "buttons" : ["copy", "csv", "excel", "pdf", "print", "colvis"],
    "aaSorting": [[ 0, "desc" ]]
	})
});

// Ketika checkbox di klik
$('#example1 tbody').on('click', '.checkbox', function(){
    $(this).parent().parent().toggleClass("barisActive");
  })
  // End ketika checkbox di klik

</script>

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

  <!-- menampilkan notifikasi pada halamana index.php ketika data berhasil ditambah -->
  <?php if (@$_GET['alert']) { ?>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Sukses',
        text: 'Data Berhasil Ditambah',
        timer: 3000,
        showConfirmButton: false
      })
    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
  <?php unset($_GET['alert']);
  } ?>
  <!-- menampilkan notifikasi pada halaman index.php ketika data berhasil ditambah -->

  <!-- menampilkan notifikasi pada halaman index.php ketika data berhasil diupdate -->
  <?php if (@$_GET['hasil']) { ?>
    <script>
      Swal.fire({
        icon: 'success',
        title: 'Sukses',
        text: 'Data Berhasil Di Update',
        timer: 3000,
        showConfirmButton: false
      })
    </script>
    <!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
  <?php unset($_GET['hasil']);
  } ?>
  <!-- menampilkan notifikasi pada halaman index.php ketika data berhasil diupdate -->

</body>
</html>
