<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    
    function __construct() {
        parent::__construct();
		
		// Load form validation ibrary & user model
        $this->load->library('form_validation');
        $this->load->model('EzPet_model');
	   $this->load->model('image_model');
	   $this->load->library('upload');
	     $this->load->helper(array('form', 'url'));
	   


		
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
            $data['user'] = $this->EzPet_model->getRows($con);
            	?>
			</br>
</br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br></br>

<?php
			// Pass the user data and load view
			//$this->load->view('elements/header', $data);
			$this->load->view('menuWithLogout');

		  $data1['data'] =  $this->image_model->get_images();
				$this->load->view('dashboard', $data1);
		/*	echo"<br>";
			echo"<br>";
			echo"<br>";
			echo"<br>";
			echo"<br>";
			echo"<br>";
			echo"<br>";
			echo"<br>";
			echo"<br>";
			echo"<br>";
			echo"<br>";
			echo"<br>";
			echo"<br>";
			echo"<br>";
			echo"<br>";
			echo"<br>";
			echo"<br>";
 			$this->load->view('banner');
		    $data1['data'] =  $this->image_model->get_images();
			$this->load->view('dashboard', $data1);*/
				
				
				
			$this -> load -> view('elements/footer');

			 	   		 $data2['data'] =  $this->image_model->get_otherImages($data);
						 
			//$this->load->view('users/account', $data2);
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
							$checkLogin = $this->EzPet_model->getRows($con);

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
		//$this->load->view('elements/header', $data);
		$this->load->view('login', $data);
	//	$this->load->view('elements/footer');
    }
    public function registration(){
        $data = $userData = array();
		
		// If registration request is submitted
        if($this->input->post('signupSubmit')){
            $this->form_validation->set_rules('first_name', 'First Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
			$this->form_validation->set_rules('last_name', 'Last Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check');
            $this->form_validation->set_rules('password', 'password', 'required|callback_pass');
            $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]');
			$this->form_validation->set_rules('phone', 'phone', 'required|regex_match[/[6-9]{1}[0-9]{9}/]');

            $userData = array(
                'first_name' => strip_tags($this->input->post('first_name')),
				'last_name' => strip_tags($this->input->post('last_name')),
                'email' => strip_tags($this->input->post('email')),
                'password' => md5($this->input->post('password')),
                'gender' => $this->input->post('gender'),
                'phone' => strip_tags($this->input->post('phone'))
            );

            if($this->form_validation->run() == true){
                $insert = $this->EzPet_model->insert($userData);
              
                    $this->session->set_userdata('success_msg', 'Your account registration has been successful. Please login to your account.');
                    redirect('users/login');
                
            }else{
				$data['error_msg'] = 'Please fill all the mandatory fields.';
			}
        }
		
		// Posted data
        $data['user'] = $userData;
		
		// Load view
		//$this->load->view('elements/header', $data);
		$this->load->view('registration', $data);
		//$this->load->view('elements/footer');
    }
	
	 public function mails($str)
    {
        if ( !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$str)) 
        
        {
           
			$this->form_validation->set_message('mails', 'INVALID EMAIL.');
            return FALSE;
        }
        else
        {
            return true;
        }
    } 
	
	
	public function pass($password)
	{
		 if(!preg_match("/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/",$password))
	    {
				 
            $this->form_validation->set_message('pass', 'enter the valid password');
            return FALSE;
        }
        else
        {
            return true;
        }
	
	}
    
    public function logout(){
        $this->session->unset_userdata('isUserLoggedIn');
        $this->session->unset_userdata('userId');
		 $this->session->set_userdata('isUserLoggedIn', FALSE);
                    $this->session->set_userdata('userId', '');
		
        $this->session->sess_destroy();
        redirect('dashboard');
    }
	
	
	public function details($id)
	{	
		
			$result['data']=$this->EzPet_model->display_records($id);
			$this->load->view('petdetails',$result);
			//$this->load->view('share',$result);
		
				
	}
	
	public function share($id)
	{
		
			$result['data']=$this->EzPet_model->display_records($id);
			$this->load->view('share',$result);
	}
	
	public function video()
	{
		$this->load->view('video');
	}
	
	public function redirect()
	{
		echo "please login!";
		redirect("users/login");
		//$this->load->view('messsage');
		

	}
	
	
	// pet health and food & pharmacy
	public function food()

	{
							$data = $userData = array();
							if($this->input->post('signupSubmit'))
							{
								
								$this->form_validation->set_rules('email', 'Email', 'required|valid_email|regex_match[/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i]');
								$this->form_validation->set_rules('first_name', 'First Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
								$this->form_validation->set_rules('phone', 'phone', 'required|regex_match[/[6-9]{1}[0-9]{9}/]');
								
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
			
				//print  $userData;
				//var_dump($userData);
				
				
		
				//echo "<h3 style='color:blue'>Your data submitted successfully</h3>";
				
								if($this->form_validation->run() == true)
								{
							  
										$insert=$this->db->insert('food',$userData);
							  
										if($insert)
										{
										
											$this->session->set_flashdata('msg', 'DATA SUBMITTED!');
										}
										else
										{
											$this->session->set_flashdata('error', 'FILL ALL!');
										}
								}
							}
		  
	
			$this->load->view('food');
		  
	
	}
	
	
    public function otc()
	{
							$data = $userData = array();
							if($this->input->post('signupSubmit'))
							{
			  
							   $this->form_validation->set_rules('email', 'Email', 'required|valid_email|regex_match[/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i]');
							   $this->form_validation->set_rules('first_name', 'First Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');	
							   $this->form_validation->set_rules('phone', 'phone', 'required|regex_match[/[6-9]{1}[0-9]{9}/]');
							   
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
			  
				//print  $userData;
				//var_dump($userData);
				
		
				//echo "<h3 style='color:blue'>Your data submitted successfully</h3>";
				
				
				
								if($this->form_validation->run() == true)
								{
						  
									$insert=$this->db->insert('otc',$userData);
						  
									if($insert)
									{
									
										$this->session->set_flashdata('msg', 'DATA SUBMITTED!');
									}
									else
									{
										$this->session->set_flashdata('error', 'FILL ALL!');
									}
								}
							
							}	
							
		$this->load->view('otc');
	}
	
	public function rx()
	{
		
							$data = $userData = array();
							if($this->input->post('signupSubmit'))
							{
			  
								$this->form_validation->set_rules('email', 'Email', 'required|valid_email|regex_match[/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i]');
								$this->form_validation->set_rules('first_name', 'First Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
								$this->form_validation->set_rules('phone', 'phone', 'required|regex_match[/[6-9]{1}[0-9]{9}/]');
					
							    $userData = array( 'first_name' => $this->input->post('first_name'),
							    'email' => strip_tags($this->input->post('email')),
								'phone' => $this->input->post('phone'),
								'quantity' => $this->input->post('quantity'),
								'upload' => $this->input->post('upload'),
								'quant' => $this->input->post('quant'),
								'delivery' => $this->input->post('delivery'),
								'address' => $this->input->post('address'),
								'payment' => $this->input->post('payment')
							   );
			  
				//print  $userData;
				//var_dump($userData);
				
		
				//echo "<h3 style='color:blue'>Your data submitted successfully</h3>";
				
								if($this->form_validation->run() == true)
								{
							  
										$insert=$this->db->insert('rx',$userData);
							  
										if($insert)
										{
										
											$this->session->set_flashdata('msg', 'DATA SUBMITTED!');
										}
										else
										{
											$this->session->set_flashdata('error', 'FILL ALL!');
										}
								}
				
							}
		$this->load->view('rx');
		
	}
	
	
	public function treat()
	{
							$data = $userData = array();
							if($this->input->post('signupSubmit'))
							{
								$this->form_validation->set_rules('first_name', 'First Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
								$this->form_validation->set_rules('email', 'Email', 'required|valid_email|regex_match[/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i]');
								$this->form_validation->set_rules('phone', 'phone', 'required|regex_match[/[6-9]{1}[0-9]{9}/]');
									
								$userData = array( 'first_name' => $this->input->post('first_name'),
								'email' => strip_tags($this->input->post('email')),
								'phone' => $this->input->post('phone'),
								'pet' => $this->input->post('pet'),
							    'age' => $this->input->post('age'),
								'choose' => $this->input->post('choose'),
								'treat' => $this->input->post('treat'),
								'quantity' => $this->input->post('quantity'),
								'delivery' => $this->input->post('delivery'),
								'address' => $this->input->post('address'),
								'payment' => $this->input->post('payment')
								 );
			  
				//print  $userData;
				//var_dump($userData);
				
		
				//echo "<h3 style='color:blue'>Your data submitted successfully</h3>";
								if($this->form_validation->run() == true)
								{
								  
										$insert=$this->db->insert('treat',$userData);
								  
										if($insert)
										{
											
											$this->session->set_flashdata('msg', 'DATA SUBMITTED!');
										}
										else
										{
											$this->session->set_flashdata('error', 'FILL ALL!');
										}
								}
				
				
							}
								
		$this->load->view('treat');
		
	}
	
	public function dental()
	{
							$data = $userData = array();
							if($this->input->post('signupSubmit'))
							{
								$this->form_validation->set_rules('email', 'Email', 'required|valid_email|regex_match[/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i]');
								$this->form_validation->set_rules('first_name', 'First Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
								$this->form_validation->set_rules('phone', 'phone', 'required|regex_match[/[6-9]{1}[0-9]{9}/]');
								
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
									  
				//print  $userData;
			//	var_dump($userData);
				//$this->db->insert('dental',$userData);
		
				//echo "<h3 style='color:blue'>Your data submitted successfully</h3>";
								if($this->form_validation->run() == true)
								{
								  
								        $insert=$this->db->insert('dental',$userData);
								  
										if($insert)
										{
											
											$this->session->set_flashdata('msg', 'DATA SUBMITTED!');
										}
										else
										{
											$this->session->set_flashdata('error', 'FILL ALL!');
										}
								}
									
							}
							
								
		$this->load->view('dental');
	}
	
	
	public function mypres()
	{
							$data = $userData = array();
							if($this->input->post('signupSubmit'))
							{
									$this->form_validation->set_rules('first_name', 'First Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
									$this->form_validation->set_rules('petname', 'Pet Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
									$this->form_validation->set_rules('email', 'Email', 'required|valid_email|regex_match[/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i]');
									$this->form_validation->set_rules('phone', 'phone', 'required|regex_match[/[6-9]{1}[0-9]{9}/]');
																	
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
									'k' => $this->input->post('k'), 
									'l' => $this->input->post('l')
									);
			  
				$this->db->insert('mypres',$userData);
		
/*				echo "<h3 style='color:blue'>Your data submitted successfully</h3>";*/
				
									if($this->form_validation->run() == true)
									{
									  
											$insert=$this->db->insert('mypres',$userData);
									  
											if($insert)
											{
												
												$this->session->set_flashdata('msg', 'DATA SUBMITTED!');
											}
											else
											{
												$this->session->set_flashdata('error', 'FILL ALL!');
											}
									}
										
							}
							
								
		$this->load->view('mypres');
	}
	
	public function getc()  
    {  		
   
							$data = $userData = array();
							if($this->input->post('signupSubmit'))
							{
									$this->form_validation->set_rules('petname', 'Pet Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
									$this->form_validation->set_rules('petage', 'Pet Age', 'required|regex_match[~^[a-zA-Z0-9_&\s-]+$~]');
									$this->form_validation->set_rules('email', 'Email', 'required|valid_email|regex_match[/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i]');
									$this->form_validation->set_rules('phone', 'phone', 'required|regex_match[/[6-9]{1}[0-9]{9}/]');
										

									$userData = array( 'pet' => $this->input->post('pet'),
									'petname' => strip_tags($this->input->post('petname')),
									'email' => strip_tags($this->input->post('email')),
									'phone' => $this->input->post('phone'),
								    'gender' => $this->input->post('gender'),
									'petage' => $this->input->post('petage'),
									'question' => $this->input->post('question'),
									'upload' => $this->input->post('upload'),
									'category' => $this->input->post('category')
									);
									if($this->form_validation->run() == true)
								    {
									  
											$insert=$this->db->insert('getc',$userData);
									  
											if($insert)
											{
												
												$this->session->set_flashdata('msg', 'DATA SUBMITTED!');
											}
											else
											{
												$this->session->set_flashdata('error', 'FILL ALL!');
											}
									}
			
							}
			

				$this->load->view('getc');
	
	}
	
	public function lab() 	  
    {  
							$data = $userData = array();
							if($this->input->post('signupSubmit'))
							{
									$this->form_validation->set_rules('dname', 'Doctor Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
									$this->form_validation->set_rules('name', 'Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
									$this->form_validation->set_rules('petage', 'Pet Age', 'required|regex_match[~^[a-zA-Z0-9_&\s-]+$~]');
									$this->form_validation->set_rules('phone', 'phone', 'required|regex_match[/[6-9]{1}[0-9]{9}/]');
							
									$userData = array('check'=>implode("|",$this->input->post('check')),
									'dname'=>$this->input->post('dname'),
									'name' => $this->input->post('name'),
									'phone'=>$this->input->post('phone'),
									'location' => $this->input->post('location'),
									'pet'=>$this->input->post('pet'),
									'petage' => $this->input->post('petage'),
									'gender'=>$this->input->post('gender'),
									'payment'=>$this->input->post('payment')
									);
				/*print  $userData;
				var_dump($userData);
				$insert=$this->db->insert('lab',$userData);*/
		
				//echo "<h3 style='color:blue'>Your data submitted successfully</h3>";
		
		
		
									if($this->form_validation->run() == true)
									{
								  
											$insert=$this->db->insert('lab',$userData);
								  
											if($insert)
											{
											
												$this->session->set_flashdata('msg', 'DATA SUBMITTED!');
											}
											else
											{
												$this->session->set_flashdata('error', 'FILL ALL!');
											}
									}
							}
	
				$this->load->view('lab'); 
				
			 
		
    }
	
	public function genetic()  
    {  
							$data = $userData = array();
							if($this->input->post('signupSubmit'))
							{
				
									$this->form_validation->set_rules('dname', 'Doctor Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
									$this->form_validation->set_rules('name', 'Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
									$this->form_validation->set_rules('petage', 'Pet Age', 'required|regex_match[~^[a-zA-Z0-9_&\s-]+$~]');
									$this->form_validation->set_rules('phone', 'phone', 'required|regex_match[/[6-9]{1}[0-9]{9}/]');
									
									
									$userData = array('check'=>implode("|",$this->input->post('check')),
									'dname'=>$this->input->post('dname'),
									'name' => $this->input->post('name'),
									'phone'=>$this->input->post('phone'),
									'location' => $this->input->post('location'),
									'pet'=>$this->input->post('pet'),
									'petage' => $this->input->post('petage'),
									'gender'=>$this->input->post('gender'),
									'payment'=>$this->input->post('payment')
									);
		/*print  $userData;
				var_dump($userData);
				
		
				echo "<h3 style='color:blue'>Your data submitted successfully</h3>";*/
		
		
		
									if($this->form_validation->run() == true)
									{
								  
											$insert=$this->db->insert('genetic',$userData);
								  
											if($insert)
											{
											
												$this->session->set_flashdata('msg', 'DATA SUBMITTED!');
											}
											else
											{
												$this->session->set_flashdata('error', 'FILL ALL!');
											}
									}
							}
	
		
        $this->load->view('genetic'); 
		
    } 
	
	public function ultra()  
    {  
							$data = $userData = array();
							if($this->input->post('signupSubmit'))
							{
			
									$this->form_validation->set_rules('dname', 'Doctor Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
									$this->form_validation->set_rules('name', 'Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
									//$this->form_validation->set_rules('petage', 'Pet Age', 'required|regex_match[~^[a-zA-Z0-9_&\s-]+$~]');
									$this->form_validation->set_rules('phone', 'phone', 'required|regex_match[/[6-9]{1}[0-9]{9}/]');
									
						
									$userData = array('check'=>implode("|",$this->input->post('check')),
									'dname'=>$this->input->post('dname'),
									'name' => $this->input->post('name'),
									'phone'=>$this->input->post('phone'),
									 'location' => $this->input->post('location'),
									'pet'=>$this->input->post('pet'),
									'gender'=>$this->input->post('gender'),
									'payment'=>$this->input->post('payment')
									);
		/*print  $userData;
				var_dump($userData);
				$this->db->insert('ultra',$userData);
		
				echo "<h3 style='color:blue'>Your data submitted successfully</h3>";*/
				
									if($this->form_validation->run() == true)
									{
								  
											$insert=$this->db->insert('ultra',$userData);
								  
											if($insert)
											{
											
												$this->session->set_flashdata('msg', 'DATA SUBMITTED!');
											}
											else
											{
												$this->session->set_flashdata('error', 'FILL ALL!');
											}
									}
		
							}
	
	
        $this->load->view('ultra'); 
		
    }
	
	public function insurance()  
    {  
		
							$data = $userData = array();
							if($this->input->post('signupSubmit'))
							{
								
								    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|regex_match[/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i]');
									$this->form_validation->set_rules('cname', 'Customer Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
									$this->form_validation->set_rules('insurance', 'Insurance', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
										//$this->form_validation->set_rules('petage', 'Pet Age', 'required|regex_match[~^[a-zA-Z0-9_&\s-]+$~]');
									$this->form_validation->set_rules('phone', 'phone', 'required|regex_match[/[6-9]{1}[0-9]{9}/]');
									$this->form_validation->set_rules('petname', 'Pet Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
							
								  
								    $userData = array( 'amount' => $this->input->post('amount'),
									'pet' => $this->input->post('pet'),
									'petname' => $this->input->post('petname'),
									'gender' => $this->input->post('gender'),
									'cname' => $this->input->post('cname'),
									'cgender' => $this->input->post('cgender'),
								    'email' => strip_tags($this->input->post('email')),
									'phone' => $this->input->post('phone'),
									'address' => $this->input->post('address'),
								    'identification' => $this->input->post('identification'),
									'dob' => $this->input->post('dob'),
								    'insurance' => $this->input->post('insurance')
								    );
								
				//print  $userData;
			//	var_dump($userData);
				
				
		
		//echo "<h3 style='color:blue'>Your data submitted successfully</h3>";
		
		
		
									 if($this->form_validation->run() == true)
									{
													  
											$insert=$this->db->insert('insurance',$userData);
													  
											if($insert)
											{
																
												$this->session->set_flashdata('msg', 'DATA SUBMITTED!');
											}
											else
										    {
												$this->session->set_flashdata('error', 'FILL ALL!');
											}
									}
							}
								
	
        $this->load->view('insurance'); 
		
    }
	public function vitamins()  
    {  
							$data = $userData = array();
							if($this->input->post('signupSubmit'))
							{
								$this->form_validation->set_rules('email', 'Email', 'required|valid_email|regex_match[/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i]');
								$this->form_validation->set_rules('first_name', 'First Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
								$this->form_validation->set_rules('phone', 'phone', 'required|regex_match[/[6-9]{1}[0-9]{9}/]');
									
								$userData = array( 'first_name' => $this->input->post('first_name'),
								'email' => strip_tags($this->input->post('email')),
								'phone' => $this->input->post('phone'),
								'vitamin' => $this->input->post('vitamin'),
								'quantity' => $this->input->post('quantity'),
								'quant' => $this->input->post('quant'),
								'delivery' => $this->input->post('delivery'),
								'upload' => $this->input->post('upload'),
								'address' => $this->input->post('address'),
								'payment' => $this->input->post('payment')
								);
			  
				//print  $userData;
				//var_dump($userData);
				
		
				//echo "<h3 style='color:blue'>Your data submitted successfully</h3>";
				
								 if($this->form_validation->run() == true)
								{
										  
										$insert=$this->db->insert('vitamin',$userData);
										  
										if($insert)
										{
													
											$this->session->set_flashdata('msg', 'DATA SUBMITTED!');
										}
									    else
										{
											$this->session->set_flashdata('error', 'FILL ALL!');
										}
								}
						  
							}
							
							
        $this->load->view('vitamins'); 
		
    }  
	
	public function schedule()  
    {  
							$data = $userData = array();
							if($this->input->post('signupSubmit'))
							{
								
								$this->form_validation->set_rules('confirm', 'confirm', 'required|min_length[2]|max_length[10]|regex_match[~^[a-zA-Z_&\s-]+$~]');
								$this->form_validation->set_rules('first_name', 'First Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
								$this->form_validation->set_rules('petname', 'Pet Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
								$this->form_validation->set_rules('email', 'Email', 'required|valid_email|regex_match[/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i]');
								$this->form_validation->set_rules('phone', 'phone', 'required|regex_match[/[6-9]{1}[0-9]{9}/]');
									//$this->form_validation->set_rules('date', 'Date', 'required|regex_match[/^(((0[1-9]|[12]\\d|3[01])\\/(0[13578]|1[02])\\/((19|[2-9]\\d)\\d{2}))|((0[1-9]|[12]\\d|30)\\/(0[13456789]|1[012])\\/((19|[2-9]\\d)\\d{2}))|((0[1-9]|1\\d|2[0-8])\\/02\\/((19|[2-9]\\d)\\d{2}))|(29\\/02\\/((1[6-9]|[2-9]\\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$]');

							
					
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
		
				
		
				//echo "<h3 style='color:blue'>Your data submitted successfully</h3>";
				
				
				
				
								if($this->form_validation->run() == true)
								{
									   $insert= $this->db->insert('schedule',$userData);
										
							  
										if($insert)
										{
										
											$this->session->set_flashdata('msg', 'DATA SUBMITTED!');
										}
										else
										{
											$this->session->set_flashdata('error', 'FILL ALL!');
										}
								}
		
							}
							
        $this->load->view('schedule'); 
		
    } 
	
	public function dconsult()  
    {  				
							$data = $userData = array();
							if($this->input->post('signupSubmit'))
							{
								
								$this->form_validation->set_rules('confirm', 'confirm', 'required|min_length[2]|max_length[10]|regex_match[~^[a-zA-Z_&\s-]+$~]');
								$this->form_validation->set_rules('question', 'confirm', 'required|min_length[2]|max_length[50]|regex_match[~^[a-zA-Z_&\s-]+$~]');
								$this->form_validation->set_rules('first_name', 'First Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
								$this->form_validation->set_rules('petname', 'Pet Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
								$this->form_validation->set_rules('email', 'Email', 'required|valid_email|regex_match[/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i]');
								$this->form_validation->set_rules('phone', 'phone', 'required|regex_match[/[6-9]{1}[0-9]{9}/]');
								
				
				
				//$first_name = strip_tags($this->post('first_name'));
								$date=$this->input->post('date');
								$slot=$this->input->post('slot');
								$confirm=$this->input->post('confirm');
								$email=$this->input->post('email');
								$phone=$this->input->post('phone');
								$pet=$this->input->post('pet');
								$gender=$this->input->post('gender');
								$question=$this->input->post('question');
								$location=$this->input->post('location');
								$payment=$this->input->post('payment');
								
								/*$userData = array('date'=>$this->input->post('date'),
								'slot'=>$this->input->post('slot'),
								'confirm'=>$this->input->post('confirm'),
								'email'=>$this->input->post('email'),
								'phone'=>$this->input->post('phone'),
								'pet'=>$this->input->post('pet'),
								'gender'=>$this->input->post('gender'),
								'question'=>$this->input->post('question'),
								'location'=>$this->input->post('location'),
								'payment'=>$this->input->post('payment')
								);*/
								//print  $userData;
									//	var_dump($userData);
					
								$userData = array(
									'date' => $date,
									'slot' => $slot,
									'confirm' => $confirm,
									'email' => $email,
									'phone' => $phone,
									'pet' => $pet,
									'gender' => $gender,
									'question' => $question,
									'location' => $location,
									'payment' => $payment,
								);
								$this->load->library('calendar', $date);
			//echo $this->calendar->generate();
			
				/*$this->db->insert('dconsult',$userData);
		
				echo "<h3 style='color:blue'>Your data submitted successfully</h3>";*/
				
				
								if($this->form_validation->run() == true)
								{
									   $insert= $this->db->insert('dconsult',$userData);
										
							  
										if($insert)
										{
										
											$this->session->set_flashdata('msg', 'DATA SUBMITTED!');
										}
										else
										{
											$this->session->set_flashdata('error', 'FILL ALL!');
										}
								}
		
							}
		
        $this->load->view('dconsult'); 
		
    } 
	public function diet()  
    {  
							$data = $userData = array();
							if($this->input->post('signupSubmit'))
							{
								$this->form_validation->set_rules('first_name', 'First Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
								$this->form_validation->set_rules('petname', 'Pet Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
								$this->form_validation->set_rules('email', 'Email', 'required|valid_email|regex_match[/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i]');
								$this->form_validation->set_rules('phone', 'phone', 'required|regex_match[/[6-9]{1}[0-9]{9}/]');
				  
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
								'k' => $this->input->post('k'),
								'l' => $this->input->post('l')
								);
				  
				/*print  $userData;
				var_dump($userData);
				$this->db->insert('diet',$userData);
		
				echo "<h3 style='color:blue'>Your data submitted successfully</h3>";*/
				
				
					
								if($this->form_validation->run() == true)
								{
									   $insert= $this->db->insert('diet',$userData);
										
							  
										if($insert)
										{
										
											$this->session->set_flashdata('msg', 'DATA SUBMITTED!');
										}
										else
										{
											$this->session->set_flashdata('error', 'FILL ALL!');
										}
								}
							
							}	
						
						
        $this->load->view('diet'); 
		
    } 
	public function vaccine()  
    {  
							$data = $userData = array();
							if($this->input->post('signupSubmit'))
							{
		
								$this->form_validation->set_rules('first_name', 'First Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
								$this->form_validation->set_rules('petname', 'Pet Name', 'required|regex_match[~^[a-zA-Z_&\s-]+$~]');
								$this->form_validation->set_rules('email', 'Email', 'required|valid_email|regex_match[/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i]');
								$this->form_validation->set_rules('phone', 'phone', 'required|regex_match[/[6-9]{1}[0-9]{9}/]');
						  
					
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
								'k' => $this->input->post('k'),  
								'l' => $this->input->post('l')
							    );
			  
				/*print  $userData;
				var_dump($userData);
				$this->db->insert('vaccine',$userData);
		
				echo "<h3 style='color:blue'>Your data submitted successfully</h3>";*/
								if($this->form_validation->run() == true)
								{
									   $insert= $this->db->insert('vaccine',$userData);
										
							  
										if($insert)
										{
										
											$this->session->set_flashdata('msg', 'DATA SUBMITTED!');
										}
										else
										{
											$this->session->set_flashdata('error', 'FILL ALL!');
										}
								}
								
							}
		
	
	
			$this->load->view('vaccine'); 
		
    } 
	
// services & marchandish

	 public function grooming()
    {

       

         $data = $userData = array(); 
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit'))

        {
             $userData = array(
                 'first_name' =>$this->input->post('first_name'), 
                'pet_name' => $this->input->post('pet_name'),
                'pet_breed' => $this->input->post('pet_breed'), 
                'phone' => $this->input->post('phone'),

                    //checkbox
                                 'cardname' => $this->input->post('cardname'),
                 'cardnumber' => $this->input->post('cardnumber'),
                   'expmonth' => $this->input->post('expmonth'),
                 'expyear' => $this->input->post('expyear'),
                'cvv' => $this->input->post('cvv')
                
            );
        
            print  $userData;
                var_dump($userData);
    
          }
            $this->load->view('Grooming');    
    
            //$this->db->insert('grooming',$userdata);
               

    }








    public function petsitter()
    {
        

                
        // If registration request is submitted 
        if($this->input->post('signupSubmit'))
        {
             $data = $userData = array(); 

             $userData = array(
                 'first_name' =>$this->input->post('first_name'), 
                 'phone' => $this->input->post('phone'),
                 'email' => $this->input->post('email'),
                 'ephone' => $this->input->post('ephone'),
                'pet_name' => $this->input->post('pet_name'),
                'pet_breed' => $this->input->post('pet_breed'), 
                'address' => $this->input->post('address'), 
                    'alarm_de_code' => $this->input->post('alarm_de_code'), 
                    'alarm_ac_code' => $this->input->post('alarm_ac_code')

                
           



            );
        
            print  $userData;
                var_dump($userData);
                
              $this->db->insert('petsitter  ',$userData);
        
        }
        $this->load->view('Petsitter');
         



    }
    public function dogwalker()
    {
        

          
        // If registration request is submitted 
        if($this->input->post('signupSubmit')){
             $data = $userData = array(); 
         
             $userData = array(
                 'first_name' =>$this->input->post('first_name'), 
                 'phone' =>$this->input->post('phone'),
                 'email' =>$this->input->post('email'),
                 'ephone' =>$this->input->post('ephone'),
                'pet_name' =>$this->input->post('pet_name'),
                'pet_breed' =>$this->input->post('pet_breed'),
                'pet_age' =>$this->input->post('pet_age'),
                'color' =>$this->input->post('color'), 
               // 'address' =>$this->input->post('address'), 
                
                    );
        
            print  $userData;
                var_dump($userData);
                
               
                    $this->db->insert('dogwalker',$userData);
        
                }
                $this->load->view('dogwalker');




    }
    public function petdaycare()
    {
       

         
        // If registration request is submitted 
        if($this->input->post('signupSubmit')){
              $data = $userData = array(); 
         
             $userData = array(
                 'first_name' =>$this->input->post('first_name'), 
                 'phone' => $this->input->post('phone'),
                 'email' => $this->input->post('email'),
                 'ephone' => $this->input->post('ephone'),
                 'address' => $this->input->post('address'),
                'pet_name' => $this->input->post('pet_name'),
                'pet_breed' => $this->input->post('pet_breed'),
                'gender' => $this->input->post('gender'), 
                'pet_food_type' => $this->input->post('pet_food_type'), 
                'pet_food_quantity' => $this->input->post('pet_food_quantity'), 
                 
                
                    );
        
            print  $userData;
                var_dump($userData);
                $this->db->insert('pet_day_care',$userData);
        
                }

                 $this->load->view('pet_day_care');


    }
    public function pethostel()
    {
       
                 
        // If registration request is submitted 
        if($this->input->post('signupSubmit')){
              $data = $userData = array(); 
         
             $userData = array(
                'pet_name' => $this->input->post('pet_name'),
                'pet_breed' => $this->input->post('pet_breed'),
                'gender' => $this->input->post('gender'),
                
                 'first_name' =>$this->input->post('first_name'), 
                 'phone' => $this->input->post('phone'),
                 'email' => $this->input->post('email'),
                 'date_j' => $this->input->post('date_j'),
                 'date_l' => $this->input->post('date_l'),
                 
                 
                
                    );
        
            print  $userData;
                var_dump($userData);
                $this->db->insert('pethostel',$userData);
        
                }

                 $this->load->view('pet_hostel');




    }
    public function pettaxi()
    {
       
          
        // If registration request is submitted 
        if($this->input->post('signupSubmit')){
             $data = $userData = array(); 
         
             $userData = array(
                 'first_name' =>$this->input->post('first_name'), 
                 'phone' => $this->input->post('phone'),
                 'email' => $this->input->post('email'),
                 'ephone' => $this->input->post('ephone'),
                 
                'pet_name' => $this->input->post('pet_name'),
                'paddress' => $this->input->post('paddress'),
                'daddress' => $this->input->post('daddress'),
                                    );
        
            print  $userData;
                var_dump($userData);
                 $this->db->insert('pettaxi',$userData);
        
                
        }
         $this->load->view('pet_taxi');





    }
    

    public function petclub()
    {
      

                 
        // If registration request is submitted 
        if($this->input->post('signupSubmit')){
          $data = $userData = array(); 
         
             $userData = array(
                'pet_name' => $this->input->post('pet_name'),
                        'pet_breed' => $this->input->post('pet_breed'),
                        'food' => $this->input->post('food'),
                            'pet_food_quantity' => $this->input->post('pet_food_quantity'),
                            'gender' => $this->input->post('gender'),

                    );
        
            print  $userData;
                var_dump($userData);

                 $this->db->insert('petclub',$userData);
        
                    }
                      $this->load->view('petclub');

                
    }
    public function pettraining()
    {
       

                
        // If registration request is submitted 
        if($this->input->post('signupSubmit')){
             $data = $userData = array(); 
         
             $userData = array(
                 'first_name' =>$this->input->post('first_name'), 
                 'phone' => $this->input->post('phone'),
                 'email' => $this->input->post('email'),
                 'ephone' => $this->input->post('ephone'),
                'pet_name' => $this->input->post('pet_name'),
                'pet_breed' => $this->input->post('pet_breed'), 
                'level' => $this->input->post('level'), 
                 
                 
                
                    );
        
            print  $userData;
                var_dump($userData);
                 $this->db->insert('pet_training',$userData);
        
            }
             $this->load->view('pet_training');

                



    }
    public function dogplayground()
    {
        

                
        // If registration request is submitted 
        if($this->input->post('signupSubmit'))
        {
             $data = $userData = array(); 
         
             $userData = array(
                 'first_name' =>$this->input->post('first_name'), 
                 'phone' => $this->input->post('phone'),
                 'email' => $this->input->post('email'),
                 'pet_age' => $this->input->post('pet_age'),
                'pet_name' => $this->input->post('pet_name'),
                'pet_breed' => $this->input->post('pet_breed'),
                'area' => $this->input->post('area'),
                 

                    );
        
            print  $userData;
                var_dump($userData);
                
                     $this->db->insert('dogplayground',$userData);
        

            }
            $this->load->view('dogplayground');



    }
    public function globalpet()
    {
        
                
        // If registration request is submitted 
        if($this->input->post('signupSubmit')){
             $data = $userData = array(); 
         
             $userData = array(
                 'first_name' =>$this->input->post('first_name'), 
                 'phone' => $this->input->post('phone'),
                 'email' => $this->input->post('email'),
                 'ephone' => $this->input->post('ephone'),
                'pet_name' => $this->input->post('pet_name'),
                'pet_breed' => $this->input->post('pet_breed'),
                'passport' => $this->input->post('passport'),
                 
                'location' => $this->input->post('location'),

                'dest' => $this->input->post('dest'),
                   
                 
               

                    );
        
            print  $userData;
                var_dump($userData);
                     $this->db->insert('globalpet',$userData);
        
                
            }
            $this->load->view('globalpet');





    }
    
    
    public function funeral()
    {
       

                
        // If registration request is submitted 
        if($this->input->post('signupSubmit')){
             $data = $userData = array(); 
         


             $userData = array(
                 'first_name' =>$this->input->post('first_name'), 
                 'phone' => $this->input->post('phone'),
                 'email' => $this->input->post('email'),
                 
                'pet_name' => $this->input->post('pet_name'),
                'pet_breed' => $this->input->post('pet_breed'),
                
                'birth' => $this->input->post('birth'),

                'death' => $this->input->post('death'),

                               
                    );
        
            print  $userData;
                var_dump($userData);
                     $this->db->insert('funeral',$userData);
        
            }

             $this->load->view('funeral');

                


    }
    public function petfashionoutlet()
    {
        


                
        // If registration request is submitted 
        if($this->input->post('signupSubmit')){
             $data = $userData = array(); 
         
             $userData = array(
                 'first_name' =>$this->input->post('first_name'), 
                 'phone' => $this->input->post('phone'),

                 'email' => $this->input->post('email'),
                'pet_name' => $this->input->post('pet_name'),
                'pet_breed' => $this->input->post('pet_breed'),
                'pet_size' => $this->input->post('pet_size'),
                //'pet_breed' => $this->input->post('pet_breed'),
                'costume_type' => $this->input->post('costume_type'),
                'costume_name' => $this->input->post('costume_name'),
                
                 
               

                    );
        
            print  $userData;
                var_dump($userData);
                 $this->db->insert('petfashion',$userData);
        

                
                


        }
        $this->load->view('petfasionoutlet');


    }
    public function pettoys()
    {
       
         if($this->input->post('signupSubmit')){
             $data = $userData = array(); 
         
             $userData = array(
                'pet_name' => $this->input->post('pet_name'),
                'pet_breed' => $this->input->post('pet_breed'),
                'pet_toy' => $this->input->post('pet_toy'),
                 
               'type' => $this->input->post('type'),
                 

                    );
        
            print  $userData;
                var_dump($userData);
                 $this->db->insert('petfashion',$userData);
        
            }

               $this->load->view('pettoys');
  
                
    }
    public function dia()
    {
        

         if($this->input->post('signupSubmit')){
             $data = $userData = array(); 
         
             $userData = array(
                'pet_name' => $this->input->post('pet_name'),
                'pet_breed' => $this->input->post('pet_breed'),
                'pet_age' => $this->input->post('pet_age'),
                'size' => $this->input->post('size'),
                 
               

                    );
        
            print  $userData;
                var_dump($userData);
                 $this->db->insert('dia',$userData);
        
            }
            $this->load->view('dia');

    }
    public function petbedding()
    {
       

         if($this->input->post('signupSubmit')){
             $data = $userData = array(); 
         
             $userData = array(
                'pet_name' => $this->input->post('pet_name'),
                'pet_breed' => $this->input->post('pet_breed'),
                'pet_size' => $this->input->post('pet_size'),
                'color' => $this->input->post('color'),
                 

                    );
        
            print  $userData;
                var_dump($userData);
                $this->db->insert('dia',$userData);
        
            }
             $this->load->view('petbedding');



    }
    public function petsafety()
    {
       

        if($this->input->post('signupSubmit')){
             $data = $userData = array(); 
         
             $userData = array(
                 'first_name' =>$this->input->post('first_name'), 
                 'phone' => $this->input->post('phone'),
                 'email' => $this->input->post('email'),
                 'ephone' => $this->input->post('ephone'),
                'pet_name' => $this->input->post('pet_name'),
                'pet_breed' => $this->input->post('pet_breed'),
                   );
        
            print  $userData;
                var_dump($userData);
            }
             $this->load->view('petsafety');

    }
    public function accessories()
    {
        
         if($this->input->post('signupSubmit')){
             $data = $userData = array(); 
         
             $userData = array(
                 'pet_name' => $this->input->post('pet_name'),
                'pet_breed' => $this->input->post('pet_breed'),
                //check box

                'cardname' => $this->input->post('cardname'),
                 'cardnumber' => $this->input->post('cardnumber'),
                   'expmonth' => $this->input->post('expmonth'),
                 'expyear' => $this->input->post('expyear'),
                'cvv' => $this->input->post('cvv'),
                 
               

                    );
        
            print  $userData;
                var_dump($userData);
            }
            $this->load->view('accessories');


             
       
    }

//get a pet & my account


	public function submenu(){
		$this->load->view('petshelters');
		  
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit')) {
			$data = $userData = array();
			 $userData = array(
									 'Perspective_Pet_Parent' => strip_tags($this->input->post('Perspective_Pet_Parent')), 
			'pet_name_adopted' => strip_tags($this->input->post('pet_name_adopted')),
                'gender' => strip_tags($this->input->post('gender')),
			 'Pet_Name' => strip_tags($this->input->post('Pet_Name')),
			'Pet_breed' => strip_tags($this->input->post('Pet_breed')),
			'phone' => strip_tags($this->input->post('phone')),
			'address' => strip_tags($this->input->post('address')),
					
				 'weight' => strip_tags($this->input->post('weight')),
				 'Height' => strip_tags($this->input->post('Height')),
					  'rent_or_own_home' => strip_tags($this->input->post('rent_or_own_home')),
					  'veterinarian_name' => strip_tags($this->input->post('veterinarian_name')),
					  'veterinarian_phone_number' => strip_tags($this->input->post('veterinarian_phone_number')),
					  'Hours_pet_alone' => strip_tags($this->input->post('Hours_pet_alone')),
					 );
					 print  $userData;
				var_dump($userData);
		
				
			$this->db->insert('petshelter',$userData);
		}
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";



	}
	

	

	public function breeder(){
		$this->load->view('breeders');
		 $data = $userData = array(); 
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit')){

			 $data = $userData = array();
			 $userData = array(
									 'Full_Name' => strip_tags($this->input->post('Full_Name')), 
                'address' => strip_tags($this->input->post('address')),
				'breeder_phone' => strip_tags($this->input->post('breeder_phone')),	
				 'address_female' => strip_tags($this->input->post('address_female')),
				 'Height' => strip_tags($this->input->post('Height')),
				
			'address_stud' => strip_tags($this->input->post('address_stud')), 
			'Veterinary_Doctor_Name' => strip_tags($this->input->post('Veterinary_Doctor_Name')), 
			'Veterinary_Doctor_ADDRESS' => strip_tags($this->input->post('Veterinary_Doctor_ADDRESS')), 
			'Veterinary_Doctor_phone_number' => strip_tags($this->input->post('Veterinary_Doctor_phone_number')), 
			'Microchip' => strip_tags($this->input->post('Microchip')), 
			'Pet_breed' => strip_tags($this->input->post('Pet_breed')), 
			'gender' => strip_tags($this->input->post('gender')), 
			'DOB' => strip_tags($this->input->post('DOB')), 
			'color' => strip_tags($this->input->post('color')), 
			'Body_Markings' => strip_tags($this->input->post('Body_Markings')), 
			'DOB_rabies' => strip_tags($this->input->post('DOB_rabies')),
			'DOB_last' => strip_tags($this->input->post('DOB_last')),
			'DOB_deworming' => strip_tags($this->input->post('DOB_deworming')),


			  );
			  print  $userData;
				var_dump($userData);
				
				$this->db->insert('breeders',$userData);

		}
		
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";



	}

	public function findapet(){
		$this->load->view('findpet');


		 
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit')){

			 $data = $userData = array(); 
			 $userData = array(
									 'Pet_breed' => strip_tags($this->input->post('Pet_breed')), 
                'gender' => strip_tags($this->input->post('gender')),
				'color' => strip_tags($this->input->post('color')),	
				 'weight' => strip_tags($this->input->post('weight')),
				 'Height' => strip_tags($this->input->post('Height')),
				'Purpose_Of_Pet' => strip_tags($this->input->post('Purpose_Of_Pet')),
			'phone' => strip_tags($this->input->post('phone')), 
			'Cost' => strip_tags($this->input->post('Cost')), 
			  );
		
			print  $userData;
				var_dump($userData);
				
			$this->db->insert('petfind',$userData);
		}
		
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";




	}
	
	public function petregistration()
	{
			$this->load->view('petregistration',array('error' => ' ' ));

		 
        // If registration request is submitted 
				if($this->input->post('signupSubmit'))
				{
					   if(!empty($_FILES['image']['name'])){
                $config['upload_path'] = 'assets/images/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = $_FILES['image']['name'];
                
                //Load upload library and initialize configuration
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
                    $picture = $uploadData['file_name'];
                }else{
                    $picture = '';
                }
            }else{
                $picture = '';
            }
            
					

					$userData = array(
					
					'AIN' => strip_tags($this->input->post('AIN')), 
					'Pet_Name' => strip_tags($this->input->post('Pet_Name')),
					'DOB' => strip_tags($this->input->post('DOB')),	
					'color' => strip_tags($this->input->post('color')),
					'GENIUS' => strip_tags($this->input->post('GENIUS')),
					'weight' => strip_tags($this->input->post('weight')),
					'Height' => strip_tags($this->input->post('Height')),
					'Microchiped_or_Tattooed' => strip_tags($this->input->post('Microchiped_or_Tattooed')),
					'Microchip_or_Tattoo' => strip_tags($this->input->post('Microchip_or_Tattoo')),
					'State_License_or_Registration' => strip_tags($this->input->post('State_License_or_Registration')),
					'Club_or_Association_Registration' => strip_tags($this->input->post('Club_or_Association_Registration')),
					'Pet_Sire_Name' => strip_tags($this->input->post('Pet_Sire_Name')),
					'Pet_Sire_AIN' => strip_tags($this->input->post('Pet_Sire_AIN')),
					'Pet_Dam_Name' => strip_tags($this->input->post('Pet_Dam_Name')),
					'Pet_Dam_AIN' => strip_tags($this->input->post('Pet_Dam_AIN')),
		
					'email' => strip_tags($this->input->post('email')), 
             
					'gender' => $this->input->post('gender'), 
					'Spayed_or_Neutered' => $this->input->post('Spayed_or_Neutered'), 
					'Special_Status' =>implode("|", $this->input->post('Special_Status')),					
				
					'phone' => strip_tags($this->input->post('phone')) ,
					'image' => $picture			
				
               
					);
		
					var_dump($userData);
					
					$this->db->insert('petinfo',$userData);
					
				  
				
			}
		
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";
		
	}
		  
	
		


	public function customer(){
		$this->load->view('customer');

		 
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit')){
			 $data = $userData = array(); 

		$userData = array( 
                'first_name' => strip_tags($this->input->post('first_name')), 
				'middle_name' => strip_tags($this->input->post('middle_name')),
                'last_name' => strip_tags($this->input->post('last_name')),
				'DOB' => strip_tags($this->input->post('DOB')),

				'address' => strip_tags($this->input->post('address')),
				'billing_address' => strip_tags($this->input->post('billing_address')),
                'email' => strip_tags($this->input->post('email')), 
                'password' => md5($this->input->post('password')), 
					'conf_password' => md5($this->input->post('conf_password')),
                'gender' => $this->input->post('gender'), 
                'phone' => strip_tags($this->input->post('phone')) 
            ); 

				print  $userData;
				var_dump($userData);
				
			$this->db->insert('customer',$userData);
		}
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";
		  }
		  


	
	public function estimation(){
		$this->load->view('estimation');
		 if($this->input->post('signupSubmit')){
			   $data = $userData = array(); 

			$userData = array(
			'budget' => strip_tags($this->input->post('budget')), 
				'range' => strip_tags($this->input->post('range')),
                'Special_Status' => strip_tags($this->input->post('Special_Status')),
				'availability' => strip_tags($this->input->post('availability')),
				 ); 
			print  $userData;
				var_dump($userData);
				
			$this->db->insert('estimation',$userData);
		 }
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";
		
		}
	public function puppy(){
		$this->load->view('puppy');
		 if($this->input->post('signupSubmit')){

			  $data = $userData = array(); 

			$userData = array(
			'adopt_pet_finder' => strip_tags($this->input->post('adopt_pet_finder')), 
				'Special_Status' => strip_tags($this->input->post('Special_Status')),
                'Pet_breed' => strip_tags($this->input->post('Pet_breed')),
				'age' => strip_tags($this->input->post('age')),
					'featured_pets' => strip_tags($this->input->post('featured_pets')),
					'search_results' => strip_tags($this->input->post('search_results')),
					'userfile' => strip_tags($this->input->post('userfile')),
					 ); 
			print  $userData;
				var_dump($userData);
				
				$this->db->insert('puppy',$userData);
		 }
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";



	}
	public function healthvacination(){
		$this->load->view('healthvacination');
			if($this->input->post('signupSubmit')){
				$data = $userData = array();

			$userData = array(
			'petname' => strip_tags($this->input->post('petname')), 
				'DOB' => strip_tags($this->input->post('DOB')),
                'DOB_vacination' => strip_tags($this->input->post('DOB_vacination')),
				'Monitoring' => strip_tags($this->input->post('Monitoring')),
					'DOB_bookvac' => strip_tags($this->input->post('DOB_bookvac')),
					'preferred_Doctor' => strip_tags($this->input->post('preferred_Doctor')),
				'hospital_preferred' => strip_tags($this->input->post('hospital_preferred')),
				'availability' => strip_tags($this->input->post('availability')),
				);
		print  $userData;
				var_dump($userData);
				
			$this->db->insert('healthvacination',$userData);
			}
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";
		  }





	
	public function dietchart(){
		$this->load->view('dietchart');
		if($this->input->post('signupSubmit')){
				$data = $userData = array();

			$userData = array(
			'diet_chart' => strip_tags($this->input->post('diet_chart')), 
				'Special_Status' => strip_tags($this->input->post('Special_Status')),
                'online_booking' => strip_tags($this->input->post('online_booking')),
		);
		print  $userData;
				var_dump($userData);
				
			$this->db->insert('dietchart',$userData);
		}
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";



	}
	public function orderpet(){
		$this->load->view('orderpet');
		if($this->input->post('signupSubmit')){
				$data = $userData = array();

			$userData = array(
			
				'Special_Status' => strip_tags($this->input->post('Special_Status')),
				'images' => strip_tags($this->input->post('images')),
                'Cost' => strip_tags($this->input->post('Cost')),
				'Adopton_pets' => strip_tags($this->input->post('Adopton_pets')),
				'Status' => strip_tags($this->input->post('Status')),
		);
		print  $userData;
				var_dump($userData);
				
			$this->db->insert('orderpet',$userData);
		}
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";
		  
		}
	public function delv(){
		$this->load->view('delivery');
		 if($this->input->post('signupSubmit')){
			  $data = $userData = array(); 

			$userData = array(
			'Full_Name' => strip_tags($this->input->post('Full_Name')), 
				'address' => strip_tags($this->input->post('address')),
                'phone' => strip_tags($this->input->post('phone')),
				'email' => strip_tags($this->input->post('email')),
					'shipping_address' => strip_tags($this->input->post('shipping_address')),
					'alt_address' => strip_tags($this->input->post('alt_address')),
				'delivery_charges' => strip_tags($this->input->post('delivery_charges')),
				);
		print  $userData;
				var_dump($userData);
				
				$this->db->insert('delivery',$userData);
		 }
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";
		  }


	
	public function petchoose(){
		$this->load->view('petchoose');
	}
		public function expenses()
			{
		$this->load->view('expenses');
		
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit')){
			$data = $userData = array(); 

			$userData = array(
			'income' => strip_tags($this->input->post('income')), 
				'expenses' => strip_tags($this->input->post('expenses')),
                'savings' => strip_tags($this->input->post('savings')),
				'total' => strip_tags($this->input->post('total')),
			);
		print  $userData;
				var_dump($userData);
				
			$this->db->insert('expenses',$userData);
		}
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";
		  }




	
	public function myorders(){
		$this->load->view('myorders');
	
		 
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit')){
			$data = $userData = array();
				$userData = array(
			'Full_Name' => strip_tags($this->input->post('Full_Name')), 
				'email' => strip_tags($this->input->post('email')),
                'Contact_number' => strip_tags($this->input->post('Contact_number')),
				'my_products' => strip_tags($this->input->post('my_products')),
			'total' => strip_tags($this->input->post('total')),
			'billing_address' => strip_tags($this->input->post('billing_address')),
			'Shipping_address' => strip_tags($this->input->post('Shipping_address')),
			  ); 
			print  $userData;
				var_dump($userData);
				
				$this->db->insert('myorders',$userData);
		}
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";



	}
	public function petlicense(){
		$this->load->view('petlicense');
		 
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit')){
			$data = $userData = array();
				$userData = array( 
                'License_No' => strip_tags($this->input->post('License_No')), 
				'Year' => strip_tags($this->input->post('Year')),
                'Applicant_Category' => strip_tags($this->input->post('Applicant_Category')),
				

				'Ward_Name' => strip_tags($this->input->post('Ward_Name')),
				
                'Owners_Name' => $this->input->post('Owners_Name'), 
                'Applicant_name' => strip_tags($this->input->post('Applicant_name')) ,
					'Address_Pets_Owner_Institution' => strip_tags($this->input->post('Address_Pets_Owner_Institution')), 
					'Pet_Name' => strip_tags($this->input->post('Pet_Name')), 
					'Breed' => strip_tags($this->input->post('Breed')), 
					'Colour' => strip_tags($this->input->post('Colour')), 
					'ID_Mark_ifany' => strip_tags($this->input->post('ID_Mark_ifany')),
					'Age' => strip_tags($this->input->post('Age')), 
					'Date_brought' => strip_tags($this->input->post('Date_brought')), 
					'Veterinary_Doctors_name' => strip_tags($this->input->post('Veterinary_Doctors_name')),
					'Date_ARV' => strip_tags($this->input->post('Date_ARV')),
					'Stray_Dog_Adopted' => strip_tags($this->input->post('Stray_Dog_Adopted')),
					'Puppy_owners_place' => strip_tags($this->input->post('Puppy_owners_place')),
					
            ); 
			print  $userData;
				var_dump($userData);
				
			$this->db->insert('petlicense',$userData);
		}
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";
		  }

	
	public function petchart(){
		$this->load->view('petchart');
		 
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit')){
				$data = $userData = array(); 
         

		$userData = array( 
                'Pet_Name' => strip_tags($this->input->post('Pet_Name')), 
				'Breed' => strip_tags($this->input->post('Breed')),
                'Color' => strip_tags($this->input->post('Color')),
				'ID_Mark_ifany' => strip_tags($this->input->post('ID_Mark_ifany')),

				'Age' => strip_tags($this->input->post('Age')),
				
                'Recommended_Immunization_Schedule' => $this->input->post('Recommended_Immunization_Schedule'), 
                'Immunization_dates' => strip_tags($this->input->post('Immunization_dates')) 
            ); 
				print  $userData;
				var_dump($userData);
				
			$this->db->insert('petchart',$userData);
		}
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";
		  }
		  




	
	public function ownpet(){
		$this->load->view('ownpet');
	}
	
   
	
    
	// Existing email check during validation
   /* public function email_check($str){
        $con = array(
			'returnType' => 'count',
			'conditions' => array(
				'email' => $str
			)
		);
        $checkEmail = $this->EzPet_model->getRows($con);
        if($checkEmail > 0){
            $this->form_validation->set_message('email_check', 'The given email already exists.');
            return FALSE;
        }else{
            return TRUE;
        }
    }*/
	 
	// Existing email check during validation
    public function email_check($str){
        $con = array(
			'returnType' => 'count',
			'conditions' => array(
				'email' => $str
			)
		);
        $checkEmail = $this->EzPet_model->getRows($con);
        if($checkEmail > 0){
            $this->form_validation->set_message('email_check', 'The given email already exists.');
            return FALSE;
        }else{
            if ( !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i",$str)) 
        
        {
           
			$this->form_validation->set_message('email_check', 'INVALID EMAIL.');
            return FALSE;
        }
        else
        {
            return true;
        }
        }
    }
}
