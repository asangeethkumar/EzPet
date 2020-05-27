<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Dashboard extends CI_Controller {  
 function __construct() {
        parent::__construct();
		
		// Load form validation ibrary & user model
        $this->load->model('image_model');
		$this->load->model('EzPet_model');
		
    }
	
      
    public function index()  
    {  
			$this->load->view('menu');
			?>

		
	
	
<?php
 			
			
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
						
						
						if($this->input->post('signupSubmit'))
		
        // If registration request is submitted 
      
		{
			
			
			
			$loc=$this->input->post('location'); 
			$spe=$this->input->post('species');
            $siz=$this->input->post('size');
			$bre=$this->input->post('breed');
			$gender =$this->input->post('gender');
			$ar=$this->input->post('age');
			$coat=$this->input->post('coat');
			
			$this->EzPet_model->displaypets($loc,$spe,$siz,$bre,$gender,$ar,$coat);
			$result['data']=$this->EzPet_model->displaypets($loc,$spe,$siz,$bre,$gender,$ar,$coat);
			$this->load->view('petsearch',$result);			
			
		}
				//$this->load->view('serviceslider');
				
			$this -> load -> view('elements/footer');
			

        		
    }  
 }  
?> 

