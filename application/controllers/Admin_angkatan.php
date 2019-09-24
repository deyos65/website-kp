<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_angkatan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Angkatan_model');
        $this->load->library('form_validation');
    }


    public function index()
    {



        $data['title'] = 'Menu Angkatan  ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['angkatan'] = $this->Angkatan_model->gettAllAngkatan();


        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin_angkatan/index', $data);
        $this->load->view('templates/admin/footer');
    }



    public function add()
    {
        $data['title'] = 'form add data Angkatan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('nama_angkatan', 'Nama Angkatan', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin_angkatan/add', $data);
            $this->load->view('templates/admin/footer');
        } else {


            $this->Angkatan_model->AddAngkatan();
            $this->session->set_flashdata('message', '<div class="alert alert-success mt-3" role="alert">New Data Angkatan Add Succes </div>');
            redirect('Admin_angkatan');
        }
    }




    public function delete($id)
    {
        $this->Angkatan_model->deleteAngkatan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success mt-3" role="alert"> Data Angkatan Delete Succes </div>');
        redirect('Admin_angkatan');
    }

    public function edit($id)
    {
        $data['title'] = 'form data Edit Data Angkatan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['angkatan'] = $this->Angkatan_model->getAngkatanById($id);
        $this->form_validation->set_rules('nama_angkatan', 'Nama Angkatan', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin_angkatan/edit', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $this->Angkatan_model->editAngkatan();
            $this->session->set_flashdata('message', '<div class="alert alert-success mt-3" role="alert">New update Data Angkatan  Succes edit </div>');
            redirect('Admin_angkatan');
        }
    }
}
