<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Datatable Design -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css" />

  <title>Pengumuman SwaKelola Daerah 2019</title>
</head>
<body>
  <!-- Javascript bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('home/index') ?>">Daftar Satker</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('home/pengumumanpenyedia') ?>">Pengumuman Penyedia Daerah</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('home/pengumumanswakelola') ?>">Pengumuman Swakelola Daerah</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pengumuman Swakelola Daerah
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Pengumuman Swakelola Daerah 2019</a>
            <a class="dropdown-item" href="#">Pengumuman Swakelola Daerah 2018</a>
            <a class="dropdown-item" href="#">Pengumuman Swakelola Daerah 2017</a>
            <a class="dropdown-item" href="#">Pengumuman Swakelola Daerah 2016</a>
          </div>
        </li> -->
      </ul>
    </div>
  </nav>
  <br>
  <div class="container" style="border:2px solid #cecece">
    <div class="container" style="padding: 25px">
      <!-- <form>
        <div class="mx-4">
          <label for="waaa">Pilih Tahun :</label>
          <select class="form-control" id="waaa">
            <option>-</option>
            <option>2013</option>
            <option>2014</option>
            <option>2015</option>
            <option>2016</option>
            <option>2017</option>
            <option>2018</option>
            <option>2019</option>
          </select>
        </div>
      </form> -->
      <form>
        <div class="mx-4">
          <label for="weee">Pilih Nama Satker :</label>
          <select class="form-control" id="weee">
            <option>-</option>
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
      <!-- </form>
      <br>
      <form>
        <div class="mx-4">
          <label for="wiii">Pilih Tipe Swakelola :</label>
          <select class="form-control" id="wiii">
            <option>-</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
          </select>
        </div>
      </form> -->
      <br>  
    </div>
  </div>
  <br>
  <div class="ml-4">
    <table id="example" class="table table-striped table-bordered" style="width: 100%">
      <thead class="thead-dark">
        <tr>
          <th>Nama Satker</th>
          <th>Nama Paket</th>
          <th>Program</th>
          <th>pagu_rup</th>
        </tr>
      </thead>
    </table>
  </div>
</body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
  <script>
      $(document).ready(function() {
      // var tahun = $('#waaa').val()
      var table = $('#example').DataTable( {
          "ajax": {
              "url": "<?php echo base_url() ?>resource/PengumumanSwakelolaDaerahMergeAll.txt",
              "dataSrc": ""
          },
          "columns": [
              { "data": "nama_satker" },
              { "data": "nama_paket" },
              { "data": "program" },
              { "data": "pagu_rup" }
          ]

      } );

      $("#weee").change(function(){
        // alert(this.value);
          table
              .column( 0 )
              .search( this.value )
              .draw();
      } );

      // $("#wiii").change(function(){
      //   // alert(this.value);
      //     table
      //         .column( 19 )
      //         .search( this.value )
      //         .draw();
      // } );

      // $("#waaa").change(function(){
      //   //alert(this.value);
      //   table.ajax.url("https://inaproc.lkpp.go.id/isb/api/43e2c5cc-29e3-472b-9deb-e329c081fed8/json/26340421/PengumumanSwakelolaDaerah1618/tipe/4:12/parameter/"+this.value+":D44").load();
      // } );

  } );
  </script>
</html>