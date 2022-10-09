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
		$data['description'] = 'This is login page';
		$data['page'] = 'auth/login';

		$this->load->view('public/template/auth', $data);
    }

    // public function admin_login()
    // {
    //     $data['page'] = 'admin/login';
    //     $data['title'] = 'Log Masuk Admin';
    //     $data['session'] = $this->session->userdata('logged_in');

    //     if ($data['session'] && $data['session']['level_id'] == '1' || $data['session']['level_id'] == '2') {
    //         redirect('admin/dashboard');
    //     } else if ($data['session'] && $data['session']['level_id'] == '4') {
    //         redirect('jemaah/dashboard');
    //     } else $this->load->view('public/template/auth', $data);
    // }

    // public function admin_login_form()
    // {
    //     $this->form_validation->set_rules('admin_username', 'Username', 'trim|required|xss_clean');
    //     $this->form_validation->set_rules('admin_password', 'Password', 'trim|required');

    //     if ($this->form_validation->run() == TRUE) {
    //         $username = $this->input->post('admin_username');
    //         $password = $this->input->post('admin_password');

    //         $result = $this->Admin_model->checkAdmin($username, $password);
    //         if ($result > 0) {
    //             if ($result['admin_status'] == 'active') {
    //                 $this->session->set_userdata('logged_in', $result);
    //                 redirect('admin/dashboard');
    //             } else {
    //                 $message = 'Akaun anda belum aktif, sila hubungi Admin untuk mengesahkan !!';
    //                 $this->session->set_flashdata('message', json_encode(array('status' => false, 'title' => 'Perlu disahkan', 'msg' => $message)));
    //                 redirect(base_url('admin/login'));
    //             }
    //         } else {
    //             $message = 'Tiada rekod ditemui, sila hubungi Admin !!';
    //             $this->session->set_flashdata('message', json_encode(array('status' => false, 'title' => 'Gagal log masuk', 'msg' => $message)));
    //             redirect(base_url('admin/login'));
    //         }
    //     } else $this->admin_login();
    // }

    // public function admin_register()
    // {
    //     $data['page'] = 'admin/register';
    //     $data['title'] = 'Pendaftaran Admin';
    //     $data['session'] = $this->session->userdata('logged_in');

    //     if ($data['session'] && $data['session']['level_id'] == '1' || $data['session']['level_id'] == '2') {
    //         redirect('admin/dashboard');
    //     } else if ($data['session'] && $data['session']['level_id'] == '4') {
    //         redirect('jemaah/dashboard');
    //     } else $this->load->view('public/template/auth', $data);
    // }

    // public function admin_register_form()
    // {
    //     $this->form_validation->set_rules('admin_name', 'Nama Penuh', 'trim|required|min_length[3]|max_length[50]|xss_clean');
    //     $this->form_validation->set_rules('admin_email', 'Alamat Email', 'trim|valid_email|is_unique[admin.admin_email]|xss_clean');
    //     $this->form_validation->set_rules('admin_username', 'Username', 'trim|required|is_unique[admin.admin_username]|min_length[3]|max_length[30]|xss_clean');
    //     $this->form_validation->set_rules('admin_password', 'Password', 'trim|required|md5');
    //     $this->form_validation->set_rules('admin_cpassword', 'Confirm Password', 'trim|required|matches[admin_password]|md5');
    //     $this->form_validation->set_message('is_unique', 'Sorry, {field} has been taken.');

    //     if ($this->form_validation->run() == TRUE) {
    //         $data = array(
    //             'admin_name' => $this->input->post('admin_name'),
    //             'admin_mobileNo' => $this->input->post('admin_mobileNo'),
    //             'admin_email' => $this->input->post('admin_email'),
    //             'admin_username' => $this->input->post('admin_username'),
    //             'admin_password' => $this->input->post('admin_password'),
    //             'admin_status' => 'inactive',
    //             'level_id' => '2'
    //         );

    //         $result = $this->Admin_model->addAdmin($data);
    //         if ($result) {
    //             $message = 'Admin baru berjaya didaftarkan, sila log masuk untuk meneruskan !!';
    //             $this->session->set_flashdata('message', json_encode(array('status' => true, 'title' => 'Berjaya Daftar', 'msg' => $message)));
    //             redirect(base_url('admin/login'));
    //         }
    //     } else $this->admin_register();
    // }

    // public function admin_logout()
    // {
    //     $this->session->sess_destroy();
    //     redirect(base_url('admin/login'));
    // }

    // public function qariah_login()
    // {
    //     $data['page'] = 'qariah/login';
    //     $data['title'] = 'Carian Ahli Kariah';
    //     $data['session'] = $this->session->userdata('logged_in');
    //     $data['modal'] = 'modal_qariah_info';

    //     if ($data['session'] && $data['session']['level_id'] == '1' || $data['session']['level_id'] == '2') {
    //         redirect('admin/dashboard');
    //     } else if ($data['session'] && $data['session']['level_id'] == '4') {
    //         redirect('jemaah/dashboard');
    //     } else $this->load->view('public/template/auth', $data);
    // }

    // public function qariah_login_form()
    // {
    //     $this->form_validation->set_rules('qariah_idNo', 'ID/IC No.', 'trim|required|exact_length[14]|xss_clean');
    //     if ($this->form_validation->run() == TRUE) {

    //         $qariah_idNo = $this->input->post('qariah_idNo');
    //         $result = $this->Qariah_model->checkQariahByIdNo($qariah_idNo);

    //         if ($result > 0) {
    //             if ($result['qa_status'] == 'active') {
    //                 $this->session->set_flashdata(
    //                     'qariah_details',
    //                     json_encode(
    //                         array(
    //                             'qa_id' => $result['qa_id'],
    //                             'qa_name' => $result['qa_name'],
    //                             'qa_idNo' => $result['qa_idNo'],
    //                             'qa_email' => $result['qa_email'],
    //                             'qa_mobileNo' => $result['qa_mobileNo'],
    //                             'qa_mobileHomeNo' => $result['qa_mobileHomeNo'],
    //                             'qa_maritalStatus' => ucwords($result['qa_maritalStatus']),
    //                             'qa_address' => $result['qa_address'] . ' ' . $result['qa_postcode'] . ' ' . $result['qa_city'] . ' ' . $result['qa_state'],
    //                             'qa_periodResidency' => $result['qa_periodResidency'],
    //                             'qa_status' => ucwords($result['qa_status']),
    //                             'qa_created_at' => date('d-m-Y, g:i A', strtotime($result['qa_created_at']))
    //                         )
    //                     )
    //                 );
    //                 //redirect(base_url('kariah/login'));
    //                 redirect(base_url('/'));
    //             } else {
    //                 $message = 'Akaun anda belum aktif, sila hubungi Admin untuk mengesahkan !!';
    //                 $this->session->set_flashdata('message', json_encode(array('status' => false, 'title' => 'Perlu disahkan', 'msg' => $message)));

    //                 //redirect(base_url('kariah/login'));
    //                 redirect(base_url('/'));
    //             }
    //         } else {
    //             $message = 'Tiada rekod ahli kariah ditemui, sila hubungi Admin !!';
    //             $this->session->set_flashdata('message', json_encode(array('status' => false, 'title' => 'Gagal cari maklumat', 'msg' => $message)));

    //             //redirect(base_url('kariah/login'));
    //             redirect(base_url('/'));
    //         }
    //     } else $this->qariah_login();
    // }

    
}
