<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('Login_view');
    }
    public function Register()
    {
        $this->load->view('Register_view');
    }
    public function Login()
    {
        $this->load->view('Login_view');
    }
    public function beranda()
    {
        $this->load->view('beranda');
    }
}

/* End of file Program.php */

?>