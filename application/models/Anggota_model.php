<?php

class Anggota_model extends CI_model{
    public function getAllAnggota()
    {
       return  $this->db->get('anggota')->result_array();
      
    }
}
