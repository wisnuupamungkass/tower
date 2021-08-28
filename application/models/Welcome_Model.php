<?php 
class Welcome_model extends CI_Model
    {
        public function insertCSV($data)
            {
                $this->db->insert('user', $data);
                return $this->db->insert_id();
            }
    }
?>