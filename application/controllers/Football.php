<?php

	class Football extends CI_Controller {
		public function __construct() {
		        parent::__construct();
		        $this->load->model('Football_model');
		    }
		function register() {
		$data['title'] = 'Football Try Out Form';
		$data['sport'] = 'football/create';	
		$this->load->view("templates/header",$data);
		$this->load->view("players/try-out",$data);
		$this->load->view("players/football_form");
		$this->load->view("templates/footer");
		}

		function create() {
			
			$this->Football_model->add_records($data);
			$this->register();
		}

		function view() {
			$data = array();

			if($query = $this->Football_model->get_records()) {
				$data['records'] = $query;
			}
		$data['title'] = 'FootBall Players Record';	
			$this->load->view("templates/header",$data);
			$this->load->view("players/football_view", $data);
			$this->load->view("templates/footer");
			
		}
	}<?php

	class Football extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('Football_model');
		}

		function register() {
		$data['title'] = 'Football Try Out Form';
		$data['sport'] = 'Football/create';	
		$this->load->view("templates/header",$data);
		$this->load->view("players/try-out");
		$this->load->view("players/football_form",$data);
		$this->load->view("templates/footer");
		}

		function create(){
			
				$this->Football_model->add_records();
				$this->register();
		}

		function view(){
				$data = array();

			if($query = $this->Football_model->get_records()) 	{
					$data['records'] = $query;
			}

			$data['sport'] = 'Football Coach';	
			$data['applicants'] = 'New Applicants'	;
			$data['link'] = 'Approve';
			$this->load->view("templates/header3",$data);
			$this->load->view("players/football_view", $data);
			$this->load->view("templates/footer");
			
		}

		function view_details($id){
				$data = array();

			if($query = $this->Football_model->get_record($id)) 	{
					$data['records'] = $query;
			}

			$data['sport'] = 'Football Coach';	
			$data['applicants'] = 'New Applicants'	;
			$this->load->view("templates/header3",$data);
			$this->load->view("players/football_viewdetails", $data);
			$this->load->view("templates/footer");
			
		}

		function view_approved(){
				$data = array();
				$approval ='approved';
			if($query = $this->Football_model->get_records($approval)) 	{
					$data['records'] = $query;
			}

			$data['sport'] = 'Football Coach';
			$data['applicants'] = 'Approved Applicants'	;
			$data['link'] = 'Deny';
			$this->load->view("templates/header3",$data);
			$this->load->view("players/football_view", $data);
			$this->load->view("templates/footer");
			
		}

		function approve($id){
			$approval = 'approved';
				$this->db->set('approval', $approval);
          		$this->db->where('id_num', $id);
          		$this->db->update('football'); 
          		$this->view($id);
		}

		function deny($id){
			$approval = NULL;
				$this->db->set('approval', $approval);
          		$this->db->where('id_num', $id);
          		$this->db->update('football'); 
          		$this->view_approved($id);
		}

	public function delete_row($id_num) {   
      $this->load->model("football_model");
      $this->football_model->delete_row($id_num);
      redirect($_SERVER['HTTP_REFERER']);  
      }
	}