<?php

	class Chess extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('Chess_model');
		}

		function register() {
		$data['title'] = 'Chess Try Out Form';
		$data['sport'] = 'chess/create';	
		$this->load->view("templates/header",$data);
		$this->load->view("players/try-out",$data);
		$this->load->view("templates/footer");
		}

		function create(){
			$data = array (
				
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
				'weight' => $this->input->post('weight')
					);
				$this->chess_model>add_records($data);
				$this->register();
		}

		function view(){
				$data = array();

			if($query = $this->Chess_model->get_records()) 	{
					$data['records'] = $query;
			}

			$data['title'] = 'Chess Players Record';	
			$this->load->view("templates/header",$data);
			$this->load->view("players/chess_view", $data);
			$this->load->view("templates/footer");
			
		}
	}