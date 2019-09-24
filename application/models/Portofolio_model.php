<?php

class Portofolio_model extends CI_model
{
    public function getAllPorfolio()
    {
        $query = "SELECT `article`.*,`kategori`.`jenis_kategori`
                 FROM `article` JOIN `kategori`
                 ON `kategori`.`id`=`article`.`kategori_id`
                 where `kategori`.`id` 
                 like '%7%'
                 or `kategori`.`id` like '%9%' 
                 or `kategori`.`id` like '%8%' 
                 or `kategori`.`id` like '%11%' 
                 ORDER BY `waktu_pembuatan` asc 
                 ";
        return $this->db->query($query)->result_array();
    }
}
