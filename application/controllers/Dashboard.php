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
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>

<?php
 			$this->load->view('banner');

		$data1['data'] =  $this->image_model->get_images();
				$this->load->view('dashboard', $data1);
				
			$this -> load -> view('elements/footer');
			

        		
    }  
 }  
?> 

