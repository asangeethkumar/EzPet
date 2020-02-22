<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Users extends CI_Controller { 
     
    function __construct() { 
        parent::__construct(); 
         
        // Load form validation ibrary & user model 
        $this->load->library('form_validation'); 
        $this->load->model('user'); 
         
        // User login status 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
    } 
     
    public function index(){ 
        if($this->isUserLoggedIn){ 
            redirect('users/account'); 
        }else{ 
            redirect('users/login'); 
        } 
    } 
 
    public function account(){ 
        $data = array(); 
        if($this->isUserLoggedIn){ 
            $con = array( 
                'id' => $this->session->userdata('userId') 
            ); 
            $data['user'] = $this->user->getRows($con); 
             
            // Pass the user data and load view 
            $this->load->view('elements/header', $data); 
            $this->load->view('users/account', $data); 
            $this->load->view('elements/footer'); 
        }else{ 
            redirect('users/login'); 
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
                $checkLogin = $this->user->getRows($con); 
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
        $this->load->view('users/login', $data); 
        $this->load->view('elements/footer'); 
    } 
 
    public function registration(){ 
        $data = $userData = array(); 
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit')){
			
       
           $this->form_validation->set_rules('AIN', 'AIN', 'required'); 
            $this->form_validation->set_rules('Pet_Name', 'Pet_Name', 'required'); 
			$this->form_validation->set_rules('DOB', 'DOB', 'required'); 
				$this->form_validation->set_rules('color', 'color', 'required');
				$this->form_validation->set_rules('GENIUS', 'GENIUS', 'required');
			$this->form_validation->set_rules('weight', 'weight', 'required');
			$this->form_validation->set_rules('Height', 'Height', 'required');
			$this->form_validation->set_rules('Microchip_or_Tattoo', 'Microchip_or_Tattoo');
			
			
			$this->form_validation->set_rules('State_License_or_Registration', 'State License or Registration');
			$this->form_validation->set_rules('Club_or_Association_Registration', 'Club or Association Registration');
			$this->form_validation->set_rules('Pet_Sire_Name', 'Pet Sire Name');
			$this->form_validation->set_rules('Pet_Sire_AIN', 'Pet Sire AIN' );
			$this->form_validation->set_rules('Pet_Dam_Name', 'Pet Dam Name');
			$this->form_validation->set_rules('Pet_Dam_AIN', 'Pet Dam AIN');
			
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check'); 
            $this->form_validation->set_rules('password', 'password', 'required'); 
            $this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]'); 
			

 
            $userData = array(
									
                'AIN' => strip_tags($this->input->post('AIN')), 
                'Pet_Name' => strip_tags($this->input->post('Pet_Name')),
				'DOB' => strip_tags($this->input->post('DOB')),	
				'color' => strip_tags($this->input->post('color')),
				'GENIUS' => strip_tags($this->input->post('GENIUS')),
				 'weight' => strip_tags($this->input->post('weight')),
				 'Height' => strip_tags($this->input->post('Height')),
				 'Microchip_or_Tattoo' => strip_tags($this->input->post('Microchip_or_Tattoo')),
				'State_License_or_Registration' => strip_tags($this->input->post('State_License_or_Registration')),
				 'Club_or_Association_Registration' => strip_tags($this->input->post('Club_or_Association_Registration')),
				 'Pet_Sire_Name' => strip_tags($this->input->post('Pet_Sire_Name')),
				 'Pet_Sire_AIN' => strip_tags($this->input->post('Pet_Sire_AIN')),
				 'Pet_Dam_Name' => strip_tags($this->input->post('Pet_Dam_Name')),
				 'Pet_Dam_AIN' => strip_tags($this->input->post('Pet_Dam_AIN')),
		
                'email' => strip_tags($this->input->post('email')), 
                'password' => md5($this->input->post('password')), 
                'gender' => $this->input->post('gender'), 
				
                'phone' => strip_tags($this->input->post('phone')) ,
				 
            ); 
 
            if($this->form_validation->run() == true){ 
                $insert = $this->user->insert($userData); 
                if($insert){ 
                    $this->session->set_userdata('success_msg', 'Your account registration has been successful. Please login to your account.'); 
                    redirect('users/login'); 
                }else{ 
                    $data['error_msg'] = 'Some problems occured, please try again.'; 
                } 
            }else{ 
                $data['error_msg'] = 'Please fill all the mandatory fields.'; 
            } 
        } 
         
        // Posted data 
        $data['user'] = $userData; 
         
        // Load view 
        $this->load->view('elements/header', $data); 
        $this->load->view('users/registration', $data); 
        $this->load->view('elements/footer'); 
    } 
     
    public function logout(){ 
        $this->session->unset_userdata('isUserLoggedIn'); 
        $this->session->unset_userdata('userId'); 
        $this->session->sess_destroy(); 
        redirect('users/login/'); 
    } 
     
     
    // Existing email check during validation 
    public function email_check($str){ 
        $con = array( 
            'returnType' => 'count', 
            'conditions' => array( 
                'email' => $str 
            ) 
        ); 
        $checkEmail = $this->user->getRows($con); 
        if($checkEmail > 0){ 
            $this->form_validation->set_message('email_check', 'The given email already exists.'); 
            return FALSE; 
        }else{ 
            return TRUE; 
        } 
    } 
}