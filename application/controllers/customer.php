<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if ($this->session->userdata('logged_in')) {

			$data['customer'] = $this->customer_model->getData();
			$data['main_view'] = 'customer_view';
			$this->load->view('layout/main',$data);
		} else {
			redirect(base_url('index.php/login'));
		}
		
	}
	
	public function edit($id){
		if ($this->session->userdata('logged_in')) {
			$data['main_view'] = 'editCustomer';
			$data['foundCustomer'] = $this->customer_model->getCustomerByID($id);
			$this->load->view('layout/submain',$data);
		} else {
			redirect(base_url('index.php/login'));
		}
	}

	public function updateData($id){

		if ($this->session->userdata('logged_in')) {
			date_default_timezone_set('asia/jakarta');
			$date = time();
			$tglSelesai = strtotime('+1 day');
			$paket = '';
			$harga = 0;
			switch ($this->input->post('paket')) {
				case "21":
					$tglSelesai = strtotime('+2 days');
					$harga = 6000;
					$paket = 'cuci-gosok';
					break;
				case "11":
					$harga = 10000;
					$paket = 'cuci-gosok express';
					break;
				case "22":
					$tglSelesai = strtotime('+2 days');
					$harga = 4000;
					$paket = 'cuci aja';
					break;
				case "12":
					$harga = 8000;
					$paket = 'cuci aja express';
				case "23":
					$tglSelesai = strtotime('+2 days');
					$harga = 4000;
					$paket = 'gosok aja';
					break;
				case "13":
					$harga = 8000;
					$paket = 'gosok aja express';
					break;
			}
			$harga *= $this->input->post('beratLaundry');
	
			if ($this->input->post('antar')) {
				switch ($this->input->post('kecamatan')) {
					case 'Syiah Kuala':
						$harga += 2000;
						break;
					case 'Baiturrahman':
						$harga += 6000;
						break;
					case 'Lueng Bata':
						$harga += 4000;
						break;
					case 'Lhong Raya':
						$harga += 6000;
						break;
					default:
						break;
				}
			}
			$this->customer_model->update([
				'nama' => $this->input->post('nama'),
				'berat' => $this->input->post('beratLaundry'),
				'baju' => $this->input->post('jumlahBaju'),
				'celana' => $this->input->post('jumlahCelana'),
				'sprei' => $this->input->post('jumlahSprei'),
				'lain' => $this->input->post('jumlahLain'),
				'paket' => $paket,
				'harga' => $harga,
				'alamat' => $this->input->post('alamat'),
				'tglSelesai' => $tglSelesai,
				'kecamatan' => $this->input->post('kecamatan'),
				'antar' => $this->input->post('antar')
			],$id);

			redirect(base_url('index.php/customer'));

		} else {
			redirect(base_url('index.php/login'));
		}
	}
	
	public function add(){
		if ($this->session->userdata('logged_in')) {
			$data['main_view'] = 'addCustomer';
			$this->load->view('layout/submain',$data);
		} else {
			redirect(base_url('index.php/login'));
		}
		
	}

	public function info($id){
		if ($this->session->userdata('logged_in')) {
			$data['customer'] = $this->customer_model->getCustomerByID($id);
			$data['main_view'] = 'infoCustomer';
			$this->load->view('layout/submain',$data);
		} else {
			redirect(base_url('index.php/login'));
		}
	}

	public function addData(){
		if ($this->session->userdata('logged_in')) {
			// Change the line below to your timezone!
			date_default_timezone_set('asia/jakarta');
			$date = time();
			$tglSelesai = strtotime('+1 day');
			$paket = '';
			$harga = 0;
			switch ($this->input->post('paket')) {
				case "21":
					$harga = 6000;
					$paket = 'cuci-gosok';
					$tglSelesai = strtotime('+2 days');
					break;
				case "11":
					$harga = 10000;
					$paket = 'cuci-gosok express';
					break;
				case "22":
					$harga = 4000;
					$paket = 'cuci aja';
					$tglSelesai = strtotime('+2 days');
					break;
				case "12":
					$harga = 8000;
					$paket = 'cuci aja express';
				case "23":
					$harga = 4000;
					$paket = 'gosok aja';
					$tglSelesai = strtotime('+2 days');
					break;
				case "13":
					$harga = 8000;
					$paket = 'gosok aja express';
					break;
			}

			$harga *= $this->input->post('beratLaundry');

			if ($this->input->post('antar')) {
				switch ($this->input->post('kecamatan')) {
					case 'Syiah Kuala':
						$harga += 2000;
						break;
					case 'Baiturrahman':
						$harga += 6000;
						break;
					case 'Lueng Bata':
						$harga += 4000;
						break;
					case 'Lhong Raya':
						$harga += 6000;
						break;
					default:
						break;
				}
			}

			$this->customer_model->insertData([
				'id' => $this->input->post('id'),
				'nama' => $this->input->post('namaPelanggan'),
				'berat' => $this->input->post('beratLaundry'),
				'baju' => $this->input->post('jumlahBaju'),
				'celana' => $this->input->post('jumlahCelana'),
				'sprei' => $this->input->post('jumlahSprei'),
				'lain' => $this->input->post('jumlahLain'),
				'paket' => $paket,
				'harga' => $harga,
				'alamat' => $this->input->post('alamat'),
				'kecamatan' =>  $this->input->post('kecamatan'),
				'idMember' => $this->input->post('idMember'),
				'antar' => $this->input->post('antar'),
				'idAdmin' => $this->session->userdata('id'),
				'tglSelesai' => date('Y-m-d H:i:s', $tglSelesai),
				'status' => 'Sedang diproses'
			]);
			
			// echo 'Next Week: '. date('Y-m-d', $tglSelesai) ."\n";
			redirect(base_url('index.php/customer'));
		} else {
			redirect(base_url('index.php/login'));
		}
		

	}

	public function done($id){
		if ($this->session->userdata('logged_in')) {
			$data = $this->customer_model->getCustomerByID($id);
			if ($data[0]['status'] == 'Selesai') {
				redirect(base_url());
			} else {
				$this->customer_model->beDone($id);
				redirect(base_url());
			}
		} else {
			redirect(base_url('index.php/login'));
		}
	}

	public function delete($id){
		$this->customer_model->deleteCustomer($id);
		redirect(base_url());
	}

	public function struk($id){

		$data['customer'] = $this->customer_model->getCustomerByID($id);
		$this->load->view("struk",$data);
	}
}
