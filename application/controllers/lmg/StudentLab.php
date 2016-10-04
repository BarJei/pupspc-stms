<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StudentLab extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model("guard/guard_model", "guard");
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

}