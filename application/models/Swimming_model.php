<?php

	class Swimming_model extends CI_Model{

		public function __construct(){
		  	
                $this->load->database();
        }

        function get_records(){
			$query = $this->db->get('swimming');
			return $query->result();
		}
	
		function add_records($data){
			
			
			$this->load->helper('url');
			

			$data = array(
		        'firstname'=> $this->input->post('firstname'),
		        'lastname'=> $this->input->post('lastname'),
		        
		        'id_num'=> $this->input->post('id_num'),
		        'course_year'=> $this->input->post('course_year'),
				
				'age'=> $this->input->post('age'),
		        'players_date_of_birth'=> $this->input->post('players_date_of_birth'),
		        
		        'contact_phone_number'=> $this->input->post('contact_phone_number'),
		        'contact_email'=> $this->input->post('contact_email'),
				
				'address' => $this->input->post('address'),
		        'years_of_playing_experience'=> $this->input->post('years_of_playing_experience'),
				
				'gender'=> $this->input->post('gender'),
				'height'=> $this->input->post('height'),
				'weight'=> $this->input->post('weight'),

				'playerexperience_nationalteam'=> $this->input->post('playerexperience_nationalteam'),
				'playerexperience_nationalteam_rank'=> $this->input->post('playerexperience_nationalteam_rank'),
				
				'playerexperience_national_PRISAA'=> $this->input->post('playerexperience_national_PRISAA'),
				'playerexperience_national_PRISAA_rank'=> $this->input->post('playerexperience_national_PRISAA_rank'),

				'playerexperience_regional_PRISAA'=> $this->input->post('playerexperience_regional_PRISAA'),
				'playerexperience_regional_PRISAA_rank'=> $this->input->post('playerexperience_regional_PRISAA_rank'),

				'playerexperience_UNI_games'=> $this->input->post('playerexperience_UNI_games'),
				'playerexperience_UNI_games_rank'=> $this->input->post('playerexperience_UNI_games_rank'),
				
				'playerexperience_PH_national_games'=> $this->input->post('playerexperience_PH_national_games'),
				'playerexperience_PH_national_games_rank'=> $this->input->post('playerexperience_PH_national_games_rank'),

				'playerexperience_palarong_pambasa'=> $this->input->post('playerexperience_palarong_pambasa'),
				'playerexperience_palarong_pambasa_rank'=> $this->input->post('playerexperience_palarong_pambasa_rank'),

				'playerexperience_CVIRAA'=> $this->input->post('playerexperience_CVIRAA'),
				'playerexperience_CVIRAA_rank'=> $this->input->post('playerexperience_CVIRAA_rank'),

				'playerexperience_highschool_only'=> $this->input->post('playerexperience_highschool_only'),
				'playerexperience_highschool_only_rank'=> $this->input->post('playerexperience_highschool_only_rank'),

				'playerexperience_others'=> $this->input->post('playerexperience_others'),
				'playerexperience_others_rank'=> $this->input->post('playerexperience_others_rank'),

				'swim_event_backstroke50'=> $this->input->post('swim_event_backstroke50'),
				'swim_event_backstroke100'=> $this->input->post('swim_event_backstroke100'),
				'swim_event_backstroke200'=> $this->input->post('swim_event_backstroke200'),
				
				'swim_event_freestyle50'=> $this->input->post('swim_event_freestyle50'),
				'swim_event_freestyle100'=> $this->input->post('swim_event_freestyle100'),
				'swim_event_freestyle200'=> $this->input->post('swim_event_freestyle200'),
				'swim_event_freestyle400'=> $this->input->post('swim_event_freestyle400'),
				'swim_event_freestyle800W'=> $this->input->post('swim_event_freestyle800W'),
				'swim_event_freestyle1500M'=> $this->input->post('swim_event_freestyle1500M'),
				
				'swim_event_butterfly50'=> $this->input->post('swim_event_butterfly50'),
				'swim_event_butterfly100'=> $this->input->post('swim_event_butterfly100'),
				'swim_event_butterfly200'=> $this->input->post('swim_event_butterfly200'),
				
				'swim_event_breaststroke50'=> $this->input->post('swim_event_breaststroke50'),
				'swim_event_breaststroke100'=> $this->input->post('swim_event_breaststroke100'),
				'swim_event_breaststroke200'=> $this->input->post('swim_event_breaststroke200'),
				


		    );


			$this->db->insert('swimming',$data);
			$id = $this->db->insert_id();
			redirect('');
	 	}

		function update_records($data){
			$this->db->where('id', 14);
		 	$this->db->update('swimming', $data);
		}

		 function delete_row(){
			$this->db->where('id', $this->url->segment(3));
		 	$this->db->delete('swimming');
		}

	}