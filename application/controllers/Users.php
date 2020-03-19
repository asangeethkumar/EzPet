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

//get a pet & my account


	public function submenu(){
		$this->load->view('petshelters');
		 $data = $userData = array(); 
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit'))
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
				
			//	$this->db->insert('petregistration',$userData);
		
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";



	}
	

	

	public function breeder(){
		$this->load->view('breeders');
		 $data = $userData = array(); 
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit'))
			 $userData = array(
									 'Full_Name' => strip_tags($this->input->post('Full_Name')), 
                'address' => strip_tags($this->input->post('address')),
				'breeder_phone' => strip_tags($this->input->post('breeder_phone')),	
				 'address_female' => strip_tags($this->input->post('address_female')),
				 'Height' => strip_tags($this->input->post('Height')),
				'Special_Status' => strip_tags($this->input->post('Special_Status')),
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
				
			//	$this->db->insert('petregistration',$userData);
		
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";



	}

	public function findapet(){
		$this->load->view('findpet');


		 $data = $userData = array(); 
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit'))
			 $userData = array(
									 'Pet_breed' => strip_tags($this->input->post('Pet_breed')), 
                'gender' => strip_tags($this->input->post('gender')),
				'color' => strip_tags($this->input->post('color')),	
				 'weight' => strip_tags($this->input->post('weight')),
				 'Height' => strip_tags($this->input->post('Height')),
				'Special_Status' => strip_tags($this->input->post('Special_Status')),
			'phone' => strip_tags($this->input->post('phone')), 
			'Cost' => strip_tags($this->input->post('Cost')), 
			  );
		
			print  $userData;
				var_dump($userData);
				
			//	$this->db->insert('petregistration',$userData);
		
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";




	}
	
	public function petregistration(){
		$this->load->view('petregistration');

		 $data = $userData = array(); 
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit'))
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
               // 'password' => md5($this->input->post('password')), 
					'gender' => $this->input->post('gender'), 
					'Spayed_or_Neutered' => $this->input->post('Spayed_or_Neutered'), 
					'Special_Status' => $this->input->post('Special_Status'), 
				
                'phone' => strip_tags($this->input->post('phone')) ,			
               
                  );
		
			print  $userData;
				var_dump($userData);
				
				$this->db->insert('petinfo',$userData);
		
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";
		  }
		  
	
		


	public function customer(){
		$this->load->view('customer');

		 $data = $userData = array(); 
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit'))

		$userData = array( 
                'first_name' => strip_tags($this->input->post('first_name')), 
				'middle_name' => strip_tags($this->input->post('middle_name')),
                'last_name' => strip_tags($this->input->post('last_name')),
				'DOB' => strip_tags($this->input->post('DOB')),

				'address' => strip_tags($this->input->post('address')),
				'billing_address' => strip_tags($this->input->post('billing_address')),
                'email' => strip_tags($this->input->post('email')), 
                'password' => md5($this->input->post('password')), 
                'gender' => $this->input->post('gender'), 
                'phone' => strip_tags($this->input->post('phone')) 
            ); 

				print  $userData;
				var_dump($userData);
				
			//	$this->db->insert('petregistration',$userData);
		
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";
		  }
		  


	
	public function estimation(){
		$this->load->view('estimation');
		 if($this->input->post('signupSubmit'))

			$userData = array(
			'budget' => strip_tags($this->input->post('budget')), 
				'range' => strip_tags($this->input->post('range')),
                'Special_Status' => strip_tags($this->input->post('Special_Status')),
				'availability' => strip_tags($this->input->post('availability')),
				 ); 
			print  $userData;
				var_dump($userData);
				
			//	$this->db->insert('petregistration',$userData);
		
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";
		


	}
	public function puppy(){
		$this->load->view('puppy');
		 if($this->input->post('signupSubmit'))

			$userData = array(
			'adopt_pet_finder' => strip_tags($this->input->post('adopt_pet_finder')), 
				'Special_tuStas' => strip_tags($this->input->post('Special_tuStas')),
                'Pet_breed' => strip_tags($this->input->post('Pet_breed')),
				'age' => strip_tags($this->input->post('age')),
					'featured_pets' => strip_tags($this->input->post('featured_pets')),
					'search_results' => strip_tags($this->input->post('search_results')),
					'userfile' => strip_tags($this->input->post('userfile')),
					 ); 
			print  $userData;
				var_dump($userData);
				
			//	$this->db->insert('petregistration',$userData);
		
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";



	}
	public function healthvacination(){
		$this->load->view('healthvacination');
			if($this->input->post('signupSubmit'))

			$userData = array(
			'petinfo' => strip_tags($this->input->post('petinfo')), 
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
				
			//	$this->db->insert('petregistration',$userData);
		
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";
		  }





	
	public function dietchart(){
		$this->load->view('dietchart');
		if($this->input->post('signupSubmit'))

			$userData = array(
			'diet_chart' => strip_tags($this->input->post('diet_chart')), 
				'Special_Status' => strip_tags($this->input->post('Special_Status')),
                'online_booking' => strip_tags($this->input->post('online_booking')),
		);
		print  $userData;
				var_dump($userData);
				
			//	$this->db->insert('petregistration',$userData);
		
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";



	}
	public function orderpet(){
		$this->load->view('orderpet');
		if($this->input->post('signupSubmit'))

			$userData = array(
			'diet_chart' => strip_tags($this->input->post('diet_chart')), 
				'Special_Status' => strip_tags($this->input->post('Special_Status')),
				'images' => strip_tags($this->input->post('images')),
                'Cost' => strip_tags($this->input->post('Cost')),
				'Adopton_pets' => strip_tags($this->input->post('Adopton_pets')),
				'Status' => strip_tags($this->input->post('Status')),
		);
		print  $userData;
				var_dump($userData);
				
			//	$this->db->insert('petregistration',$userData);
		
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";
		  
		}
	public function delv(){
		$this->load->view('delivery');
		 if($this->input->post('signupSubmit'))

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
				
			//	$this->db->insert('petregistration',$userData);
		
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";
		  }


	
	public function petchoose(){
		$this->load->view('petchoose');
	}
		public function expenses()
			{
		$this->load->view('expenses');
		$data = $userData = array(); 
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit'))

			$userData = array(
			'income' => strip_tags($this->input->post('income')), 
				'expenses' => strip_tags($this->input->post('expenses')),
                'savings' => strip_tags($this->input->post('savings')),
				'total' => strip_tags($this->input->post('total')),
			);
		print  $userData;
				var_dump($userData);
				
			//	$this->db->insert('petregistration',$userData);
		
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";
		  }




	
	public function myorders(){
		$this->load->view('myorders');
	
		$data = $userData = array(); 
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit'))
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
				
			//	$this->db->insert('petregistration',$userData);
		
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";



	}
	public function petlicense(){
		$this->load->view('petlicense');
		$data = $userData = array(); 
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit'))
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
				
			//	$this->db->insert('petregistration',$userData);
		
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";
		  }

	
	public function petchart(){
		$this->load->view('petchart');
		$data = $userData = array(); 
         
        // If registration request is submitted 
        if($this->input->post('signupSubmit'))

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
				
			//	$this->db->insert('petregistration',$userData);
		
		echo "<h3 style='color:green'>Your data recieved successfully</h3>";
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