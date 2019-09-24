<?php

class Merchandise extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //load libary pagination
        $this->load->library('pagination');

        //load the department_model
        $this->load->model('Merchandise_model');
    }

    function index()
    {


        $data['title'] = 'Merchandise MAPAK ALAM';
        $data['merchandise'] = $this->Merchandise_model->getAllMerchandise();
        $data['content'] = 'merchandise/index';
        $this->load->view('templates/user/layout', $data);
    }

    public function add()
    {

        $data['content'] = 'merchandise/add';
        $this->load->view('templates/user/layout', $data);
    }


    public function detail($id)
    {
        $data['title'] = 'Detail Barang';
        $data['merchandise'] = $this->Merchandise_model->getMerchandiseById($id);
        $data['content'] = 'merchandise/detail';
        $this->load->view('templates/user/layout', $data);
    }
}
