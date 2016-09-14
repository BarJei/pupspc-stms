<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \Curl\Curl;

class Student_model extends CI_Model {
	
	function addAccount($postData) {

		try {
			$queryValue = [
			"studNo" => $postData['studNo'],
			"firstName" => ucwords($postData['firstName']),
			"middleName" => ucwords($postData['middleName']),
			"lastName" => ucwords($postData['lastName']),
			"userType" => $postData['userType'],
			"course" => $postData["course"],
			"yearLevel" => $postData["yearLevel"],
			"rfid" => $postData['rfid'],
			// "birthdate" => date("Y-m-d", strtotime($birthdate)),
			"dateCreated" => date("Y-m-d H:i:s")
			// "image" => $fileUpload["file_name"],
			];

			$this->db->insert(TBL_STUDENTS, $queryValue);
			$insertId = $this->db->insert_id();

			if($this->db->affected_rows() == 0) {
				return 0;
			}

			return  1;
		}
		catch(PDOException $ex) {
			return $ex->getMessage();
		}

	}

	function getAllStudents() {

		$query = $this->db->select()
		->where("isDeleted", 0)
		->get(TBL_STUDENTS);

		$result = $query->result();
		
		return $result;

	}

	function getAllOnlineStudents($param) {

		$query = $this->db->select()
		->where("isDeleted", 0)
		->where("isOnline", $param)
		->get(TBL_STUDENTS);

		$result = $query->result();
		
		return $result;

	}

	function getAllStudentsInLab() {
		$query = $this->db->select()
		->where("isDeleted", 0)
		->where("isAtLab", 1)
		->get(TBL_STUDENTS);

		$result = $query->result();
		
		return $result;

	}

	function countOnlineStudents($param) {

		$usersCount = $this->db->select()
		->from(TBL_STUDENTS)
		->where('isDeleted', 0)
		->where("isOnline", $param)
		->count_all_results();

		return $usersCount;

	}

	function countStudentsLab() {

		$usersCount = $this->db->select()
		->from(TBL_STUDENTS)
		->where('isDeleted', 0)
		->where("isAtLab", 1)
		->count_all_results();

		return $usersCount;

	}


}