<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelLogin');
    }

	public function index()
	{
        $data = array(
            "page" => "login/form_login"
        );
        $this->load->view("login/login", $data);
	}

    public function proses(){
    	$username = $this->input->post("user", TRUE);
    	$password = $this->input->post("password", TRUE);

    	$user = $this->ModelLogin->getByUserAndPassword($username);
//		var_dump($user);
//		die();
    	if ($user == null){
    		redirect("auth");
		} else {
    		$dataSession = array(
    			"id_login" => $user->id_login,
    			"user" => $user->user,
    			"password" => $user->password,
    			"is_logged_in" => true,
			);
    		$this->session->set_userdata($dataSession);
    		redirect("welcome");
		}
	}
}
