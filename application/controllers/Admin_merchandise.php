<?php

defined('BASEPATH') or exit('No direct script access allowed');

class admin_merchandise extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Merchandise_model');
        $this->load->library('form_validation');
    }


    public function index()
    {



        $data['title'] = 'Menu merchandise  ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['merchandise'] = $this->Merchandise_model->getAllMerchandise();


        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin_merchandise/index', $data);
        $this->load->view('templates/admin/footer');
    }



    public function add()
    {
        $data['title'] = 'form data merchandise';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->model('Merchandise_model', 'merchandise');

        $this->form_validation->set_rules('nama_barang', 'Name Of Goods', 'required');
        $this->form_validation->set_rules('harga', 'Price', 'required');




        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin_merchandise/add', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $data = array();
            if ($this->input->post('submit')) { // Jika user menekan tombol Submit (Simpan) pada form
                // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
                $upload = $this->merchandise->upload();

                if ($upload['result'] == "success") { // Jika proses upload sukses
                    // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
                    $this->merchandise->Addmerchandise($upload);

                    redirect('Admin_merchandise'); // Redirect kembali ke halaman awal / halaman view data
                } else { // Jika proses upload gagal
                    $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
                }
            }
            $this->session->set_flashdata('message', '<div class="alert alert-success mt-3" role="alert">New Data Kepengurusan Add Succes </div>');
            redirect('Admin_merchandise');
        }
    }



    public function delete($id)
    {
        $this->Merchandise_model->deletemerchandise($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success mt-3" role="alert"> Data merchandise Delete Succes </div>');
        redirect('Admin_merchandise');
    }

    public function edit($id)
    {
        $data['title'] = 'form data Edit Data merchandise';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['merchandise'] = $this->Merchandise_model->getmerchandiseById($id);





        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin_merchandise/edit', $data);
        $this->load->view('templates/admin/footer');
    }
    public function edit_action()
    {
        // $join = array('article', 'tbl_peminjaman.id=tbl_user.id');
        // $data['pinjam_barang'] = $this->db->join($join[0], $join[1])->get_where('tbl_peminjaman', array('id_peminjaman' => $id_peminjaman))->result();
        // $this->template->load('layout/template', 'member/form_pinjam_barang2', $data);

        $id = $this->input->post('id');
        $nama_barang = $this->input->post('nama_barang');
        $harga = $this->input->post('harga');
        $kategori = $this->input->post('kategori');

        $deskripsi = $this->input->post('deskripsi');
        $upload_image = $_FILES['gambar']['name'];

        if ($upload_image) {
            $config['upload_path']          = './assets/img/merchandise/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size']  = '2048';
            $config['remove_space'] = TRUE;
            $config['encrypt_name'] = TRUE; //just milisecond timestamp fot unique name

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {

                $new_image = $this->upload->data('file_name');

                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->db->set('nama_barang', $nama_barang);
        $this->db->set('harga', $harga);
        $this->db->set('kategori', $kategori);

        $this->db->set('deskripsi', $deskripsi);
        $this->db->where('id', $id);
        $this->db->update('merchandise');

        $this->session->set_flashdata('message', '<div class="alert alert-success mt-3" role="alert">New Data merchandise edit Succes </div>');
        redirect('Admin_merchandise');
    }
}
