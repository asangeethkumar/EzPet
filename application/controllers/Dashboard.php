<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Dashboard extends CI_Controller {  
      
    public function index()  
    {  
			$this->load->view('menu');
        $this->load->view('image'); 
	    $this->load->view('dashboard');
        		
    }  
 }  
?>  
