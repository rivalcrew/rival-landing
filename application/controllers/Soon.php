<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Soon extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kuala_Lumpur');
    }

    public function index()
    {
        $data['title'] = 'Soon';
        $data['description'] = 'This is landing page';
        $data['page'] = 'soon';

        $this->load->view('public/template/soon', $data);
    }

    public function landing()
    {
        $data['title'] = 'Home';
        $data['description'] = 'Home';
        $data['page'] = 'landing';

        $this->load->view('public/template/landing', $data);
    }

    public function team_form()
    {
        $this->form_validation->set_rules('name', 'Full Name', 'trim|required|min_length[3]|max_length[50]|xss_clean');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|valid_email|is_unique[users.email]|xss_clean');
        $this->form_validation->set_rules('teamName', 'Team Name', 'trim|required|min_length[3]|max_length[50]|xss_clean');
        $this->form_validation->set_rules('location', 'Location', 'trim|required|xss_clean');
        $this->form_validation->set_message('is_unique', 'Sorry, {field} has been taken.');

        if ($this->form_validation->run() == TRUE) {
            $user = array(
                'name'      => $this->input->post('name'),
                'email'     => $this->input->post('email'),
                'username'  => random_username($this->input->post('name')),
                'mobileNo'  => $this->input->post('mobileNo'),
                'password'  => md5('rival123'),
                'status'    => 'inactive',
                'level_id'  => '3'
            );

            $result_user = $this->User_model->addUser($user);

            if ($result_user[0]) {
                $team = array(
                    'name'     => $this->input->post('teamName'),
                    'location' => $this->input->post('location'),
                    'status'   => 'active',
                    'user_id'  => $result_user[1]
                );

                $result_team = $this->User_model->addTeam($team);

                if ($result_team) {
                    $message = 'New team successfully registered, we will contact your team soon !';
                    $this->session->set_flashdata('message', json_encode(array('status' => true, 'title' => 'Successfully Registered', 'msg' => $message)));
                    redirect(base_url('/'));
                }
            }
        } else {
            $message = form_error('name') != null ? form_error('name') : (form_error('email') != null ? form_error('email') : (form_error('teamName') != null ? form_error('teamName') : form_error('location')));
            $this->session->set_flashdata('message', json_encode(array('status' => false, 'title' => 'Failed', 'msg' => $message)));
            redirect(base_url('/'));
        }
    }
}
