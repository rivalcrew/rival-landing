<?php defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function addUser($data)
    {
        return array($this->db->insert('users', $data), $this->db->insert_id());
    }

    public function checkUser($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));

        return $this->db->get('users')->row_array();
    }

    public function addTeam($data)
    {
        return $this->db->insert('teams', $data);
    }
}
