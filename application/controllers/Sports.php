<?php
class Sports extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sports_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
    }

    public function index()
    {
        $this->load->view('templates/header', $data);
        $this->load->view('sports/index', $data);
        $this->load->view('templates/footer');
    }

    public function view()
    {
        $this->load->view('templates/header', $data);
        $this->load->view('sports/view', $data);
        $this->load->view('templates/footer');
    }
        
    public function edit()
    {
        //edit players assigned to team
    }

        
}