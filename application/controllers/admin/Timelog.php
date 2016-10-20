<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timelog extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model("admin/timelog_model", "timelog");
	}

	function index() {
		$result = $this->timelog->getTimeLogs($this->input->get());

		$json["json"] = $result;
		$this->load->view("response/json_data", $json);
	}

	function viewTimelogsLab() {
		$result = $this->timelog->getTimeLogsLab();

		$json["json"] = $result;
		$this->load->view("response/json_data", $json);
	}

	function exportToCsv() {
		// load helpers
		$this->load->dbutil();
		$this->load->helper("file");
		$this->load->helper("download");

		$dateToday = date("Y-m-d");
		$fileName = "Timelogs-Guard-".$dateToday."csv";			

		$delimiter = ", ";
		$newLine = "\r\n";

		// get timelogs
		$result = $this->timelog->getTimeLogsForCsv();
		// generate csv
		$csv = $this->dbutil->csv_from_result($result, $delimiter, $newLine);
		force_download($fileName, $csv);

	}

	function exportToCsvForLab() {
		// load helpers
		$this->load->dbutil();
		$this->load->helper("file");
		$this->load->helper("download");

		$dateToday = date("Y-m-d");
		$fileName = "Timelogs-IT-Lab-".$dateToday."csv";			

		$delimiter = ", ";
		$newLine = "\r\n";

		// get timelogs
		$result = $this->timelog->getTimeLogsLabForCsv();
		// generate csv
		$csv = $this->dbutil->csv_from_result($result, $delimiter, $newLine);
		force_download($fileName, $csv);

	}

}