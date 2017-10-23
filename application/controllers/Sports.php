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

        $this->load->helper('url');
        $data['title'] = 'Sports';
        $this->load->view('templates/header', $data);
        $this->load->view('sports/view', $data);
        $this->load->view('templates/footer');
    }
        
    public function print()
    {
        //list of approved players per sport
    }

        
}