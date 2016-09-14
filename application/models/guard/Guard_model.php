<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guard_model extends CI_Model {
	
	function logTime($postData) {

		$rfid = $postData["rfid"];
		$dateTimeNow = date("Y-m-d H:i:s");
		$dateNow = date("Y-m-d");

		$isOnline = $this->searchRfid($rfid);

		// if user is offline
		if($isOnline == 0) {

			$insertData = [
			"rfid" => $rfid,
			"logTime" => $dateTimeNow,
			"logDate" => $dateNow
			];

			try {

				// insert new log
				$query = $this->db->insert(TBL_LOGS, $insertData);

				$studentData = $this->updateStudentOnlineStatus($rfid, $isOnline);
				// die('<pre>'.print_r($studentData, true));
				return $studentData;
				
			}
			catch(PDOException $ex) {
				return $ex->getMessage();
			}

		}

		// else, if user is already online.
		elseif($isOnline == 1){

			try {

				// update table
				$this->db->set('logOut', $dateTimeNow)
				->where('rfid', $rfid)
				->where('logDate', $dateNow)
				->update(TBL_LOGS);				

				$studentData = $this->updateStudentOnlineStatus($rfid, $isOnline);
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
			$query = $this->db->select("isOnline")
			->where("rfid", $rfid)
			->where("isDeleted", 0)
			->get(TBL_STUDENTS);

			$result = $query->result(); 

			if(empty($result)) {
				return 404;
			}

			if($result[0]->isOnline == 1) {
				return 1;
			}
			elseif($result[0]->isOnline == 0) {
				return 0;
			}


		}
		catch(PDOException $ex) {
			return $ex->getMessage();
		}

	}	

	// set user online status
	function updateStudentOnlineStatus($rfid, $isOnline) {

		try {

			$this->db->set('isOnline', !$isOnline)
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