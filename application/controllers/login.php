<?php 

    class login extends CI_Controller {
        public function index(){
            $this->load->view('login_view');
        }


        public function doLogin(){
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $data = $this->admin_model->getDataByUsername($username);

            // echo '<pre>';
            // var_dump();
            // echo '</pre>';
            if ($data[0]->password == $password && $data[0]->izin == 1) {
                date_default_timezone_set('asia/jakarta');
                $date = time();
                $tglSelesai = strtotime('now');
                // var_dump($date);
                $newdata = array(
                    'id' => $data[0]->id,
                    'username'  => $username,
                    'password'     => $password,
                    'logged_in' => TRUE
                );
                
                $this->admin_model->setLastLogin($data[0]->id);
                $this->session->set_userdata($newdata);

                redirect(base_url('index.php/customer'));
            } else {
                redirect(base_url('index.php/login'));
            }
        }

        public function logout(){
            $this->session->unset_userdata('logged_in');
            redirect(base_url('index.php/login'));
        }
    }
?>