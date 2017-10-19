<?php

	class Football extends CI_Controller {
		public function __construct() {
		        parent::__construct();
		        $this->load->model('Lawntennis_model');
		    }
		function register() {
		$this->load->view("players/Lawntennis_view");
		}

		function create() {
			$data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'id_num' => $this->input->post('id_num'),
			'course_year' => $this->input->post('course_year'),
			'age' => $this->input->post('age'),
			'birthdate' => $this->input->post('birthdate'),
			'phone_number' => $this->input->post('phone_number'),
			'email' => $this->input->post('email'),
			'address' => $this->input->post('address'),
			'year_experience' => $this->input->post('year_experience'),
			'height' => $this->input->post('height'),
			'weight' => $this->input->post('weight'),
			'hittinghand' => $this->input->post('hittinghand'),
			'preffered_categories' => $this->input->post('player_position'),
			'player_experience' => $this->input->post('player_experience'),
			'rank_experience' => $this->input->post('rank_experience'),
			);

			$this->Lawntennis_model->add_records($data);
			$this->register();
		}

		function view() {
			$data = array();

			if($query = $this->Lawntennis_model->get_records()) {
				$data['records'] = $query;
			}

			$this->load->view("players/rLawntennis_view", $data);
		}
	}