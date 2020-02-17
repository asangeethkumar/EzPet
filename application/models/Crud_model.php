<?php
class Crud_model extends CI_Model 
{
	/*Insert*/
	function saverecords($first_name,$last_name,$email)
	{

	$query="insert into signup values('','$first_name','$last_name')";
	$this->db->query($query);
	}
	
}