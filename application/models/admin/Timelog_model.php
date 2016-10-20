<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timelog_model extends CI_Model {

	function getTimelogs($params) {

		$dateToday = date("Y-m-d");

		if(empty($params)) {
			$timeLogQuery = $this->db->select("tbl_timelogs.id, studNo, lastName, firstName, middleName, logDate, logTime, logOut")
			->from(TBL_LOGS)
			->order_by("logTime")
			->join(TBL_STUDENTS, "tbl_timelogs.rfid = tbl_students.rfid")
			->where("logDate", $dateToday)
			->get();

			return $timeLogQuery->result();
		}

		else {
			$timeLogQuery = $this->db->select("tbl_timelogs.id, studNo, lastName, firstName, middleName, logDate, logTime, logOut")
			->from(TBL_LOGS)
			->order_by("logTime")
			->join(TBL_STUDENTS, "tbl_timelogs.rfid = tbl_students.rfid")
			->where("logDate", $params["date"])
			->get();

			return $timeLogQuery->result();
		}
	}

	function getTimelogsLab() {

		$dateToday = date("Y-m-d");

		$timeLogQuery = $this->db->select("tbl_timelogs_lab.id, studNo, lastName, firstName, middleName, logDate, logTime, logOut")
		->from(TBL_LOGS_LAB)
		->order_by("logTime")
		->join(TBL_STUDENTS, "tbl_timelogs_lab.rfid = tbl_students.rfid")
		->where("logDate", $dateToday)
		->get();

		return $timeLogQuery->result();
		
	}

	function getTimelogsForCsv() {

		$dateToday = date("Y-m-d");

		$timeLogQuery = $this->db->select("tbl_timelogs.id, studNo, lastName, firstName, middleName, logDate, logTime, logOut")
		->from(TBL_LOGS)
		->order_by("logTime")
		->join(TBL_STUDENTS, "tbl_timelogs.rfid = tbl_students.rfid")
		->where("logDate", $dateToday)
		->get();

		return $timeLogQuery;

	}

	function getTimelogsLabForCsv() {

		$dateToday = date("Y-m-d");

		$timeLogQuery = $this->db->select("tbl_timelogs_lab.id, studNo, lastName, firstName, middleName, logDate, logTime, logOut")
		->from(TBL_LOGS_LAB)
		->order_by("logTime")
		->join(TBL_STUDENTS, "tbl_timelogs_lab.rfid = tbl_students.rfid")
		->where("logDate", $dateToday)
		->get();

		return $timeLogQuery;

	}



}