<?php

	class Football extends CI_Controller {
		public function __construct() {
		        parent::__construct();
		        $this->load->model('Football_model');
		    }
		function register() {
		$data['title'] = 'Football Try Out Form';	
		$this->load->view("templates/header",$data);
		$this->load->view("players/football_view");
		$this->load->view("templates/footer");
		}

		function create() {
			$data = array(
			'kickingfoot' => $this->input->post('kickingfoot'),
			'player_position' => $this->input->post('player_position'),
			);
			$this->Football_model->add_records($data);
			$this->register();
		}

		function view() {
			$data = array();

			if($query = $this->Football_model->get_records()) {
				$data['records'] = $query;
			}
		$data['title'] = 'Records';	
			$this->load->view("templates/header",$data);
			$this->load->view("players/rfootball_view", $data);
			$this->load->view("templates/footer");
			
		}
	}