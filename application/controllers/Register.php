<?php
class Register extends CI_Controller{
    public function RegisterUser(){
        $this->form_validation->set_rules('fname', 'First Name', 'required');
        $this->form_validation->set_rules('lname', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('register');
                }
                else
                {
                        $this->load->model('Model_user');
                        $response=$this->Model_user->insertUserData();
                        if($response){
                            $this->session->set_flashdata('msg','Registered successfully');
                            redirect ('Welcome/register');
                        }else{
                            $this->session->set_flashdata('msg','Something went wrong');
                            redirect ('Welcome/register');
                        }
                }
    }



}