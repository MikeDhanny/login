<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function registerUser()
    {
        $this->form_validation->set_rules('username','Username','required|is_unique|user_username|');
        $this->form_validation->set_rules('fname', 'Full name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('contact', 'Contact', 'required');
        $this->form_validation->set_rules('nis', 'NIS', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches|password');

        if($this->form_validation->run() ==TRUE) {
            $this->load->model('model_user');
            $this->model_user->insert();
                                                                                
            $this->session->set_flashdata('success', 'you are registered');
            
            redirect('Home/Login');
        }
        else {
            redirect('Home/Register');
        }

    }

}

/* End of file Register.php */

?>