<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Program_model extends CI_Model

{
    public function getUnggulan()
    {
        $query = "SELECT `article`.*,`kategori`.`jenis_kategori`
        FROM `article` JOIN `kategori`
        ON `kategori`.`id`=`article`.`kategori_id`
        where `kategori`.`id` like '%8%'
       
        ORDER BY `waktu_pembuatan` desc 
        ";
        return $this->db->query($query)->row_array();
    }
    public function getIsidentil()
    {
        $query = "SELECT `article`.*,`kategori`.`jenis_kategori`
        FROM `article` JOIN `kategori`
        ON `kategori`.`id`=`article`.`kategori_id`
        where `kategori`.`id` like '%9%'
       
        ORDER BY `waktu_pembuatan` desc 
        ";
        return $this->db->query($query)->row_array();
    }
    public function getPembinaan()
    {
        $query = "SELECT `article`.*,`kategori`.`jenis_kategori`
        FROM `article` JOIN `kategori`
        ON `kategori`.`id`=`article`.`kategori_id`
        where `kategori`.`id` like '%10%'
       
        ORDER BY `waktu_pembuatan` desc 
        ";
        return $this->db->query($query)->row_array();
    }
}
