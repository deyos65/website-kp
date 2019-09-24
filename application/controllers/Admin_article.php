<?php

defined('BASEPATH') or exit('No direct script access allowed');

class admin_article extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Article_model');
        $this->load->library('form_validation');
    }


    public function index()
    {

        $data['title'] = 'Menu article  ';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();






        $this->load->model('Article_model', 'Article');
        $data['article'] = $this->Article->getArticle();
        $data['kategori'] = $this->db->get('kategori')->result_array();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin_article/index', $data);
        $this->load->view('templates/admin/footer');
    }



    public function add()
    {
        $data['title'] = 'form data article';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Article_model', 'article');
        $data['article'] = $this->article->getarticle();
        $data['kategori'] = $this->db->get('kategori')->result_array();



        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('kategori_id', 'Kategori', 'required');

        $this->form_validation->set_rules('isi', 'isi', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin_article/add', $data);
            $this->load->view('templates/admin/footer');
        } else {
            $data = array();
            if ($this->input->post('submit')) { // Jika user menekan tombol Submit (Simpan) pada form
                // lakukan upload file dengan memanggil function upload yang ada di GambarModel.php
                $upload = $this->article->upload();

                if ($upload['result'] == "success") { // Jika proses upload sukses
                    // Panggil function save yang ada di GambarModel.php untuk menyimpan data ke database
                    $this->article->Addarticle($upload);
                    $this->session->set_flashdata('message', '<div class="alert alert-success mt-3" role="alert">New Data Kepengurusan Add Succes </div>');

                    redirect('Admin_article'); // Redirect kembali ke halaman awal / halaman view data
                } else { // Jika proses upload gagal
                    $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
                }
            }
        }
    }


    public function delete($id)
    {
        $this->Article_model->deletearticle($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success mt-3" role="alert"> Data article Delete Succes </div>');
        redirect('Admin_article');
    }

    public function edit($id)
    {

        $data['title'] = 'form data Edit Data article';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Article_model');
        $data['article'] = $this->Article_model->getarticleById($id);
        $data['kategori'] = $this->db->get('kategori')->result_array();

        $this->load->view('templates/admin/header', $data);
        $this->load->view('templates/admin/sidebar', $data);
        $this->load->view('templates/admin/topbar', $data);
        $this->load->view('admin_article/edit', $data);
        $this->load->view('templates/admin/footer');
    }
    // fungsi
    public function edit_action()
    {
        // $join = array('article', 'tbl_peminjaman.id=tbl_user.id');
        // $data['pinjam_barang'] = $this->db->join($join[0], $join[1])->get_where('tbl_peminjaman', array('id_peminjaman' => $id_peminjaman))->result();
        // $this->template->load('layout/template', 'member/form_pinjam_barang2', $data);

        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $kategori_id = $this->input->post('kategori_id');
        $isi = $this->input->post('isi');
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['upload_path']          = './assets/img/artikel/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size']  = '2048';
            $config['remove_space'] = TRUE;
            $config['encrypt_name'] = TRUE; //just milisecond timestamp fot unique name

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {

                $new_image = $this->upload->data('file_name');

                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->db->set('judul', $judul);
        $this->db->set('kategori_id', $kategori_id);
        $this->db->set('isi', $isi);
        $this->db->where('id', $id);
        $this->db->update('article');

        $this->session->set_flashdata('message', '<div class="alert alert-success mt-3" role="alert">New Data article Add Succes </div>');
        redirect('Admin_article');
    }

    // global
}
// gl
