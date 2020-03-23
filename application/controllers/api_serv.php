<?php
   if (!defined('BASEPATH')) exit('NO direct script access allowed');
 

   require APPPATH . '/libraries/REST_Controller.php';
   use Restserver\Libraries\REST_Controller;
     
class api_serv extends REST_Controller 
{

    public function Petsitter_post()
    {
    		 $this->load->view('Petsitter');
       
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

         
             $userData = array(


                 'first_name' =>$this->input->post('first_name'), 
                 'phone' => $this->input->post('phone'),
                 'email' => $this->input->post('email'),
                 'ephone' => $this->input->post('ephone'),
                 
                'pet_name' => $this->input->post('pet_name'),
                'paddress' => $this->input->post('paddress'),
                'daddress' => $this->input->post('daddress'),
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

         
             $userData = array(
                'pet_name' => $this->input->post('pet_name'),
                        'pet_breed' => $this->input->post('pet_breed'),
                        'food' => $this->input->post('food'),
                            'pet_food_quantity' => $this->input->post('pet_food_quantity'),
                            'gender' => $this->input->post('gender'),

   
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

             $userData = array(
                 'first_name' =>$this->input->post('first_name'), 
                 'phone' => $this->input->post('phone'),
                 'email' => $this->input->post('email'),
                 'ephone' => $this->input->post('ephone'),
                'pet_name' => $this->input->post('pet_name'),
                'pet_breed' => $this->input->post('pet_breed'), 
                'level' => $this->input->post('level'), 
                 
                 
                
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
  

           public function dogplayground()
           {
        

                 $this->load->view('dogplayground');

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
        
                
           public function globalpet()
    {
        
                $this->load->view('globalpet');

         
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
            public function funeral()
             {
       
              $this->load->view('funeral');

                
         


             $userData = array(
                 'first_name' =>$this->input->post('first_name'), 
                 'phone' => $this->input->post('phone'),
                 'email' => $this->input->post('email'),
                 
                'pet_name' => $this->input->post('pet_name'),
                'pet_breed' => $this->input->post('pet_breed'),
                
                'birth' => $this->input->post('birth'),

                'death' => $this->input->post('death'),

                               
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

           public function petfashionoutlet()
    {
        
         $this->load->view('petfasionoutlet');


         
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


            public function dia()
    {
        
              $this->load->view('dia');


             $userData = array(
                'pet_name' => $this->input->post('pet_name'),
                'pet_breed' => $this->input->post('pet_breed'),
                'pet_age' => $this->input->post('pet_age'),
                'size' => $this->input->post('size'),
                 
               

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
         
             $userData = array(
                'pet_name' => $this->input->post('pet_name'),
                'pet_breed' => $this->input->post('pet_breed'),
                'pet_size' => $this->input->post('pet_size'),
                'color' => $this->input->post('color')

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



   
        
  
        
   

  
   


       }
