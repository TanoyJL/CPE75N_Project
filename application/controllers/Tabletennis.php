<?php

	class Tabletennis extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('Tabletennis_model');
		}

		function register() {
		$data['title'] = 'Tabletennis Try Out Form';
		$data['sport'] = 'Tabletennis/create';	
		$this->load->view("templates/header",$data);
		$this->load->view("players/try-out");
		$this->load->view("players/tabletennis_form",$data);
		$this->load->view("templates/footer");
		}

		function create(){
			
				$this->Tabletennis_model->add_records();
				$this->register();
		}

		function view(){
				$data = array();

			if($query = $this->Tabletennis_model->get_records()) 	{
					$data['records'] = $query;
			}

			$data['sport'] = 'Tabletennis Coach';	
			$data['applicants'] = 'New Applicants'	;
			$data['link'] = 'Approve';
			$this->load->view("templates/header3",$data);
			$this->load->view("players/tabletennis_view", $data);
			$this->load->view("templates/footer");
			
		}

		function view_details($id){
				$data = array();

			if($query = $this->Tabletennis_model->get_record($id)) 	{
					$data['records'] = $query;
			}

			$data['sport'] = 'Tabletennis Coach';	
			$data['applicants'] = 'New Applicants'	;
			$this->load->view("templates/header3",$data);
			$this->load->view("players/tabletennis_viewdetails", $data);
			$this->load->view("templates/footer");
			
		}

		function view_approved(){
				$data = array();
				$approval ='approved';
			if($query = $this->Tabletennis_model->get_records($approval)) 	{
					$data['records'] = $query;
			}

			$data['sport'] = 'Tabletennis Coach';
			$data['applicants'] = 'Approved Applicants'	;
			$data['link'] = 'Deny';
			$this->load->view("templates/header3",$data);
			$this->load->view("players/tabletennis_view", $data);
			$this->load->view("templates/footer");
			
		}

		function approve($id){
			$approval = 'approved';
				$this->db->set('approval', $approval);
          		$this->db->where('id_num', $id);
          		$this->db->update('tabletennis'); 
          		$this->view($id);
		}

		function deny($id){
			$approval = NULL;
				$this->db->set('approval', $approval);
          		$this->db->where('id_num', $id);
          		$this->db->update('tabletennis'); 
          		$this->view_approved($id);
		}

	
		function add_comment($id){
			$data = array(
            'comment' => $this->input->post('comment'),
       				 );
			$data['id']=$id;
				$this->db->set('comment', $data['comment']);
          		$this->db->where('id_num', $data['id']);
          		$this->db->update('tabletennis'); 
          		$this->view_details($id);
		}

	public function delete_row($id_num) {   
      $this->load->model("tabletennis_model");
      $this->tabletennis_model->delete_row($id_num);
      redirect("tabletennis/view");  
      }
	}