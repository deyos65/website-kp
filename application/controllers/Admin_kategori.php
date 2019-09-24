<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_kategori extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model');
        $this->load->library('form_validation');
    }


    public function index()
    {



        $data['title'] = 'Menu Kategori  ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->Kategori_model->gettAllKategori();


        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin_kategori/index', $data);
        $this->load->view('templates/admin/footer');
    }



    public function add()
    {
        $data['title'] = 'form add data kategori';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('jenis_kategori', 'Jenis Kategori', 'required');



        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin_kategori/add', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->Kategori_model->AddKategori();
            $this->session->set_flashdata('message', '<div class="alert alert-success mt-3" role="alert">New Data Kategori Add Succes </div>');
            redirect('admin_kategori');
        }
    }


    public function delete($id)
    {
        $this->Kategori_model->deleteKategori($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success mt-3" role="alert"> Data Kategori Delete Succes </div>');
        redirect('admin_kategori');
    }

    public function edit($id)
    {
        $data['title'] = 'form data Edit Data kategori';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kategori'] = $this->Kategori_model->getKategoriById($id);
        $this->form_validation->set_rules('jenis_kategori', 'Jenis Kategori', 'required');



        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin_kategori/edit', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->Kategori_model->editKategori();
            $this->session->set_flashdata('message', '<div class="alert alert-success mt-3" role="alert">New update Data Kategori  Succes edit </div>');
            redirect('admin_kategori');
        }
    }
}
