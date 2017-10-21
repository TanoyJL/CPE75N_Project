<?php

	class Basketball_model extends CI_Model{

		public function __construct(){
		  	
                $this->load->database();
        }

        function get_records(){
			$query = $this->db->get('basketball');
			return $query->result();
		}
	
		function add_records($data){
<<<<<<< HEAD
=======
			
>>>>>>> 67bc3fe83cf67c553aea0cce549dd0b233582c85
			$this->load->helper('url');
			

			$data = array(
		        'firstname'=> $this->input->post('firstname'),
		        'lastname'=> $this->input->post('lastname'),
		        
		        'id_num'=> $this->input->post('id_num'),
		        'course_year'=> $this->input->post('course_year'),
				
				'age'=> $this->input->post('age'),
<<<<<<< HEAD
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

				'shooting_hand'=> $this->input->post('shooting_hand'),
				'preferred_position_pointguard'=> $this->input->post('preferred_position_pointguard'),
				'preferred_position_shootguard'=> $this->input->post('preferred_position_shootguard'),
				'preferred_position_smallforward'=> $this->input->post('preferred_position_smallforward'),
		    	'preferred_position_powerforward'=> $this->input->post('preferred_position_powerforward'),
				'preferred_position_center'=> $this->input->post('preferred_position_center'),
		    
=======
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
>>>>>>> 67bc3fe83cf67c553aea0cce549dd0b233582c85

		    );


<<<<<<< HEAD
			$this->db->insert('basketball',$data);
			$id = $this->db->insert_id();
			redirect('');
		    );

=======
			$this->db->insert('badminton',$data);
			$id = $this->db->insert_id();
			redirect('');
>>>>>>> 67bc3fe83cf67c553aea0cce549dd0b233582c85
		}

		function update_records($data){
			$this->db->where('id', 14);
			$this->db->update('basketball', $data);
		}

		function delete_row(){
			$this->db->where('id', $this->url->segment(3));
			$this->db->delete('basketball');
		}
	}