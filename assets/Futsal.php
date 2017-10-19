<?php

	class Futsal extends CI_Controller {
		public function __construct() {
		        parent::__construct();
		        $this->load->model('Football_model');
		}
		function register() {
		$this->load->view("players/futsal_view");
		}

		function create() {
			$data = array(
			'kickingfoot' => $this->input->post('kickingfoot'),
			'player_position' => $this->input->post('player_position'),
			);
			$this->Futsal_model->add_records($data);
			$this->register();
		}

		function view() {
			$data = array();

			if($query = $this->Futsal_model->get_records()) {
				$data['records'] = $query;
			}

			$this->load->view("players/rfutsal_view", $data);
		}
	}