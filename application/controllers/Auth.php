<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kuala_Lumpur');
    }

    public function login()
    {
        $data['title'] = 'Login';
        $data['header'] = 'Admin Login';
        $data['description'] = 'Login';
        $data['page'] = 'auth/login';
        $data['session'] = $this->session->userdata('logged_in');

        if ($data['session'] && $data['session']['level_id'] == '1') {
            redirect('admin/dashboard');
        } else $this->load->view('public/template/auth', $data);
    }

    public function register()
    {
        $data['title'] = 'Register';
        $data['header'] = 'Admin Registration';
        $data['description'] = 'Register';
        $data['page'] = 'auth/register';
        $data['session'] = $this->session->userdata('logged_in');

        if ($data['session'] && $data['session']['level_id'] == '1') {
            redirect('admin/dashboard');
        } else $this->load->view('public/template/auth', $data);
    }

    public function login_form()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == TRUE) {

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $result = $this->User_model->checkUser($username, $password);

            if ($result > 0) {
                if ($result['status'] == 'active') {
                    $this->session->set_userdata('logged_in', $result);
                    redirect('dashboard');
                } else {
                    $message = 'Your account is not active, please contact Admin to confirm !';
                    $this->session->set_flashdata('message', json_encode(array('status' => false, 'title' => 'Need to be confirmed', 'msg' => $message)));
                    redirect(base_url('login'));
                }
            } else {
                $message = 'No record found !';
                $this->session->set_flashdata('message', json_encode(array('status' => false, 'title' => 'Login Failed', 'msg' => $message)));
                redirect(base_url('login'));
            }
        } else $this->login();
    }

    public function register_form()
    {
        $this->form_validation->set_rules('name', 'Full Name', 'trim|required|min_length[3]|max_length[50]|xss_clean');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|valid_email|is_unique[users.email]|xss_clean');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[users.username]|min_length[3]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|matches[password]|md5');
        $this->form_validation->set_message('is_unique', 'Sorry, {field} has been taken.');

        if ($this->form_validation->run() == TRUE) {
            $data = array(
                'name'      => $this->input->post('name'),
                'email'     => $this->input->post('email'),
                'username'  => $this->input->post('username'),
                'mobileNo'  => $this->input->post('mobileNo'),
                'password'  => $this->input->post('password'),
                'status'    => 'inactive',
                'level_id'  => '2'
            );

            $result = $this->User_model->addUser($data);

            if ($result) {
                $message = 'New admin successfully registered, please log in to continue !';
                $this->session->set_flashdata('message', json_encode(array('status' => true, 'title' => 'Successfully Registered', 'msg' => $message)));
                redirect(base_url('login'));
            }
        } else $this->register();
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
