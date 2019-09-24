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

                    redirect('Admin_article'); // Redirect kembali ke halaman awal / halaman view data
                } else { // Jika proses upload gagal
                    $data['message'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
                }
            }
            $this->session->set_flashdata('message', '<div class="alert alert-success mt-3" role="alert">New Data article Add Succes </div>');
            redirect('Admin_acrtile');
        }
    }


    public function delete($id)
    {
        $this->Article_model->deletearticle($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success mt-3" role="alert"> Data article Delete Succes </div>');
        redirect('Admin_article');
    }

    public function edit()
    {
        $id = $this->uri->segment(3);
        $data['title'] = 'form data Edit Data article';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['article'] = $this->Article_model->getarticleById($id);
        $data['kategori'] = $this->db->get('kategori')->result_array();


        $this->form_validation->set_rules('judul', 'judul', 'required');


        $this->form_validation->set_rules('isi', 'isi', 'required');


        if ($this->form_validation->run() == false) {

            $this->load->view('templates/admin/header', $data);
            $this->load->view('templates/admin/sidebar', $data);
            $this->load->view('templates/admin/topbar', $data);
            $this->load->view('admin_article/edit', $data);
            $this->load->view('templates/admin/footer');
        } else {


            $config['upload_path'] = './assets/img/artikel/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size']  = '2048';
            $config['remove_space'] = TRUE;
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('image')) //sesuai dengan name pada form 
                {
                    echo 'anda belum upload';
                } else {
                //tampung data dari form
                $judul = $this->input->post('image');

                $file = $this->upload->data();
                $image = $file['file_name'];

                $this->Article_model->editarticle(
                    array(
                        'judul' => $judul,
                        'image' => $image
                    ),
                    array(
                        'id_article' => $this->input->post('id')
                    )
                );
                $this->session->set_flashdata('msg', 'data berhasil di update');
                redirect('product');
            }


            // $this->Article_model->editarticle();
            // $this->session->set_flashdata('message', '<div class="alert alert-success mt-3" role="alert">New update Data Article  Succes edit </div>');
            // redirect('Admin_article');
            // fungsi
        }
    }
    // fungsi
    // global
}
// gl
