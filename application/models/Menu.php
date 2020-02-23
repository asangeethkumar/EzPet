<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Model{
    function __construct() {
		// Set table name
        $this->table = 'users';
    }
	
	/*
     * Fetch user data from the database
     * @param array filter data based on the passed parameters
     */
	 function menus() {
    $this->db->select("*");
    $this->db->from("menu_parents");
    $q = $this->db->get();

    $final = array();
    if ($q->num_rows() > 0) {
        foreach ($q->result() as $row) {

            $this->db->select("*");
            $this->db->from("menu_children");
            $this->db->where("fk_parent_id", $row->parent_id);
            $q = $this->db->get();
            if ($q->num_rows() > 0) {
                $row->children = $q->result();
            }
            array_push($final, $row);
        }
    }
    return $final;
}
   
}