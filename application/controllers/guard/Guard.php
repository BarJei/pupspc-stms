<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guard extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model("guard/guard_model", "guard");
	}

	function index() {
		if(empty($this->session->guard)) {
			redirect("login", "refresh");
		}

		$data["firstName"] =  $this->session->guard->firstName; 

		$this->load->view("guard/head");
		$this->load->view("guard/sidebar", $data);
		$this->load->view("guard/foot");
	}

	function logOut() {
		$this->session->unset_userdata("guard");
		redirect("login", "refresh");
	}

	function logTime() {
		$result = $this->guard->logTime($this->input->post());
		// echo $result;	
		$json["json"] = $result;
		$this->load->view("response/json_data", $json);
	}

}