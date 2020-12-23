<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * This class deals with all users and admins interaction.
 *
 * @category        Model
 * @author          KalySo
 * @link            https://gitlab.com/KalySo
 */
class Training extends CI_Model
{
    protected $table_name = "formation";
    protected $table_associated = "video"; 

    function _construct()
    {
    }

    /**
     * Ajouter une formation
    */

    public function add_training($data)
    {
        $this->db->set('Tel', $data['tel']);
		$this->db->set('nom', $data['nom']);
		$this->db->set('niveau', $data['niveau']);
        $this->db->set('sexe', $data['gender']);
        $this->db->set('password', $data['password']);
        $this->db->insert($this->table_name);
        $data['id_user'] = $this->db->insert_id(); 
        return $data; 
    }

   
    /**
     * Mettre à jour une formation  
    */

    public function update_training($data)
    {
        $this->db->where('id_user', $data['id_user']);
        $this->db->update($this->table_name, $data);

    }

    /**
     *  SUpprimer une formation 
    */

    public function delete_training($data)
    {
        $this->db->where('id_user', $data['id_user']);
        $this->db->update($this->table_name, $data);

    }

    /**
     * Retourner toutes les vidéos d'une formation
    */

    public function get_training_video($id_formation){

        $q = $this->db->select('*')->from($this->table_associated)->where('id_formation', $id_formation)->get(); 
        return $q->result(); 
    }

    /**
     *  Lire une formation 
    */
    public function get_training_by_id($id)
    {
        $q = $this->db->select('*')->from($this->table_name)->where('id_formation', $id)->get(); 
        return $q->result(); 
        
    }

    /**
     * Fonction pour compter le nombre de cours/vidéos d'une formation
    */
    public function num_vids_courses($id_formation){

        $query = $this->db->select('*')->from($this->table_associated)->where('id_formation', $id_formation); 

        return $query->count_all_results(); 
    }

    // Liste des formations et le num

    public function get_training(){

      //  $query = new stdClass(); 
      $result = array(); 
      $query =  $this->db->get($this->table_name);  
      $q = $query->result(); 
       foreach($q as $row){
           $data = array(); 
            $data['num'] = $this->num_vids_courses($row->id_formation); 
            $data['formation'] = $row;
            array_push($result, $data);
       }
        return $result; 
    }


    /**
     *  Recherche
    */
    public function search($query){

        $this->db->select('*')->like($query)->from($this->table_name); 
    }

    





}
