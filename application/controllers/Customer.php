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
        if ($this->session->userdata('logged_in') != true || $this->session->userdata('role') != 'customer') {
            redirect(base_url());
        }
    }

    public function dashboard()
    {
        $data['customer'] = $this->m_model->get_data('customer')->num_rows();
        $data['jml_customer'] = $this->m_model->get_data('customer')->result();
        $this->load->view('customer/dashboard', $data);
    }

    public function customer()
    {
        $data['customer'] = $this->m_model->get_customer_by_status();
        $data['customer'] = $this->m_model->get_data('customer')->result();
        $this->load->view('customer/customer', $data);
    }

    public function history_customer()
    {
        $data['customer'] = $this->m_model->get_data('customer')->result();
        $this->load->view('customer/history_customer', $data);
    }

    public function tambah_customer()
    {
        $this->load->view('customer/tambah_customer');
    }

    public function hapus_customer($id)
    {
        $this->m_model->delete('customer', 'id', $id);
        redirect(base_url('customer/customer'));
    }

    public function aksi_tambah_customer()
    {
        $data = [
            'order_time' => $this->input->post('order_time'),
            'address' => $this->input->post('address'),
            'phone_number' => $this->input->post('phone_number'),
            'date' => $this->input->post('date'),
            'status' => 'PROCESS',
        ];

        if ($this->m_model->tambah_data('customer', $data)) {
            // Jika berhasil
            $this->session->set_flashdata('success_cs', 'Customer data added successfully!');
        } else {
            // Jika gagal
            $this->session->set_flashdata('error_cs', 'Failed to add customer data.');
        }

        redirect(base_url('customer/customer'));
    }


    public function edit_customer($id)
    {
        $data['customer'] = $this->m_model->get_by_id('customer', 'id', $id)->result();
        $this->load->view('customer/edit_customer', $data);
    }


    public function aksi_edit_customer()
    {
        // Ambil data dari input form
        $id = $this->input->post('id');
        $order_time = $this->input->post('order_time');
        $address = $this->input->post('address');
        $phone_number = $this->input->post('phone_number');
        $date = $this->input->post('date');
        $status = $this->input->post('status');
    
        // Buat array untuk data yang akan diupdate
        $data = array(
            'order_time' => $order_time,
            'address' => $address,
            'phone_number' => $phone_number,
            'date' => $date,
            'status' => $status,
        );
    
        // Lakukan update data ke dalam database
        $eksekusi = $this->m_model->update('customer', $data, array('id' => $id));
    
        // Cek apakah update berhasil
        if ($eksekusi) {
            // Jika berhasil, set flashdata sukses dan redirect ke halaman customer
            $this->session->set_flashdata('sukses', 'Berhasil');
            redirect(base_url('customer/customer'));
        } else {
            // Jika gagal, set flashdata error dan redirect kembali ke halaman edit customer dengan membawa id customer yang sedang diedit
            $this->session->set_flashdata('error', 'Gagal..');
            redirect(base_url('customer/edit_customer/' . $id));
        }
    }
    



    // public function aksi_customer()
    // {
    //     date_default_timezone_set('Asia/Jakarta');

    //     $order_time = date('Y-m-d H:i:s', time());
    //     $id = $this->session->userdata('id');
    //     $date = date('Y-m-d');

    //     // Cek apakah karyawan sudah pulang
    //     $absensi_terakhir = $this->m_model->get_data('customer', array(
    //         'id' => $id
    //     ));

    //     $data = array(
    //         'order_time' => $order_time,
    //         'date' => $date,
    //     );

    //     $this->m_model->tambah_data('customer', $data);
    //     redirect(base_url('customer/customer'));
    // }


}
