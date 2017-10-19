<?php
class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
    }

    public function index()
    {   
        $data['title'] = 'Home';
        $this->load->view('templates/header', $data);
        $this->load->view('users/index', $data);
        $this->load->view('templates/footer');
    }

    public function register()
    {   

        $this->load->view('templates/header', $data);
        $this->load->view('users/registration', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        //headcoaches can edit coaches assigned sports
    }

    public function login_coach()
    {   

          $this->load->helper('form');
          $this->load->library('form_validation');
          $this->load->helper('url_helper');
          

          $this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric_spaces');
          $this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric_spaces');
          
           if ($this->form_validation->run() === FALSE)
      {
          $data['title'] = 'Coach Login';
          $this->load->view('templates/header', $data);
          $this->load->view('users/coach_login', $data);
          $this->load->view('templates/footer');

      }
          else
      {
          
          $username = $this->input->post('username');
          $password = $this->input->post('password');
          $this->user_model->checkloginauth($username,$password);
      }  
    }

    public function logout()
    {

    }
        
    public function delete()
    {
    
    }

    public function view()
    {
    
    }

     
 
    public function print()
    {
    
    }

    public function approve()
    {
    
    }   

      public function coach($sport)
    {
    
    }       
}