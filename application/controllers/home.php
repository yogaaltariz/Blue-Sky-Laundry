<?php 

    class home extends CI_Controller{

        public function index(){
            $this->load->view('home');
        }


        public function getCustomer(){

            $data = $this->customer_model->getData();
            header('Content-Type: application/json');
            echo json_encode($data);
        }

        public function customer($id){
            $data['customer'] = $this->customer_model->getCustomerByID($id);

            $this->load->view('customer_info',$data);
        }
    }

?>