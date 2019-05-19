<?php 
    class customer_model extends CI_Model {

        public function insertData($data){
            $this->db->insert('customer',$data);
        }

        public function getData(){
            return $this->db->get('customer')->result();
        }

        public function getJSON(){
            return $this->db->get('customer')->result();
        }

        public function getPurchaseByMember($idMember){
            $this->db->where('idMember',$idMember);
            
            return $this->db->get('customer')->result();
        }

        public function getCustomerByID($id){
            $this->db->where('id',$id);

            return $this->db->get('customer')->result_array();
        }
        public function beDone($id){
            $this->db->where('id',$id);

			// Change the line below to your timezone!
			date_default_timezone_set('asia/jakarta');
			$tglSelesai = strtotime('now');
            $this->db->update('customer',['status'=>'Selesai','tglSelesai' => date('Y-m-d H:i:s', $tglSelesai)]);
        }

        public function update($data,$id){
            $this->db->where('id',$id);
            $this->db->update('customer',$data);
        }

        public function deleteCustomer($id){
            $this->db->where('id',$id);
            $this->db->delete('customer');
        }

        public function getCustomerByMonth($month){
            $sql = "SELECT * FROM customer WHERE DATE_FORMAT(`tglSelesai`, '%m') = ".$month;
            return  $this->db->query($sql)->num_rows();
        }

        public function getTotalHargaByMonth($month){
            $sql = " SELECT SUM(harga) as total FROM customer WHERE DATE_FORMAT(`tglSelesai`, '%m') = ".$month;

            return $this->db->query($sql)->row_array();
        }

        public function getCustomerByIdAdmin($idAdmin){
            $this->db->where('idAdmin',$idAdmin);

            return $this->db->get('customer')->result();
        }
    }

?>