<?php
class Queries extends CI_Model{
	 
 public function insertImage($data){
 		return $this->db->insert('user',$data);
 }

 public function getImages(){
 	$query = $this->db->get('user');
 	if($query->num_rows() > 0)
{
	return $query->result();
 }
}

}
?>