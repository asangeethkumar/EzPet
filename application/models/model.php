<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Model  extends CI_Model {

    public function __construct() {
        parent::__construct();
		
		// Load the database library
        $this->load->database();
		
		$this->userTbl = 'users';
    }

    /*
     * Get rows from the users table
     */
	 
	 
	   public function name($first_name)
    {
        if ( !preg_match('~^[a-zA-Z0-9 _&\-]+$~', $first_name)) 
        
        {
            $this->form_validation->set_message('name', 'The %s field must not contain special characters');
			$names="Invalid Name";
			//echo $names;
			//echo "<br>";
			//echo "<br>";
			/*$this->response([
						'status' => false,
						'message' => 'inval',
					
					], REST_Controller::HTTP_OK);
          
		   return response;*/
		   return false;
        }
        else
        {
            return $first_name;
        }
    } 
	
	
	   public function mails($email)
    {
        if ( !preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $email)) 
        
        {
            $this->form_validation->set_message('mails', 'invalid email');
			$vars="Invalid Email";
			//echo $vars;
			//echo "<br>";
			//echo "<br>";
            return FALSE;
        }
        else
        {
            return $email;
        }
    } 
	 
	 
	 
	   public function number($phone)
    {
        if ( !preg_match('/^[6-9][0-9]{9}$/', $phone)) 
        
        {
            $this->form_validation->set_message('number', 'enter the valid number');
			$var="Invalid Phone Number";
			//echo $var;
			//echo "<br>";
			//echo "<br>";
            return FALSE;
        }
        else
        {
            return $phone;
        }
    }
	 public function pass($password)
	 {
		 if(!preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',$password))
			 {
				 
            $this->form_validation->set_message('password', 'enter the valid password');
			$var="Invalid Password";
			
			/*echo $var;
			echo "<br>";
			echo "at least one lowercase char";
			echo "<br>";
echo"at least one uppercase char";
echo "<br>";
echo"at least one digit";
echo "<br>";
echo "at least one special sign of @#-_$%^&+=§!?";
			echo "<br>";
			echo "<br>";*/
            return FALSE;
        }
        else
        {
            return $password;
        }
	
	}
	 
	/* function name($first_name)
	 {
		 if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
			$nameErr = "Only letters and white space allowed";
			return $nameErr;
			}
			else
			{
				return $first_name;
			}
	 }*/
	 
	 public function dates($date)
    {
		if ( preg_match('/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/', $date) ) {
      list($year , $month , $day) = explode('-',$date);
      return true;
   } else {
      return false;
   }
	}
	 
	 function getRules($params=array())
	 {
		    $this->form_validation->set_rules('first_name', 'First Name', 'required'); 
            $this->form_validation->set_rules('last_name', 'Last Name', 'required'); 
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check'); 
	 $this->form_validation->set_rules('password', 'password', 'required|preg_match[(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}]'); 
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
				return true;
			
			}
			else{
				
                //$insert = $this->user->insert($userData);
					return false;
			}
           
	 }
    function getRows($params = array()){
        $this->db->select('*');
        $this->db->from($this->userTbl);
        
        //fetch data by conditions
        if(array_key_exists("conditions",$params)){
            foreach($params['conditions'] as $key => $value){
                $this->db->where($key,$value);
            }
        }
        
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
			
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $this->db->count_all_results();	
            }elseif(array_key_exists("returnType",$params) && $params['returnType'] == 'single'){
				$query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->row_array():false;
            }else{
				$query = $this->db->get();
                $result = ($query->num_rows() > 0)?$query->result_array():false;
            }
        }

        //return fetched data
        return $result;
    }
	
	
	public function display_records()
	{
		$this->db->select("*");
		$this->db->from('petinfo');
		$query=$this->db->get();
	//$query=$this->db->query("select * from petinfo");
	return $query->result();
	
	
	}
    
    /*
     * Insert user data
     */
    public function insert($data){
		//add created and modified date if not exists
		if(!array_key_exists("created", $data)){
			$data['created'] = date("Y-m-d H:i:s");
		}
		if(!array_key_exists("modified", $data)){
			$data['modified'] = date("Y-m-d H:i:s");
		}
		
		//insert user data to users table
		$insert = $this->db->insert($this->userTbl, $data);
		
		//return the status
		return $insert?$this->db->insert_id():false;
    }
      public function inserts($data){
		//add created and modified date if not exists
		if(!array_key_exists("created", $data)){
			$data['created'] = date("Y-m-d H:i:s");
		}
		if(!array_key_exists("modified", $data)){
			$data['modified'] = date("Y-m-d H:i:s");
		}
		
		//insert user data to users table
		$insert = $this->db->insert($this->getc, $data);
		
		//return the status
		return $insert?$this->db->insert_id():false;
    }
    
    /*
     * Delete user data
     */
 
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