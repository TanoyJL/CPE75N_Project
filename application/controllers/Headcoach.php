<?php

	class Headcoach extends CI_Controller {

		public function __construct(){
			parent::__construct();
			$this->load->model('Headcoach_model');
		}

		function view(){
			$data = array();

			if($query = $this->Headcoach_model->get_records()) 	{
					$data['records'] = $query;
			}

			$data['title'] = 'Coaches Record';	
			$data['sport'] = 'Head Coach';
			$this->load->view("templates/header3",$data);
			$this->load->view("users/headCoach_view", $data);
			$this->load->view("templates/footer");
			
		}

		


			 function edit($id){
          $this->load->helper('form');
          $this->load->library('form_validation');
          $this->load->helper('url_helper');
          
         
          $this->form_validation->set_rules('username', 'Username', 'required|alpha_numeric_spaces');
          $this->form_validation->set_rules('password', 'Password', 'required|alpha_numeric_spaces');
          
           if ($this->form_validation->run() === FALSE)
      {
          $data['title'] = 'Coach Login';
          $data['sport'] = 'Head Coach';
          $data['id'] = $id;
          $this->load->view('templates/header3', $data);
          $this->load->view('users/headCoach_edit', $data);
          $this->load->view('templates/footer');

      }
          else
      {
      	$data = array(
		        'username' => $this->input->post('username'),
		        
		        'password' => $this->input->post('password'),
		        
		        
		    );
         
           $this->db->where('id_coach', $id);
		   $this->db->update('coachuser', $data);
		  redirect('headcoach/view');
      
      }  
    }

		
	}