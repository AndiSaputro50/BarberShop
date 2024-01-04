<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    //function constructor unutk memanggil model library dan helper
    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function login()
    {
        $this->load->view('auth/login');
    }
}
