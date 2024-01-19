<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('auth/login'));
    }

    public function generate_code($length = 6)
    {
        $characters = '1234567890';
        $code = '';
        for ($i = 0; $i < $length; $i++) {
            $code .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $code;
    }

    public function forgot_password()
    {
        $this->load->view('auth/forgot_password');
    }

    public function aksi_forgot_password()
    {
        $email = $this->input->post('email', true);

        // Validasi jika email tidak diisi
        if (empty($email)) {
            $this->session->set_flashdata('error', 'Email harus diisi');
            redirect(base_url('auth/forgot_password'));
        }

        $data = ['email' => $email];
        $query = $this->m_model->getwhere('user', $data);
        $result = $query->row_array();

        if (!empty($result)) {
            $generate = $this->generate_code();
            $code = $generate;
            $mail = new PHPMailer(true);

            try {
                // Konfigurasi SMTP dan pengaturan lainnya
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'saputroandi763@gmail.com';
                $mail->Password = 'ipyq ywmq uhfu ouxr';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 587;

                // Set pengirim dan penerima
                $mail->setFrom('saputroandi763@gmail.com', 'Barbershop');
                $mail->addAddress($email, 'Barbershop');
                $mail->addReplyTo("$email");
                $mail->isHTML(true);
                $mail->Subject = 'Kode Verifikasi Password';

                // Konten HTML email dengan gaya CSS yang lebih modern
                $mail->Body = '
                    <html>
                        <head>
                            <style>
                                /* CSS styling */
                                body {
                                    margin: 0;
                                    padding: 0;
                                    font-family: Arial, sans-serif;
                                    background-color: #f2f2f2;
                                    opacity: 0; /* Awalnya atur opasitas ke 0 */
                                    animation: fadeIn 1s ease-in-out forwards; /* Animasi untuk fade-in */
                                }
                                /* Animasi Fade-in */
                                @keyframes fadeIn {
                                    from {
                                        opacity: 0;
                                    }
                                    to {
                                        opacity: 1;
                                    }
                                }
                                .container {
                                    width: 80%;
                                    margin: 0 auto;
                                    padding: 40px;
                                    background-color: #ffffff;
                                    border-radius: 8px;
                                    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                                    text-align: center;
                                    color: #333333;
                                }
                                h1 {
                                    color: #4f709c;
                                    margin-bottom: 20px;
                                    font-weight: bold;
                                }
                                .code {
                                    font-size: 28px;
                                    color: #fff;
                                    padding: 15px;
                                    background-color: #4f709c;
                                    border-radius: 8px;
                                    margin-bottom: 30px;
                                }
                                p {
                                    color: #666;
                                    font-size: 16px; font-family: Arial, sans-serif;
                                    line-height: 1.6;
                                    margin-bottom: 20px;
                                }
                                .icon {
                                    max-width: 50%;
                                    height: auto;
                                    margin: 0 auto 10px;
                                    display: block;
                                }
                                .container {
                                    border: 1px solid #ccc;
                                }
                                .code {
                                    background-color: #4f709c;
                                    color: #fff;
                                    border: 1px solid #ccc;
                                }
                            </style>
                        </head>
                        <body>
        <div class="container">
            <h1>Kode Verifikasi Password</h1>
            <p>Silakan gunakan kode verifikasi berikut:</p>
            <div class="code">' . $generate . '</div>
            <p>Untuk keamanan akun Anda, jangan bagikan kode ini kepada siapapun.</p>
        </div>
    </body>
                    </html>
                ';

                // Kirim email
                if ($mail->send()) {
                    $data = [
                        'code' => $code,
                        'email' => $email
                    ];
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('success_forgot', 'Pesan telah terkirim');
                    redirect(base_url('auth/verifikasi_kode'));
                } else {
                    $this->session->set_flashdata('error', 'Pesan tidak dapat terkirim. Error: ' . $mail->ErrorInfo);
                    redirect(base_url('auth/forgot_password'));
                }
            } catch (Exception $e) {
                $this->session->set_flashdata('error', 'Terjadi kesalahan: ' . $e->getMessage());
                redirect(base_url('auth/forgot_password'));
            }
        } else {
            $this->session->set_flashdata('error', 'Email tidak ditemukan');
            redirect(base_url('auth/forgot_password'));
        }
    }

    public function verifikasi_kode()
    {
        $this->load->view('auth/verifikasi_kode');
    }

    public function aksi_verifikasi_kode()
    {
        $code = $this->input->post('code');
        if ($code == $this->session->userdata('code')) {
            $data = [
                'status' => true,
            ];
            $this->session->set_userdata($data);
            $this->session->set_flashdata('success_code', 'Verifikasi berhasil!');
            redirect(base_url('auth/ganti_password'));
        } else {
            $this->session->set_flashdata('error', 'Code verifikasi salah!');
            redirect(base_url('auth/verifikasi_kode'));
        }
    }

    // LOGIN //

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
                    redirect(base_url() . "admin/dashboard");
                } elseif ($result['role'] == 'customer') {
                    $this->session->set_flashdata('login_customer', 'Anda berhasil login');
                    redirect(base_url() . 'customer');
                }
            } else {
                // Password salah
                $this->session->set_flashdata('error', 'Password salah');
                redirect(base_url('auth/login'));
            }
        } else {
            // Email salah
            $this->session->set_flashdata('error', 'Email salah');
            redirect(base_url('auth/login'));
        }
    }

    // LOGIN //

    // REGISTER //
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
                $this->session->set_flashdata('success_regist', 'Register Succesfully!');

                // Redirect to the login page
                redirect(base_url('auth/login'));
            }
        } else {
            $this->session->set_flashdata('error_email', 'Email sudah terdaftar');
            redirect(base_url('auth/register'));
        }
    }

    // REGISTER //

    public function coba()
    {
        $this->load->view('auth/coba');
    }

    public function coba_2()
    {
        $this->load->view('auth/coba_2');
    }
}
