<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentLab extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model("lmg/StudentLab_model", "lmg");
	}

	function index() {
		if(empty($this->session->studentLab)) {
			redirect("login/studentLogin", "refresh");
		}

		$data["firstName"] =  $this->session->studentLab->firstName; 

		$this->load->view("lmg/head");
		$this->load->view("lmg/sidebar", $data);
		$this->load->view("lmg/foot");
	}

	function logOut() {
		$this->session->unset_userdata("studentLab");
		redirect("login", "refresh");
	}

	function logTime() {
		$result = $this->lmg->logTime($this->input->post());
		// echo $result;	
		// die('<pre>' . print_r($result, true));
		$json["json"] = $result;
		$this->load->view("response/json_data", $json);
	}

}