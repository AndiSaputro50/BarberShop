<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_model');
        $this->load->helper('my_helper');
        $this->load->library('form_validation');
        if ($this->session->userdata('logged_in') != true || $this->session->userdata('role') != 'admin') {
            redirect(base_url());
        }
    }

    public function approve()
    {
        $this->load->view('admin/approve');
    }
    public function dashboard()
    {
        $this->load->view('admin/dashboard');
    }
    public function history_approve()
    {
        $this->load->view('admin/history_approve');
    }
}
