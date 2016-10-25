<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports_model extends CI_Model {

	function getReportsData() {

		// DATE_FORMAT(logTime, '%H:%i:%s') AS logTime, 
		// DATE_FORMAT(logOut, '%H:%i:%s') AS logOut")

		$timeLogQuery = $this->db->select("tbl_timelogs.id, tbl_students.rfid, studNo, lastName, firstName, middleName, logDate, 
			GROUP_CONCAT(DATE_FORMAT(logTime, '%H:%i:%s')) AS logTime, 
			GROUP_CONCAT(DATE_FORMAT(logOut, '%H:%i:%s')) AS logOut")
		->from(TBL_LOGS)
		->order_by("lastName")
		->group_by("studNo")	
		->join(TBL_STUDENTS, "tbl_timelogs.rfid = tbl_students.rfid")
		->where("logDate >= DATE_ADD(CURDATE(), INTERVAL -6 DAY)")
		->get();

		// $arrLogs = [];
		// $arrLogTime = [];
		// $arrLogTimeRfid = [];
		// $loopNum = -1;

		// get row per result
		// foreach($timeLogQuery->result_array() as $row) {

		// 	array_push($arrLogs, $row);
		// 	$rfid = $row["rfid"];
		// 	$loopNum++;

		// 	// if rfid is repeated
		// 	if($this->in_multiarray($rfid, $arrLogs, "rfid") == true) {
		// 		// die("<pre>" . print_r($arrLogs[$loopNum], true));

		// 		array_push($arrLogs[$loopNum], ["logTimes" => $row["logTime"]]);

		// 		foreach ($arrLogs[$loopNum] as $value) {
		// 			// die("<pre>" . print_r($arrLogs[$loopNum], true));

		// 			if($this->in_multiarray($arrLogs[$loopNum][0], $arrLogs[$loopNum], "rfid") == true) {		
		// 				array_push($arrLogs[$loopNum][0], ["logTimes" => $row["logTime"]]);
		// 			}
		// 		}
		// 	}
		// }

		// die('<pre>' . print_r($arrLogs, true));
		// die('<pre>'.print_r($this->db->last_query(), true));
		return $timeLogQuery->result();
	}

	function in_multiarray($elem, $array, $field) {
		$top = sizeof($array) - 1;
		$bottom = 0;
		while($bottom <= $top) {
			if($array[$bottom][$field] == $elem)
				return true;
			else 
				if(is_array($array[$bottom][$field]))
					if(in_multiarray($elem, ($array[$bottom][$field])))
						return true;

					$bottom++;
				}        
				return false;
			}

		}