<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("student/student_model", "student");	
	}

	function index() {
		$this->add();
	}

	function checkSession() {
		if(empty($this->session->user)) {
			return false;
		}
		return true;
	}

	function logOut() {
		$this->session->unset_userdata("user");
		redirect("login", "refresh");
	}

}