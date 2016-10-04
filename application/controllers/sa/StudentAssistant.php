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

}