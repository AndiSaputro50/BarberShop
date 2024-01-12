<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_model');
        $this->load->helper('my_helper');
        $this->load->library('form_validation');
    }

    public function dashboard()
    {
        $this->load->view('customer/dashboard');
    }

    public function profil()
    {
        $this->load->view('customer/profil');
    }

    public function customer()
    {
        $this->load->view('customer/customer');
    }

    public function history_customer()
    {
        $this->load->view('customer/history_customer');
    }


}
