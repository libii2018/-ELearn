<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Treatment extends CI_Controller {
	
	public function login_t()
	{
        $data = $this->input->post(); 
       
        $res = $this->User->login_user($data); 
        if (!empty($res)){
            //ouvrir une session
            $sess_array = array('name' =>$res->nom, 'id'=>$res->id_user, 'pass'=>$res->password);
            $this->session->set_userdata('user',$sess_array);

        }
        else{
            $err = "erreur"; 
            redirect('Welcome/login/'.$err, "refresh");
        }

    }
    

    public function sign_up_t()
	{
        $data  = $this->input->post(); 

        var_dump($data); 

        $this->form_validation->set_rules('nom', '"Nom d\'utilisateur"', 'trim|required');
        $this->form_validation->set_rules('tel', '"Telephone"', 'trim|required');
        $this->form_validation->set_rules('Password', '"Le mail"', 'trim|required');
        $this->form_validation->set_rules('gender', '"Sexe"', 'required');
        if ($this->form_validation->run() == false && $data['password'] != $data['password2'] && empty($data['gender'])){
            //var_dump($data); 
            $err = "erreur"; 
            redirect('Welcome/sign_up/'.$err, "refresh");
        }
        else{

            $res = $this->User->sign_up($data); 
            if(!empty($res)){
                $sess_array = array('name' =>$res['nom'], 'id'=>$res['id_user'], 'pass'=>$res['password']);
                $this->session->set_userdata('user',$sess_array);

                redirect('Welcome/sign_up/', "refresh");

            }
           
           
        }
        
    }
    
    public function disconnect(){
        $this->session->sess_destroy(); 

        redirect('Welcome/login', "refresh"); 
    }

	

	
}
