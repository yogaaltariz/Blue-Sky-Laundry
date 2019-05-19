<?php 

    class keuangan extends CI_Controller{



        public function index(){
            $data['keuangan'] = array(12);
            for ($i=0; $i <12 ; $i++) { 
                $data['keuangan'][$i] =  $this->customer_model->getCustomerByMonth($i+1);
            }

            $data['total'] = array(12);
            for ($i=0; $i <12 ; $i++) { 
                $query = $this->customer_model->getTotalHargaByMonth($i+1);
                $data['total'][$i] = $query['total'];
            }

            $data['totalMember'] = $this->member_model->getTotalMember();
            $data['main_view'] = "keuangan_view";

            $this->load->view('layout/main',$data);
        }
    }

?>