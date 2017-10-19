<?php

	class Futsal extends CI_Controller {
		public function __construct() {
		        parent::__construct();
		        $this->load->model('Futsal_model');
		}
		function register() {
		$data['title'] = 'Futsal Try Out Form';
		$data['sport'] = 'futsal/create';	
		$this->load->view("templates/header",$data);
		$this->load->view("players/try-out",$data);
		$this->load->view("players/futsal_view");
		$this->load->view("templates/footer");
		}

		function create() {
			$data = array(
			'kickingfoot' => $this->input->post('kickingfoot'),
			'player_position' => $this->input->post('player_position'),
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'id_num' => $this->input->post('id_num'),
			'course_year' => $this->input->post('course_year'),
			'gender' => $this->input->post('gender'),
			'age' => $this->input->post('age'),
			'birthdate' => $this->input->post('birthdate'),
			'email' => $this->input->post('email'),
			'address' => $this->input->post('address'),
			'years_experience' => $this->input->post('years_experience'),
			'height' => $this->input->post('height'),
			'weight' => $this->input->post('weight'),
			);
			$this->Futsal_model->add_records($data);
			$this->register();
		}

		function view() {
			$data = array();

			if($query = $this->Futsal_model->get_records()){
				$data['records'] = $query;
			}

		$data['title'] = 'Records';	
			$this->load->view("templates/header",$data);
			$this->load->view("players/rfutsal_view", $data);
			$this->load->view("templates/footer");
			
		}
	}