<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	
	function createStaff($postData) {

		$bcryptPass = $this->bcrypt->hash_password($postData["password"]);

		$insertData = [
			"isAdmin" => $postData["isAdmin"],
			"email" => $postData["email"],
			"username" => $postData["username"],
			"password" => $bcryptPass,
			"firstName" => ucwords($postData["firstName"]),
			"lastName" => ucwords($postData["lastName"]),
			"dateCreated" => date("Y-m-d H:i:s")
		];

		try {
			$query = $this->db->insert(TBL_STAFFS, $insertData);

			if($query == 1) {
				return 1;
			}

		}
		catch(PDOException $ex) {
			// throw new pdoDbException($ex);
			return $ex->getMessage();
		}

	}

	function getAllStaffs() {

		$query = $this->db->select()
		->where("isDeleted", 0)
		->get(TBL_STAFFS);

		$result = $query->result();
		
		return $result;

	}

}