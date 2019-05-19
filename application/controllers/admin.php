<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

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
			$data['admin'] = $this->admin_model->getData();
			$data['main_view'] = 'admin_view';
			$this->load->view('layout/main',$data);
		} else {
			redirect(base_url('index.php/login'));
		}

	}

	public function izin($id){
		if ($this->session->userdata('logged_in')) {
			$this->admin_model->givePermission($id);
			redirect(base_url('index.php/admin'));
		} else {
			redirect(base_url('index.php/login'));
		}
	}
	
	public function delete($id){
		if ($this->session->userdata('logged_in')) {
			$this->admin_model->deleteAdmin($id);
			redirect(base_url('index.php/admin'));
		} else {
			redirect(base_url('index.php/login'));
		}
	}

	public function edit($id){
		if ($this->session->userdata('logged_in')) {
			$data['admin'] = $this->admin_model->getDataByID($id);
	
			$data['main_view'] = 'editAdmin';
			$this->load->view('layout/submain',$data);
		} else {
			redirect(base_url('index.php/login'));
		}
	}

	public function add(){
		if ($this->session->userdata('logged_in')) {
			$data['main_view'] = 'addAdmin';
			$this->load->view('layout/submain',$data);
		} else {
			redirect(base_url('index.php/login'));
		}
	}

	public function info($id){
		if ($this->session->userdata('logged_in')) {
			$data['admin'] = $this->admin_model->getDataByID($id);
			$data['customer'] = $this->customer_model->getCustomerByIdAdmin($id);
			$data['main_view'] = 'infoAdmin';
			$this->load->view('layout/submain',$data);
		} else {
			redirect(base_url('index.php/login'));
		}
	}

	public function editAdmin($id){
		if ($this->session->userdata('logged_in')) {
			if (strcmp($this->input->post('password1'),$this->input->post('password2')) == 0 ) {
				$password = $this->input->post('password1');
				$this->admin_model->update([
					'nama' => $this->input->post('nama'),
					'username' => $this->input->post('username'),
					'umur' => $this->input->post('umur'),
					'email' => $this->input->post('email'),
					'hp' => $this->input->post('hp'),
					'alamat' => $this->input->post('alamat'),
					'password' => $password
				],$id);
				redirect(base_url('index.php/admin'));
			} else {
				redirect(base_url('index.php/admin'));
			}
			
		} else {
			redirect(base_url('index.php/login'));
		}
	}

	public function addAdmin(){
		if ($this->session->userdata('logged_in')) {
			if (strcmp($this->input->post('password1'),$this->input->post('password2')) == 0 ) {
				$password = $this->input->post('password1');
				$this->admin_model->insertData([
					'nama' => $this->input->post('nama'),
					'username' => $this->input->post('username'),
					'umur' => $this->input->post('umur'),
					'alamat' => $this->input->post('alamat'),
					'email' => $this->input->post('email'),
					'hp' => $this->input->post('hp'),
					'password' => $password,
					'jabatan' => 2
				]);
				redirect(base_url('index.php/admin'));
			} else {
				redirect(base_url('index.php/admin'));
			}
		
			
		} else {
			redirect(base_url('index.php/login'));
		}
	}
    
}
