<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentLab_model extends CI_Model {
	
	function logTime($postData) {

		$rfid = $postData["rfid"];
		$dateTimeNow = date("Y-m-d H:i:s");
		$dateNow = date("Y-m-d");

		$isAtLab = $this->searchRfid($rfid);

		// if user is offline
		if($isAtLab == 0) {

			$insertData = [
			"rfid" => $rfid,
			"logTime" => $dateTimeNow,
			"logDate" => $dateNow
			];

			try {

				// insert new log
				$query = $this->db->insert(TBL_LOGS_LAB, $insertData);

				$studentData = $this->updateStudentOnlineStatus($rfid, $isAtLab);
				// die('<pre>'.print_r($studentData, true));
				return $studentData;
				
			}
			catch(PDOException $ex) {
				return $ex->getMessage();
			}

		}

		// else, if user is already online.
		elseif($isAtLab == 1){

			try {

				// update table
				$this->db->set('logOut', $dateTimeNow)
				->where('rfid', $rfid)
				->where('logDate', $dateNow)
				->update(TBL_LOGS_LAB);				

				$studentData = $this->updateStudentOnlineStatus($rfid, $isAtLab);
				// die('<pre>'.print_r($studentData, true));
				return $studentData;

			}
			catch(PDOException $ex) {
				return $ex->getMessage();
			}
		}

		else {
			return 404;
		}
	}

	// check if user is already online
	function searchRfid($rfid) {

		try {

			// search for rfid if online
			$query = $this->db->select("isAtLab")
			->where("rfid", $rfid)
			->where("isDeleted", 0)
			->get(TBL_STUDENTS);

			$result = $query->result(); 

			if(empty($result)) {
				return 404;
			}

			if($result[0]->isAtLab == 1) {
				return 1;
			}
			elseif($result[0]->isAtLab == 0) {
				return 0;
			}


		}
		catch(PDOException $ex) {
			return $ex->getMessage();
		}

	}	

	// set user online status
	function updateStudentOnlineStatus($rfid, $isAtLab) {

		try {

			$this->db->set('isAtLab', !$isAtLab)
			->where('rfid', $rfid)
			->update(TBL_STUDENTS);

			$userData = $this->searchUserByRfid($rfid);
			return $userData;

		}
		catch(PDOException $ex) {
			return $ex->getMessage();
		}

	}

	function searchUserByRfid($rfid) {
		try {

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