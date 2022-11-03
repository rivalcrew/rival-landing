<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kuala_Lumpur');
    }

    public function dashboard()
    {
        $data['title'] = 'Dashboard';
        $data['description'] = 'Dashboard';
        $data['page'] = 'user/dashboard';
        $data['session'] = $this->session->userdata('logged_in');
        $data['listTeam'] = $this->User_model->listTeam();
        
        if ($data['session'] && $data['session']['level_id'] == '1' || $data['session']['level_id'] == '2') {
            $this->load->view('public/template/default', $data);
        } else redirect('login');
    }
}
