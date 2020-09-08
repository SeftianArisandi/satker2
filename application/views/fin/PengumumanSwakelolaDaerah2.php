<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pengumuman Swakelola Daerah</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Datatables Bootstrap -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- Loading Page -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/"; ?>css/style.css" />
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?php echo base_url('home/index') ?>" class="navbar-brand"><b>Dashboard</b>SATKER</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url('home/daftarsatker2') ?>">Daftar Satker</a></li>
            <li><a href="<?php echo base_url('home/pengumumanpenyedia2') ?>">Pengumuman Penyedia Daerah</a></li>
            <li class="active"><a href="<?php echo base_url('home/pengumumanswakelola2') ?>">Pengumuman Swakelola Daerah</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pengumuman Swakelola Daerah</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="form-group">
                <label for="filter1">Pilih Nama Satker</label>
                <select id="filter1" class="form-control select2" style="width: 100%;">
                  <option value=" ">All</option>
                  <option>BADAN KEPEGAWAIAN DAN PENGEMBANGAN SUMBER DAYA MANUSIA</option>
                  <option>BADAN PENANGGULANGAN BENCANA DAERAH KOTA TANGERANG</option>
                  <option>BADAN PENDAPATAN DAERAH KOTA TANGERANG</option>
                  <option>BADAN PENGELOLA KEUANGAN DAERAH KOTA TANGERANG</option>
                  <option>BADAN PERENCANAAN PEMBANGUNAN DAERAH KOTA TANGERANG</option>
                  <option>DINAS KEBUDAYAAN DAN PARIWISATA KOTA TANGERANG</option>
                  <option>DINAS KEPEMUDAAN DAN OLAHRAGA KOTA TANGERANG</option>
                  <option>DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL KOTA TANGERANG</option>
                  <option>DINAS KESEHATAN KOTA TANGERANG</option>
                  <option>DINAS KETAHANAN PANGAN KOTA TANGERANG</option>
                  <option>DINAS KETENAGAKERJAAN KOTA TANGERANG</option>
                  <option>DINAS KOMUNIKASI DAN INFORMATIKA KOTA TANGERANG</option>
                  <option>DINAS KOPERASI DAN UKM KOTA TANGERANG</option>
                  <option>DINAS LINGKUNGAN HIDUP KOTA TANGERANG</option>
                  <option>DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KOTA TANGERANG</option>
                  <option>DINAS PENDIDIKAN KOTA TANGERANG</option>
                  <option>DINAS PERHUBUNGAN KOTA TANGERANG</option>
                  <option>DINAS PERINDUSTRIAN DAN PERDAGANGAN KOTA TANGERANG</option>
                  <option>DINAS PERPUSTAKAAN DAN ARSIP DAERAH KOTA TANGERANG</option>
                  <option>DINAS PERTANAHAN KOTATANGERANG</option>
                  <option>DINAS PERUMAHAN DAN PERMUKIMAN KOTA TANGERANG</option>
                  <option>DINAS PMPTSP KOTA TANGERANG</option>
                  <option>DINAS PPPAPPKB KOTA TANGERANG</option>
                  <option>DINAS SOSIAL KOTA TANGERANG</option>
                  <option>INSPEKTORAT KOTA TANGERANG</option>
                  <option>KANTOR KESATUAN BANGSA DAN POLITIK KOTA TANGERANG</option>
                  <option>KECAMATAN KARAWACI KOTA TANGERANG</option>
                  <option>KECAMATAN BATUCEPER KOTA TANGERANG</option>
                  <option>KECAMATAN BENDA KOTA TANGERANG</option>
                  <option>KECAMATAN CIBODAS KOTA TANGERANG</option>
                  <option>KECAMATAN CILEDUG KOTA TANGERANG</option>
                  <option>KECAMATAN CIPONDOH KOTA TANGERANG</option>
                  <option>KECAMATAN JATIUWUNG KOTA TANGERANG</option>
                  <option>KECAMATAN KARANG TENGAH KOTA TANGERANG</option>
                  <option>KECAMATAN LARANGAN KOTA TANGERANG</option>
                  <option>KECAMATAN NEGLASARI KOTA TANGERANG</option>
                  <option>KECAMATAN PERIUK KOTA TANGERANG</option>
                  <option>KECAMATAN PINANG KOTA TANGERANG</option>
                  <option>KECAMATAN TANGERANG</option>
                  <option>RUMAH SAKIT UMUM DAERAH KOTA TANGERANG</option>
                  <option>SATUAN POLISI PAMONG PRAJA KOTA TANGERANG</option>
                  <option>SEKERTARIAT DAERAH KOTA TANGERANG</option>
                  <option>SEKERTARIAT DPRD KOTA TANGERANG</option>
                </select>
              </div>
              <div class="form-group">
                <label for="filter2">Pilih Tipe Swakelola</label>
                <select id="filter2" class="form-control select2" style="width: 100%;">
                  <option>-</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                </select>
              </div>
              <!-- /.form-group -->
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <!-- <th>id_pengumuman</th>
                    <th>tanggal_terakhir_di_update</th>
                    <th>kode_kldi</th>
                    <th>id_satker</th>
                    <th>kode_satker_asli</th>
                    <th>jenis</th>
                    <th>kldi</th>
                    <th>kode_rup</th> -->
                    <th>nama_satker</th>
                    <th>nama_paket</th>
                    <th>program</th>
                    <!-- <th>kode_string_program</th>
                    <th>kegiatan</th>
                    <th>kode_string_kegiatan</th> -->
                    <th>pagu_rup</th>
                    <!-- <th>mak</th>
                    <th>lokasi</th>
                    <th>detail_lokasi</th>
                    <th>sumber_dana</th>
                    <th>awal_pekerjaan</th>
                    <th>akhir_pekerjaan</th>
                    <th>nama_kpa</th> -->
                    <th>tipe_swakelola</th>
                    <!-- <th>status_aktif</th>
                    <th>status_umumkan</th>
                    <th>id_client</th>
                    <th>nama_ppk</th>
                    <th>nip_ppk</th>
                    <th>nip_kpa</th>
                    <th>deskripsi</th> -->
                  </tr>
                </thead>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
</div>
<!-- ./wrapper -->

<div class="loader-wrapper">
  <span class="loader"><span class="loader-inner"></span></span>
</div>

<!-- jQuery 3 -->
<script src="<?php echo base_url()."assets/"; ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url()."assets/"; ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url()."assets/"; ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()."assets/"; ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url()."assets/"; ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url()."assets/"; ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."assets/"; ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()."assets/"; ?>dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(document).ready(function() {
    var table = $('#example2').DataTable( {
      'ajax': {
        'url': "<?php echo base_url() ?>resource/PengumumanSwakelolaFilter.txt",
        'dataSrc': ''
      },
      'columns': [
      { 'data': "nama_satker" },
      { 'data': "nama_paket" },
      { 'data': "program" },
      { 'data': "pagu_rup", render: $.fn.dataTable.render.number(',', '.', 2, 'Rp ')},
      { 'data': "tipe_swakelola" }
      ],
      // 'paging'      : true,
      // 'lengthChange': false,
      // 'searching'   : false,
      // 'ordering'    : true,
      // 'info'        : true,
      'autoWidth'   : false
    });
    $("#filter1").change(function(){
        table
        .column( 0 )
        .search( this.value )
        .draw();
    } );
    $("#filter2").change(function(){
        table
        .column( 4 )
        .search( this.value )
        .draw();
    } );
  });
</script>
<!-- Loading Page -->
<script>
  $(window).on("load",function(){
    $(".loader-wrapper").fadeOut("slow");
  });
</script>
</body>
</html>