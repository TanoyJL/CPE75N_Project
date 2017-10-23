<?php

	class Karatedo extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('Karatedo_model');
		}

		function register() {
		$data['title'] = 'Karatedo Try Out Form';
		$data['sport'] = 'Karatedo/create';	
		$this->load->view("templates/header",$data);
		$this->load->view("players/try-out");
		$this->load->view("players/karatedo_form",$data);
		$this->load->view("templates/footer");
		}

		function create(){
			
				$this->Karatedo_model->add_records();
				$this->register();
		}

		function view(){
				$data = array();

			if($query = $this->Karatedo_model->get_records()) 	{
					$data['records'] = $query;
			}

			$data['sport'] = 'Karatedo Coach';	
			$data['applicants'] = 'New Applicants'	;
			$data['link'] = 'Approve';
			$this->load->view("templates/header3",$data);
			$this->load->view("players/karatedo_view", $data);
			$this->load->view("templates/footer");
			
		}

		function view_details($id){
				$data = array();

			if($query = $this->Karatedo_model->get_record($id)) 	{
					$data['records'] = $query;
			}

			$data['sport'] = 'Karatedo Coach';	
			$data['applicants'] = 'New Applicants'	;
			$this->load->view("templates/header3",$data);
			$this->load->view("players/karatedo_viewdetails", $data);
			$this->load->view("templates/footer");
			
		}

		function view_approved(){
				$data = array();
				$approval ='approved';
			if($query = $this->Karatedo_model->get_records($approval)) 	{
					$data['records'] = $query;
			}

			$data['sport'] = 'Karatedo Coach';
			$data['applicants'] = 'Approved Applicants'	;
			$data['link'] = 'Deny';
			$this->load->view("templates/header3",$data);
			$this->load->view("players/karatedo_view", $data);
			$this->load->view("templates/footer");
			
		}

		function approve($id){
			$approval = 'approved';
				$this->db->set('approval', $approval);
          		$this->db->where('id_num', $id);
          		$this->db->update('karatedo'); 
          		$this->view($id);
		}

		function deny($id){
			$approval = NULL;
				$this->db->set('approval', $approval);
          		$this->db->where('id_num', $id);
          		$this->db->update('karatedo'); 
          		$this->view_approved($id);
		}

	public function delete_row($id_num) {   
      $this->load->model("karatedo_model");
      $this->karatedo_model->delete_row($id_num);
      redirect($_SERVER['HTTP_REFERER']);  
      }
	}