<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    //function constructor unutk memanggil model library dan helper
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_model');
        $this->load->helper('my_helper');
        $this->load->library('email');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function forgot_password()
    {
        $this->load->view('auth/forgot_password');
    }

    public function login()
    {
        $this->load->view('auth/login');
    }

    public function aksi_login()
    {
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);

        // Validasi jika data tidak terisi
        if (empty($email) || empty($password)) {
            $this->session->set_flashdata('error', 'Data harus di isi lengkap');
            redirect(base_url());
        }

        $data = ['email' => $email];
        $query = $this->m_model->getwhere('user', $data);
        $result = $query->row_array();

        if (!empty($result)) {
            if (md5($password) === $result['password']) {
                $data = [
                    'logged_in' => true,
                    'email' => $result['email'],
                    'username' => $result['username'],
                    'role' => $result['role'],
                    'id' => $result['id'],
                ];
                $this->session->set_userdata($data);

                if ($result['role'] == 'admin') {
                    $this->session->set_flashdata('login_admin', 'Anda berhasil login');
                    redirect(base_url() . "admin");
                } elseif ($result['role'] == 'customer') {
                    $this->session->set_flashdata('login_customer', 'Anda berhasil login');
                    redirect(base_url() . 'customer');
                }
            } else {
                // Password salah
                $this->session->set_flashdata('error', 'Password salah');
                redirect(base_url());
            }
        } else {
            // Email salah
            $this->session->set_flashdata('error', 'Email salah');
            redirect(base_url());
        }
    }

    public function register()
    {
        $this->load->view('auth/register');
    }

    public function aksi_register()
{
    $email = $this->input->post('email', true);
    $data = ['email' => $email];
    $password = $this->input->post('password');
    $username = $this->input->post('username');
    $query = $this->m_model->getwhere('user', $data);
    $result = $query->row_array();

    if (empty($result)) {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|regex_match[/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/]');
        $this->form_validation->set_rules('password', 'Password', 'required|regex_match[/^(?=.*\d)(?=.*[a-zA-Z])[0-9a-zA-Z]{8,}$/]');
        $this->form_validation->set_rules('username', 'Username', 'required'); // Validasi untuk username

        if ($this->form_validation->run() === FALSE) {
            redirect(base_url('auth/register'));
        } else {
            $data = [
                'email' => $this->input->post('email'),
                'username' => $this->input->post('username'),
                'role' => 'customer',
                'password' => md5($this->input->post('password')),
            ];
            $this->m_model->tambah_data('user', $data);

            // Tampilkan SweetAlert setelah registrasi berhasil
            $this->session->set_flashdata('success', 'Berhasil melakukan registrasi');
            redirect(base_url());
        }
    } else {
        $this->session->set_flashdata('error_email', 'Email sudah terdaftar');
        redirect(base_url('auth/register'));
    }
}
    public function coba()
    {
        $this->load->view('auth/coba');
    }
}
