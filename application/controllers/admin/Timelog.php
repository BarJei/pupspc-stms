<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Timelog extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model("admin/timelog_model", "timelog");
	}

	function index() {
		$result = $this->timelog->getTimeLogs();

		$json["json"] = $result;
		$this->load->view("response/json_data", $json);
	}

}