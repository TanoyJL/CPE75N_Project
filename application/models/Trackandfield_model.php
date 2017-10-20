<?php

	class Trackandfield_model extends CI_Model{

		public function __construct(){
		  	
                $this->load->database();
        }

        function get_records(){
			$query = $this->db->get('trackandfield');
			return $query->result();
		}
	
		function add_records($data){
			$this->db->insert('trackandfield',$data);
			return;
	 	}

		function update_records($data){
			$this->db->where('id', 14);
		 	$this->db->update('trackandfield', $data);
		}

		 function delete_row(){
			$this->db->where('id', $this->url->segment(3));
		 	$this->db->delete('trackandfield');
		}

	}