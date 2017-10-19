<?php

	class Lawntennis extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('Lawntennis_model');
		}

		function register(){
			$this->load->view('players/Lawntennis_view');
		}

		function create(){
			$data = array (
				'hittinghand' => $this->input->post('hittinghand'),
				'preffered_categories' => $this->input->post('preffered_categories'),
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