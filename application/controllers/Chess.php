<?php

	class Chess extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('Chess_model');
		}

		function register() {
		$data['title'] = 'Chess Try Out Form';
		$data['sport'] = 'Chess/create';	
		$this->load->view("templates/header",$data);
		$this->load->view("players/try-out");
		$this->load->view("players/chess_form",$data);
		$this->load->view("templates/footer");
		}

		function create(){
			
				$this->Chess_model->add_records();
				$this->register();
		}

		function view(){
				$data = array();

			if($query = $this->Chess_model->get_records()) 	{
					$data['records'] = $query;
			}

			$data['sport'] = 'Chess Coach';	
			$data['applicants'] = 'New Applicants'	;
			$data['link'] = 'Approve';
			$this->load->view("templates/header3",$data);
			$this->load->view("players/chess_view", $data);
			$this->load->view("templates/footer");
			
		}

		function view_details($id){
				$data = array();

			if($query = $this->Chess_model->get_record($id)) 	{
					$data['records'] = $query;
			}

			$data['sport'] = 'Chess Coach';	
			$data['applicants'] = 'New Applicants'	;
			$this->load->view("templates/header3",$data);
			$this->load->view("players/chess_viewdetails", $data);
			$this->load->view("templates/footer");
			
		}

		function view_approved(){
				$data = array();
				$approval ='approved';
			if($query = $this->Chess_model->get_records($approval)) 	{
					$data['records'] = $query;
			}

			$data['sport'] = 'Chess Coach';
			$data['applicants'] = 'Approved Applicants'	;
			$data['link'] = 'Deny';
			$this->load->view("templates/header3",$data);
			$this->load->view("players/chess_view", $data);
			$this->load->view("templates/footer");
			
		}

		function approve($id){
			$approval = 'approved';
				$this->db->set('approval', $approval);
          		$this->db->where('id_num', $id);
          		$this->db->update('chess'); 
          		$this->view($id);
		}

		function deny($id){
			$approval = NULL;
				$this->db->set('approval', $approval);
          		$this->db->where('id_num', $id);
          		$this->db->update('chess'); 
          		$this->view_approved($id);
		}

	public function delete_row($id_num) {   
      $this->load->model("chess_model");
      $this->chess_model->delete_row($id_num);
      redirect($_SERVER['HTTP_REFERER']);  
      }
	}