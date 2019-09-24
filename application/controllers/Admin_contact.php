<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_contact extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Contact_model');
        $this->load->library('form_validation');
    }


    public function index()
    {



        $data['title'] = 'Menu Contact Information  ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['contact'] = $this->Contact_model->gettAllContact();


        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin_contact/index', $data);
        $this->load->view('templates/admin/footer');
    }








    public function edit($id)
    {
        $data['title'] = 'form data Edit Data contact';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['contact'] = $this->Contact_model->getContactById($id);
        $this->form_validation->set_rules('gmail', 'gmail', 'required');
        $this->form_validation->set_rules('facebook', 'facebook', 'required');
        $this->form_validation->set_rules('youtube', 'youtube', 'required');
        $this->form_validation->set_rules('telephone', 'telephone', 'required');
        $this->form_validation->set_rules('whatsapp', 'whatsapp', 'required');



        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin_contact/edit', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->Contact_model->editContact();
            $this->session->set_flashdata('message', '<div class="alert alert-success mt-3" role="alert">New update Data contact  Succes edit </div>');
            redirect('Admin_contact');
        }
    }
}
