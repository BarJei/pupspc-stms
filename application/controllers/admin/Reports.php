<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("admin/reports_model", "reports");
	}

	function index() {
		$result = $this->reports->getReportsData();
		$json["json"] = $result;
		$this->load->view("response/json_data", $json);
	}

}