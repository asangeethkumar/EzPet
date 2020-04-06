<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

// Load the Rest Controller library

require APPPATH . '/libraries/REST_Controller.php';
   use Restserver\Libraries\REST_Controller;

class api_getc extends REST_Controller 
{
   
	public function getc_post()  
    {  
	$this->load->view('getc'); 
			    $pet = $this->input->post('pet');
			  $petname = strip_tags($this->input->post('petname'));
			    $gender = $this->input->post('gender');
				  $petage = $this->input->post('petage');
				  $question = $this->input->post('question');
				   $upload = $this->input->post('upload');
				  $category = $this->input->post('category');
				  
				  $userData = array(
					'pet' =>$pet,
					'petname' => $petname,
					'gender' => $gender,
					'petage' =>$petage ,
					'question' =>  $question,
						'upload' =>  $upload,
							'category' => $category
				);
				// $this->db->set($userData);
				$insert = $this->db->insert('getc',$userData);
		
				
		 
	   if($insert)
	   {
					// Set the response and exit
					$this->response([
						'status' => TRUE,
						'message' => 'The user has been added successfully.'
					], REST_Controller::HTTP_OK);
				}
				else
				{
					// Set the response and exit
					$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
				}
        }
		
		
	
		
		
		
		
		public function vitamins_post()  
		{ 
			$this->load->view('vitamins'); 
		//$data = $userData = array();
		 // if($this->input->post('signupSubmit')){
			   $userData = array( 'first_name' => $this->input->post('first_name'),
			   'email' => strip_tags($this->input->post('email')),
			    'phone' => $this->input->post('phone'),
				 'vitamin' => $this->input->post('vitamin'),
				  'quantity' => $this->input->post('quantity'),
				   'delivery' => $this->input->post('delivery'),
				    'address' => $this->input->post('address'),
					   'payment' => $this->input->post('payment')
			   );
			  
				//print  $userData;
				//var_dump($userData);
				$insert=$this->db->insert('vitamin',$userData);
				  if($insert)
				{
					// Set the response and exit
					$this->response([
						'status' => TRUE,
						'message' => 'The user has been added successfully.'
					], REST_Controller::HTTP_OK);
				}
				else
				{
					// Set the response and exit
					$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
				}
        }
		
				
       // $this->load->view('vitamins'); 
		







	public function food_post()

	{
		
		$this->load->view('food');
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
			
				
				
				$insert=$this->db->insert('food',$userData);
		
	
		   if($insert)
				{
					// Set the response and exit
					$this->response([
						'status' => TRUE,
						'message' => 'The user has been added successfully.'
					], REST_Controller::HTTP_OK);
				}
				else
				{
					// Set the response and exit
					$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
				}
        
	
		  
	
	}
	public function otc_post()
	{
			$this->load->view('otc');
		
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
			  
				
			$insert=	$this->db->insert('otc',$userData);
			  if($insert)
				{
					// Set the response and exit
					$this->response([
						'status' => TRUE,
						'message' => 'The user has been added successfully.'
					], REST_Controller::HTTP_OK);
				}
				else
				{
					// Set the response and exit
					$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
				}
		
		
	
	}
	
	public function rx_post()
	{
		$this->load->view('rx');
			   $userData = array( 'first_name' => $this->input->post('first_name'),
			   'email' => strip_tags($this->input->post('email')),
			    'phone' => $this->input->post('phone'),
				  'quantity' => $this->input->post('quantity'),
				   'upload' => $this->input->post('upload'),
				  'quant' => $this->input->post('quant'),
				   'delivery' => $this->input->post('delivery'),
					   'payment' => $this->input->post('payment')
			   );
			  
				
				$insert=	$this->db->insert('rx',$userData);
				
				 if($insert)
				{
					// Set the response and exit
					$this->response([
						'status' => TRUE,
						'message' => 'The user has been added successfully.'
					], REST_Controller::HTTP_OK);
				}
				else
				{
					// Set the response and exit
					$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
				}
		
			
		
	}
	
	public function diet_post()  
    {  
		     $this->load->view('diet'); 
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
			  
				
				$insert=$this->db->insert('diet',$userData);
				 if($insert)
				{
					// Set the response and exit
					$this->response([
						'status' => TRUE,
						'message' => 'The user has been added successfully.'
					], REST_Controller::HTTP_OK);
				}
				else
				{
					// Set the response and exit
					$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
				}
		
   
		
    } 
	
	public function treat_post()
	{
				$this->load->view('treat');
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
			  
				
				$insert=$this->db->insert('treat',$userData);
		
			if($insert)
				{
					// Set the response and exit
					$this->response([
						'status' => TRUE,
						'message' => 'The user has been added successfully.'
					], REST_Controller::HTTP_OK);
				}
				else
				{
					// Set the response and exit
					$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
				}
		
	}
	
	
	public function dconsult_post()  
    {  
		  $this->load->view('dconsult'); 
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
		
				$insert=$this->db->insert('dconsult',$userData);
				if($insert)
				{
					// Set the response and exit
					$this->response([
						'status' => TRUE,
						'message' => 'The user has been added successfully.'
					], REST_Controller::HTTP_OK);
				}
				else
				{
					// Set the response and exit
					$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
				}
		
		
      
		
    } 
	public function dental_post()
	{
			$this->load->view('dental');
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
			  
				
				$insert=$this->db->insert('dental',$userData);
				if($insert)
				{
					// Set the response and exit
					$this->response([
						'status' => TRUE,
						'message' => 'The user has been added successfully.'
					], REST_Controller::HTTP_OK);
				}
				else
				{
					// Set the response and exit
					$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
				}
		
	
	
	}
	
		public function mypres_post()
	{
						$this->load->view('mypres');
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
			  
				
				$insert=$this->db->insert('mypres',$userData);
				if($insert)
				{
					// Set the response and exit
					$this->response([
						'status' => TRUE,
						'message' => 'The user has been added successfully.'
					], REST_Controller::HTTP_OK);
				}
				else
				{
					// Set the response and exit
					$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
				}
				
		
				

	}
	public function schedule_post()  
    {  
	
		  $this->load->view('schedule'); 
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
		
				$insert=$this->db->insert('schedule',$userData);
		
				
      
		if($insert)
				{
					// Set the response and exit
					$this->response([
						'status' => TRUE,
						'message' => 'The user has been added successfully.'
					], REST_Controller::HTTP_OK);
				}
				else
				{
					// Set the response and exit
					$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
				}
		
    } 
	
	
	 public function ultra_post()  {
      
			$this->load->view('ultra'); 
		$userData = array('check'=>$this->input->post('check'),
		'dname'=>$this->input->post('dname'),
		'name' => $this->input->post('name'),
		'phone'=>$this->input->post('phone'),
		 'location' => $this->input->post('location'),
		'pet'=>$this->input->post('pet'),
		'gender'=>$this->input->post('gender'),
		'payment'=>$this->input->post('payment')
		);
		
				$insert=$this->db->insert('ultra',$userData);
		
		
	if($insert)
				{
					// Set the response and exit
					$this->response([
						'status' => TRUE,
						'message' => 'The user has been added successfully.'
					], REST_Controller::HTTP_OK);
				}
				else
				{
					// Set the response and exit
					$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
				}
	
	
	
        
		
    }
	
	 public function genetic_post()  {
      
			$this->load->view('genetic'); 
		
		$userData = array('check'=>$this->input->post('check'),
		'dname'=>$this->input->post('dname'),
		'name' => $this->input->post('name'),
		'phone'=>$this->input->post('phone'),
		 'location' => $this->input->post('location'),
		'pet'=>$this->input->post('pet'),
		 'petage' => $this->input->post('petage'),
		'gender'=>$this->input->post('gender'),
		'payment'=>$this->input->post('payment')
		);
		
				$insert=$this->db->insert('genetic',$userData);
		
		
	if($insert)
				{
					// Set the response and exit
					$this->response([
						'status' => TRUE,
						'message' => 'The user has been added successfully.'
					], REST_Controller::HTTP_OK);
				}
				else
				{
					// Set the response and exit
					$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
				}
	
	
	
        
		
    }
	 public function lab_post()  {
      
			$this->load->view('lab'); 
		
		 $userData = array('check'=>$this->input->post('check'),
		'dname'=>$this->input->post('dname'),
		'name' => $this->input->post('name'),
		'phone'=>$this->input->post('phone'),
		 'location' => $this->input->post('location'),
		'pet'=>$this->input->post('pet'),
		 'petage' => $this->input->post('petage'),
		'gender'=>$this->input->post('gender'),
		'payment'=>$this->input->post('payment')
		);
		
				$insert=$this->db->insert('lab',$userData);
		
		
	if($insert)
				{
					// Set the response and exit
					$this->response([
						'status' => TRUE,
						'message' => 'The user has been added successfully.'
					], REST_Controller::HTTP_OK);
				}
				else
				{
					// Set the response and exit
					$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
				}
	
	
	
        
		
    }
	
	public function insurance_post()  
    {  
		 $this->load->view('insurance'); 
		
			   $userData = array( 'amount' => $this->input->post('amount'),
			    'pet' => $this->input->post('pet'),
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
			
			
				$insert=$this->db->insert('insurance',$userData);
		
				
	if($insert)
				{
					// Set the response and exit
					$this->response([
						'status' => TRUE,
						'message' => 'The user has been added successfully.'
					], REST_Controller::HTTP_OK);
				}
				else
				{
					// Set the response and exit
					$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
				}
	
	
	
        
		
    }
	public function vaccine()  
    {  
				 $this->load->view('vaccine'); 
		
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
			  
				
				$insert=$this->db->insert('vaccine',$userData);
				
				
				
				if($insert)
				{
					// Set the response and exit
					$this->response([
						'status' => TRUE,
						'message' => 'The user has been added successfully.'
					], REST_Controller::HTTP_OK);
				}
				else
				{
					// Set the response and exit
					$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
				}
		
				
		  }
	
	
	
		
       
		
 
	
	
	
		
}
		
		

		
		

		
   