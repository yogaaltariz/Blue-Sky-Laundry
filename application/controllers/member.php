<?php 

class member extends CI_Controller {

    public function index(){
      if ($this->session->userdata('logged_in')) {
        $data['main_view'] = 'member_view';
        $data['member'] = $this->member_model->getMember();
        $this->load->view('layout/main',$data);
      } else {
        redirect(base_url('index.php/login'));
      }

    }

    public function add(){
      if ($this->session->userdata('logged_in')) {
        $data['main_view'] = 'addMember';
        $this->load->view('layout/submain',$data);
      } else {
        redirect(base_url('index.php/login'));
      }

    }
    
    public function edit($id){
      if ($this->session->userdata('logged_in')) {
        $data['foundMember'] = $this->member_model->getMemberByID($id);
        $data['main_view'] = 'editMember';
        $this->load->view('layout/submain',$data);
      } else {
        redirect(base_url('index.php/login'));
      }

    }

    public function updateData($id){
      if ($this->session->userdata('logged_in')) {
        $this->member_model->update([
          'nama' => $this->input->post('nama'),
          'telepon' => $this->input->post('telepon'),
          'email' => $this->input->post('email'),
          'alamat' => $this->input->post('alamat'),
          'kecamatan' => $this->input->post('kecamatan')
        ],$id);

        redirect(base_url('index.php/member'));
      } else {
        redirect(base_url('index.php/login'));
      }

    }
    
    public function info($id){
      if ($this->session->userdata('logged_in')) {
        $data['main_view'] = 'infoMember';
        $data['foundMember'] = $this->member_model->getMemberByID($id);
        $data['memberHistory'] = $this->customer_model->getPurchaseByMember($id);
        $this->load->view('layout/submain',$data);
      } else {
        redirect(base_url('index.php/login'));
      }

    }
  

  public function newMember() {
    if ($this->session->userdata('logged_in')) {
      $config['upload_path'] = './uploads';
      $config['allowed_types'] = 'gif|jpg|png';
      $config['max_size'] = 2000;
      $config['max_width'] = 1500;
      $config['max_height'] = 1500;
      $this->upload->initialize($config);
      
      if (!$this->upload->do_upload('ktp')) {
          $error = array('error' => $this->upload->display_errors());
          $this->load->view('addMember', $error);
      } else {
          $image = $this->upload->data();
          $this->member_model->createMember([
            'nama' =>  $this->input->post('nama'),
            'telepon' => $this->input->post('telepon'),
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('jalan'),
            'kecamatan' => $this->input->post('kecamatan'),
            'alamat' => $this->input->post('alamat'),
            'ktp' => $image['file_name']
          ]);
  
          redirect(base_url('index.php/member'));
      }
    } else {
      redirect(base_url('index.php/login'));
    }
  }
}
?>