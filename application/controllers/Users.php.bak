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
		$this->load->view('otc');
	}
	
	public function rx()
	{
		$this->load->view('rx');
	}
	
	public function treat()
	{
		$this->load->view('treat');
	}
	
	public function dental()
	{
		$this->load->view('dental');
	}
	
	public function mypres()
	{
		$this->load->view('mypres');
	}
	
	public function getc()  
    {  
        $this->load->view('getc'); 
		
    } 
	  public function lab()  
    {  
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
        $this->load->view('vitamins'); 
		
    } 
	public function schedule()  
    {  
        $this->load->view('schedule'); 
		
    } 
	public function dconsult()  
    {  
        $this->load->view('dconsult'); 
		
    } 
	public function diet()  
    {  
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
    public function petplayground()
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