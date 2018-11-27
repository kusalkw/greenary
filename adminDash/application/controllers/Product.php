<?php 
class Product extends CI_Controller {
    
   public function productDetails (){
       
       $this->form_validation->set_rules('Pname','Product Name','required');
     
    if($this->form_validation->run()==FALSE){
        $this->load->view('Product');
    }   
    else
    {
        $this->load->model('ModelUser');
       $this->ModelUser->insertProductdetail();
    }
   }
    
} 