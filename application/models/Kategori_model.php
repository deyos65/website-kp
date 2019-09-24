<?php


class Kategori_model  extends CI_Model
{
    public function gettAllKategori()
    {
        return $this->db->get('kategori')->result_array();
    }


    public function AddKategori()
    {
        $data = [
            "jenis_kategori"  => $this->input->post('jenis_kategori', true)



        ];
        $this->db->insert('kategori', $data);
    }

    public function deleteKategori($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('kategori');
    }
    public function getKategoriById($id)
    {
        return $this->db->get_where('kategori', ['id' => $id])->row_array();
    }

    public function editKategori()
    {
        $data = [
            "jenis_kategori"  => $this->input->post('jenis_kategori', true)



        ];


        $this->db->where('id', $this->input->post('id'));
        $this->db->update('kategori', $data);
    }
}
