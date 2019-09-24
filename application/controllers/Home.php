<?php

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model('Contact_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'MAPAK ALAM';
        $data['contact'] = $this->Contact_model->gettAllContact();
        $data['content'] = 'home/index';
        $this->load->view('templates/user/layout', $data);

        if ($this->input->post('message', true)) {
            if ($this->input->post('message', !null)) {
                $this->_send();
            }
        }
    }

    public function _send()
    {
        $this->form_validation->set_rules('full_name', 'Full_name', 'required|trim');
        $this->form_validation->set_rules('message', 'Message', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

        if ($this->form_validation->run() == false) {
            echo "<script type='text/javascript'>
                alert('Terjadi Kesalahan!');
                history.back(self);
                </script>";


            // $data['contact'] = $this->Contact_model->gettAllContact();
            // $data['content'] = 'home/index';
            // $this->load->view('templates/user/layout', $data);
            // $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">HARAP MENGISI DATA</div>');
        } else {
            $data = [
                'full_name' => htmlspecialchars($this->input->post('full_name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'message' => htmlspecialchars($this->input->post('message', true))
            ];
            $this->_sendEmail();
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created, please Activated</div>');
        }
    }

    private function _sendEmail()
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'unpasmapakalam@gmail.com',
            'smtp_pass' => 'Mapakalam1979',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"
        ];

        $this->load->library('email', $config);
        $this->email->initialize($config);
        $this->email->from($this->input->post('email', true), $this->input->post('full_name', true));
        $this->email->to('unpasmapakalam@gmail.com');
        $this->email->subject('New Message From Website MAPAK ALAM');
        $this->email->message($this->input->post('message', true));

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
        }
    }
}
