<?php


class Angkatan_model  extends CI_Model
{
    public function gettAllAngkatan()
    {
        $query = "SELECT * FROM angkatan ORDER BY tahun ASC";
        return $this->db->query($query)->result_array();
    }


    public function AddAngkatan()
    {
        $data = [
            "nama_angkatan"  => $this->input->post('nama_angkatan', true),
            "tahun" => $this->input->post('tahun', true),


        ];
        $this->db->insert('angkatan', $data);
    }

    public function deleteAngkatan($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('angkatan');
    }
    public function getAngkatanById($id)
    {
        return $this->db->get_where('angkatan', ['id' => $id])->row_array();
    }

    public function editAngkatan()
    {
        $data = [
            "nama_angkatan"  => $this->input->post('nama_angkatan', true),
            "tahun" => $this->input->post('tahun', true),


        ];


        $this->db->where('id', $this->input->post('id'));
        $this->db->update('angkatan', $data);
    }
}
