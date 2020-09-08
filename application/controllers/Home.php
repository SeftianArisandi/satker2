<?php 

class Home extends CI_Controller {

	public function index(){
		$user = 'r35t4p1k3u';
    $password = 'QvRnW74sS5yuYegj5ZQakC29FVwrVtryymUZ9jqU';
    $this->load->library('curl');
    $this->curl->create('https://openkeuda.tangerangkota.go.id/services/inaproc/infomasi_paket/tahun/2019');
    $this->curl->http_login($user, $password);
    $data['penyedia2019'] = json_decode($this->curl->execute(),true);

    $this->curl->create('https://openkeuda.tangerangkota.go.id/services/inaproc/pengumuman');
    $this->curl->http_login($user, $password);
    $data['swakelola2019'] = json_decode($this->curl->execute(),true);

    $this->load->view('fin/Dashboard2.php',$data);
	}

  public function dashboard2(){
    $user = 'r35t4p1k3u';
    $password = 'QvRnW74sS5yuYegj5ZQakC29FVwrVtryymUZ9jqU';
    $this->load->library('curl');
    $this->curl->create('https://openkeuda.tangerangkota.go.id/services/inaproc/infomasi_paket/tahun/2019');
    $this->curl->http_login($user, $password);
    $data['penyedia2019'] = json_decode($this->curl->execute(),true);

    $this->curl->create('https://openkeuda.tangerangkota.go.id/services/inaproc/pengumuman');
    $this->curl->http_login($user, $password);
    $data['swakelola2019'] = json_decode($this->curl->execute(),true);

    $this->load->view('fin/Dashboard.php',$data);
  }

	public function pengumumanpenyedia(){
		$user = 'r35t4p1k3u';
  	$password = 'QvRnW74sS5yuYegj5ZQakC29FVwrVtryymUZ9jqU';
  	$this->load->library('curl');
  	$this->curl->create('https://openkeuda.tangerangkota.go.id/services/inaproc/infomasi_paket/tahun/2019');
  	$this->curl->http_login($user, $password);
  	$penyedia2019 = json_decode($this->curl->execute(),true);

		file_put_contents('resource/PengumumanPenyediaDaerahMergeAll.txt',json_encode($penyedia2019['data']));
		$this->load->view('fin/PengumumanPenyediaDaerah');
	}

  public function pengumumanpenyedia2(){
    $user = 'r35t4p1k3u';
    $password = 'QvRnW74sS5yuYegj5ZQakC29FVwrVtryymUZ9jqU';
    $this->load->library('curl');
    $this->curl->create('https://openkeuda.tangerangkota.go.id/services/inaproc/infomasi_paket/tahun/2019');
    $this->curl->http_login($user, $password);
    $penyedia2019 = json_decode($this->curl->execute(),true);

    file_put_contents('resource/PengumumanPenyediaDaerahMergeAll.txt',json_encode($penyedia2019['data']));
    $this->load->view('fin/PengumumanPenyediaDaerah2');
  }

	public function pengumumanswakelola(){
		$user = 'r35t4p1k3u';
  	$password = 'QvRnW74sS5yuYegj5ZQakC29FVwrVtryymUZ9jqU';
  	$this->load->library('curl');
  	$this->curl->create('https://openkeuda.tangerangkota.go.id/services/inaproc/pengumuman');
  	$this->curl->http_login($user, $password);
  	$swakelola2019 = json_decode($this->curl->execute(),true);

  	file_put_contents('resource/PengumumanSwakelolaDaerahMergeAll.txt',json_encode($swakelola2019['data']));
		$this->load->view('fin/PengumumanSwakelolaDaerah');
	}

  public function pengumumanswakelola2(){
    $user = 'r35t4p1k3u';
    $password = 'QvRnW74sS5yuYegj5ZQakC29FVwrVtryymUZ9jqU';
    $this->load->library('curl');
    $this->curl->create('https://openkeuda.tangerangkota.go.id/services/inaproc/pengumuman');
    $this->curl->http_login($user, $password);
    $swakelola2019 = json_decode($this->curl->execute(),true);

    $Swakelola2019 = $swakelola2019['data'];

    foreach ($Swakelola2019 as $key => $value) {
      if ($Swakelola2019[$key]['status_aktif'] == "tidak") {
        unset($Swakelola2019[$key]);
      }elseif ($Swakelola2019[$key]['status_umumkan'] == "belum") {
        unset($Swakelola2019[$key]);
      }
    }

    $arr = json_encode(array_values($Swakelola2019));
    $brr = json_decode($arr);

    file_put_contents('resource/PengumumanSwakelolaFilter.txt',json_encode($brr));
    $this->load->view('fin/PengumumanSwakelolaDaerah2');
  }

  public function daftarsatker(){
    $user = 'r35t4p1k3u';
    $password = 'QvRnW74sS5yuYegj5ZQakC29FVwrVtryymUZ9jqU';
    $this->load->library('curl');
    $this->curl->create('https://openkeuda.tangerangkota.go.id/services/inaproc/satker');
    $this->curl->http_login($user, $password);
    $sumberSatker = json_decode($this->curl->execute(),true);

    file_put_contents('resource/DaftarSatker.txt',json_encode($sumberSatker['data']));
    $this->load->view('fin/DaftarSatker');
  }

  public function daftarsatker2(){
    $user = 'r35t4p1k3u';
    $password = 'QvRnW74sS5yuYegj5ZQakC29FVwrVtryymUZ9jqU';
    $this->load->library('curl');
    $this->curl->create('https://openkeuda.tangerangkota.go.id/services/inaproc/satker');
    $this->curl->http_login($user, $password);
    $sumberSatker = json_decode($this->curl->execute(),true);

    file_put_contents('resource/DaftarSatker.txt',json_encode($sumberSatker['data']));
    $this->load->view('fin/DaftarSatker2');
  }

  public function editarray(){
    $user = 'r35t4p1k3u';
    $password = 'QvRnW74sS5yuYegj5ZQakC29FVwrVtryymUZ9jqU';
    $this->load->library('curl');
    $this->curl->create('https://openkeuda.tangerangkota.go.id/services/inaproc/pengumuman');
    $this->curl->http_login($user, $password);
    $data['swakelola2019'] = json_decode($this->curl->execute(),true);

    $this->load->view('fin/EditArray',$data);
  }
  
}