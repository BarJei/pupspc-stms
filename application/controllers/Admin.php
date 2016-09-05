<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model("user_model", "user");
		$this->load->model("admin_model", "admin");
	}

	function index() {
		if(empty($this->session->admin)) {
			redirect("login", "refresh");
		}

		$data["username"] =  $this->session->admin;
		$data['online'] = 150;
		$data['onlab'] = 36;
		$data['offline'] = 88; 

		$this->load->view("admin/head");
		$this->load->view("admin/sidebar", $data);
		$this->load->view("admin/index");
		$this->load->view("admin/foot");
	}

	function logOut() {
		$this->session->unset_userdata("admin");
		redirect("login");
	}

	function resetPassword() {
		$response["response"] = $this->user->forgotPass($this->input->post());
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