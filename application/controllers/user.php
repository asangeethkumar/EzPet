<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class User extends CI_Controller{
 
 public function __construct(){
  parent::__construct();
  $this->load->model('UserModel');
  $this->load->library(array('form_validation','session'));
  $this->load->helper(array('url','html','form'));
 }
 
 public function index(){
  $this->login();
 }
 
 
 public function login(){
  $this->load->view('login');
 }
 
 public function successpage(){
  $this->load->view('successpage');
 }
 
 function logout(){
  $this->session->sess_destroy();
  redirect(base_url());
 }
 
 
 function signin(){
 
  $userName= trim($this->input->post('userName'));
  $password= trim($this->input->post('password'));
 
  $query = $this->UserModel->processLogin($userName,$password);
 
 
  $this->form_validation->set_rules('userName', 'Username', 'required|callback_validateUser[' . $query->num_rows() . ']');
  $this->form_validation->set_rules('password', 'Password', 'required');
 
  $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
  $this->form_validation->set_message('required', 'Enter %s');
 
  if ($this->form_validation->run() == FALSE) {
   $this->load->view('login');
  }else{
   if($query){
    $query = $query->result();
    $user = array(
     'USER_ID' => $query[0]->USER_ID,
     'USER_NAME' => $query[0]->USER_NAME,
     'EMAIL' => $query[0]->EMAIL,
     'FIRST_NAME' => $query[0]->FIRST_NAME,
     'LAST_NAME' => $query[0]->LAST_NAME
    );
 
    $this->session->set_userdata($user);
    redirect('index.php/successpage');
   }
  }
 }
 
 /** Custom Validation Method*/
 public function validateUser($userName,$recordCount){
  if ($recordCount != 0){
   return TRUE;
  }else{
   $this->form_validation->set_message('validateUser', 'Invalid %s or Password');
   return FALSE;
  }
 }

 public function validation()
 {
	 return true;
 }
}
