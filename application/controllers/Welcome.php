<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
				$data = array(
			"header" => "Welcome",
			"page" => "dashboard/v_dashboard");
		$this->load->view("layout/dashboard", $data);
	}
}
