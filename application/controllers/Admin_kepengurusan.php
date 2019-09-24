<?php

defined('BASEPATH') or exit('No direct script access allowed');

class admin_kepengurusan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kepengurusan_model');
        $this->load->library('form_validation');
    }


    public function index()
    {
        $data['title'] = 'Menu Kepengurusan  ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Kepengurusan_model', 'Angkatan');
        $data['kepengurusan'] = $this->Angkatan->getKepengurusan();
        $data['angkatan'] = $this->db->get('angkatan')->result_array();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin_kepengurusan/index', $data);
        $this->load->view('templates/admin/footer');
    }



    public function add()
    {
        $data['title'] = 'form data Kepengurusan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Kepengurusan_model', 'Angkatan');
        $data['kepengurusan'] = $this->Angkatan->getKepengurusan();
        $data['angkatan'] = $this->db->get('angkatan')->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('Jabatan', 'Jabatan', 'required');
        $this->form_validation->set_rules('periode', 'Periode', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('instagram', 'Instagram', 'required');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin_kepengurusan/add', $data);
            $this->load->view('templates/admin/footer');
        } else {

            $data = array();
            if ($this->input->post('submit')) { // Jika user menekan tombol Submit (Simpan) pada form
                // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
                $upload = $this->Angkatan->upload();

                if ($upload['result'] == "success") { // Jika proses upload sukses
                    // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
                    $this->Angkatan->AddKepengurusan($upload);
                    $this->session->set_flashdata('message', '<div class="alert alert-success mt-3" role="alert">New Data Kepengurusan Add Succes </div>');
                    redirect('Admin_kepengurusan'); // Redirect kembali ke halaman awal / halaman view data
                } else { // Jika proses upload gagal
                    $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
                }
            }
        }
    }


    public function delete($id)
    {
        $this->Kepengurusan_model->deleteKepengurusan($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success mt-3" role="alert"> Data Kepengurusan Delete Succes </div>');
        redirect('Admin_kepengurusan');
    }

    public function edit($id)
    {
        $data['title'] = 'form data Edit Data Kepengurusan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kepengurusan'] = $this->Kepengurusan_model->getKepengurusanById($id);
        $data['angkatan'] = $this->db->get('angkatan')->result_array();



        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin_kepengurusan/edit', $data);
        $this->load->view('templates/admin/footer');
    }
    public function edit_action()
    {
        // $join = array('article', 'tbl_peminjaman.id=tbl_user.id');
        // $data['pinjam_barang'] = $this->db->join($join[0], $join[1])->get_where('tbl_peminjaman', array('id_peminjaman' => $id_peminjaman))->result();
        // $this->template->load('layout/template', 'member/form_pinjam_barang2', $data);

        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $Jabatan = $this->input->post('Jabatan');
        $periode = $this->input->post('periode');
        $jurusan = $this->input->post('jurusan');
        $instagram = $this->input->post('instagram');
        $deskripsi = $this->input->post('deskripsi');

        $upload_image = $_FILES['poto_profil']['name'];

        if ($upload_image) {
            $config['upload_path']          = './assets/img/kepengurusan/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size']  = '2048';
            $config['remove_space'] = TRUE;
            $config['encrypt_name'] = TRUE; //just milisecond timestamp fot unique name

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('poto_profil')) {

                $new_image = $this->upload->data('file_name');

                $this->db->set('poto_profil', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->db->set('nama', $nama);
        $this->db->set('Jabatan', $Jabatan);
        $this->db->set('periode', $periode);
        $this->db->set('jurusan', $jurusan);
        $this->db->set('instagram', $instagram);
        $this->db->set('deskripsi', $deskripsi);

        $this->db->where('id', $id);
        $this->db->update('kepengurusan');

        $this->session->set_flashdata('message', '<div class="alert alert-success mt-3" role="alert">New Data pengurus edit Succes </div>');
        redirect('Admin_kepengurusan');
    }
}
