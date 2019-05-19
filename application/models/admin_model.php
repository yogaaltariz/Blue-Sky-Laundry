<?php 

    class Admin_model extends CI_Model {

        public function insertData($data){
            $this->db->insert('admin',$data);
        }

        public function getDataByUsername($username){

            $this->db->where('username',$username);
            
            return $this->db->get('admin')->result();
        }

        public function getDataByID($id){

            $this->db->where('id',$id);
            
            return $this->db->get('admin')->result();
        }

        public function getData(){
            return $this->db->get('admin')->result();
        }

        public function givePermission($id){
            $this->db->where('id',$id);
           
            $data= $this->db->get('admin')->result();
            if ($data[0]->izin == 1) {
                $this->db->where('id',$id);
                $update = array(
                    'izin' => 0
                );
                $this->db->update('admin',$update);
            } else {
                $this->db->where('id',$id);
                $update = array(
                    'izin' => 1
                );
                $this->db->update('admin',$update);
            }
        }

        public function update($data,$id){
            $this->db->where('id',$id);
            $this->db->update('admin',$data);
        }


        public function setLastLogin($id){  
            $this->db->query('UPDATE `admin` SET lastLogin =now() WHERE id = '.$id);
        }

        public function deleteAdmin($id){
            $this->db->where('id',$id);
            $this->db->delete('admin');
        }
    }
?>