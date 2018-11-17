<?php
class Login extends CI_Controller{
    public function UserLogin(){
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        

        if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('login');
                }
                else
                {
                    $this->load->model('Model_user');
                    $result=$this->Model_user->loginUser(); 
                    
                    if($result!=false){


                    }else{
                        $this->session->set_flashdata('error','Wrong email and password');
                            redirect ('Welcome/login');

                    }
                }
    

            }

}