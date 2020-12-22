<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function login($err = null) 
	{
		$data = array(); 
		if(!empty($err)){
			$data['message'] = "Veuillez vérifier vos données. Le mot de passe ou le nom d'utilisateur est incorrect"; 
		}
		$this->load->view('connection', $data);
	}

	public function sign_up($error = null)
	{
		$data = array(); 
		if(!empty($error)){
			$data['message'] = "Veuillez remplir tous les champs correctement"; 
		}
		$this->load->view('inscription', $data);
	}

	public function index()
	{
		$this->load->view('accueil.php');
	}

	public function formation(){

		$data = array(); 

		$data['formations'] = $this->Training->get_training();
		$this->load->view('formation', $data); 
	}


	public function get_training_details($id){

		$data = array(); 

		$data['details'] = $this->Training->get_training_by_id($id); 
		$data['vids'] = $this->Training->get_training_video($id); 

		//var_dump($data); 

		$this->load->view('details_formation'); 
	}

	
}
