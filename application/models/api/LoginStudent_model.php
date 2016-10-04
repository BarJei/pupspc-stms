<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginStudent_model extends CI_Model {

	public function checkAccount($postData) {

		$rfid = $postData["rfid"];

		if(empty($rfid)) {
			return $this->bresponse->setMessage("Failed")
			->setStatus(BAD_REQUEST)
			->addData("alert", "Missing input data!")
			->getResponse();	
		}

		try {
			$resultRow = $this->db->select("*")
			->from(TBL_STUDENTS)
			->where("rfid", $rfid)
			->get()->result();

			if(count($resultRow) == 0) {

				return $this->bresponse->setMessage("Failed")
				->setStatus(NOT_FOUND)
				->addData("alert", "No user found!")
				->getResponse();

			}

			// die('<pre>'.print_r($resultRow, true));
			return $this->bresponse->setMessage("Failed")
			->setStatus(OK)
			->addData("userData", $resultRow[0])
			->getResponse();
		}

		catch(PDOException $ex) {

			return $this->bresponse->setMessage("Error")
			->setStatus(BAD_REQUEST)
			->addData("alert", "User already removed!")
			->getResponse();	
		}
		
	}
	
}