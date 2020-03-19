<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    
    function __construct() {
        parent::__construct();
		
		// Load form validation ibrary & user model
        $this->load->library('form_validation');
        $this->load->model('model');
	   $this->load->model('image_model');
	   


		
		// User login status
		$this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn');
    }
	
	public function index(){
        if($this->isUserLoggedIn){
			redirect('users/account');
			//redirect('task/menu');
        }else{
            redirect('login');	
        }
    }

    public function account(){
        $data = array();
        if($this->isUserLoggedIn){
			$con = array(
				'id' => $this->session->userdata('userId')
			);
            $data['user'] = $this->model->getRows($con);
            
			// Pass the user data and load view
			//$this->load->view('elements/header', $data);
			$this->load->view('menuWithLogout');
			 	   		 $data2['data'] =  $this->image_model->get_otherImages($data);
						 
			$this->load->view('users/account', $data2);
			//$this->load->view('elements/footer');
        }else{
            redirect('login');
        }
    }

    public function login(){
        $data = array();
        
        // Get messages from the session
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
		
		// If login request submitted
        if($this->input->post('loginSubmit')){
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'password', 'required');
			
            if($this->form_validation->run() == true){
                $con = array(
					'returnType' => 'single',
					'conditions' => array(
						'email'=> $this->input->post('email'),
						'password' => md5($this->input->post('password')),
						'status' => 1
					)
                );
							$checkLogin = $this->model->getRows($con);

                if($checkLogin){
                    $this->session->set_userdata('isUserLoggedIn', TRUE);
                    $this->session->set_userdata('userId', $checkLogin['id']);

                    redirect('users/account/');


					
                }else{
                    $data['error_msg'] = 'Wrong email or password, please try again.';
                }
            }else{
				$data['error_msg'] = 'Please fill all the mandatory fields.';
			}
        }
		
		// Load view
		$this->load->view('elements/header', $data);
		$this->load->view('login', $data);
		$this->load->view('elements/footer');
    }

    public function registration(){
        $data = $userData = array();
		
		// If registration request is submitted
        if($this->input->post('signupSubmit')){
            $this->form_validation->set_rules('first_name', 'First Name', 'required');
			$this->form_validation->set_rules('last_name', 'Last Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
            $this->form_validation->set_rules('password', 'password', 'required');
            $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]');

            $userData = array(
                'first_name' => strip_tags($this->input->post('first_name')),
				'last_name' => strip_tags($this->input->post('last_name')),
                'email' => strip_tags($this->input->post('email')),
                'password' => md5($this->input->post('password')),
                'gender' => $this->input->post('gender'),
                'phone' => strip_tags($this->input->post('phone'))
            );

            if($this->form_validation->run() == true){
                $insert = $this->model->insert($userData);
              
                    $this->session->set_userdata('success_msg', 'Your account registration has been successful. Please login to your account.');
                    redirect('users/login');
                
            }else{
				$data['error_msg'] = 'Please fill all the mandatory fields.';
			}
        }
		
		// Posted data
        $data['user'] = $userData;
		
		// Load view
		$this->load->view('elements/header', $data);
		$this->load->view('registration', $data);
		$this->load->view('elements/footer');
    }
    
    public function logout(){
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('userId');
		 $this->session->set_userdata('isUserLoggedIn', FALSE);
                    $this->session->set_userdata('userId', '');
		
        $this->session->sess_destroy();
        redirect('dashboard');
    }
	public function food()

	{
		 $data = $userData = array();
		  if($this->input->post('signupSubmit')){
			   $userData = array( 'first_name' => $this->input->post('first_name'),
			   'email' => strip_tags($this->input->post('email')),
			    'phone' => $this->input->post('phone'),
				 'age' => $this->input->post('age'),
				  'address' => $this->input->post('address'),
				  'product' => $this->input->post('product'),
				   'range' => $this->input->post('range'),
				    'pet' => $this->input->post('pet'),
					 'brand' => $this->input->post('brand'),
					  'delivery' => $this->input->post('delivery'),
					   'payment' => $this->input->post('payment')
			   );
			
				print  $userData;
				var_dump($userData);
				
				$this->db->insert('food',$userData);
		
		echo "<h3 style='color:blue'>Your data submitted successfully</h3>";
		  }
		  
	
		$this->load->view('food');
		  
	
	}
	public function redirect()
	
	{
		echo "please login!";
		redirect("users/login");
		//$this->load->view('messsage');
		

	}
	
      public function otc()
	{
		 $data = $userData = array();
		  if($this->input->post('signupSubmit')){
			   $userData = array( 'first_name' => $this->input->post('first_name'),
			   'email' => strip_tags($this->input->post('email')),
			    'phone' => $this->input->post('phone'),
				 'medicine' => $this->input->post('medicine'),
				  'quantity' => $this->input->post('quantity'),
				  'quant' => $this->input->post('quant'),
				   'delivery' => $this->input->post('delivery'),
				    'address' => $this->input->post('address'),
					   'payment' => $this->input->post('payment')
			   );
			  
				print  $userData;
				var_dump($userData);
				$this->db->insert('otc',$userData);
		
				echo "<h3 style='color:blue'>Your data submitted successfully</h3>";
		  }
		$this->load->view('otc');
	}
	
	public function rx()
	{
		 $data = $userData = array();
		  if($this->input->post('signupSubmit')){
			   $userData = array( 'first_name' => $this->input->post('first_name'),
			   'email' => strip_tags($this->input->post('email')),
			    'phone' => $this->input->post('phone'),
				  'quantity' => $this->input->post('quantity'),
				   'upload' => $this->input->post('upload'),
				  'quant' => $this->input->post('quant'),
				   'delivery' => $this->input->post('delivery'),
					   'payment' => $this->input->post('payment')
			   );
			  
				print  $userData;
				var_dump($userData);
				$this->db->insert('rx',$userData);
		
				echo "<h3 style='color:blue'>Your data submitted successfully</h3>";
		  }
		$this->load->view('rx');
	}
	
	
	public function treat()
	{
		$data = $userData = array();
		  if($this->input->post('signupSubmit')){
			   $userData = array( 'first_name' => $this->input->post('first_name'),
			   'email' => strip_tags($this->input->post('email')),
			    'phone' => $this->input->post('phone'),
				 'pet' => $this->input->post('pet'),
				 'age' => $this->input->post('age'),
				 'choose' => $this->input->post('choose'),
				  'quantity' => $this->input->post('quantity'),
				   'delivery' => $this->input->post('delivery'),
				    'address' => $this->input->post('address'),
					   'payment' => $this->input->post('payment')
			   );
			  
				print  $userData;
				var_dump($userData);
				$this->db->insert('treat',$userData);
		
				echo "<h3 style='color:blue'>Your data submitted successfully</h3>";
		  }
		$this->load->view('treat');
	}
	
	public function dental()
	{
		$data = $userData = array();
		  if($this->input->post('signupSubmit')){
			   $userData = array( 'first_name' => $this->input->post('first_name'),
			   'email' => strip_tags($this->input->post('email')),
			    'phone' => $this->input->post('phone'),
				 'pet' => $this->input->post('pet'),
				 'gender' => $this->input->post('gender'),
				 'choose' => $this->input->post('choose'),
				  'quantity' => $this->input->post('quantity'),
				   'delivery' => $this->input->post('delivery'),
				    'address' => $this->input->post('address'),
					   'payment' => $this->input->post('payment')
			   );
			  
				print  $userData;
				var_dump($userData);
				$this->db->insert('dental',$userData);
		
				echo "<h3 style='color:blue'>Your data submitted successfully</h3>";
		  }
		$this->load->view('dental');
	}
	
	
public function mypres()
	{
		$data = $userData = array();
		  if($this->input->post('signupSubmit')){
			   $userData = array( 'first_name' => $this->input->post('first_name'),
			   'email' => strip_tags($this->input->post('email')),
			    'phone' => $this->input->post('phone'),
				 'pet' => $this->input->post('pet'),
				  'petname' => $this->input->post('petname'),
				 'age' => $this->input->post('age'),
				 'problem' => $this->input->post('problem'),
				  'a' => $this->input->post('a'),
				    'b' => $this->input->post('b'),
					  'c' => $this->input->post('c'),
					    'd' => $this->input->post('d'),
						  'e' => $this->input->post('e'),
						    'f' => $this->input->post('f'),
							  'g' => $this->input->post('g'),
							    'h' => $this->input->post('h'),
								  'i' => $this->input->post('i'),
								    'j' => $this->input->post('j'),
									  'k' => $this->input->post('k'),  'l' => $this->input->post('l')
			   );
			  
				print  $userData;
				var_dump($userData);
				$this->db->insert('mypres',$userData);
		
				echo "<h3 style='color:blue'>Your data submitted successfully</h3>";
		  }
		$this->load->view('mypres');
	}
	
	public function getc()  
    {  
	 $data = $userData = array();
		  if($this->input->post('signupSubmit')){
			   $userData = array( 'pet' => $this->input->post('pet'),
			   'petname' => strip_tags($this->input->post('petname')),
			    'gender' => $this->input->post('gender'),
				  'petage' => $this->input->post('petage'),
				  'question' => $this->input->post('question'),
				   'upload' => $this->input->post('upload'),
				  'category' => $this->input->post('category')
			   );
			  
				print  $userData;
				var_dump($userData);
				$this->db->insert('getc',$userData);
		
				echo "<h3 style='color:blue'>Your data submitted successfully</h3>";
		  }
	
        $this->load->view('getc'); 
		
    } 
	  public function lab() 	  
    {  
		$data = $userData = array();
		  if($this->input->post('signupSubmit'))
		  {
			  
			/*	$checkbox = $_POST['check']; 
				for($i=0;$i<count($checkbox);$i++){
					$category_id = $checkbox[$i];
				}*/


			   $userData = array( 'checkbox' => $this->input->post('check'),
			   'dname' => strip_tags($this->input->post('dname')),
			   'first_name'=>$this->input->post('first_name'),
			    'phone' => $this->input->post('phone'),
				 'location' => $this->input->post('location'),
				  'pet' => $this->input->post('pet'),
				  'gender' => $this->input->post('gender'),
				   'age' => $this->input->post('age'),
					   'payment' => $this->input->post('payment')
			   );
			  
				print  $userData;
				var_dump($userData);
				//$this->db->insert('otc',$userData);
		
				echo "<h3 style='color:blue'>Your data submitted successfully</h3>";
		  }
        $this->load->view('lab'); 
		
    } 
	 public function genetic()  
    {  
        $this->load->view('genetic'); 
		
    } 
	 public function ultra()  
    {  
        $this->load->view('ultra'); 
		
    }
	
	public function insurance()  
    {  
        $this->load->view('insurance'); 
		
    }
	public function vitamins()  
    {  
		$data = $userData = array();
		  if($this->input->post('signupSubmit')){
			   $userData = array( 'first_name' => $this->input->post('first_name'),
			   'email' => strip_tags($this->input->post('email')),
			    'phone' => $this->input->post('phone'),
				 'vitamin' => $this->input->post('vitamin'),
				  'quantity' => $this->input->post('quantity'),
				   'delivery' => $this->input->post('delivery'),
				    'address' => $this->input->post('address'),
					   'payment' => $this->input->post('payment')
			   );
			  
				print  $userData;
				var_dump($userData);
				$this->db->insert('vitamin',$userData);
		
				echo "<h3 style='color:blue'>Your data submitted successfully</h3>";
		  }
        $this->load->view('vitamins'); 
		
    }  
	public function schedule()  
    {  
	
		if($this->input->post('signupSubmit')){
		
		$userData = array('date'=>$this->input->post('date'),
		'slot'=>$this->input->post('slot'),
		'confirm'=>$this->input->post('confirm'),
		'first_name' => $this->input->post('first_name'),
		'email'=>$this->input->post('email'),
		'phone'=>$this->input->post('phone'),
		'pet'=>$this->input->post('pet'),
		'petname' => $this->input->post('petname'),
		'gender'=>$this->input->post('gender'),
		'concern' => $this->input->post('concern'),
		'question'=>$this->input->post('question'),
		'payment'=>$this->input->post('payment')
		);
		print  $userData;
				var_dump($userData);
				$this->db->insert('schedule',$userData);
		
				echo "<h3 style='color:blue'>Your data submitted successfully</h3>";
		
	}
        $this->load->view('schedule'); 
		
    } 
	public function dconsult()  
    {   if($this->input->post('signupSubmit')){
		
		$userData = array('date'=>$this->input->post('date'),
		'slot'=>$this->input->post('slot'),
		'confirm'=>$this->input->post('confirm'),
		'email'=>$this->input->post('email'),
		'phone'=>$this->input->post('phone'),
		'pet'=>$this->input->post('pet'),
		'gender'=>$this->input->post('gender'),
		'question'=>$this->input->post('question'),
		'location'=>$this->input->post('location'),
		'payment'=>$this->input->post('payment')
		);
		print  $userData;
				var_dump($userData);
				$this->db->insert('dconsult',$userData);
		
				echo "<h3 style='color:blue'>Your data submitted successfully</h3>";
		
	}
		
        $this->load->view('dconsult'); 
		
    } 
	public function diet()  
    {  
	$data = $userData = array();
		  if($this->input->post('signupSubmit')){
			   $userData = array( 'first_name' => $this->input->post('first_name'),
			   'email' => strip_tags($this->input->post('email')),
			    'phone' => $this->input->post('phone'),
				 'pet' => $this->input->post('pet'),
				  'petname' => $this->input->post('petname'),
				 'gender' => $this->input->post('gender'),
				 'problem' => $this->input->post('problem'),
				  'a' => $this->input->post('a'),
				    'b' => $this->input->post('b'),
					  'c' => $this->input->post('c'),
					    'd' => $this->input->post('d'),
						  'e' => $this->input->post('e'),
						    'f' => $this->input->post('f'),
							  'g' => $this->input->post('g'),
							    'h' => $this->input->post('h'),
								  'i' => $this->input->post('i'),
								    'j' => $this->input->post('j'),
									  'k' => $this->input->post('k'),  'l' => $this->input->post('l')
			   );
			  
				print  $userData;
				var_dump($userData);
				$this->db->insert('diet',$userData);
		
				echo "<h3 style='color:blue'>Your data submitted successfully</h3>";
		  }
        $this->load->view('diet'); 
		
    } 
	public function vaccine()  
    {  
        $this->load->view('vaccine'); 
		
    } 
	
// services & marchandish

	 public function grooming()
    {
        $this->load->view('Grooming');
    }
    public function petsitter()
    {
        $this->load->view('Petsitter');
    }
    public function dogwalker()
    {
        $this->load->view('dogwalker');
    }
    public function petdaycare()
    {
        $this->load->view('pet_day_care');
    }
    public function pethostel()
    {
        $this->load->view('pet_hostel');
    }
    public function pettaxi()
    {
        $this->load->view('pet_taxi');
    }
    

    public function petclub()
    {
        $this->load->view('petclub');
    }
    public function pettraining()
    {
        $this->load->view('pet_training');
    }
    public function dogplayground()
    {
        $this->load->view('dogplayground');
    }
    public function globalpet()
    {
        $this->load->view('globalpet');
    }
    
    
    public function funeral()
    {
        $this->load->view('funeral');
    }
    public function petfashionoutlet()
    {
        $this->load->view('petfasionoutlet');
    }
    public function pettoys()
    {
        $this->load->view('pettoys');
    }
    public function dia()
    {
        $this->load->view('dia');
    }
    public function petbedding()
    {
        $this->load->view('petbedding');
    }
    public function petsafety()
    {
        $this->load->view('petsafety');
    }
    public function accessories()
    {
        $this->load->view('accessories');
    }

//get a pet & my account


	public function submenu(){
		$this->load->view('petshelters');
	}
	

	

	public function breeder(){
		$this->load->view('breeders');
	}

	public function findapet(){
		$this->load->view('findpet');
	}
	
	public function petregistration(){
		$this->load->view('petregistration');
	}
	public function customer(){
		$this->load->view('customer');
	}
	public function estimation(){
		$this->load->view('estimation');
	}
	public function puppy(){
		$this->load->view('puppy');
	}
	public function healthvacination(){
		$this->load->view('healthvacination');
	}
	public function dietchart(){
		$this->load->view('dietchart');
	}
	public function orderpet(){
		$this->load->view('orderpet');
	}
	public function delv(){
		$this->load->view('delivery');
	}
	public function petchoose(){
		$this->load->view('petchoose');
	}
		public function expenses(){
		$this->load->view('expenses');
	}
	public function myorders(){
		$this->load->view('myorders');
	}
	public function petlicense(){
		$this->load->view('petlicense');
	}
	public function petchart(){
		$this->load->view('petchart');
	}
	public function ownpet(){
		$this->load->view('ownpet');
	}
	
   
	
    
	// Existing email check during validation
    public function email_check($str){
        $con = array(
			'returnType' => 'count',
			'conditions' => array(
				'email' => $str
			)
		);
        $checkEmail = $this->model->getRows($con);
        if($checkEmail > 0){
            $this->form_validation->set_message('email_check', 'The given email already exists.');
            return FALSE;
        }else{
            return TRUE;
        }
    }
}