<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Treatment extends CI_Controller {
	
	public function login_t()
	{
        $data = $this->input->post(); 
       
        $res = $this->User->login_user($data); 
        if (!empty($res)){
            //ouvrir une session
            var_dump($res); 
            $sess_array = array('name' =>$res->nom, 'id'=>$res->id_user, 'pass'=>$res->password);
            $this->session->set_userdata('user',$sess_array);
            echo "Hello ".$data['nom']; 
        }
        else{
            print_r('Erreur !') ; 
        }

    }
    

    public function sign_up_t()
	{
        $data  = $this->input->post(); 

        $this->form_validation->set_rules('nom', '"Nom d\'utilisateur"', 'trim|required');
        $this->form_validation->set_rules('tel', '"Telephone"', 'trim|required');
        $this->form_validation->set_rules('Password', '"Le mail"', 'trim|required');
        if ($this->form_validation->run() == false && $data['password'] != $data['password2']){
            //var_dump($data); 
            $data['err']= "Veuillez remplir les champs correctement"; 
            redirect('Welcome/sign_up', $data);
        }
        else{

            $this->User->sign_up($data); 
            print("Hello ".$data['nom']); 
        }
        

        // Contrôle sur les données 
        /**
         * 1. Password 1 == password 2 
         * 2. Tel contient juste des chiffres
        */

        // 
		
		
	}

	

	
}
