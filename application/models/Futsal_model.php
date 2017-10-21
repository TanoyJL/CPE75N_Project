<?php

	class Futsal_model extends CI_Model {

		public function __construct(){
		  	
                $this->load->database();
        }
        function get_records() {
			$query = $this->db->get('futsal');
			return $query->result();
		}

		function add_records($data) {
			
			$this->load->helper('url');
			

			$data = array(
		        'firstname'=> $this->input->post('firstname'),
		        'lastname'=> $this->input->post('lastname'),
		        
		        'id_num'=> $this->input->post('id_num'),
		        'course_year'=> $this->input->post('course_year'),
				
				'age'=> $this->input->post('age'),
		        'players_date_of_birth'=> $this->input->post('gender'),
		        
		        'contact_phone_number'=> $this->input->post('course_year'),
		        'contact_email'=> $this->input->post('gender'),
				
				'address' => $this->input->post(''),
		        'years_of_playing_experience'=> $this->input->post('gender'),
				
				'gender'=> $this->input->post('gender'),
				'height'=> $this->input->post('gender'),
				'weight'=> $this->input->post('gender'),

				'playerexperience_nationalteam'=> $this->input->post('gender'),
				'playerexperience_nationalteam_rank'=> $this->input->post('gender'),
				
				'playerexperience_national_PRISAA'=> $this->input->post('gender'),
				'playerexperience_national_PRISAA_rank'=> $this->input->post('gender'),

				'playerexperience_regional_PRISAA'=> $this->input->post('gender'),
				'playerexperience_regional_PRISAA_rank'=> $this->input->post('gender'),

				'playerexperience_UNI_games'=> $this->input->post('gender'),
				'playerexperience_UNI_games_rank'=> $this->input->post('gender'),
				
				'playerexperience_PH_national_games'=> $this->input->post('gender'),
				'playerexperience_PH_national_games_rank'=> $this->input->post('gender'),

				'playerexperience_palarong_pambasa'=> $this->input->post('gender'),
				'playerexperience_palarong_pambasa_rank'=> $this->input->post('gender'),

				'playerexperience_CVIRAA'=> $this->input->post('gender'),
				'playerexperience_CVIRAA_rank'=> $this->input->post('gender'),

				'playerexperience_highschool_only'=> $this->input->post('gender'),
				'playerexperience_highschool_only_rank'=> $this->input->post('gender'),

				'playerexperience_others'=> $this->input->post('gender'),
				'playerexperience_others_rank'=> $this->input->post('gender'),

				'hitting_hand'=> $this->input->post('gender'),
				'preferred_category_single'=> $this->input->post('gender'),
				'preferred_category_doubles'=> $this->input->post('gender'),
				'preferred_category_mixed_doubles'=> $this->input->post('gender'),

		    );


			$this->db->insert('badminton',$data);
			$id = $this->db->insert_id();
			redirect('');
		}

		function update_records($data) {
			$this->db->where('id', 14);
			$this->db->update('futsal', $data);
		}

		function delete_row() {
			$this->db->where('id', $this->url->segment(3));
			$this->db->delete('futsal');
		}
	}