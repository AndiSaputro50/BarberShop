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

    // Controller (Supervisor.php)
    public function approve()
    {
        // Ambil data customer dengan status "PROCESS" atau "APPOINTMENT"
        $data['customers'] = $this->m_model->get_customer_by_status();
        $this->load->view('admin/approve', $data);
    }

    public function aksi_approve_di_terima($id)
    {
        // Tetapkan status "DONE"
        $this->m_model->set_status($id, 'DONE');
        // Redirect ke halaman admin/approve
        redirect(base_url('admin/approve'));
    }

    public function aksi_approve_di_tolak($id)
    {
        // Tetapkan status "di tolak"
        $this->m_model->set_status($id, 'REJECTED');
        // Redirect ke halaman admin/approve
        redirect(base_url('admin/approve'));
    }


    public function dashboard()
    {
        $data['customerr'] = $this->m_model->get_customer_by_status();
        $data['jml_approve'] = $this->m_model->get_data('customer')->num_rows();
        $this->load->view('admin/dashboard', $data);
    }
    public function history_approve()
    {
        $data['customerrs'] = $this->m_model->get_data('customer')->result();
        $this->load->view('admin/history_approve', $data);
    }
}
