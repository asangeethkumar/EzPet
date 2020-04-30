<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

// Load the Rest Controller library

require APPPATH . '/libraries/REST_Controller.php';
   use Restserver\Libraries\REST_Controller;

class Authentication extends REST_Controller {

    public function __construct() { 
        parent::__construct();
		
		// Load the user model
        $this->load->model('model');
    }
	
	public function login_post() {
		// Get the post data
		$email = $this->post('email');
		$password = $this->post('password');
		
		// Validate the post data
		if(!empty($email) && !empty($password)){
			
			// Check if any user exists with the given credentials
			$con['returnType'] = 'single';
			$con['conditions'] = array(
				'email' => $email,
				'password' => md5($password),
				'status' => 1
			);
			$user = $this->model->getRows($con);
			
			if($user){
				// Set the response and exit
				$this->response([
					'status' => TRUE,
					'message' => 'User login successful.',
					'data' => $user
				], REST_Controller::HTTP_OK);
			}else{
				// Set the response and exit
				//BAD_REQUEST (400) being the HTTP response code
				$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
			}
        }else{
			// Set the response and exit
            $this->response("Provide email and password.", REST_Controller::HTTP_BAD_REQUEST);
		}
	}
	

	public function registration_post() {
		// Get the post data
		$first_name = strip_tags($this->post('first_name'));
		$name=$this->model->name($first_name);
		if($name==false)
		{
				// Set the response and exit
				//BAD_REQUEST (400) being the HTTP response code
				$this->response([
						'status' => false,
						'message' => 'ERROR1-invalid name',
					], REST_Controller::HTTP_BAD_REQUEST);
				//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
		}
		//$fname=$this->model->name($first_name);
		$last_name = strip_tags($this->post('last_name'));
		$email = strip_tags($this->post('email'));
		$em=$this->model->mails($email);
		if($em==false)
		{
				// Set the response and exit
				//BAD_REQUEST (400) being the HTTP response code
				$this->response([
						'status' => false,
						'message' => 'ERROR2-invalid email',
					], REST_Controller::HTTP_BAD_REQUEST);
				//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
		}
		$password = $this->post('password');
		$pas=$this->model->pass($password);
		if($pas==false)
		{
				// Set the response and exit
				//BAD_REQUEST (400) being the HTTP response code
				$this->response([
						'status' => false,
						'message' => 'ERROR3-invalid password',
					], REST_Controller::HTTP_BAD_REQUEST);
				//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
		}
		
		$phone = strip_tags($this->post('phone'));
		$ph=$this->model->number($phone);
		if($ph==false)
		{
				// Set the response and exit
				//BAD_REQUEST (400) being the HTTP response code
				$this->response([
						'status' => false,
						'message' => 'ERROR4-invalid phone number',
					], REST_Controller::HTTP_BAD_REQUEST);
				//$this->response("Wrong email or password.", REST_Controller::HTTP_BAD_REQUEST);
		}
		
		// Validate the post data
		if(!empty($name) && !empty($last_name) && !empty($em) && !empty($pas)&& !empty($ph)){
			
			// Check if the given email already exists
			$con['returnType'] = 'count';
			$con['conditions'] = array(
				'email' => $email,
			);
			$userCount = $this->model->getRows($con);
			
			if($userCount > 0){
				// Set the response and exit
				$this->response("The given email already exists.", REST_Controller::HTTP_BAD_REQUEST);
			}else{
				// Insert user data
				$userData = array(
					'first_name' => $name,
					'last_name' => $last_name,
					'email' => $email,
					'password' => md5($pas),
					'phone' => $ph
				);
				$insert = $this->model->insert($userData);
				
				// Check if the user data is inserted
				if($insert){
					// Set the response and exit
					$this->response([
						'status' => TRUE,
						'message' => 'The user has been added successfully.',
						'data' => $insert
					], REST_Controller::HTTP_OK);
				}else{
					// Set the response and exit
					$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
				}
			}
        }else{
			// Set the response and exit
            $this->response("Provide complete user info to add.", REST_Controller::HTTP_BAD_REQUEST);
		}
	}
	
	public function user_get($id = 0) {
		// Returns all the users data if the id not specified,
		// Otherwise, a single user will be returned.
		$con = $id?array('id' => $id):'';
		$users = $this->model->getRows($con);
		
		// Check if the user data exists
		if(!empty($users)){
			// Set the response and exit
			//OK (200) being the HTTP response code
			$this->response($users, REST_Controller::HTTP_OK);
		}else{
			// Set the response and exit
			//NOT_FOUND (404) being the HTTP response code
			$this->response([
				'status' => FALSE,
				'message' => 'No user was found.'
			], REST_Controller::HTTP_NOT_FOUND);
		}
	}
	
	public function user_put() {
		$id = $this->put('id');
		
		// Get the post data
		$first_name = strip_tags($this->put('first_name'));
		$last_name = strip_tags($this->put('last_name'));
		$email = strip_tags($this->put('email'));
		$password = $this->put('password');
		$phone = strip_tags($this->put('phone'));
		
		// Validate the post data
		if(!empty($id) && (!empty($first_name) || !empty($last_name) || !empty($email) || !empty($password) || !empty($phone))){
			// Update user's account data
			$userData = array();
			if(!empty($first_name)){
				$userData['first_name'] = $first_name;
			}
			if(!empty($last_name)){
				$userData['last_name'] = $last_name;
			}
			if(!empty($email)){
				$userData['email'] = $email;
			}
			if(!empty($password)){
				$userData['password'] = md5($password);
			}
			if(!empty($phone)){
				$userData['phone'] = $phone;
			}
			$update = $this->user->update($userData, $id);
			
			// Check if the user data is updated
			if($update){
				// Set the response and exit
				$this->response([
					'status' => TRUE,
					'message' => 'The user info has been updated successfully.'
				], REST_Controller::HTTP_OK);
			}else{
				// Set the response and exit
				$this->response("Some problems occurred, please try again.", REST_Controller::HTTP_BAD_REQUEST);
			}
        }else{
			// Set the response and exit
            $this->response("Provide at least one user info to update.", REST_Controller::HTTP_BAD_REQUEST);
		}
	}
	 public function index_delete($id)
    {
        $this->db->delete('users', array('id'=>$id));
       
        $this->response([' deleted successfully.'], REST_Controller::HTTP_OK);
    }

}