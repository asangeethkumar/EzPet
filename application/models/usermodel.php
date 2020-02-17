<?php
class UserModel extends CI_Model {
 
 function __construct(){
  parent::__construct();
 }
 
 function processLogin($userName=NULL,$password){
  $this->db->select("USER_ID,USER_NAME,FIRST_NAME,LAST_NAME");
  $whereCondition = $array = array('USER_NAME' =>$userName,'PASSWORD'=>$password);
  $this->db->where($whereCondition);
  $this->db->from('TRN_USER');
  $query = $this->db->get();
  return $query;
 }
 
}
?>