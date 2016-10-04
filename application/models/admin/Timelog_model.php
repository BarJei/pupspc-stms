<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timelog_model extends CI_Model {

	function getTimelogs() {

		$dateToday = date("Y-m-d");

		$timeLogQuery = $this->db->select("tbl_timelogs.id, lastName, firstName, middleName, logDate, logTime, logOut")
		->from(TBL_LOGS)
		->order_by("logTime")
		->join(TBL_STUDENTS, "tbl_timelogs.rfid = tbl_students.rfid")
		// ->where("logDate", $dateToday)
		->get();

		return $timeLogQuery->result();

	}

	function getTimelogsLab() {

		$dateToday = date("Y-m-d");

		$timeLogQuery = $this->db->select("tbl_timelogs.id, lastName, firstName, middleName, logDate, logTime, logOut")
		->from(TBL_LOGS_LAB)
		->order_by("logTime")
		->join(TBL_STUDENTS, "tbl_timelogs.rfid = tbl_students.rfid")
		// ->where("logDate", $dateToday)
		->get();

		return $timeLogQuery->result();
		
	}

}