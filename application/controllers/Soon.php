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
}
