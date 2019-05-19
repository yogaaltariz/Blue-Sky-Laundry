<?php
    class member_model extends CI_Model {


        public function createMember($data){
            $this->db->insert('member',$data);
        }


        public function getMember(){
            return $this->db->get('member')->result();
        }

        public function getTotalMember(){
            return $this->db->get('member')->num_rows();
        }

        public function getMemberByID($id){
            $this->db->where('id',$id);

            return $this->db->get('member')->result_array();
        }

        public function update($data,$id){
            $this->db->where('id',$id);
            $this->db->update('member',$data);
      
        }
    }

?>