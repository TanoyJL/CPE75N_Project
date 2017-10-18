<?php

	class Football extends CI_Controller {
		function register() {
		$this->load->view("players/football_view");
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
			'kickingfoot' => $this->input->post('kickingfoot'),
			'player_position' => $this->input->post('player_position'),
			'player_experience' => $this->input->post('player_experience'),
			'rank_experience' => $this->input->post('rank_experience'),
			);

			$this->Football_model->add_records($data);
			$this->register();
		}
	}