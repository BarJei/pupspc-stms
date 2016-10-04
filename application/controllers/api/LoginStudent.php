<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';

class LoginStudent extends REST_Controller {
	
	public function __construct() {

		parent::__construct();
		$this->load->model("api/LoginStudent_model", "login");

	}

	public function submit_post() {

		// die('<pre>'.print_r($this->post(), true));

		$response = $this->login->checkAccount($this->post());
		$this->response($response, OK);

	}
}