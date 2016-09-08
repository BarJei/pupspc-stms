<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model("admin/admin_model", "admin");
		$this->load->model("student/student_model", "student");
	}

	function index() {
		if(empty($this->session->admin)) {
			redirect("login", "refresh");
		}

		$data["firstName"] =  $this->session->admin->firstName; 

		$this->load->view("admin/head");
		$this->load->view("admin/sidebar", $data);
		$this->load->view("admin/foot");
	}

	function logOut() {
		$this->session->unset_userdata("admin");
		redirect("login");
	}

	function resetPassword() {
		$response["response"] = $this->student->forgotPass($this->input->post());
		$status = $response["response"]->Status;

		if($status == 200) {
			echo '<script> alert("'.$response["response"]->Data->alert.'"); </script>';
			$this->index();
		}
		elseif($status == 400) {
			echo '<script> alert("'.$response["response"]->Data->alert.'"); </script>';
			$this->index();
		}		
	}

	function createStudent() {

	}

	function createStaff() {
		$result = $this->admin->createStaff($this->input->post());
		echo $result;
	}

	// function setExpiry() {
	// 	$response["response"] = $this->admin->setExpiry($this->input->post());
	// 	$status = $response["response"]->Status;

	// 	if($status == 201) {
	// 		echo '<script> alert("'.$response["response"]->Data->alert.'"); </script>';
	// 		$this->index();
	// 	}
	// 	elseif($status == 400) {
	// 		echo '<script> alert("'.$response["response"]->Data->alert.'"); </script>';
	// 		$this->index();
	// 	}		
	// }

	// function upload() {
	// 	$response["response"] = $this->admin->upload($this->input->post());
	// 	$status = $response["response"]->Status;
	// 	echo '<script> alert("'.$response["response"]->Data->alert.'"); </script>';

	// 	if($status == 400) {
	// 		$this->index();
	// 	}
	// 	elseif($status == 200) {
	// 		$this->index();	
	// 	}
	// }

}