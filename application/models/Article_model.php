<?php


class Article_model  extends CI_Model
{

    public function getArticle()
    {

        $query = "SELECT `article`.*,`kategori`.`jenis_kategori`
                 FROM `article` JOIN `kategori`
                 ON `kategori`.`id`=`article`.`kategori_id`";
        return $this->db->query($query)->result_array();
    }

    public function Addarticle($upload)
    {
        $data = [
            "judul"  => $this->input->post('judul', true),
            "kategori_id" => $this->input->post('kategori_id', true),
            "image" => $upload['file']['file_name'],
            "isi" => $this->input->post('isi', true),
            "waktu_pembuatan" => time()

        ];
        $this->db->insert('article', $data);
    }

    public function deletearticle($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('article');
    }


    public function getarticleById($id)
    {

        $query = "SELECT `article`.*,`kategori`.`jenis_kategori`
                 FROM `article` JOIN `kategori`
                 ON `kategori`.`id`=`article`.`kategori_id`
                 where `article`.`id` like $id
                 ";
        return $this->db->query($query)->row_array();
    }

    public function update($where, $data)
    {
        $this->db->update('article', $data, $where);
        return $this->db->affected_rows();
    }
    public function uploadE()
    {
        $config['upload_path'] = './assets/img/artikel/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']  = '2048';
        $config['remove_space'] = TRUE;
        $config['encrypt_name'] = TRUE;


        $this->load->library('upload', $config); // Load konfigurasi uploadnya
        if ($this->upload->do_upload('image')) { // Lakukan upload dan Cek jika proses upload berhasil
            // Jika berhasil :

            $return = array('result' => 'success', 'file' => $this->upload->data('file_name'), 'error' => '');
            return $return;
        } else {
            // Jika gagal :
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }
    public function SearchKategori()
    {
        $kategori_id = $this->input->post('kategori_id', true);
        // $this->db->like('kategori_id', $kategori_id);
        $query = "SELECT `article`.*,`kategori`.`jenis_kategori`
                 FROM `article` JOIN `kategori`
                 ON `kategori`.`id`=`article`.`kategori_id`
                 where `kategori`.`id` like $kategori_id";
        return $this->db->query($query)->result_array();
        // return $this->db->get('article')->result_array();
    }
    public function upload()
    {
        $config['upload_path'] = './assets/img/artikel/';
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
}
