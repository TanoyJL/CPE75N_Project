<?php

	class Lawntennis extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('Lawntennis_model');
		}

		function register() {
		$data['title'] = 'Lawntennis Try Out Form';
		$data['sport'] = 'Lawntennisl/create';	
		$this->load->view("templates/header",$data);
		$this->load->view("players/try-out",$data);
		$this->load->view("players/Lawntennis_view");
		$this->load->view("templates/footer");
		}

		function create(){
			$data = array (
				'hittinghand' => $this->input->post('hittinghand'),
				'preffered_categories' => $this->input->post('preffered_categories'),
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
				$this->Lawntennis_model>add_records($data);
				$this->register();
		}

		function view(){
				$data = array();

			if($query = $this->Lawntennis_model->get_records()) 	{
					$data['records'] = $query;
			}

			$this->load->view("players/rLawntennis_view", $data);
		}
	}