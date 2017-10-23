<?php

	class Swimming_model extends CI_Model{

		public function __construct(){
		  	
                $this->load->database();
        }

        function get_records($approval =NULL){
        	
			$query = $this->db->get_where('swimming', array('approval' => $approval));
			
			return $query->result();
		}
		function get_record($id){
        	
			$query = $this->db->get_where('swimming', array('id_num' => $id));
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
				'gender'=> $this->input->post('gender'),
				'height'=> $this->input->post('height'),
				'weight'=> $this->input->post('weight'),
				'years_of_playing_experience'=> $this->input->post('years_of_playing_experience'),
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
				
				'back_stroke_50_meter'=> $this->input->post('back_stroke_50_meter'),
				'back_stroke_100_meter'=> $this->input->post('back_stroke_100_meter'),
				'back_stroke_200_meter'=> $this->input->post('back_stroke_200_meter'),
				'free_style_50_meter'=> $this->input->post('free_style_50_meter'),
				'free_style_100_meter'=> $this->input->post('free_style_100_meter'),
				'free_style_200_meter'=> $this->input->post('free_style_200_meter'),
				'free_style_400_meter'=> $this->input->post('free_style_400_meter'),
				'free_style_800_meter'=> $this->input->post('free_style_800_meter'),
				'free_style_1500_meter'=> $this->input->post('free_style_1500_meter'),
				'butterfly_50_meter'=> $this->input->post('butterfly_50_meter'),
				'butterfly_100_meter'=> $this->input->post('butterfly_100_meter'),
				'butterfly_200_meter'=> $this->input->post('butterfly_200_meter'),
				'breast_stroke_50_meter'=> $this->input->post('back_stroke_50_meter'),
				'breast_stroke_100_meter'=> $this->input->post('breast_stroke_100_meter'),
				'breast_stroke_200_meter'=> $this->input->post('breast_stroke_200_meter'),
				'individual_medley_200_meter'=> $this->input->post('individual_medley_200_meter'),
				'individual_medley_400_meter'=> $this->input->post('individual_medley_400_meter'),
				'approval'=> $this->input->post('approval'),
				);
			$this->db->insert('swimming',$data);
			return;
	 	}

		function update_records($data){
			$this->db->where('id', 14);
		 	$this->db->update('swimming', $data);
		}

		 function delete_row($id_num){
			$this->db->where('id_num', $id_num);
   			$this->db->delete('swimming'); 
		}

	}