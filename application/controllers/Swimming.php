<?php

	class Swimming extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('Swimming_model');
		}

		function register() {
		$data['title'] = 'Swimming Try Out Form';
		$data['sport'] = 'Swimming/create';	
		$this->load->view("templates/header",$data);
		$this->load->view("players/try-out",$data);
		$this->load->view("players/swimming_form",$data);
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
				'gender' => $this->input->post('gender'),
				'height' => $this->input->post('height'),
				'weight' => $this->input->post('weight'),
				'back_stroke1' => $this->input->post('back_stroke1'),
				'back_stroke2' => $this->input->post('back_stroke2'),
				'back_stroke3' => $this->input->post('back_stroke3'),
				'free_style1' => $this->input->post('free_style1'),
				'free_style2' => $this->input->post('free_style1'),
				'free_style3' => $this->input->post('free_style1'),
				'free_style4' => $this->input->post('free_style1'),
				'free_style5' => $this->input->post('free_style1'),
				'free_style6' => $this->input->post('free_style1'),
				'butterfly1' => $this->input->post('butterfly1'),
				'butterfly2' => $this->input->post('butterfly2'),
				'butterfly3' => $this->input->post('butterfly3'),
				'breast_stroke1' => $this->input->post('breast_stroke1'),
				'breast_stroke2' => $this->input->post('breast_stroke2'),
				'breast_stroke3' => $this->input->post('breast_stroke3'),
				'individual_medley1' => $this->input->post('individual_medley1'),
				'individual_medley2' => $this->input->post('individual_medley2'),
					);
				$this->Swimming_model->add_records($data);
				$this->register();
		}

		function view(){
				$data = array();

			if($query = $this->Swimming_model->get_records()) 	{
					$data['records'] = $query;
			}

			$data['title'] = 'Swimming Players Record';	
			$this->load->view("templates/header",$data);
			$this->load->view("players/swimming_view", $data);
			$this->load->view("templates/footer");
			
		}
	}