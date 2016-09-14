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
		redirect("login", "refresh");
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
		$result = $this->student->addAccount($this->input->post());
		echo $result;	
	}

	function createStaff() {
		$result = $this->admin->createStaff($this->input->post());
		echo $result;
	}

	function viewAllStaffs() {
		$result = $this->admin->getAllStaffs();	

		$json["json"] = $result;
		$this->load->view("response/json_data", $json);
	}

	function viewAllStudents() {
		$result = $this->student->getAllStudents();	

		$json["json"] = $result;
		$this->load->view("response/json_data", $json);
	}

	function viewAllOnlineStudents($param) {
		$result = $this->student->getAllOnlineStudents($param);	

		$json["json"] = $result;
		$this->load->view("response/json_data", $json);
	}

	function viewAllStudentsInLab() {
		$result = $this->student->getAllStudentsInLab();	

		$json["json"] = $result;
		$this->load->view("response/json_data", $json);
	}

	function countOnlineStudents($param) {
		$result = $this->student->countOnlineStudents($param);
		echo $result;
	}

	function countStudentsLab() {
		$result = $this->student->countStudentsLab();
		echo $result;
	}

}