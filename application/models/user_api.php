<?php

defined('BASEPATH') OR exit('No direct script access allowed');



/**

*

*/

class User_model extends CI_Model

{

public function read(){

   

       $query = $this->db->query("select * from `users");

       return $query->result_array();

   }



   public function insert($data){

       
		$this->AIN    = $data['AIN'];
        $this->Pet_Name    = $data['Pet_Name'];
	    $this->DOB    = $data['DOB'];                  // please read the below note
		$this->color    = $data['color'];
		$this->GENIUS    = $data['GENIUS'];
		$this->weight    = $data['weight'];
		$this->height    = $data['height'];
		$this->Microchip_or_Tattoo    = $data['Microchip_or_Tattoo'];
		$this->State_License_or_Registration    = $data['State_License_or_Registration'];
		$this->Club_or_Association_Registration    = $data['Club_or_Association_Registration'];
		$this->Pet_Sire_Name    = $data['Pet_Sire_Name '];
		$this->Pet_Sire_AIN   = $data['Pet_Sire_AIN'];
		$this->Pet_Dam_Name  = $data['Pet_Dam_Name '];
		$this->Pet_Dam_AIN    = $data['Pet_Dam_AIN'];
		$this->email    = $data['email'];
		$this->password   = $data['password'];
		$this->gender   = $data['gender'];
		$this->phone    = $data['phone'];
		

		

     //  $this->user_password  = $data['pass'];

      // $this->user_type = $data['type'];



       if($this->db->insert('users',$this))

       {    

           return 'Data is inserted successfully';

       }

         else

       {

           return "Error has occured";

       }

   }



  /* public function update($id,$data){

   

      $this->user_name    = $data['name']; // please read the below note

       $this->user_password  = $data['pass'];

       $this->user_type = $data['type'];

       $result = $this->db->update('tbl_user',$this,array('user_id' => $id));

       if($result)

       {

           return "Data is updated successfully";

       }

       else

       {

           return "Error has occurred";

       }

   }*/



   public function delete($id){

   

       $result = $this->db->query("delete from `users` where user_id = $id");

       if($result)

       {

           return "Data is deleted successfully";

       }

       else

       {

           return "Error has occurred";

       }

   }



}