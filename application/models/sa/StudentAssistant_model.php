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

}