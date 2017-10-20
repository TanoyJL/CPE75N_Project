<?php

	class Headcoach extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('Headcoach_model');
		}

		function view(){
			$data = array();

			if($query = $this->Headcoach_model->get_records()) 	{
					$data['records'] = $query;
			}

			$data['title'] = 'Coaches Record';	
			$this->load->view("templates/header",$data);
			$this->load->view("users/headCoach_view", $data);
			$this->load->view("templates/footer");
			
		}
	}