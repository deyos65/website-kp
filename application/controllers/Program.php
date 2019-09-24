<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Program extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Program_model');
    }

    public function unggulan()
    {
        $data['title'] = 'Program Unggulan';
        $data['unggulan'] = $this->Program_model->getUnggulan();
        $data['content'] = 'program/unggulan';
        $this->load->view('templates/user/layout', $data);
    }
    public function isidentil()
    {
        $data['title'] = 'Program Isidentil';
        $data['isidentil'] = $this->Program_model->getIsidentil();
        $data['content'] = 'program/isidentil';
        $this->load->view('templates/user/layout', $data);
    }
    public function pembinaan()
    {
        $data['title'] = 'Program Pembinaan Anggota';
        $data['pembinaan'] = $this->Program_model->getPembinaan();
        $data['content'] = 'program/pembinaan';
        $this->load->view('templates/user/layout', $data);
    }
}
