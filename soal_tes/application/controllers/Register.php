<?php

class Register extends CI_Controller {

    function Index() {
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('number', 'Number', 'required');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('register_form');
                }
                else
                {
                        $this->load->view('register_form_sukses');
                }
        
    }

}
