<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentAssistant extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model("sa/StudentAssistant_model", "sa");
	}

	function index() {
		if(empty($this->session->studentAssistant)) {
			redirect("login/studentLogin", "refresh");
		}

		$data["firstName"] =  $this->session->studentAssistant->firstName; 

		$this->load->view("sa/head");
		$this->load->view("sa/sidebar", $data);
		$this->load->view("sa/foot");
	}

	function logOut() {
		$this->session->unset_userdata("studentAssistant");
		redirect("login/studentLogin", "refresh");
	}

	function viewStudentData() {

		// die('<pre>' . print_r($this->input->get(), true));

		$result = $this->sa->searchUserByRfid($this->input->get());

		// die('<pre>' . print_r($result, true));
		$json["json"] = $result;
		$this->load->view("response/json_data", $json);
	}

	function validateStudent() {

		$result = $this->sa->validateStudent($this->input->post());
		echo $result;

	}
}