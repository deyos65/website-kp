<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profile_model');
    }

    public function index()
    {
        $data['title'] = 'Profile MAPAK ALAM';
        $data['kepengurusan'] = $this->Profile_model->getAllKepengurusan();
        $data['angkatan'] = $this->Profile_model->getAllAngkatan();

        $data['content'] = 'Profile/index';
        $this->load->view('templates/user/layout', $data);
    }



    public function detail($id)
    {
        $data['title'] = 'Profile Detail Pengurus';
        $data['kepengurusan'] = $this->Profile_model->getAllKepengurusan();
        $data['kepengurusan_detail'] = $this->Profile_model->getKepengurusanById($id);
        $data['content'] = 'Profile/detail';
        $this->load->view('templates/user/layout', $data);
    }
}
