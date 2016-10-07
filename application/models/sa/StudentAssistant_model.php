<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentAssistant_model extends CI_Model {

	function searchUserByRfid($getData) {
		try {

			$rfid = $getData["rfid"];

			$query = $this->db->select()
			->where("rfid", $rfid)
			->where("isDeleted", 0)
			->get(TBL_STUDENTS);

			$result = $query->result();
			return $result;

		}
		catch(PDOException $ex) {
			return $ex->getMessage();
		}

	}

	function validateStudent($postData) {

		$rfid = $postData['rfid'];

		try {

			$this->db->set('isValidated', 1)
			->where('rfid', $rfid)
			->update(TBL_STUDENTS);

			if($this->db->affected_rows() == 0) {
				return 0;
			}

			return 1;

		}
		catch(PDOException $ex) {
			return $ex->getMessage();
		}
	}
}