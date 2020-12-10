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
    public $table_name = "user";

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
     *  Lire une formation 
    */

    public function get_training($data)
    {
        $this->db->where('id_user', $data['id_user']);
        $this->db->update($this->table_name, $data);

    }



}
