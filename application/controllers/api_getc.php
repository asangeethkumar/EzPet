<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

// Load the Rest Controller library

require APPPATH . '/libraries/REST_Controller.php';
   use Restserver\Libraries\REST_Controller;

class api_getc extends REST_Controller 
{
	public function __construct() 
	{ 
        parent::__construct();
		
		// Load the user EzPet_model
        $this->load->model('EzPet_model');
    }
   
	public function getc_post()  
    {  
							  $this->load->view('getc'); 
							  $email=strip_tags($this->input->post('email'));
							  $em=$this->EzPet_model->mails($email);
											if($em==false)
											{
													// Set the response and exit
													//BAD_REQUEST (400) being the HTTP response code
													$this->response([
															'status' => false,
															'message' => 'ERROR-invalid email'
														], REST_Controller::HTTP_BAD_REQUEST);
													//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
											}
							$phone=$this->input->post('phone');
							$ph=$this->EzPet_model->number($phone);
											if($ph==false)
											{
													// Set the response and exit
													//BAD_REQUEST (400) being the HTTP response code
													$this->response([
															'status' => false,
															'message' => 'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
														], REST_Controller::HTTP_BAD_REQUEST);
													//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
											}
							  $pet = $this->input->post('pet');
							  $petname = strip_tags($this->input->post('petname'));
							  $name=$this->EzPet_model->name($petname);
							  if($name==false)
							  {
								// Set the response and exit
								//BAD_REQUEST (400) being the HTTP response code
								$this->response([
										'status' => false,
										'message' => 'ERROR-invalid name(digits and special characters are not allowed)'
									], REST_Controller::HTTP_BAD_REQUEST);
								//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
							   }
							  $gender = $this->input->post('gender');
							  $petage = $this->input->post('petage');
							  $question = $this->input->post('question');
							  $upload = $this->input->post('upload');
							  $category = $this->input->post('category');
								  
								if(!empty($em) &&  !empty($ph) &&  !empty($pet) && !empty($name) && !empty($gender) && !empty($petage) && !empty($question)&& !empty($upload)&& !empty($category))
								{
								  
								  
										  $userData = array(
												'email' => $em,
												'phone' => $ph,
												'pet' =>$pet,
												'petname' => $name,
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
															'message' => 'Data is submitted successfully.'
														], REST_Controller::HTTP_OK);
													}
													/*else
													{
														// Set the response and exit
														$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
													}*/
								}
								else
								{
										// Set the response and exit
									$this->response("please fill all fields.",  REST_Controller::HTTP_BAD_REQUEST);
								}
								
								
								
													
	}
		
		
    
		
		
		
		
	public function vitamins_post()  
	{ 
									$this->load->view('vitamins'); 
							//$data = $userData = array();
							 // if($this->input->post('signupSubmit')){
								  // $userData = array( 
									$first_name=$this->input->post('first_name');
									$name=$this->EzPet_model->name($first_name);
											if($name==false)
											{
													// Set the response and exit
													//BAD_REQUEST (400) being the HTTP response code
													$this->response([
															'status' => false,
															'message' => 'ERROR-invalid  name(digits and special characters are not allowed)'
														], REST_Controller::HTTP_BAD_REQUEST);
													//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
											}
									$email=strip_tags($this->input->post('email'));
									$em=$this->EzPet_model->mails($email);
											if($em==false)
											{
													// Set the response and exit
													//BAD_REQUEST (400) being the HTTP response code
													$this->response([
															'status' => false,
															'message' => 'ERROR-invalid email'
														], REST_Controller::HTTP_BAD_REQUEST);
													//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
											}
									$phone=$this->input->post('phone');
									$ph=$this->EzPet_model->number($phone);
											if($ph==false)
											{
													// Set the response and exit
													//BAD_REQUEST (400) being the HTTP response code
													$this->response([
															'status' => false,
															'message' => 'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
														], REST_Controller::HTTP_BAD_REQUEST);
													//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
											}
									$vitamin=$this->input->post('vitamin');
									$upload=$this->input->post('upload');
									$quantity=$this->input->post('quantity');
									$delivery=$this->input->post('delivery');
									$address=$this->input->post('address');
									$payment=$this->input->post('payment');
								  // );
									if(!empty($name) && !empty($em) && !empty($ph) && !empty($vitamin)&& !empty($quantity)&& !empty($address) && !empty($delivery) && !empty($payment) )
									{
								  
							  
												$userData = array(
														'first_name' => $name,
														'email' => $em,
														'phone' => $ph,
														'vitamin'=>$vitamin,
														'quantity'=>$quantity,
														'address'=>$address,
														'delivery'=>$delivery,
														'payment'=>$payment
													);
										//print  $userData;
										//var_dump($userData);
										$insert=$this->db->insert('vitamin',$userData);
										  if($insert)
										{
											// Set the response and exit
											$this->response([
												'status' => TRUE,
												'message' => 'Data is submitted successfully.'
											], REST_Controller::HTTP_OK);
										}
									/*	else
										{
											// Set the response and exit
											$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
										}*/
									}
									else
									{
										// Set the response and exit
										$this->response("please fill all fields.",  REST_Controller::HTTP_BAD_REQUEST);
									}
									
    }
		
				
       // $this->load->view('vitamins'); 
		







	public function food_post()

	{
		
						$this->load->view('food');
			  // $userData = array( 
						$first_name =$this->input->post('first_name');
						$name=$this->EzPet_model->name($first_name);
						if($name==false)
						{
								// Set the response and exit
								//BAD_REQUEST (400) being the HTTP response code
								$this->response([
										'status' => false,
										'message' => 'ERROR-invalid name(digits and special characters are not allowed)'
									], REST_Controller::HTTP_BAD_REQUEST);
								//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
						}
						$email= strip_tags($this->input->post('email'));
						$em=$this->EzPet_model->mails($email);
						if($em==false)
						{
								// Set the response and exit
								//BAD_REQUEST (400) being the HTTP response code
								$this->response([
										'status' => false,
										'message' => 'ERROR-invalid email',
									], REST_Controller::HTTP_BAD_REQUEST);
								//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
						}
						$phone=$this->input->post('phone');
						$ph=$this->EzPet_model->number($phone);
						if($ph==false)
						{
								// Set the response and exit
								//BAD_REQUEST (400) being the HTTP response code
								$this->response([
										'status' => false,
										'message' => 'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
									], REST_Controller::HTTP_BAD_REQUEST);
								//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
						}
						$age = $this->input->post('age');
					    $address= $this->input->post('address');
						$product=$this->input->post('product');
						$range=$this->input->post('range');
						$pet=$this->input->post('pet');
						$brand =$this->input->post('brand');
						$delivery =$this->input->post('delivery');
						$payment=$this->input->post('payment');
			 //  );
						if(!empty($name) && !empty($em) && !empty($ph) && !empty($age)&& !empty($address)&& !empty($product) && !empty($range) && !empty($pet) && !empty($brand) && !empty($delivery) && !empty($payment))
						{
			 
			 
			 
							 
										$userData = array(
												'first_name' => $name,
												'email' => $em,
												'phone' => $ph,
												'age'=>$age,
												'address'=>$address,
												'product'=>$product,
												'range'=>$range,
												'pet'=>$pet,
												'brand'=>$brand,
												'delivery'=>$delivery,
												'payment'=>$payment
											);
								
								
											$insert=$this->db->insert('food',$userData);
									
								
									   if($insert)
											{
												// Set the response and exit
												$this->response([
													'status' => TRUE,
													'message' => 'Data is submitted successfully.'
												], REST_Controller::HTTP_OK);
											}
											else
											{
												// Set the response and exit
												$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
											}
						}
						else
						{
							// Set the response and exit
										$this->response("please fill all fields.",  REST_Controller::HTTP_BAD_REQUEST);
						}
						
	
		  
	
	}
	public function otc_post()
	{
						$this->load->view('otc');
					
						   //$userData = array( 
						   $first_name=$this->input->post('first_name');
						   $name=$this->EzPet_model->name($first_name);
							if($name==false)
							{
									// Set the response and exit
									//BAD_REQUEST (400) being the HTTP response code
									$this->response([
											'status' => false,
											'message' => 'ERROR-invalid name(digits and special characters are not allowed)'
										], REST_Controller::HTTP_BAD_REQUEST);
									//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
							}
						   $email=strip_tags($this->input->post('email'));
						   $em=$this->EzPet_model->mails($email);
							if($em==false)
							{
									// Set the response and exit
									//BAD_REQUEST (400) being the HTTP response code
									$this->response([
											'status' => false,
											'message' => 'ERROR-invalid email'
										], REST_Controller::HTTP_BAD_REQUEST);
									//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
							}
						   $phone=$this->input->post('phone');
						   $ph=$this->EzPet_model->number($phone);
							if($ph==false)
							{
									// Set the response and exit
									//BAD_REQUEST (400) being the HTTP response code
									$this->response([
											'status' => false,
											'message' => 'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
										], REST_Controller::HTTP_BAD_REQUEST);
									//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
							}
						   $medicine=$this->input->post('medicine');
						   $quantity=$this->input->post('quantity');
						   $quant=$this->input->post('quant');
						   $delivery =$this->input->post('delivery');
						   $address= $this->input->post('address');
						   $payment = $this->input->post('payment');
			  // );
							if(!empty($name) && !empty($em) && !empty($ph) && !empty($medicine)&& !empty($quantity)  && !empty($address) && !empty($delivery) && !empty($payment) )
							{
								  
			  
								  $userData = array(
										'first_name' => $name,
										'email' => $em,
										'phone' => $ph,
										'medicine'=>$medicine,
										'quantity'=>$quantity,
										'quant'=>$quant,
										'delivery'=>$delivery,
										'address'=>$address,
										'payment'=>$payment
									);
								  
									
								$insert=	$this->db->insert('otc',$userData);
								  if($insert)
									{
										// Set the response and exit
										$this->response([
											'status' => TRUE,
											'message' => 'Data is submitted successfully.'
										], REST_Controller::HTTP_OK);
									}
									else
									{
										// Set the response and exit
										$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
									}
							}
							else
							{
							// Set the response and exit
										$this->response("please fill all fields.",  REST_Controller::HTTP_BAD_REQUEST);
							}
							
					
	
	}
	
	public function rx_post()
	{
						   $this->load->view('rx');
						   $first_name=$this->input->post('first_name');
						   $name=$this->EzPet_model->name($first_name);
							if($name==false)
							{
									// Set the response and exit
									//BAD_REQUEST (400) being the HTTP response code
									$this->response([
											'status' => false,
											'message' => 'ERROR-invalid name(digits and special characters are not allowed)'
										], REST_Controller::HTTP_BAD_REQUEST);
									//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
							}
						   $email=strip_tags($this->input->post('email'));
						   $em=$this->EzPet_model->mails($email);
							if($em==false)
							{
									// Set the response and exit
									//BAD_REQUEST (400) being the HTTP response code
									$this->response([
											'status' => false,
											'message' => 'ERROR-invalid email'
										], REST_Controller::HTTP_BAD_REQUEST);
									//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
							}
						   $phone=$this->input->post('phone');
						   $ph=$this->EzPet_model->number($phone);
							if($ph==false)
							{
									// Set the response and exit
									//BAD_REQUEST (400) being the HTTP response code
									$this->response([
											'status' => false,
											'message' => 'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
										], REST_Controller::HTTP_BAD_REQUEST);
									//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
							}
						 //  $medicine=$this->input->post('medicine');
						   $quantity=$this->input->post('quantity');
						   $quant=$this->input->post('quant');
						   $delivery =$this->input->post('delivery');
						   $upload=$this->input->post('upload');
						  $address= $this->input->post('address');
						   $payment = $this->input->post('payment');
			  // );
							if(!empty($name) && !empty($em) && !empty($ph) && !empty($upload)&& !empty($quantity) && !empty($quant) && !empty($address) && !empty($delivery) && !empty($payment) )
							{
			  
								  $userData = array(
										'first_name' => $name,
										'email' => $em,
										'phone' => $ph,
										//'medicine'=>$medicine,
										'quantity'=>$quantity,
										'quant'=>$quant,
										'upload'=>$upload,
										'delivery'=>$delivery,
										'address'=>$address,
										'payment'=>$payment
									);
								  
					  
									
									$insert=	$this->db->insert('rx',$userData);
									 
									 if($insert)
									{
										// Set the response and exit
										$this->response([
											'status' => TRUE,
											'message' => 'Data is submitted successfully.'
										], REST_Controller::HTTP_OK);
									}
									else
									{
										// Set the response and exit
										$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
									}
							}
							else
							{
							// Set the response and exit
										$this->response("please fill all fields.",  REST_Controller::HTTP_BAD_REQUEST);
							}
							
			
		
	}
	
	public function diet_post()  
    {  
						 $this->load->view('diet'); 
						  // $userData = array( 
						 $first_name=$this->input->post('first_name');
						 $name=$this->EzPet_model->name($first_name);
							if($name==false)
							{
									// Set the response and exit
									//BAD_REQUEST (400) being the HTTP response code
									$this->response([
											'status' => false,
											'message' => 'ERROR-invalid name(digits and special characters are not allowed)'
										], REST_Controller::HTTP_BAD_REQUEST);
									//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
							}
						 $email=strip_tags($this->input->post('email'));
						  $em=$this->EzPet_model->mails($email);
							if($em==false)
							{
									// Set the response and exit
									//BAD_REQUEST (400) being the HTTP response code
									$this->response([
											'status' => false,
											'message' => 'ERROR-invalid email',
										], REST_Controller::HTTP_BAD_REQUEST);
									//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
							}
						 $phone=$this->input->post('phone');
						  $ph=$this->EzPet_model->number($phone);
							if($ph==false)
							{
									// Set the response and exit
									//BAD_REQUEST (400) being the HTTP response code
									$this->response([
											'status' => false,
											'message' => 'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
										], REST_Controller::HTTP_BAD_REQUEST);
									//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
							}
						 $pet=$this->input->post('pet');
						 $petname =$this->input->post('petname');
						  $pname=$this->EzPet_model->name($petname);
							if($pname==false)
							{
									// Set the response and exit
									//BAD_REQUEST (400) being the HTTP response code
									$this->response([
											'status' => false,
											'message' =>  'ERROR-invalid pet name(digits and special characters are not allowed)'
										], REST_Controller::HTTP_BAD_REQUEST);
									//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
							}
						 $gender=$this->input->post('gender');
						 $problem=$this->input->post('problem');
						 $a=$this->input->post('a');
						 $b=$this->input->post('b');
						 $c=$this->input->post('c');
						 $d=$this->input->post('d');
						 $e=$this->input->post('e');
						 $f=$this->input->post('f');
						 $g= $this->input->post('g');
						 $h=$this->input->post('h');
						 $i=$this->input->post('i');
					     $j =$this->input->post('j');
						 $k=$this->input->post('k');
						 $l=$this->input->post('l');
			//   );
			
				if(!empty($name) && !empty($em) && !empty($ph)  && !empty($pet)  && !empty($pname)  && !empty($gender) && !empty($problem) &&  !empty($a) &&  !empty($b) &&  !empty($c) &&  !empty($d) &&  !empty($e) &&  !empty($f) &&  !empty($g) &&  !empty($h))
				{
			
			
										
										 $userData = array(
													'first_name' => $name,
													'email' => $em,
													'phone' => $ph,
													'pet' =>$pet,
													'petname' => $pname,
													'gender' => $gender,
													'problem' => $problem,
													'a' =>$a,
													'b' =>$b,
													'c' =>$c,
													'd' =>$d,
													'e' =>$e,
													'f' =>$f,
													'g' =>$g,
													'h' =>$h,
													'i' =>$i,
													'j' =>$j,
													'k' =>$k,
													'l' =>$l
												);
							  
								
											$insert=$this->db->insert('diet',$userData);
											 if($insert)
											{
												// Set the response and exit
												$this->response([
													'status' => TRUE,
													'message' => 'Data is submitted successfully.'
												], REST_Controller::HTTP_OK);
											}
											else
											{
												// Set the response and exit
												$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
											}
											
				}
				else
				{
							// Set the response and exit
							$this->response("please fill all fields.",  REST_Controller::HTTP_BAD_REQUEST);
				}
					
   
		
    } 
	
	public function treat_post()
	{
								$this->load->view('treat');
							  // $userData = array( 
							   $first_name=$this->input->post('first_name');
								$name=$this->EzPet_model->name($first_name);
								if($name==false)
								{
													// Set the response and exit
													//BAD_REQUEST (400) being the HTTP response code
									$this->response([
											'status' => false,
											'message' => 'ERROR-invalid name(digits and special characters are not allowed)'
										], REST_Controller::HTTP_BAD_REQUEST);
													//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
								}
							   $email=strip_tags($this->input->post('email'));
								$em=$this->EzPet_model->mails($email);
								if($em==false)
								{
													// Set the response and exit
													//BAD_REQUEST (400) being the HTTP response code
									$this->response([
												'status' => false,
												'message' => 'ERROR-invalid email'
												], REST_Controller::HTTP_BAD_REQUEST);
													//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
								}
							   $phone=$this->input->post('phone');
								$ph=$this->EzPet_model->number($phone);
											if($ph==false)
											{
													// Set the response and exit
													//BAD_REQUEST (400) being the HTTP response code
													$this->response([
															'status' => false,
															'message' => 'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
														], REST_Controller::HTTP_BAD_REQUEST);
													//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
											}
							   $pet=$this->input->post('pet');
							   $age=$this->input->post('age');
							   $treat=$this->input->post('treat');
							   $choose=$this->input->post('choose');
							   $quantity=$this->input->post('quantity');
							   $delivery=$this->input->post('delivery');
							   $address=$this->input->post('address');
							   $payment =$this->input->post('payment');
							   //);
							  if(!empty($name) && !empty($em) && !empty($ph)  && !empty($pet)  && !empty($treat)  && !empty($age) && !empty($choose)&& !empty($quantity) && !empty($address) && !empty($delivery) && !empty($payment) )
							  {
										
												  $userData = array(
														'first_name' => $name,
														'email' => $em,
														'phone' => $ph,
														//'medicine'=>$medicine,
														'pet'=>$pet,
														'age'=>$age,
														'treat'=>$treat,
														'choose'=>$choose,
														'quantity'=>$quantity,
														'delivery'=>$delivery,
														'address'=>$address,
														'payment'=>$payment
													);
										$insert=$this->db->insert('treat',$userData);
								
										if($insert)
											{
												// Set the response and exit
												$this->response([
													'status' => TRUE,
													'message' => 'Data is submitted successfully.'
												], REST_Controller::HTTP_OK);
											}
											else
											{
												// Set the response and exit
												$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
											}
							  }
							  else
							{
							// Set the response and exit
										$this->response("please fill all fields.",  REST_Controller::HTTP_BAD_REQUEST);
							}
							  
							  
							  
	}
	
	
	public function dconsult_post()  
    {  
									  $this->load->view('dconsult'); 
									//$userData = array(
									$date=$this->input->post('date');
									$slot=$this->input->post('slot');
									$confirm=$this->input->post('confirm');
									$con=$this->EzPet_model->name($confirm);
									if($con==false)
									{
											// Set the response and exit
											//BAD_REQUEST (400) being the HTTP response code
											$this->response([
													'status' => false,
													'message' => 'ERROR1-invalid confirm '
												], REST_Controller::HTTP_BAD_REQUEST);
											//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
									}
									 $first_name=$this->input->post('first_name');
									$name=$this->EzPet_model->name($first_name);
									if($name==false)
									{
														// Set the response and exit
														//BAD_REQUEST (400) being the HTTP response code
										$this->response([
												'status' => false,
												'message' => 'ERROR-invalid name(digits and special characters are not allowed)'
											], REST_Controller::HTTP_BAD_REQUEST);
														//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
									}
									$email=$this->input->post('email');
									$em=$this->EzPet_model->mails($email);
											if($em==false)
											{
													// Set the response and exit
													//BAD_REQUEST (400) being the HTTP response code
													$this->response([
															'status' => false,
															'message' => 'ERROR-invalid email'
														], REST_Controller::HTTP_BAD_REQUEST);
													//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
											}
									$phone=$this->input->post('phone');
									$ph=$this->EzPet_model->number($phone);
											if($ph==false)
											{
													// Set the response and exit
													//BAD_REQUEST (400) being the HTTP response code
													$this->response([
															'status' => false,
															'message' => 'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
														], REST_Controller::HTTP_BAD_REQUEST);
													//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
											}
									$pet=$this->input->post('pet');
									$petname=$this->input->post('petname');
									$pname=$this->EzPet_model->name($petname);
									if($pname==false)
									{
														// Set the response and exit
														//BAD_REQUEST (400) being the HTTP response code
										$this->response([
												'status' => false,
												'message' => 'ERROR-invalid name(digits and special characters are not allowed)'
											], REST_Controller::HTTP_BAD_REQUEST);
														//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
									}
									$gender=$this->input->post('gender');
									$question=$this->input->post('question');
									$location=$this->input->post('location');
									$payment=$this->input->post('payment');
									//);
									
									 if(!empty($date) && !empty($slot) && !empty($con)  && !empty($name) && !empty($em) && !empty($ph)  && !empty($pet)  && !empty($pname)  && !empty($gender) && !empty($question)&& !empty($location) &&  !empty($payment) )
									{
									
									
												
												$userData = array(
															'date' =>$date,
															'slot' =>$slot,
															'confirm' =>$con,
															'first_name' =>$name,
															'email' =>$em,
															'phone'=>$ph,
															'pet' =>$pet,
															'petname' => $pname,
															'gender' => $gender,
															'question' =>$question,
															'location' =>  $location,
															'payment' => $payment
														);
												
														$insert=$this->db->insert('dconsult',$userData);
														if($insert)
														{
															// Set the response and exit
															$this->response([
																'status' => TRUE,
																'message' => 'Data is submitted successfully.'
															], REST_Controller::HTTP_OK);
														}
														else
														{
															// Set the response and exit
															$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
														}
									}
								    else
									{
									// Set the response and exit
												$this->response("please fill all fields.",  REST_Controller::HTTP_BAD_REQUEST);
									}
		
      
		
    } 
	
	public function dental_post()
	{
										   $this->load->view('dental');
										  // $userData = array(
										   $first_name=$this->input->post('first_name');
										   $name=$this->EzPet_model->name($first_name);
											if($name==false)
											{
													// Set the response and exit
													//BAD_REQUEST (400) being the HTTP response code
													$this->response([
															'status' => false,
															'message' => 'ERROR-invalid name(digits and special characters are not allowed)'
														], REST_Controller::HTTP_BAD_REQUEST);
													//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
											}
										   $email=strip_tags($this->input->post('email'));
											$em=$this->EzPet_model->mails($email);
											if($em==false)
											{
													// Set the response and exit
													//BAD_REQUEST (400) being the HTTP response code
													$this->response([
															'status' => false,
															'message' => 'ERROR-invalid email'
														], REST_Controller::HTTP_BAD_REQUEST);
													//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
											}
										   $phone=$this->input->post('phone');
										   $ph=$this->EzPet_model->number($phone);
											if($ph==false)
											{
													// Set the response and exit
													//BAD_REQUEST (400) being the HTTP response code
													$this->response([
															'status' => false,
															'message' => 'ERROR4-invalid phone numebr'
														], REST_Controller::HTTP_BAD_REQUEST);
													//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
											}
										   $pet=$this->input->post('pet');
										   $gender=$this->input->post('gender');
										   $choose=$this->input->post('choose');
										   $quantity=$this->input->post('quantity');
										   $delivery=$this->input->post('delivery');
										   $address=$this->input->post('address');
										   $payment=$this->input->post('payment');
										  // );
											
											if(!empty($name) && !empty($em) && !empty($ph) && !empty($pet) && !empty($gender) && !empty($choose)&& !empty($quantity)&& !empty($address) && !empty($delivery) && !empty($payment) )
											{
											
											
														
													  $userData = array(
															'first_name' => $name,
															'email' => $em,
															'phone' => $ph,
															//'medicine'=>$medicine,
															'pet'=>$pet,
															'gender'=>$gender,
															'choose'=>$choose,
															'quantity'=>$quantity,
															'delivery'=>$delivery,
															'address'=>$address,
															'payment'=>$payment
														);
															
															$insert=$this->db->insert('dental',$userData);
															if($insert)
															{
																// Set the response and exit
																$this->response([
																	'status' => TRUE,
																	'message' => 'Data is submitted successfully.'
																], REST_Controller::HTTP_OK);
															}
															else
															{
																// Set the response and exit
																$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
															}
																
											}
											else
											{
											// Set the response and exit
														$this->response("please fill all fields.",  REST_Controller::HTTP_BAD_REQUEST);
											}
							
	
	
	}
	
		public function mypres_post()
	{
						$this->load->view('mypres');
			   //$userData = array( 
			    $first_name=$this->input->post('first_name');
				$name=$this->EzPet_model->name($first_name);
				if($name==false)
				{
						// Set the response and exit
						//BAD_REQUEST (400) being the HTTP response code
						$this->response([
								'status' => false,
								'message' => 'ERROR-invalid name(digits and special characters are not allowed)'
							], REST_Controller::HTTP_BAD_REQUEST);
						//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
				}
			    $email=strip_tags($this->input->post('email'));
				$em=$this->EzPet_model->mails($email);
				if($em==false)
				{
						// Set the response and exit
						//BAD_REQUEST (400) being the HTTP response code
						$this->response([
								'status' => false,
								'message' => 'ERROR-invalid email',
							], REST_Controller::HTTP_BAD_REQUEST);
						//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
				}
			    $phone=$this->input->post('phone');
				$ph=$this->EzPet_model->number($phone);
				if($ph==false)
				{
						// Set the response and exit
						//BAD_REQUEST (400) being the HTTP response code
						$this->response([
								'status' => false,
								'message' => 'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
							], REST_Controller::HTTP_BAD_REQUEST);
						//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
				}
				$pet=$this->input->post('pet');
				$petname=$this->input->post('petname');
				$pname=$this->EzPet_model->name($petname);
				if($pname==false)
				{
						// Set the response and exit
						//BAD_REQUEST (400) being the HTTP response code
						$this->response([
								'status' => false,
								'message' => 'ERROR-invalid pet name(digits and special characters are not allowed)'
							], REST_Controller::HTTP_BAD_REQUEST);
						//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
				}
				$age=$this->input->post('age');
				$problem=$this->input->post('problem');
				$a=$this->input->post('a');
				$b=$this->input->post('b');
			    $c=$this->input->post('c');
				$d=$this->input->post('d');
				$e=$this->input->post('e');
				$f=$this->input->post('f');
				$g =$this->input->post('g');
				$h=$this->input->post('h');
				$i=$this->input->post('i');
				$j =$this->input->post('j');
				$k=$this->input->post('k');
				$l =$this->input->post('l');
			  // );
			  
			  
			   if(!empty($name) && !empty($em) && !empty($ph)  && !empty($pet)  && !empty($pname)  && !empty($age) && !empty($problem) &&  !empty($a) &&  !empty($b) &&  !empty($c) &&  !empty($d) &&  !empty($e) &&  !empty($f) &&  !empty($g) &&  !empty($h))
				{
			  
			  
										  
										  $userData = array(
																'first_name' => $name,
																'email' => $em,
																'phone' => $ph,
																'pet' =>$pet,
																'petname' => $pname,
																'age' => $age,
																'problem' => $problem,
																'a' =>$a,
																'b' =>$b,
																'c' =>$c,
																'd' =>$d,
																'e' =>$e,
																'f' =>$f,
																'g' =>$g,
																'h' =>$h,
																'i' =>$i,
																'j' =>$j,
																'k' =>$k,
																'l' =>$l
															);
											
											$insert=$this->db->insert('mypres',$userData);
											if($insert)
											{
												// Set the response and exit
												$this->response([
													'status' => TRUE,
													'message' => 'Data is submitted successfully.'
												], REST_Controller::HTTP_OK);
											}
											else
											{
												// Set the response and exit
												$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
											}
											
				}
	
									
				else
				{
											// Set the response and exit
					$this->response("please fill all fields.",  REST_Controller::HTTP_BAD_REQUEST);
				}							
						
											
		
				

	}
	public function schedule_post()  
    {  
	
		  $this->load->view('schedule'); 
		//$userData = array(
		$date=$this->input->post('date');
		$slot=$this->input->post('slot');
		$confirm=$this->input->post('confirm');
		$con=$this->EzPet_model->name($confirm);
		if($con==false)
		{
				// Set the response and exit
				//BAD_REQUEST (400) being the HTTP response code
				$this->response([
						'status' => false,
						'message' => 'ERROR1-invalid confirm'
					], REST_Controller::HTTP_BAD_REQUEST);
				//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
		}
		$first_name = $this->input->post('first_name');
		$name=$this->EzPet_model->name($first_name);
		if($name==false)
		{
				// Set the response and exit
				//BAD_REQUEST (400) being the HTTP response code
				$this->response([
						'status' => false,
						'message' => 'ERROR-invalid name(digits and special characters are not allowed)'
					], REST_Controller::HTTP_BAD_REQUEST);
				//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
		}
		$email=$this->input->post('email');
		$em=$this->EzPet_model->mails($email);
		if($em==false)
		{
				// Set the response and exit
				//BAD_REQUEST (400) being the HTTP response code
				$this->response([
						'status' => false,
						'message' => 'ERROR-invalid email'
					], REST_Controller::HTTP_BAD_REQUEST);
				//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
		}
		$phone=$this->input->post('phone');
		$ph=$this->EzPet_model->number($phone);
		if($ph==false)
		{
				// Set the response and exit
				//BAD_REQUEST (400) being the HTTP response code
				$this->response([
						'status' => false,
						'message' => 'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
					], REST_Controller::HTTP_BAD_REQUEST);
				//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
		}
		
		$pet=$this->input->post('pet');
		$petname=$this->input->post('petname');
		$pname=$this->EzPet_model->name($petname);
		if($pname==false)
		{
				// Set the response and exit
				//BAD_REQUEST (400) being the HTTP response code
				$this->response([
						'status' => false,
						'message' => 'ERROR-invalid name(digits and special characters are not allowed)'
					], REST_Controller::HTTP_BAD_REQUEST);
				//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
		}
		
		$gender=$this->input->post('gender');
		$concern=$this->input->post('concern');

		$location=$this->input->post('location');
		$payment=$this->input->post('payment');
	//	);
	
	
				 if(!empty($date) && !empty($slot) && !empty($con)  && !empty($name) && !empty($em) && !empty($ph)  && !empty($pet)  && !empty($pname)  && !empty($gender) && !empty($location) &&  !empty($payment) )
				{
									
	
	
						$userData = array(
										'date' =>$date,
										'slot' =>$slot,
										'confirm' =>$con,
										'first_name' =>$name,
										'email' =>$em,
										'phone'=>$ph,
										'pet' =>$pet,
										'petname' => $pname,
										'gender' => $gender,
										'concern' =>$concern ,
										'location' =>  $location,
										'payment' => $payment
									);
							
									$insert=$this->db->insert('schedule',$userData);
							
									
						  
							if($insert)
									{
										// Set the response and exit
										$this->response([
											'status' => TRUE,
											'message' => 'Data is submitted successfully.'
										], REST_Controller::HTTP_OK);
									}
								/*	else
									{
										// Set the response and exit
										$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
									}*/
									
									
				}
	
									
				else
				{
											// Set the response and exit
					$this->response("please fill all fields.",  REST_Controller::HTTP_BAD_REQUEST);
				}
															
		
							
    } 
	
	
	 public function ultra_post()  {
      
			$this->load->view('ultra'); 
		//$userData = array(
		$check=$this->input->post('check');
		$dname=$this->input->post('dname');
		$drname=$this->EzPet_model->name($dname);
		if($drname==false)
		{
				// Set the response and exit
				//BAD_REQUEST (400) being the HTTP response code
				$this->response([
						'status' => false,
						'message' => 'ERROR-invalid DR name(digits and special characters are not allowed)'
					], REST_Controller::HTTP_BAD_REQUEST);
				//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
		}
		$name = $this->input->post('name');
		$cname=$this->EzPet_model->name($name);
		if($cname==false)
		{
				// Set the response and exit
				//BAD_REQUEST (400) being the HTTP response code
				$this->response([
						'status' => false,
						'message' => 'ERROR-invalid name(digits and special characters are not allowed)'
					], REST_Controller::HTTP_BAD_REQUEST);
				//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
		}
		$phone=$this->input->post('phone');
		$ph=$this->EzPet_model->number($phone);
		if($ph==false)
		{
				// Set the response and exit
				//BAD_REQUEST (400) being the HTTP response code
				$this->response([
						'status' => false,
						'message' => 'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
					], REST_Controller::HTTP_BAD_REQUEST);
				//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
		}
		
		 $location = $this->input->post('location');
		$pet=$this->input->post('pet');
		// $petage = $this->input->post('petage');
		$gender=$this->input->post('gender');
		$payment=$this->input->post('payment');
		//);
		 if(!empty($check)  && !empty($drname) && !empty($cname) && !empty($ph)  && !empty($pet)    && !empty($gender) && !empty($location) &&  !empty($payment) )
		{
		
		
		
									
									$userData = array(
												'check' =>$check,
												'dname' =>$drname,
												'name' =>$cname,
												'phone'=>$ph,
												'location' =>$location,
												'pet' => $pet,
												//'petage' => $petage,
												'gender' => $gender,
												'payment' => $payment
											);
											$insert=$this->db->insert('ultra',$userData);
									
									
								if($insert)
											{
												// Set the response and exit
												$this->response([
													'status' => TRUE,
													'message' => 'Data is submitted successfully.'
												], REST_Controller::HTTP_OK);
											}
											else
											{
												// Set the response and exit
												$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
											}
								
		}
	
									
				else
				{
											// Set the response and exit
					$this->response("please fill all fields.",  REST_Controller::HTTP_BAD_REQUEST);
				}
	
        
		
    }
	
	 public function genetic_post()  {
      
			$this->load->view('genetic'); 
		
		//$userData = array(
		$check=$this->input->post('check');
		$dname=$this->input->post('dname');
		$drname=$this->EzPet_model->name($dname);
		if($drname==false)
		{
				// Set the response and exit
				//BAD_REQUEST (400) being the HTTP response code
				$this->response([
						'status' => false,
						'message' => 'ERROR-invalid DR name(digits and special characters are not allowed)'
					], REST_Controller::HTTP_BAD_REQUEST);
				//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
		}
		$name = $this->input->post('name');
		$cname=$this->EzPet_model->name($name);
		if($cname==false)
		{
				// Set the response and exit
				//BAD_REQUEST (400) being the HTTP response code
				$this->response([
						'status' => false,
						'message' => 'ERROR-invalid name(digits and special characters are not allowed)'
					], REST_Controller::HTTP_BAD_REQUEST);
				//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
		}
		$phone=$this->input->post('phone');
		$ph=$this->EzPet_model->number($phone);
		if($ph==false)
		{
				// Set the response and exit
				//BAD_REQUEST (400) being the HTTP response code
				$this->response([
						'status' => false,
						'message' => 'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
					], REST_Controller::HTTP_BAD_REQUEST);
				//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
		}
		
		 $location = $this->input->post('location');
		$pet=$this->input->post('pet');
		 $petage = $this->input->post('petage');
		$gender=$this->input->post('gender');
		$payment=$this->input->post('payment');
		//);
		
		
				 if(!empty($check)  && !empty($drname) && !empty($cname) && !empty($ph)  && !empty($pet)  &&  !empty($petage)  && !empty($gender) && !empty($location) &&  !empty($payment) )
				{
				
		
		
									
									$userData = array(
												'check' =>$check,
												'dname' =>$drname,
												'name' =>$cname,
												'phone'=>$ph,
												'location' =>$location,
												'pet' => $pet,
												'petage' => $petage,
												'gender' => $gender,
												'payment' => $payment
											);
											$insert=$this->db->insert('genetic',$userData);
									
									
								if($insert)
											{
												// Set the response and exit
												$this->response([
													'status' => TRUE,
													'message' => 'Data is submitted successfully.'
												], REST_Controller::HTTP_OK);
											}
											/*else
											{
												// Set the response and exit
												$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
											}*/
								
				}
	
									
				else
				{
											// Set the response and exit
					$this->response("please fill all fields.",  REST_Controller::HTTP_BAD_REQUEST);
				}
				
	
        
		
    }
	 public function lab_post() 
	 {
      
			$this->load->view('lab'); 
			//$userData = array(
		$check=$this->input->post('check');
		$dname=$this->input->post('dname');
		$drname=$this->EzPet_model->name($dname);
		if($drname==false)
		{
				// Set the response and exit
				//BAD_REQUEST (400) being the HTTP response code
				$this->response([
						'status' => false,
						'message' => 'ERROR-invalid DR name(digits and special characters are not allowed)'
					], REST_Controller::HTTP_BAD_REQUEST);
				//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
		}
		$name = $this->input->post('name');
		$cname=$this->EzPet_model->name($name);
		if($cname==false)
		{
				// Set the response and exit
				//BAD_REQUEST (400) being the HTTP response code
				$this->response([
						'status' => false,
						'message' => 'ERROR-invalid name(digits and special characters are not allowed)'
					], REST_Controller::HTTP_BAD_REQUEST);
				//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
		}
		$phone=$this->input->post('phone');
		$ph=$this->EzPet_model->number($phone);
		if($ph==false)
		{
				// Set the response and exit
				//BAD_REQUEST (400) being the HTTP response code
				$this->response([
						'status' => false,
						'message' => 'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
					], REST_Controller::HTTP_BAD_REQUEST);
				//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
		}
		
		 $location = $this->input->post('location');
		$pet=$this->input->post('pet');
		 $petage = $this->input->post('petage');
		$gender=$this->input->post('gender');
		$payment=$this->input->post('payment');
		//);
		
		
		
				 if(!empty($check)  && !empty($drname) && !empty($cname) && !empty($ph)  && !empty($pet)  &&  !empty($petage)  && !empty($gender) && !empty($location) &&  !empty($payment) )
				{
				
		
		
											
											$userData = array(
														'check' =>$check,
														'dname' =>$drname,
														'name' =>$cname,
														'phone'=>$ph,
														'location' =>$location,
														'pet' => $pet,
														'petage' => $petage,
														'gender' => $gender,
														'payment' => $payment
													);
											
											
													$insert=$this->db->insert('lab',$userData);
											
											
													if($insert)
													{
														// Set the response and exit
														$this->response([
															'status' => TRUE,
															'message' => 'Data is submitted successfully.'
														], REST_Controller::HTTP_OK);
													}
													else
													{
														// Set the response and exit
														$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
													}
				}
	
									
				else
				{
											// Set the response and exit
					$this->response("please fill all fields.",  REST_Controller::HTTP_BAD_REQUEST);
				}
										
	
	
        
		
    }
	
	public function insurance_post()  
    {  
		 $this->load->view('insurance'); 
		
			//   $userData = array( 
			   $amount=$this->input->post('amount');
			   $pet=$this->input->post('pet');
			   $petname=$this->input->post('petname');
			   $pname=$this->EzPet_model->name($petname);
				if($pname==false)
				{
						// Set the response and exit
						//BAD_REQUEST (400) being the HTTP response code
						$this->response([
								'status' => false,
								'message' =>  'ERROR-invalid petname(digits and special characters are not allowed)'
							], REST_Controller::HTTP_BAD_REQUEST);
						//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
				}
			    $gender=$this->input->post('gender');
			   
				$cname=$this->input->post('cname');
				$name=$this->EzPet_model->name($cname);
				if($name==false)
				{
				// Set the response and exit
				//BAD_REQUEST (400) being the HTTP response code
				$this->response([
						'status' => false,
						'message' => 'ERROR-invalid name(digits and special characters are not allowed)'
					], REST_Controller::HTTP_BAD_REQUEST);
				//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
				}
				
				$cgender =$this->input->post('cgender');
				$email=strip_tags($this->input->post('email'));
				$em=$this->EzPet_model->mails($email);
				if($em==false)
				{
				// Set the response and exit
				//BAD_REQUEST (400) being the HTTP response code
				$this->response([
						'status' => false,
						'message' => 'ERROR-invalid email'
					], REST_Controller::HTTP_BAD_REQUEST);
				//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
				}
			   
			    $phone= $this->input->post('phone');
				$ph=$this->EzPet_model->number($phone);
				if($ph==false)
				{
				// Set the response and exit
				//BAD_REQUEST (400) being the HTTP response code
				$this->response([
						'status' => false,
						'message' => 'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
					], REST_Controller::HTTP_BAD_REQUEST);
				//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
				}
		
				 $address=$this->input->post('address');
					 $identification =$this->input->post('identification');
					  $dob=$this->input->post('dob');
					   $insurance = $this->input->post('insurance');
			//   );
			
			
				 if(!empty($amount)  && !empty($dob) && !empty($pname) && !empty($name) && !empty($em) && !empty($ph)  && !empty($pet)     &&  !empty($identification)  && !empty($gender)&& !empty($cgender) && !empty($address) &&  !empty($insurance) )
				{
			
			
			
			
										$userData = array(
												'amount' =>$amount,
												'pet' =>$pet,
												'petname' =>$pname,
												'cname' =>$name,
												'phone'=>$ph,
												'gender' =>$gender,
												'cgender' =>$cgender,
												'email' => $em,
												'address'=>$address,
												'identification'=>$identification,
												'dob'=>$dob,
												'insurance'=>$insurance
												);
											
									
										
											$insert=$this->db->insert('insurance',$userData);
									
											
								if($insert)
											{
												// Set the response and exit
												$this->response([
													'status' => TRUE,
													'message' => 'Data is submitted successfully.'
												], REST_Controller::HTTP_OK);
											}
											else
											{
												// Set the response and exit
												$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
											}
											
											
				}
			
	
									
				else
				{
											// Set the response and exit
					$this->response("please fill all fields.",  REST_Controller::HTTP_BAD_REQUEST);
				}
								
	
	
        
		
    }
	public function vaccine_post()  
    {  
				 $this->load->view('vaccine'); 
		
			  // $userData = array( 
			   $first_name = $this->input->post('first_name');
			   $name=$this->EzPet_model->name($first_name);
				if($name==false)
				{
						// Set the response and exit
						//BAD_REQUEST (400) being the HTTP response code
						$this->response([
								'status' => false,
								'message' => 'ERROR-invalid name(digits and special characters are not allowed)'
							], REST_Controller::HTTP_BAD_REQUEST);
						//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
				}
			   $email = strip_tags($this->input->post('email'));
			   $email = strip_tags($this->post('email'));
				$em=$this->EzPet_model->mails($email);
				if($em==false)
				{
						// Set the response and exit
						//BAD_REQUEST (400) being the HTTP response code
						$this->response([
								'status' => false,
								'message' => 'ERROR-invalid email'
							], REST_Controller::HTTP_BAD_REQUEST);
						//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
				}
			    $phone= $this->input->post('phone');
				$ph=$this->EzPet_model->number($phone);
				if($ph==false)
				{
						// Set the response and exit
						//BAD_REQUEST (400) being the HTTP response code
						$this->response([
								'status' => false,
								'message' => 'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
							], REST_Controller::HTTP_BAD_REQUEST);
						//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
				}
				 $pet= $this->input->post('pet');
				  $petname= $this->input->post('petname');
				  $pname=$this->EzPet_model->name($petname);
					if($pname==false)
					{
							// Set the response and exit
							//BAD_REQUEST (400) being the HTTP response code
							$this->response([
									'status' => false,
									'message' => 'ERROR-invalid petname(digits and special characters are not allowed)'
								], REST_Controller::HTTP_BAD_REQUEST);
							//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
					}
				 $age= $this->input->post('age');
				 $problem = $this->input->post('problem');
				  $a =$this->input->post('a');
				    $b = $this->input->post('b');
					  $c = $this->input->post('c');
					    $d = $this->input->post('d');
						  $e = $this->input->post('e');
						    $f = $this->input->post('f');
							  $g = $this->input->post('g');
							    $h = $this->input->post('h');
								  $i = $this->input->post('i');
								    $j = $this->input->post('j');
									  $k = $this->input->post('k');
									  $l = $this->input->post('l');
			  // );
			  
			  
			   if( !empty($name) && !empty($em) && !empty($ph)  && !empty($pet)  && !empty($pname)  && !empty($age) && !empty($problem) &&  !empty($a) &&  !empty($b) &&  !empty($c) &&  !empty($d) &&  !empty($e) &&  !empty($f) &&  !empty($g) &&  !empty($h)  )
				{
				
			  
							  
								$userData = array(
									'first_name' => $name,
									'email' => $em,
									'phone'=>$ph,
									'pet' =>$pet,
									'petname' => $pname,
									'age' =>$age,
									'problem' =>$problem,
									'a' =>$a,
									'b' =>$b,
									'c' =>$c,
									'd' =>$d,
									'e' =>$e,
									'f' =>$f,
									'g' =>$g,
									'h' =>$h,
									'i' =>$i,
									'j' =>$j,
									'k' =>$k,
									'l' =>$l
									
								);
									$insert=$this->db->insert('vaccine',$userData);
									
									
									
									if($insert)
									{
										// Set the response and exit
										$this->response([
											'status' => TRUE,
											'message' => 'Data is submitted successfully.'
										], REST_Controller::HTTP_OK);
									}
									/*else
									{
										// Set the response and exit
										$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
									}*/
				


									
				}
	
									
				else
				{
											// Set the response and exit
					$this->response("please fill all fields.",  REST_Controller::HTTP_BAD_REQUEST);
				}
					

				
				
	}
	
	
	
		
       
		
 
	
	
	
		
}
		
		

		
		

		
   