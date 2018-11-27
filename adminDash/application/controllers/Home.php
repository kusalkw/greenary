 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
    
	public function index()
	{
		$this->load->view('Home');
	}
    public function login()
    {
        $this->load->view('Login');
    }
    public function productDetails()
    {
        $this->load->view('Product',array('error'=>''));
    }
    public function upload(){
        $config['upload_path']="/images/";
        
    }
}
 