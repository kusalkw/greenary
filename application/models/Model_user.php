<?php
 class Model_user extends CI_Model{
     function insertUserData(){
         $data = array(
             'fname' => $this->input->post('fname',TRUE),
             'lname' => $this->input->post('lname',TRUE),
             'phone' => $this->input->post('phone',TRUE),
             'address' => $this->input->post('address',TRUE),
             'email' => $this->input->post('email',TRUE),
             'password' =>sha1( $this->input->post('password',TRUE))


         );
         return $this->db->insert('customer',$data);
         
    }
    function loginUser(){
        $email = $this->input->post('email');
        $password = sha1($this->input->post('password'));

        $this->db->where('email',$email);
        $this->db->where('password',$password);

        $respond=$this->db->get('customer');
        if($respond->num_rows()==1){
            return $respond->row(0);
            
        }else{
            return false;
            
        }
    }



 }