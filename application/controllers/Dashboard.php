<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Dashboard extends CI_Controller {  
 function __construct() {
        parent::__construct();
		
		// Load form validation ibrary & user model
        $this->load->model('image_model');
		
    }
	
      
    public function index()  
    {  
			$this->load->view('menu');
			?>

		
	
	
<?php
 			//$this->load->view('banner');
			
				$this->load->view('sliders');
				$this->load->view('filters');
				echo "<br>";
				echo "<br>";
				echo "<br>";
				
				$this->load->view('pets');
				echo "<br>";
								echo "<br>";

				$data1['data'] =  $this->image_model->get_images();
	
				$this->load->view('dashboard', $data1);
				$this->load->view('know');
				$this->load->view('searchfilter');
				//$this->load->view('myorders');
				
			$this -> load -> view('elements/footer');
			

        		
    }  
 }  
?> 

