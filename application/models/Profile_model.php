<?php
class Profile_model extends CI_Model
{

  //ambil data mahasiswa dari database
  public function getAllKepengurusan()
  {
    return $this->db->get('kepengurusan')->result_array();
  }

  public function getAllAngkatan()
  {
    $query = "SELECT * FROM angkatan ORDER BY tahun ASC";
    return $this->db->query($query)->result_array();
  }

  // Fungsi View Detail
  public function getkepengurusanById($id)
  {

    $query = "SELECT `kepengurusan`.*,`angkatan`.`nama_angkatan`
               FROM `kepengurusan` JOIN `angkatan`
               ON `kepengurusan`.`angkatan_id`=`angkatan`.`id`
               where `kepengurusan`.`id` like $id
               ";
    return $this->db->query($query)->row_array();
  }

  // Fungsi View Detail
  //   public function getArtikelById($id_artikel)
  //   {
  //     return $this->db->get_where('artikel', ['id_artikel' => $id_artikel])->row_array();
  //   }
}
