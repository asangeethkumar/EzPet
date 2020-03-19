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