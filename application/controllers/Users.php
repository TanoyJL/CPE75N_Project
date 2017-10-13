<?php
class Users extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
    }

    public function index()
    {
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

    public function login()
    {
    
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

    public function delete()
    {
    
    }    
 
    public function print()
    {
    
    }

    public function approve()
    {
    
    }       
}