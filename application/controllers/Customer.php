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

    public function customer()
    {
        $this->load->view('customer/customer');
    }

    public function history_customer()
    {
        $this->load->view('customer/history_customer');
    }

    public function tambah_customer()
    {
        $this->load->view('customer/tambah_customer');
    }

    public function aksi_tambah_customer()
    {
        $name = $this->input->post('name');
        $address = $this->input->post('address');
        $phone_number = $this->input->post('phone_number');
        $date = $this->input->post('date');
    }
}
