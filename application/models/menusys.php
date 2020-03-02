<?php
defined('BASEPATH') or exit('no direct script directy allowed');

/**
 *
 */
class menusys extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function adm($data)
    {
        $this->db->set('Is_Active',0);
        $this->db->insert('main_menu',$data);
        $this->session->set_flashdata('msg', 'Meun has been added');
        redirect('MainSystem/menu');
    }


    //sub-menu Section

    public  function get_menu()
    {

        //$this->db->where('Is_Active',1);
//        $this->db->select('*');
//        $this->db->from('main_menu');
//        $this->db->join('sub_menu', 'main_menu.Menu_Name = sub_menu.Main_Menu_Name','inner');
//        $query = $this->db->get();
//        return $query->result();
//
        $query=$this->db->get_where('main_menu',array('Is_Active'=>1));
        return $query->result();

    }
    function get_submenu()
    {
        $this->db->where('main_menu.Menu_Name = sub_menu.Main_Menu_Name');
        $this->db->select('*');
        $this->db->from('sub_menu');
        $this->db->join('main_menu', 'main_menu.Menu_Name = sub_menu.Main_Menu_Name','inner');
        $query = $this->db->get();
        return $query->result();


    }

    public function adsm($data)
    {
        $this->db->set('Is_Active',1);
        $this->db->insert('sub_menu',$data);
        $this->session->set_flashdata('msg', 'Meun has been added');
        redirect('MainSystem/menu');
    }


}