<?php


class Kepengurusan_model  extends CI_Model
{
    public function getKepengurusan()
    {

        $query = "SELECT `kepengurusan`.*,`angkatan`.`nama_angkatan`
        FROM `kepengurusan` JOIN `angkatan`
        ON `kepengurusan`.`angkatan_id`=`angkatan`.`id`

";
        return $this->db->query($query)->result_array();
    }
    public function upload()
    {
        $config['upload_path'] = './assets/img/kepengurusan';
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

    public function AddKepengurusan($upload)
    {
        $data = [
            "nama"  => $this->input->post('nama', true),
            "angkatan_id"  => $this->input->post('nama_angkatan', true),
            "Jabatan" => $this->input->post('Jabatan', true),
            "periode" => $this->input->post('periode', true),
            "poto_profil" => $upload['file']['file_name'],

            "jurusan" => $this->input->post('jurusan', true),
            "instagram" => $this->input->post('instagram', true),
            "deskripsi" => $this->input->post('deskripsi', true)

        ];
        $this->db->insert('kepengurusan', $data);
    }

    public function deleteKepengurusan($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('kepengurusan');
    }
    public function getKepengurusanById($id)
    {
        $query = "SELECT `kepengurusan`.*,`angkatan`.`nama_angkatan`
        FROM `kepengurusan` JOIN `angkatan`
        ON `angkatan`.`id`=`kepengurusan`.`angkatan_id`
        where `kepengurusan`.`id` like $id
        ";
        return $this->db->query($query)->row_array();
    }

    public function update($where, $data)
    {
        $this->db->update('kepengurusan', $data, $where);
        return $this->db->affected_rows();
    }
}
