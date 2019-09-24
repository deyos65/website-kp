<?php


class Merchandise_model  extends CI_Model
{
  public function getAllMerchandise()
  {
    $query = "SELECT `merchandise`.*,`contact_inforrmasi`.`whatsapp_danus`
                 FROM `merchandise` JOIN `contact_inforrmasi`
                 ON `contact_inforrmasi`.`id`=`merchandise`.`contac_informasi_id`";
    return $this->db->query($query)->result_array();
  }


  public function Addmerchandise($upload)
  {
    $data = [
      "nama_barang"  => $this->input->post('nama_barang', true),
      "kategori" => $this->input->post('kategori', true),
      "gambar" => $upload['file']['file_name'],
      "harga" => $this->input->post('harga', true),
      "contac_informasi_id" => 1,
      "deskripsi" => $this->input->post('deskripsi', true)



    ];
    $this->db->insert('merchandise', $data);
  }
  public function upload()
  {
    $config['upload_path'] = './assets/img/merchandise/';
    $config['allowed_types'] = 'jpg|png|jpeg';
    $config['max_size']  = '2048';
    $config['remove_space'] = TRUE;
    $config['encrypt_name'] = TRUE;


    $this->load->library('upload', $config); // Load konfigurasi uploadnya
    if ($this->upload->do_upload('input_gambar')) { // Lakukan upload dan Cek jika proses upload berhasil
      // Jika berhasil :
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    } else {
      // Jika gagal :
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }

  public function deleteMerchandise($id)
  {

    $this->db->where('id', $id);
    $this->db->delete('merchandise');
  }
  public function getMerchandiseById($id)
  {
    $query = " SELECT `merchandise`.*,`contact_inforrmasi`.`whatsapp_danus`
                 FROM `merchandise` JOIN `contact_inforrmasi`
                 ON `contact_inforrmasi`.`id`=`merchandise`.`contac_informasi_id`
                 where `merchandise`.`id` like $id ";
    return $this->db->query($query)->row_array();
  }

  public function editmerchandise()
  {




    $data = [
      "nama_barang"  => $this->input->post('nama_barang', true),

      "harga" => $this->input->post('harga', true),

      "deskripsi" => $this->input->post('deskripsi', true)
    ];


    $this->db->where('id', $this->input->post('id'));
    $this->db->update('merchandise', $data);
  }
}
