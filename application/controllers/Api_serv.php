<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

// Load the Rest Controller library

require APPPATH . '/libraries/REST_Controller.php';
   use Restserver\Libraries\REST_Controller;

class Api_serv extends REST_Controller 
{
    public function __construct() { 
        parent::__construct();
        
        // Load the user model
       // $this->load->model('model');
         $this->load->model('EzPet_model');
    }




     public function grooming_post()
    {
          $this->load->view('Grooming');  
       
             $first_name =$this->input->post('first_name');
            $name=$this->EzPet_model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }


                $pet_name = $this->input->post('pet_name');
                  $name=$this->EzPet_model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
                
        }
                $pet_breed = $this->input->post('pet_breed'); 
                $phone = $this->input->post('phone');
                
                         $number=$this->EzPet_model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)',
                    ], REST_Controller::HTTP_OK);
        }

                    //checkbox
                $services=$this->input->post('services');

       

                if(!empty($first_name) && !empty($pet_name) && !empty($pet_breed) && !empty($phone)&& !empty($services) )
                                    
        {
                                  

        
             $userData = array(
                 'first_name' =>$first_name, 
                'pet_name' => $pet_name,
                'pet_breed' => $pet_breed, 
                'phone' => $phone,

                    //checkbox
                'services'=>$services

            );
     $insert= $this->db->insert('Grooming',$userData);

             if($insert)
             {
                $this->response([
                    'status' => TRUE,
                    'message' => 'Data has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_OK);

             }

    }
    else
    {
                                 $this->response([
                                                'status' => False,
                                                'message' => 'please fill all fields.'

                                                ], REST_Controller::HTTP_OK);
                                
    }

}









    public function Petsitter_post()
    {
    		 $this->load->view('Petsitter');

                          $first_name =$this->input->post('first_name');
               $name=$this->EzPet_model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR-invalid name(digits and special characters are not allowed)'
                    ], REST_Controller::HTTP_OK);
        }
                        $phone  = $this->input->post('phone');

                         $number=$this->EzPet_model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)',
                    ], REST_Controller::HTTP_OK);
        }
                        

                         $email = $this->input->post('email');

                                         $mails=$this->EzPet_model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' =>  'ERROR-invalid email',
                    ], REST_Controller::HTTP_OK);
        }
                 $ephone = $this->input->post('ephone');

                         $number=$this->EzPet_model->number($ephone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)',
                    ], REST_Controller::HTTP_OK);
        }
                $pet_name = $this->input->post('pet_name');
                  $name=$this->EzPet_model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' =>'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }
                $pet_breed = $this->input->post('pet_breed'); 
                $address = $this->input->post('address');
                    $alarm_de_code = $this->input->post('alarm_de_code');
                    $alarm_ac_code = $this->input->post('alarm_ac_code');

       
                if(!empty($first_name) && !empty($phone) && !empty($email) && !empty($ephone)&& !empty($pet_name)&& !empty($pet_breed)&& !empty($address)&& !empty($alarm_de_code)&& !empty($alarm_ac_code) )
                                    
        {


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
             		'message' => 'Data has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
             	//set responsive and exit
             	$this->response("Please try again.", REST_Controller::HTTP_OK);

             }

          }
          else
          {
                                 $this->response([
                                                'status' => False,
                                                'message' => 'please fill all fields.'

                                                ], REST_Controller::HTTP_OK);
                               
          }
}
           






             public function dogwalker_post()
             {   

                 $this->load->view('dogwalker');


                     $first_name =$this->input->post('first_name');
                           $name=$this->EzPet_model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }
                 $phone =$this->input->post('phone');

                         $number=$this->EzPet_model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' =>  'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)',
                    ], REST_Controller::HTTP_OK);
        }
                 $email =$this->input->post('email');
                                               $mails=$this->EzPet_model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' =>'message ERROR-invalid email' ,
                    ], REST_Controller::HTTP_OK);
        }
           
                 $ephone =$this->input->post('ephone');

                    $number=$this->EzPet_model->number($ephone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)',
                    ], REST_Controller::HTTP_OK);
        }
                $pet_name =$this->input->post('pet_name');
                  $name=$this->EzPet_model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }
                $pet_breed =$this->input->post('pet_breed');
                $pet_age =$this->input->post('pet_age');
                $color =$this->input->post('color'); 
              
                  if(!empty($first_name) && !empty($phone) && !empty($email) && !empty($ephone)&& !empty($pet_name)&& !empty($pet_breed)&& !empty($pet_age)&& !empty($color) )
                                    
        {

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
                    'message' => 'Data has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_OK);

             }

          }
           else
    {
                                
                                 $this->response([
                                                'status' => False,
                                                'message' => 'please fill all fields.'

                                                ], REST_Controller::HTTP_OK);
                               
                                
    }

}
  
        
    public function petdaycare_post()
    {
       

         
          $this->load->view('pet_day_care');


            
                          $first_name =$this->input->post('first_name');
               $name=$this->EzPet_model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }
                        $phone  = $this->input->post('phone');

                         $number=$this->EzPet_model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)',
                    ], REST_Controller::HTTP_OK);
        }
                        

                         $email = $this->input->post('email');

                                         $mails=$this->EzPet_model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'message ERROR-invalid email',
                    ], REST_Controller::HTTP_OK);
        }
                 $ephone = $this->input->post('ephone');

                         $number=$this->EzPet_model->number($ephone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' =>  'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)',
                    ], REST_Controller::HTTP_OK);
        }

                 $address = $this->input->post('address'); 
                $pet_name = $this->input->post('pet_name');
                  $name=$this->EzPet_model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }
                $pet_breed = $this->input->post('pet_breed');

                 $gender = $this->input->post('gender'); 
                $pet_food_type = $this->input->post('pet_food_type'); 
                $pet_food_quantity = $this->input->post('pet_food_quantity'); 


                  if(!empty($first_name) && !empty($phone) && !empty($email) && !empty($ephone)&& !empty($address)&& !empty($pet_name)&& !empty($pet_breed)&& !empty($gender)&& !empty($pet_food_type)&& !empty($pet_food_quantity) )
                                    
        {
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
                    'message' => 'Data has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_OK);

             }

          }
           else
    {
                                 $this->response([
                                                'status' => False,
                                                'message' => 'please fill all fields.'

                                                ], REST_Controller::HTTP_OK);
                               
                                
    }

}


            public function pethostel_post()
             {


                 $this->load->view('pet_hostel');

                                 $pet_name = $this->input->post('pet_name');
                  $name=$this->EzPet_model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }
                $pet_breed = $this->input->post('pet_breed');
                $gender = $this->input->post('gender');


                          $first_name =$this->input->post('first_name');
               $name=$this->EzPet_model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }
                        $phone  = $this->input->post('phone');

                         $number=$this->EzPet_model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
,
                    ], REST_Controller::HTTP_OK);
        }
                        

                         $email = $this->input->post('email');

                                         $mails=$this->EzPet_model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR-invalid email',
                    ], REST_Controller::HTTP_OK);
        }


                 $date_j = $this->input->post('date_j');
                 $date_l = $this->input->post('date_l');

                   if(!empty($pet_name) && !empty($pet_breed) && !empty($gender) && !empty($first_name)&& !empty($phone)&& !empty($email)&& !empty($date_j)&& !empty($date_l) )
                                    
        {
             $userData = array(
                'pet_name' => $pet_name,
                'pet_breed' => $pet_breed,
                'gender' => $gender,
                
                 'first_name' =>$first_name, 
                 'phone' => $phone,
                 'email' => $email,
                 'date_j' => $date_j,
                 'date_l' => $date_l
                 
                 
                
                    );


                     $insert= $this->db->insert('pethostel',$userData);

             if($insert)
             {
                $this->response([
                    'status' => TRUE,
                    'message' => 'Data has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_OK);

             }

          }
           else
    {
                                             $this->response([
                                                'status' => False,
                                                'message' => 'please fill all fields.'

                                                ], REST_Controller::HTTP_OK);
                               
                                
    }

}
           public function pettaxi_post()
    {
       
            $this->load->view('pet_taxi');

             

                          $first_name =$this->input->post('first_name');
               $name=$this->EzPet_model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }
                        $phone  = $this->input->post('phone');

                         $number=$this->EzPet_model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' =>  'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
,
                    ], REST_Controller::HTTP_OK);
        }
                        

                         $email = $this->input->post('email');

                                         $mails=$this->EzPet_model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR-invalid email',
                    ], REST_Controller::HTTP_OK);
        }
                 $ephone = $this->input->post('ephone');

                         $number=$this->EzPet_model->number($ephone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' =>  'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
,
                    ], REST_Controller::HTTP_OK);
        }
                $pet_name = $this->input->post('pet_name');
                  $name=$this->EzPet_model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }

                $paddress = $this->input->post('paddress');
                $daddress = $this->input->post('daddress');
            

                  if(!empty($first_name) && !empty($phone) && !empty($email) && !empty($ephone)&& !empty($pet_name)&& !empty($paddress)&& !empty($daddress) )
                                    
        {
         
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
                    'message' => 'Data has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_OK);

             }

          }
           else
    {
                                 $this->response([
                                                'status' => False,
                                                'message' => 'please fill all fields.'

                                                ], REST_Controller::HTTP_OK);
                               
                                
    }

}

            public function petclub_post()
          {
      

                  $this->load->view('petclub');

                         $pet_name = $this->input->post('pet_name');
                  $name=$this->EzPet_model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }

                         $pet_breed = $this->input->post('pet_breed');
                        $food = $this->input->post('food');
                            $pet_food_quantity = $this->input->post('pet_food_quantity');
                            $gender = $this->input->post('gender');

                              if(!empty($pet_name) && !empty($pet_breed) && !empty($food) && !empty($pet_food_quantity)&& !empty($gender) )
                                    
        {
         
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
                    'message' => 'Data has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_OK);

             }

          }
           else
    {
                                 $this->response([
                                                'status' => False,
                                                'message' => 'please fill all fields.'

                                                ], REST_Controller::HTTP_OK);
                                                        
    }

}
  

           public function pettraining_post()
    {
       

                
          $this->load->view('pet_training');

                           $first_name =$this->input->post('first_name');
               $name=$this->EzPet_model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }
                        $phone  = $this->input->post('phone');

                         $number=$this->EzPet_model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
,
                    ], REST_Controller::HTTP_OK);
        }
                        

                         $email = $this->input->post('email');

                                         $mails=$this->EzPet_model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' =>  'ERROR-invalid email',
                    ], REST_Controller::HTTP_OK);
        }
                 $ephone = $this->input->post('ephone');

                         $number=$this->EzPet_model->number($ephone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' =>  'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
,
                    ], REST_Controller::HTTP_OK);
        }
                $pet_name = $this->input->post('pet_name');
                  $name=$this->EzPet_model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }

       
                $pet_breed =$this->input->post('pet_breed'); 
                $level = $this->input->post('level'); 
                 

                  if(!empty($first_name) && !empty($phone) && !empty($email) && !empty($ephone)&& !empty($pet_name)&& !empty($pet_breed)&& !empty($level) )
                                    
        {

             $userData = array(
                 'first_name' =>$first_name, 
                 'phone' => $phone,
                 'email' => $email,
                 'ephone' => $ephone,
                'pet_name' => $pet_name,
                'pet_breed' => $pet_breed, 
                'level' => $level 
                 
                 
                
                    );

                 $insert= $this->db->insert('pet_training',$userData);

             if($insert)
             {
                $this->response([
                    'status' => TRUE,
                    'message' => 'Data has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit

             }

          }
   else
    {
                             $this->response([
                                                'status' => False,
                                                'message' => 'please fill all fields.'

                                                ], REST_Controller::HTTP_OK);
                               
                                
    }

}

           public function dogplayground_post()
           {
        

                 $this->load->view('dogplayground');


                           $first_name =$this->input->post('first_name');
               $name=$this->EzPet_model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }
                        $phone  = $this->input->post('phone');

                         $number=$this->EzPet_model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' =>  'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
,
                    ], REST_Controller::HTTP_OK);
        }
                        

                         $email = $this->input->post('email');

                                         $mails=$this->EzPet_model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' =>  'ERROR-invalid email',
                    ], REST_Controller::HTTP_OK);
        }
           
           $pet_age = $this->input->post('pet_age');

                $pet_name = $this->input->post('pet_name');
                  $name=$this->EzPet_model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }


                $pet_breed = $this->input->post('pet_breed');
                $area = $this->input->post('area');


                $data = $userData = array(); 
            
              if(!empty($first_name) && !empty($phone) && !empty($email) && !empty($pet_age)&& !empty($pet_name)&& !empty($pet_breed)&& !empty($area) )
                                    
        {
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
                    'message' => 'Data has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit

                $this->response("Please try again.", REST_Controller::HTTP_OK);
                                             

             }

          }
         else
    {
                                    $this->response([
                                                'status' => False,
                                                'message' => 'please fill all fields.'

                                                ], REST_Controller::HTTP_OK);
                                                       
    }

}
                
           public function globalpet_post()
    {
        
                $this->load->view('globalpet');

                                          $first_name =$this->input->post('first_name');
               $name=$this->EzPet_model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }
                        $phone  = $this->input->post('phone');

                         $number=$this->EzPet_model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' =>  'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
,
                    ], REST_Controller::HTTP_OK);
        }
                        

                         $email = $this->input->post('email');

                                         $mails=$this->EzPet_model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'message ERROR-invalid email',
                    ], REST_Controller::HTTP_OK);
        }
                 $ephone = $this->input->post('ephone');

                         $number=$this->EzPet_model->number($ephone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' =>  'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
,
                    ], REST_Controller::HTTP_OK);
        }
                $pet_name = $this->input->post('pet_name');
                  $name=$this->EzPet_model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }
         $pet_breed = $this->input->post('pet_breed');
                $passport =$this->input->post('passport');
                 
                $location = $this->input->post('location');

                $dest =$this->input->post('dest');


           if(!empty($first_name) && !empty($phone) && !empty($email) && !empty($ephone)&& !empty($pet_name)&& !empty($pet_breed)&& !empty($passport)&& !empty($location)&& !empty($dest) )
                                    
        {
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
                    'message' => 'Data has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_OK);

             }

          }

           else
    {
                                         $this->response([
                                                'status' => False,
                                                'message' => 'please fill all fields..'

                                                ], REST_Controller::HTTP_OK);
                               
                                
    }

}
       

            public function funeral_post()
             {
       
              $this->load->view('funeral');

                
                                          $first_name =$this->input->post('first_name');
               $name=$this->EzPet_model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }
                        $phone  = $this->input->post('phone');

                         $number=$this->EzPet_model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'message ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
,
                    ], REST_Controller::HTTP_OK);
        }
                        

                         $email = $this->input->post('email');

                                         $mails=$this->EzPet_model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'message ERROR-invalid email',
                    ], REST_Controller::HTTP_OK);
        }
               $pet_name = $this->input->post('pet_name');
                  $name=$this->EzPet_model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }

         $pet_breed = $this->input->post('pet_breed');
                
                $birth = $this->input->post('birth');

                $death = $this->input->post('death');

                  if(!empty($first_name) && !empty($phone) && !empty($email) && !empty($pet_name)&& !empty($pet_breed)&& !empty($birth)&& !empty($death) )
                                    
        {

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
                    'message' => 'Data has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_OK);

             }

          }

           else
    {
                         $this->response([
                                                'status' => False,
                                                'message' => 'please fill all fields.'

                                                ], REST_Controller::HTTP_OK);
                                                       
    }

}

           public function petfashionoutlet_post    ()
    {
        
         $this->load->view('petfasionoutlet');


                                          $first_name =$this->input->post('first_name');
               $name=$this->EzPet_model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }
                        $phone  = $this->input->post('phone');

                         $number=$this->EzPet_model->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
,
                    ], REST_Controller::HTTP_OK);
        }
                        

                         $email = $this->input->post('email');

                                         $mails=$this->EzPet_model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'message ERROR-invalid email',
                    ], REST_Controller::HTTP_OK);
        }
               $pet_name = $this->input->post('pet_name');
                  $name=$this->EzPet_model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }
            $pet_breed = $this->input->post('pet_breed');
                $pet_size = $this->input->post('pet_size');
                
                $costume_type = $this->input->post('costume_type');
                $costume_name = $this->input->post('costume_name');
                
                  if(!empty($first_name) && !empty($phone) && !empty($email) && !empty($pet_name)&& !empty($pet_breed)&& !empty($pet_size)&& !empty($costume_type)&& !empty($costume_name) )
                                    
        {
         
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
                    'message' => 'Data has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_OK);

             }

          }


 else
    {
                                             $this->response([
                                                'status' => False,
                                                'message' => 'please fill all fields.'

                                                ], REST_Controller::HTTP_OK);
                                                        
    }

}

          //pet toys


    public function pettoys_post()
    {
       $this->load->view('pettoys');

             $first_name = $this->input->post('first_name');
             $pet_name = $this->input->post('pet_name');
                  $name=$this->EzPet_model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }

                $pet_breed = $this->input->post('pet_breed');

             $toy_type = $this->input->post('toy_type');
                $toys=$this->input->post('toys');
         
           if(!empty($first_name) && !empty($pet_name) && !empty($pet_breed) && !empty($toy_type)&& !empty($toys) )
                                    
        {
             $userData = array(
                'first_name'=>$first_name,
                'pet_name' => $pet_name,
                'pet_breed' => $pet_breed,
                'toy_type' =>$toy_type,
                'toys'=>$toys
                 

                    );

                $insert= $this->db->insert('pettoys',$userData);

             if($insert)
             {
                $this->response([
                    'status' => TRUE,
                    'message' => 'Data has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_OK);

             }

          }
           else
    {
                                                 $this->response([
                                                'status' => False,
                                                'message' => 'please fill all fields.'

                                                ], REST_Controller::HTTP_OK);
                                                        
    }

}


            public function dia_post()
    {
        
              $this->load->view('dia');

                  $pet_name = $this->input->post('pet_name');
                  $name=$this->EzPet_model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }
         $pet_breed= $this->input->post('pet_breed');
                $pet_age = $this->input->post('pet_age');
                $size = $this->input->post('size');

                  if(!empty($pet_name) && !empty($pet_breed) && !empty($pet_age) && !empty($size) )
                                    
        {
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
                    'message' => 'Data has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_OK);

             }

          }
           else
    {
                                     $this->response([
                                                'status' => False,
                                                'message' => 'please fill all fields.'

                                                ], REST_Controller::HTTP_OK);
                                                         
    }

}

           public function petbedding_post()
    {
       
        $this->load->view('petbedding');

                 $pet_name = $this->input->post('pet_name');
                  $name=$this->EzPet_model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }
         $pet_breed = $this->input->post('pet_breed');
                $bed_size = $this->input->post('bed_size');
                $color = $this->input->post('color');
         
           if(!empty($pet_name) && !empty($pet_breed) && !empty($bed_size) && !empty($color) )
                                    
        {
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
                    'message' => 'Data has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_OK);

             }

          }
           else
    {
                                        $this->response([
                                                 'status' => False,
                                                'message' => 'please fill all fields.'

                                                ], REST_Controller::HTTP_OK);
                               
                                
    }

}


    public function petsafety_post()
    {
       
        $this->load->view('petsafety');


                                          $first_name =$this->input->post('first_name');
               $name=$this->EzPet_model->name($first_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }
                        $phone  = $this->input->post('phone');

                         $number=$this->EzPet_model ->number($phone);
                             if($number==false)
        {
                $this->response([
                        'status' => false,
                        'message' =>  'ERROR-invalid phone number(Phone number with 6-9 and remaing 9 digit with 0-9)'
,
                    ], REST_Controller::HTTP_OK);
        }
                        

                         $email = $this->input->post('email');

                                         $mails=$this->EzPet_model->mails($email);
                             if($mails==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 'message ERROR-invalid email',
                    ], REST_Controller::HTTP_OK);
        }
               $pet_name = $this->input->post('pet_name');
                  $name=$this->EzPet_model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)' ,
                    ], REST_Controller::HTTP_OK);
        }

        $pet_breed = $this->input->post('pet_breed');
                $safety=$this->input->post('safety');
                 
           if(!empty($first_name)&& !empty($phone)&& !empty($email) && !empty($pet_name) && !empty($pet_breed) && !empty($safety) )
                                    
        {
             $userData = array(
                 'first_name' =>$first_name, 
                 'phone' => $phone,
                 'email' => $email,
                 
                'pet_name' => $pet_name,
                'pet_breed' => $pet_breed,
                'safety'=>$safety
                   );


                $insert= $this->db->insert('petsafety',$userData);

             if($insert)
             {
                $this->response([
                    'status' => TRUE,
                    'message' => 'Data has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_OK);

             }

          }
           else
    {
                                $this->response(['status' => False,
                                                'message' => 'please fill all fields.'

                                                ], REST_Controller::HTTP_OK);
                               
                                
    }

}
   
        
    public function accessories_post()
    {
         $this->load->view('accessories');

               $pet_name = $this->input->post('pet_name');
                  $name=$this->EzPet_model->name($pet_name);
              if($name==false)
        {
                $this->response([
                        'status' => false,
                        'message' => 
'ERROR-invalid name(digits and special characters are not allowed)',
                    ], REST_Controller::HTTP_OK);
        }

                $pet_breed = $this->input->post('pet_breed');
                $acces=$this->input->post('acces');
         
           if(!empty($pet_name) && !empty($pet_breed) && !empty($acces)  )
                                    
        {
             $userData = array(
                 'pet_name' => $pet_name,
                'pet_breed' => $pet_breed,
                'acces'=>$acces
                //check box

               

                    );


                $insert= $this->db->insert('acces',$userData);

             if($insert)
             {
                $this->response([
                    'status' => TRUE,
                    'message' => 'Data has been added successfully.'],REST_Controller::HTTP_OK);
             }
             else 
             {
                //set responsive and exit
                $this->response("Please try again.", REST_Controller::HTTP_OK);

             }

          }
           else
    {
                                 $this->response([
                                                'status' => False,
                                                'message' => 'please fill all fields.'

                                                ], REST_Controller::HTTP_OK);
                                                        
    }

}
  
        
   

  
   


       }
