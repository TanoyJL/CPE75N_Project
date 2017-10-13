<?php
class Players extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Players_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
    }

    public function index()
    {
        $this->load->view('templates/header', $data);
        $this->load->view('players/index', $data);
        $this->load->view('templates/footer');
    }

    public function create()
    {
        $this->load->view('templates/header', $data);
        $this->load->view('players/try-out', $data);
        $this->load->view('templates/footer');
    }
        
    public function edit()
    {
        //coaches can add remarks
    }

    public function view()
    {
        //coaches can view profile
    }

    
        
}