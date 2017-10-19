<?php

	class Futsal_model extends CI_Model {

		function get_records() {
			$query = $this->db->get('futsal');
			return $query->result();
		}

		function add_records($data) {
			$this->db->insert('futsal', $data);
			return;
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