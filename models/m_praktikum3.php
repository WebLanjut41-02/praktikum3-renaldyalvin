<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class m_praktikum3 extends CI_Model {
    
        
        public function get_data()
    {
        return $this->db->get('menu');
    }

    public function inputdata($data, $table)
    {
        $this->db->insert($table, $data);
        
    }

    public function inputdata1($data, $table)
    {
        $this->db->insert($table, $data);
        
    }
}
    
   
    
?>