<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Portofolio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Portofolio_model');
    }

    public function index()
    {
        $data['title'] = 'Portofolio MAPAK ALAM';
        $data['Portofolio'] = $this->Portofolio_model->getAllPorfolio();
        $data['content'] = 'Portofolio/index';
        $this->load->view('templates/user/layout', $data);
    }
    function detail($id)
    {
        $data['title'] = 'Portofolio kegiatan';
        $data['portofolio'] = $this->portofolio_model->getportofolioById($id);
        $data['content'] = 'Portofolio/detail';
        $this->load->view('templates/user/layout', $data);
    }
}
