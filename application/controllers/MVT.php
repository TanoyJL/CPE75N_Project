<?php

	class MVT extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('MVT_model');
		}

		function register() {
		$data['title'] = 'MVT Try Out Form';
		$data['sport'] = 'MVT/create';	
		$this->load->view("templates/header",$data);
		$this->load->view("players/try-out");
		$this->load->view("players/MVT_form",$data);
		$this->load->view("templates/footer");
		}

		function create(){
			
				$this->MVT_model->add_records();
				$this->register();
		}

		function view(){
				$data = array();

			if($query = $this->MVT_model->get_records()) 	{
					$data['records'] = $query;
			}

			$data['sport'] = 'MVT Coach';	
			$data['applicants'] = 'New Applicants'	;
			$data['link'] = 'Approve';
			$this->load->view("templates/header3",$data);
			$this->load->view("players/MVT_view", $data);
			$this->load->view("templates/footer");
			
		}

		function view_details($id){
				$data = array();

			if($query = $this->MVT_model->get_record($id)) 	{
					$data['records'] = $query;
			}

			$data['sport'] = 'MVT Coach';	
			$data['applicants'] = 'New Applicants'	;
			$this->load->view("templates/header3",$data);
			$this->load->view("players/MVT_viewdetails", $data);
			$this->load->view("templates/footer");
			
		}

		function view_approved(){
				$data = array();
				$approval ='approved';
			if($query = $this->MVT_model->get_records($approval)) 	{
					$data['records'] = $query;
			}

			$data['sport'] = 'MVT Coach';
			$data['applicants'] = 'Approved Applicants'	;
			$data['link'] = 'Deny';
			$this->load->view("templates/header3",$data);
			$this->load->view("players/MVT_view", $data);
			$this->load->view("templates/footer");
			
		}

		function approve($id){
			$approval = 'approved';
				$this->db->set('approval', $approval);
          		$this->db->where('id_num', $id);
          		$this->db->update('MVT'); 
          		$this->view($id);
		}

		function deny($id){
			$approval = NULL;
				$this->db->set('approval', $approval);
          		$this->db->where('id_num', $id);
          		$this->db->update('MVT'); 
          		$this->view_approved($id);
		}


		function add_comment($id){
			$data = array(
            'comment' => $this->input->post('comment'),
       				 );
			$data['id']=$id;
				$this->db->set('comment', $data['comment']);
          		$this->db->where('id_num', $data['id']);
          		$this->db->update('MVT'); 
          		$this->view_details($id);
		}

	public function delete_row($id_num) {   
      $this->load->model("MVT_model");
      $this->MVT_model->delete_row($id_num);
      redirect("MVT/view");  
      }
	}