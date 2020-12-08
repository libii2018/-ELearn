<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function login()
	{
		$this->load->view('connection');
	}

	public function sign_up($data = null)

	{
		if(isset($data)) {
			var_dump($data); 
		}
		
		$this->load->view('inscription', $data);
	}

	public function index()
	{
		$this->load->view('Welcome_message');
	}

	
}
