<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');        
        
        }

    public function index()
         {
             if($this->session->userdata('email')){
                 redirect('user');
             }
             $this->form_validation->set_rules('email','Email','trim|required|valid_email');
             $this->form_validation->set_rules('password','Password','trim|required');

            if($this->form_validation->run ()== false){

                $data['title'] = 'Login Page';
                $this->load->view('templates/admin/auth_header',$data);
                $this->load->view('auth/login');
                $this->load->view('templates/admin/footer');
            
            }else{
                // jika lolos validasi
                $this->_login();
            }
      
         }
         private function _login()
         {
             $email=$this->input->post('email');
             $password=$this->input->post('password');

             $user=$this->db->get_where('user',['email'=> $email])->row_array();
            
             if($user){

                if($user['is_active']==1){
                    if(password_verify($password, $user['password'])){
                        $data=[
                            'email'=>$user['email'],
                            'role_id'=>$user['role_id']
                        ];
                        $this->session->set_userdata($data);
                        if($user['role_id']==1){
                            redirect('admin');

                        }else{

                            redirect('user');
                        }
                    }else{
                        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Wrong Password</div>');
                        redirect('auth');
                    }

                }else {
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">This Email has not Been Activated</div>');
                    redirect('auth');
                }
             }else{
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Email Is not Register</div>');
                redirect('auth');
             }


         }
       




        public function registration()
          {
            if($this->session->userdata('email')){
                redirect('user');
            }
              $this->form_validation->set_rules('full_name','Full_name','required|trim');     
              $this->form_validation->set_rules('force_name','Force_name','required|trim');     
              $this->form_validation->set_rules('member_number','Member_number','required|trim');     
              $this->form_validation->set_rules('email','Email','required|trim|valid_email|is_unique[user.email]',[
                  'is_unique'=>'This email has already registered!'
                
                
              ]);     
              $this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]',[
                  'matches'=>'password dont match!',
                  'min_length' =>'password to short!'
              ]);
              $this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');
        
     
     
        if( $this->form_validation->run() == false) {
            $data['title'] = 'User Registration';
            $this->load->view('templates/admin/auth_header',$data);
            $this->load->view('auth/registration');
            $this->load->view('templates/admin/auth_footer');
    
    }else{
            $data=[
              
                'full_name' =>htmlspecialchars($this->input->post('full_name',true)),
                'nick_name' =>htmlspecialchars($this->input->post('nick_name',true)),
                'member_number' =>htmlspecialchars($this->input->post('member_number',true)),
                'force_name' =>htmlspecialchars($this->input->post('force_name',true)),
                'email' =>htmlspecialchars($this->input->post('email',true)),
                'gender' =>$this->input->post('gender'),
                'image' =>'default.jpg',
                'password' =>password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
                'role_id' =>2,
                'is_active'=>1,
                'date_created'=>time()           
            ];

            $this->db->insert('user',$data);
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Congratulation! your account has been created, please Activated</div>');
            redirect('auth');
        
          }
}
 

        public function logout(){
            $this->session->unset_userdata('email');
            $this->session->unset_userdata('role_id');
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">You Have Been Logged out</div>');
            redirect('auth');

        }

        public function blocked()
        {
            $this->load->view('auth/blocked');
    
        }
} 