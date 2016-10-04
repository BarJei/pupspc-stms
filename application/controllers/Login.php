<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {

		parent::__construct();
		$this->load->model("login_model", "login");

	}

	function index() {

		// check if there is logged in admin
		if($this->session->admin) {
			redirect("admin/Admin", "refresh");
		}

		// check if there is logged in guard
		if($this->session->guard) {
			redirect("guard/guard", "refresh");
		}

		// loads admin login if no session data yet
		$this->load->view("signin");

	}

	function submit() {

		$formRules = [[
		"field" => "username",
		"label" => "username",
		"rules" => "required"
		], [
		"field" => "password",
		"label" => "password",
		"rules" => "required"
		]];

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

		$this->form_validation->set_rules($formRules);

		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} 
		else {
			$response["response"] = $this->login->submitLogin($this->input->post());

			$status = $response["response"]->Status;

			if($status == 400) {
				echo '<script> alert("'.$response["response"]->Data->alert.'"); </script>';
				$this->index();
			}
			elseif($status == 404) {
				echo '<script> alert("'.$response["response"]->Data->alert.'"); </script>';
				$this->index();
			}
			else {

				$userData = $response["response"]->Data->userData;

				// die('<pre>'.print_r($userData, true));

				if($userData->userType == 1) {
					$this->session->set_userdata("admin", $userData);
					redirect("admin/admin", "refresh");
				}

				elseif($userData->userType == 2){
					$this->session->set_userdata("guard", $userData);
					redirect('guard/guard', 'refresh');
				}

			}	
		}

	}

	function studentLogin() {

		// check if there is logged in lmg
		if($this->session->studentLab) {
			redirect("lmg/StudentLab", "refresh");
		}

		// check if there is logged in sA
		if($this->session->studentAssistant) {
			redirect("sa/StudentAssistant", "refresh");
		}

		// loads student login if there is no session data yet
		$this->load->view("signin_student");

	}

	function studentLoginSubmit() {

		$formRules = [[
		"field" => "rfid-login",
		"label" => "R.F.I.D.",
		"rules" => "required"
		]];

		$this->form_validation->set_error_delimiters('<div class="alert alert-danger alert-dismissable"> <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');

		$this->form_validation->set_rules($formRules);

		if($this->form_validation->run() == FALSE) {

			// die('<pre>' . print_r($this->input->post(), true));

			$this->studentLogin();
		} 
		else {

			// die('<pre>' . print_r($this->input->post(), true));

			$response["response"] = $this->login->submitLoginStudent($this->input->post());

			// die('<pre>' . print_r($response["response"], true));

			$status = $response["response"]->Status;

			if($status == 400) {
				echo '<script> alert("'.$response["response"]->Data->alert.'"); </script>';
				$this->studentLogin();
			}
			elseif($status == 404) {
				echo '<script> alert("'.$response["response"]->Data->alert.'"); </script>';
				$this->studentLogin();
			}
			else {

				$userData = $response["response"]->Data->userData;

				// die('<pre>'.print_r($userData, true));

				if($userData->userType == 1) {
					$this->session->set_userdata("studentLab", $userData);
					redirect("lmg/StudentLab", "refresh");
				}

				elseif($userData->userType == 2) {
					$this->session->set_userdata("studentAssistant", $userData);
					redirect('sa/StudentAssistant', 'refresh');
				}

			}	
		}

	}
}
