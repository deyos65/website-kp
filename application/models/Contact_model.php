<?php


class Contact_model  extends CI_Model
{
    public function gettAllContact()
    {


        return  $this->db->get('contact_inforrmasi')->result_array();
    }

    public function getContactById($id)
    {
        return $this->db->get_where('contact_inforrmasi', ['id' => $id])->row_array();
    }

    public function editContact()
    {
        $data = [
            "gmail"  => $this->input->post('gmail', true),
            "facebook" => $this->input->post('facebook', true),
            "youtube" => $this->input->post('youtube', true),
            "telephone" => $this->input->post('telephone', true),
            "whatsapp_danus" => $this->input->post('whatsapp_danus', true),
            "whatsapp" => $this->input->post('whatsapp', true)



        ];


        $this->db->where('id', $this->input->post('id'));
        $this->db->update('contact_inforrmasi', $data);
    }
}
