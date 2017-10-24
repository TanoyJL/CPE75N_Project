<?php

	class Trackandfield_model extends CI_Model{

		public function __construct(){
		  	
                $this->load->database();
        }

        function get_records($approval =NULL){
        	
			$query = $this->db->get_where('trackandfield', array('approval' => $approval));
			
			return $query->result();
		}
		function get_record($id){
        	
			$query = $this->db->get_where('trackandfield', array('id_num' => $id));
			return $query->result();
		}
		function add_records(){
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
				'playerexperience_palarong_pambansa'=> $this->input->post('playerexperience_palarong_pambansa'),
				'playerexperience_palarong_pambansa_rank'=> $this->input->post('playerexperience_palarong_pambansa_rank'),
				'playerexperience_CVIRAA'=> $this->input->post('playerexperience_CVIRAA'),
				'playerexperience_CVIRAA_rank'=> $this->input->post('playerexperience_CVIRAA_rank'),
				'playerexperience_highschool_only'=> $this->input->post('playerexperience_highschool_only'),
				'playerexperience_highschool_only_rank'=> $this->input->post('playerexperience_highschool_only_rank'),
				'playerexperience_others'=> $this->input->post('playerexperience_others'),
				'playerexperience_others_rank'=> $this->input->post('playerexperience_others_rank'),
				'field_throws_javeline'=> $this->input->post('field_throws_javeline'),
				'field_throws_shotput'=> $this->input->post('field_throws_shotput'),
				'field_throws_discussthrow'=> $this->input->post('field_throws_discussthrow'),
				'field_weightlifting'=> $this->input->post('field_weightlifting'),
				'field_jumps_highjump'=> $this->input->post('field_jumps_highjump'),
				'field_jumps_longjumps'=> $this->input->post('field_jumps_longjumps'),
				'field_jumps_triplejump'=> $this->input->post('field_jumps_triplejump'),
				'field_jumps_polevault'=> $this->input->post('field_jumps_polevault'),
				'track_sprint_100m'=> $this->input->post('track_sprint_100m'),
				'track_sprint_200m'=> $this->input->post('track_sprint_200m'),
				'track_sprint_400m'=> $this->input->post('track_sprint_400m'),
				'track_hurdle_100m'=> $this->input->post('track_hurdle_100m'),
				'track_hurdle_110m'=> $this->input->post('track_hurdle_400m'),
				'track_highhurdle_400m'=> $this->input->post('track_highhurdle_400m'),
				'track_walk_3000m'=> $this->input->post('track_walk_3000m'),
				'track_walk_10000m'=> $this->input->post('track_walk_10000m'),
				'track_run_800m'=> $this->input->post('track_run_800m'),
				'track_run_1500m'=> $this->input->post('track_run_1500m'),
				'track_run_3000m'=> $this->input->post('track_run_3000m'),
				'track_run_5000m'=> $this->input->post('track_run_5000m'),
				'track_run_10000m'=> $this->input->post('track_run_10000m'),
				'track_relay_4x100m'=> $this->input->post('track_relay_4x100m'),
				'track_relay_4x400m'=> $this->input->post('track_relay_4x400m'),
				'track_steeplechase_3000m'=> $this->input->post('track_steeplechase_3000m'),	


		    );
			$this->db->insert('trackandfield',$data);
			return;
	 	}

		function update_records($data){
			$this->db->where('id', 14);
		 	$this->db->update('trackandfield', $data);
		}

		 function delete_row($id_num){
			$this->db->where('id_num', $id_num);
   			$this->db->delete('trackandfield'); 
		}

	}