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

    public function listTeam()
    {
        $this->db->select('u.name AS name');
        $this->db->select('u.email AS email');
        $this->db->select('u.mobileNo AS mobileNo');
        $this->db->select('t.name AS team_name');
        $this->db->select('t.location AS team_location');
        $this->db->select('t.status AS team_status');

        $this->db->join('users u', 'u.id = t.user_id');
        $this->db->order_by('t.name', 'ASC');

        return $this->db->get('teams t')->result_array();
    }
}
