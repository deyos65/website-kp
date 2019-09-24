<?php

    
    //ambil data  dari database
    class Auth_model extends CI_Model {
        public function getAllAuth()
        {
            return $this->db->get('auth')->result_array();
        }
}

