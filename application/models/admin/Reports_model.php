<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports_model extends CI_Model {

	function getReportsData() {

		$timeLogQuery = $this->db->select("tbl_timelogs.id, studNo, lastName, firstName, middleName, logDate, logTime, logOut")
		->from(TBL_LOGS)
		->order_by("logTime")
		->join(TBL_STUDENTS, "tbl_timelogs.rfid = tbl_students.rfid")
		->where("logDate >= DATE(NOW()) - INTERVAL 7 DAY")
		->get();	

		// die('<pre>'.print_r($timeLogQuery->result(), true));

		return $timeLogQuery->result();

	}

}