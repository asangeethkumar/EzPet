<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

// Load the Rest Controller library

require APPPATH . '/libraries/REST_Controller.php';
   use Restserver\Libraries\REST_Controller;

class api_serv extends REST_Controller 
{
    public function __construct() { 
        parent::__construct();
        
        // Load the user model
        $this->load->model('model');
    }




     public function grooming_post()
    {
          $this->load->view('Grooming');  
       
             $first_name =$this->input->post('first_name');
               $name=$this->model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }


                $pet_name => $this->input->post('pet_name'),
                  $name=$this->model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
                
        }
                $pet_breed = $this->input->post('pet_breed'); 
                $phone = $this->input->post('phone');
                
                         $number=$this->model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }

                    //checkbox
                $services=(implode("|",$this->input->post('services')))

       



        
             $userData = array(
                 'first_name' =>$first_name, 
                'pet_name' => $pet_name,
                'pet_breed' => $pet_breed, 
                'phone' => $phone,

                    //checkbox
                'services'=>(implode("|",$services)))

            );
     $insert= $this->db->insert('grooming',$userData);

             if($insert)
             {
                $this->response([
                    'status' => TRUE,
                    'message' => 'The user has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_BAD_REQUEST);

             }

          }


    public function Petsitter_post()
    {
    		 $this->load->view('Petsitter');

                          $first_name =$this->input->post('first_name');
               $name=$this->model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                        $phone  = $this->input->post('phone');

                         $number=$this->model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                        

                         $email = $this->input->post('email');

                                         $mails=$this->model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                 $ephone = $this->input->post('ephone');

                         $number=$this->model->number($ephone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                $pet_name = $this->input->post('pet_name');
                  $name=$this->model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                $pet_breed = $this->input->post('pet_breed'); 
                $address = $this->input->post('address');
                    $alarm_de_code = $this->input->post('alarm_de_code');
                    $alarm_ac_code = $this->input->post('alarm_ac_code');

       
             $userData = array(
                 'first_name' =>$first_name, 
                 'phone' => $phone,
                 'email' => $email,
                 'ephone' => $ephone,
                'pet_name' => $pet_name,
                'pet_breed' => $pet_breed, 
                'address' => $address, 
                    'alarm_de_code' => $alarm_de_code, 
                    'alarm_ac_code' => $alarm_ac_code

            );

             $insert= $this->db->insert('petsitter',$userData);

             if($insert)
             {
             	$this->response([
             		'status' => TRUE,
             		'message' => 'The user has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
             	//set responsive and exit
             	$this->response("Please try again.", REST_Controller::HTTP_BAD_REQUEST);

             }

          }

             public function dogwalker_post()
             {   

                 $this->load->view('dogwalker');


                     $first_name =$this->input->post('first_name');
                           $name=$this->model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                 $phone =$this->input->post('phone');

                         $number=$this->model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                 $email =$this->input->post('email');
                                               $mails=$this->model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
           
                 $ephone =$this->input->post('ephone');

                    $number=$this->model->number($ephone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                $pet_name =$this->input->post('pet_name');
                  $name=$this->model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                $pet_breed =$this->input->post('pet_breed');
                $pet_age =$this->input->post('pet_age');
                $color =$this->input->post('color'); 
              


             $userData = array(
                 'first_name' =>$first_name, 
                 'phone' =>$phone,
                 'email' =>$email,
                 'ephone' =>$ephone,
                'pet_name' =>$pet_name,
                'pet_breed' =>$pet_breed,
                'pet_age' =>$pet_age,
                'color' =>$color, 
               // 'address' =>$this->input->post('address'), 
                
                    );

               $insert= $this->db->insert('dogwalker',$userData);

             if($insert)
             {
                $this->response([
                    'status' => TRUE,
                    'message' => 'The user has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_BAD_REQUEST);

             }

          }
  
        
    public function petdaycare_post()
    {
       

         
          $this->load->view('pet_day_care');


            
                          $first_name =$this->input->post('first_name');
               $name=$this->model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                        $phone  = $this->input->post('phone');

                         $number=$this->model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                        

                         $email = $this->input->post('email');

                                         $mails=$this->model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                 $ephone = $this->input->post('ephone');

                         $number=$this->model->number($ephone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                $pet_name = $this->input->post('pet_name');
                  $name=$this->model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                $pet_breed = $this->input->post('pet_breed');

                 $gender = $this->input->post('gender'); 
                $pet_food_type = $this->input->post('pet_food_type'); 
                $pet_food_quantity = $this->input->post('pet_food_quantity'); 


             $userData = array(
                 'first_name' =>$first_name, 
                 'phone' => $phone,
                 'email' => $email,
                 'ephone' => $ephone,
                 'address' => $address,
                'pet_name' => $pet_name,
                'pet_breed' => $pet_breed,
                'gender' => $gender, 
                'pet_food_type' => $pet_food_type, 
                'pet_food_quantity' => $pet_food_quantity, 
                 
                
                    );

                     $insert= $this->db->insert('pet_day_care',$userData);

             if($insert)
             {
                $this->response([
                    'status' => TRUE,
                    'message' => 'The user has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_BAD_REQUEST);

             }

          }


            public function pethostel_post()
             {


                 $this->load->view('pet_hostel');

                                 $pet_name = $this->input->post('pet_name');
                  $name=$this->model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                $pet_breed = $this->input->post('pet_breed');
                $gender => $this->input->post('gender');


                          $first_name =$this->input->post('first_name');
               $name=$this->model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                        $phone  = $this->input->post('phone');

                         $number=$this->model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                        

                         $email = $this->input->post('email');

                                         $mails=$this->model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }


                 $date_j => $this->input->post('date_j');
                 $date_l => $this->input->post('date_l');

             $userData = array(
                'pet_name' => $pet_name,
                'pet_breed' => $pet_breed,
                'gender' => $gender,
                
                 'first_name' =>$first_name, 
                 'phone' => $phone,
                 'email' => $email,
                 'date_j' => $date_j,
                 'date_l' => $date_l,
                 
                 
                
                    );


                     $insert= $this->db->insert('pethostel',$userData);

             if($insert)
             {
                $this->response([
                    'status' => TRUE,
                    'message' => 'The user has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_BAD_REQUEST);

             }

          }
           public function pettaxi_post()
    {
       
            $this->load->view('pet_taxi');

             

                          $first_name =$this->input->post('first_name');
               $name=$this->model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                        $phone  = $this->input->post('phone');

                         $number=$this->model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                        

                         $email = $this->input->post('email');

                                         $mails=$this->model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                 $ephone = $this->input->post('ephone');

                         $number=$this->model->number($ephone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                $pet_name = $this->input->post('pet_name');
                  $name=$this->model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }

                $paddress = $this->input->post('paddress');
                $daddress = $this->input->post('daddress');
            

         
             $userData = array(


                 'first_name' =>$first_name, 
                 'phone' => $phone,
                 'email' => $email,
                 'ephone' => $ephone,
                 
                'pet_name' => $pet_name,
                'paddress' => $paddress,
                'daddress' => $daddress,
                                    );

                                        $insert= $this->db->insert('pettaxi',$userData);

             if($insert)
             {
                $this->response([
                    'status' => TRUE,
                    'message' => 'The user has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_BAD_REQUEST);

             }

          }

            public function petclub_post()
          {
      

                  $this->load->view('petclub');

                         $pet_name = $this->input->post('pet_name');
                  $name=$this->model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }

                         $pet_breed = $this->input->post('pet_breed');
                        $food = $this->input->post('food');
                            $pet_food_quantity = $this->input->post('pet_food_quantity');
                            $gender = $this->input->post('gender');


         
             $userData = array(
                'pet_name' => $pet_name,
                        'pet_breed' => $pet_breed,
                        'food' => $food,
                            'pet_food_quantity' => $pet_food_quantity,
                            'gender' => $gender,

   
                            );

                             $insert= $this->db->insert('petclub',$userData);

             if($insert)
             {
                $this->response([
                    'status' => TRUE,
                    'message' => 'The user has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_BAD_REQUEST);

             }

          }
  

           public function pettraining_post()
    {
       

                
          $this->load->view('pet_training');

                           $first_name =$this->input->post('first_name');
               $name=$this->model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                        $phone  = $this->input->post('phone');

                         $number=$this->model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                        

                         $email = $this->input->post('email');

                                         $mails=$this->model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                 $ephone = $this->input->post('ephone');

                         $number=$this->model->number($ephone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                $pet_name = $this->input->post('pet_name');
                  $name=$this->model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }

       
                $pet_breed => $this->input->post('pet_breed'); 
                $level => $this->input->post('level'); 
                 



             $userData = array(
                 'first_name' =>$first_name, 
                 'phone' => $phone,
                 'email' => $email,
                 'ephone' => $ephone,
                'pet_name' => $pet_name,
                'pet_breed' => $pet_breed, 
                'level' => $level, 
                 
                 
                
                    );

                 $insert= $this->db->insert('pet_training',$userData);

             if($insert)
             {
                $this->response([
                    'status' => TRUE,
                    'message' => 'The user has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_BAD_REQUEST);

             }

          }
  

           public function dogplayground_post()
           {
        

                 $this->load->view('dogplayground');


                           $first_name =$this->input->post('first_name');
               $name=$this->model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                        $phone  = $this->input->post('phone');

                         $number=$this->model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                        

                         $email = $this->input->post('email');

                                         $mails=$this->model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
           
           $pet_age = $this->input->post('pet_age');

                $pet_name = $this->input->post('pet_name');
                  $name=$this->model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }


                $pet_breed => $this->input->post('pet_breed');
                $area => $this->input->post('area');


                $data = $userData = array(); 
         
                 $userData = array(
                 'first_name' =>$first_name, 
                 'phone' => $phone,
                 'email' => $email,
                 'pet_age' => $pet_age,
                'pet_name' => $pet_name,
                'pet_breed' => $pet_breed,
                'area' => $area,
                 

                    );
                   $insert= $this->db->insert('dogplayground',$userData);

             if($insert)
             {
                $this->response([
                    'status' => TRUE,
                    'message' => 'The user has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_BAD_REQUEST);

             }

          }
        
                
           public function globalpet_post()
    {
        
                $this->load->view('globalpet');

                                          $first_name =$this->input->post('first_name');
               $name=$this->model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                        $phone  = $this->input->post('phone');

                         $number=$this->model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                        

                         $email = $this->input->post('email');

                                         $mails=$this->model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                 $ephone = $this->input->post('ephone');

                         $number=$this->model->number($ephone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                $pet_name = $this->input->post('pet_name');
                  $name=$this->model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
         $pet_breed = $this->input->post('pet_breed');
                $passport => $this->input->post('passport');
                 
                $location => $this->input->post('location');

                $dest => $this->input->post('dest');


         
             $userData = array(
                 'first_name' =>$first_name, 
                 'phone' => $phone,
                 'email' => $email,
                 'ephone' => $ephone,
                'pet_name' => $pet_name,
                'pet_breed' => $pet_breed,
                'passport' => $passport,
                 
                'location' => $location,

                'dest' => $dest,
                   
                 
               

                    );
               $insert= $this->db->insert('globalpet',$userData);

             if($insert)
             {
                $this->response([
                    'status' => TRUE,
                    'message' => 'The user has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_BAD_REQUEST);

             }

          }
            public function funeral_post()
             {
       
              $this->load->view('funeral');

                
                                          $first_name =$this->input->post('first_name');
               $name=$this->model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                        $phone  = $this->input->post('phone');

                         $number=$this->model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                        

                         $email = $this->input->post('email');

                                         $mails=$this->model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
               $pet_name = $this->input->post('pet_name');
                  $name=$this->model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }

         $pet_breed = $this->input->post('pet_breed');
                
                $birth = $this->input->post('birth');

                $death = $this->input->post('death');


             $userData = array(
                 'first_name' =>$first_name, 
                 'phone' => $phone,
                 'email' => $email,
                 
                'pet_name' => $pet_name,
                'pet_breed' => $pet_breed,
                
                'birth' => $birth,

                'death' => $death,

                               
                    );

               $insert= $this->db->insert('funeral',$userData);

             if($insert)
             {
                $this->response([
                    'status' => TRUE,
                    'message' => 'The user has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_BAD_REQUEST);

             }

          }

           public function petfashionoutlet_post    ()
    {
        
         $this->load->view('petfasionoutlet');


                                          $first_name =$this->input->post('first_name');
               $name=$this->model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                        $phone  = $this->input->post('phone');

                         $number=$this->model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                        

                         $email = $this->input->post('email');

                                         $mails=$this->model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
               $pet_name = $this->input->post('pet_name');
                  $name=$this->model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
            $pet_breed = $this->input->post('pet_breed');
                $pet_size = $this->input->post('pet_size');
                
                $costume_type = $this->input->post('costume_type');
                $costume_name = $this->input->post('costume_name');
                

         
             $userData = array(
                 'first_name' =>$first_name, 
                 'phone' => $phone,

                 'email' => $email,
                'pet_name' => $pet_name,
                'pet_breed' => $pet_breed,
                'pet_size' => $pet_size,
                'costume_type' => $costume_type,
                'costume_name' => $costume_name,
                
                 
               

                    );

                $insert= $this->db->insert('petfashion',$userData);

             if($insert)
             {
                $this->response([
                    'status' => TRUE,
                    'message' => 'The user has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_BAD_REQUEST);

             }

          }




          //pet toys


    public function pettoys_post()
    {
       $this->load->view('pettoys');

             $pet_name = $this->input->post('pet_name');
                  $name=$this->model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }

                $pet_breed => $this->input->post('pet_breed');
                $toys=(implode("|",$this->input->post('toys')));
         
             $userData = array(
                'pet_name' => $pet_name,
                'pet_breed' => $pet_breed,
                'toys'=>(implode("|",$toys))
                 

                    );

                $insert= $this->db->insert('pettoys',$userData);

             if($insert)
             {
                $this->response([
                    'status' => TRUE,
                    'message' => 'The user has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_BAD_REQUEST);

             }

          }



            public function dia_post()
    {
        
              $this->load->view('dia');

                  $pet_name = $this->input->post('pet_name');
                  $name=$this->model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
         $pet_breed= $this->input->post('pet_breed');
                $pet_age = $this->input->post('pet_age');
                $size = $this->input->post('size');


             $userData = array(
                'pet_name' => $pet_name,
                'pet_breed' => $pet_breed,
                'pet_age' => $pet_age,
                'size' => $size,
                 
               

                    );

                $insert= $this->db->insert('dia',$userData);

             if($insert)
             {
                $this->response([
                    'status' => TRUE,
                    'message' => 'The user has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_BAD_REQUEST);

             }

          }

           public function petbedding_post()
    {
       
        $this->load->view('petbedding');

                 $pet_name = $this->input->post('pet_name');
                  $name=$this->model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
         $pet_breed => $this->input->post('pet_breed');
                $bed_size = $this->input->post('bed_size');
                $color = $this->input->post('color');
         
             $userData = array(
                'pet_name' => $pet_name,
                'pet_breed' => $pet_breed,
                'bed_size' => $bed_size,
                'color' => $color

                    );


                $insert= $this->db->insert('petbedding',$userData);

             if($insert)
             {
                $this->response([
                    'status' => TRUE,
                    'message' => 'The user has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_BAD_REQUEST);

             }

          }


    public function petsafety_post()
    {
       
        $this->load->view('petsafety');


                                          $first_name =$this->input->post('first_name');
               $name=$this->model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                        $phone  = $this->input->post('phone');

                         $number=$this->model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
                        

                         $email = $this->input->post('email');

                                         $mails=$this->model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }
               $pet_name = $this->input->post('pet_name');
                  $name=$this->model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }

        $pet_breed = $this->input->post('pet_breed');
                $safety=(implode("|",$this->input->post('safety')));
                 
         
             $userData = array(
                 'first_name' =>$this->input->post('first_name'), 
                 'phone' => $this->input->post('phone'),
                 'email' => $this->input->post('email'),
                 
                'pet_name' => $pet_name,
                'pet_breed' => $pet_breed,
                'safety'=>(implode("|",$safety))
                   );


                $insert= $this->db->insert('petsafety',$userData);

             if($insert)
             {
                $this->response([
                    'status' => TRUE,
                    'message' => 'The user has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_BAD_REQUEST);

             }

          }
   
        
    public function accessories_post()
    {
         $this->load->view('accessories');

               $pet_name = $this->input->post('pet_name');
                  $name=$this->model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR1',
                    ], REST_Controller::HTTP_BAD_REQUEST);
        }

                $pet_breed = $this->input->post('pet_breed');
                $acces=(implode("|",$this->input->post('acces')));
         
             $userData = array(
                 'pet_name' => $pet_name,
                'pet_breed' => $pet_breed,
                'acces'=>(implode("|",$acces))
                //check box

               

                    );


                $insert= $this->db->insert('acces',$userData);

             if($insert)
             {
                $this->response([
                    'status' => TRUE,
                    'message' => 'The user has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_BAD_REQUEST);

             }

          }
  
        
   

  
   


       }
