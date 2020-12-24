<?php defined('BASEPATH') or exit('No direct script access allowed');

/**
 * This class deals with all users and admins interaction.
 *
 * @category        Model
 * @author          KalySo
 * @link            https://gitlab.com/KalySo
 */
class User extends CI_Model
{
    public $table_name = "user";
    public $comment_table = "commentaire"; 

    function _construct()
    {
    }


    public function sign_up($data)
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

    public function login_user($data)
    {

        $result = $this->db->select('*')->where('nom', $data["nom"])->where('password', $data["password"])->get($this->table_name);
        $result = $result->row();

        return $result;
    }

    public function update_user($data)
    {
        $this->db->where('id_user', $data['id_user']);
        $this->db->update($this->table_name, $data);

    }


    /**
     * Get list of comments for a training
    */
    public function list_comments($id_training){
        $result = $this->db->select('*')->where('id_formation', $id_training)->get($this->comment_table);
        $result = $result->row();

        return $result; 
    }

}
