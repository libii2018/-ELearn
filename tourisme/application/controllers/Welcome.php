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

		/**
		 *  FOnction de recherche 
		*/
		
	}

	public function formation(){

		$data = array(); 

		$data['formations'] = $this->Training->get_training();
		$this->load->view('formation', $data); 
	}


	public function cours(){

		$id = $this->uri->segment(3); 
		 

		$data = array(); 

		$data['details'] = $this->Training->get_training_by_id($id); 
		$data['vids'] = $this->Training->get_training_video($id);
		$data['comments'] = $this->User->list_comments($id); 

		/*
		@TODO : Faire une fonction pour le comptage de vids par formations
		*/

		var_dump($data['comments']); 

		$this->load->view('details_formation', $data); 
	}



	
}
