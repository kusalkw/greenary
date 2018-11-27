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
                        $user_data=array(
                            'user_id'=>$result->customerid,
                            'fname'=>$result->fname,
                            'lname'=>$result->lname,
                            'phone'=>$result->phone,
                            'address'=>$result->address,
                            'email'=>$result->email,

                            'loggedin'=>TRUE

                        );
                        $this->session->set_userdata($user_data);
                        print_r($_SESSION);
                        $this->session->set_flashdata('Welcome','Welcome back');
                            redirect ('Admin/index');

                    }else{
                        $this->session->set_flashdata('error','Wrong email and password');
                            redirect ('Welcome/login');

                    }
                }
    

            }



public function LogoutUser(){

    $this->session->unset_userdata('user_id');
    $this->session->unset_userdata('fname');
    $this->session->unset_userdata('lname');
    $this->session->unset_userdata('phone');
    $this->session->unset_userdata('address');
    $this->session->unset_userdata('email');
    $this->session->unset_userdata('loggedin');
    redirect('Welcome/login');
}}
?>