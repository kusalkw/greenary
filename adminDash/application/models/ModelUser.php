<?php
 class ModelUser extends CI_Model{
     function insertProductdetail(){
         
         $data=array(
         'product_name'=>$this->input->post('Pname',TRUE), 
         'product_price'=>$this->input->post('price',TRUE),
         'product_image'=>$this->input->post('pic1',TRUE),
         'product_detail'=>$this->input->post('description',TRUE)
         );
         
          
         $this->db->insert('product',$data);
         
         
         
         
         

           /*data insert*/
         /* $data = array(
         'fname' => $this ->input->post('fname',TRUE),
         'lname' => $this ->input->post('lname',TRUE),
         'Email' => $this ->input->post('email',TRUE),
         'Password' => sha1($this ->input->post('password',TRUE))
);
         return  $this->db->insert('register',$data);
         
     } 
     
     function LoginUser(){
         $email = $this->input->post('email');
         $password = sha1($this->input->post('password'));
         
        $this->db->where('email',$email);   
        $this->db->where('password',$password);
         $respond = $this->db->get('register');
         if ($respond->num_rows()==1){
             print_r($respond->row(0));
             die();
         } 
         else{
             echo "error";
             die();
         }
         
     }
     */
     
     }
 }
?>