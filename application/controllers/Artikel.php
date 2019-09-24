<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Artikel extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //load libary pagination
        $this->load->library('pagination');

        //load the department_model
        $this->load->model('Article_model');
    }

    function index()
    {

        $data['title'] = 'Article MAPAK ALAM';
        $data['kategori'] = $this->db->get('kategori')->result_array();

        $data['article'] = $this->Article_model->getArticle();
        if ($this->input->post('kategori_id', true)) {
            $data['article'] = $this->Article_model->SearchKategori();
        }
        $data['content'] = 'artikel/index';
        $this->load->view('templates/user/layout', $data);
    }

    function detail($id)
    {
        $data['title'] = 'Detail Article ';
        $data['article'] = $this->Article_model->getarticleById($id);
        $data['content'] = 'Artikel/detail_artikel';
        $this->load->view('templates/user/layout', $data);
    }
}
