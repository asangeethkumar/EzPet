<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Menu extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
  $this->load->model('Menu_model');
 }
 
 public function get_menus() {
    $this->load->model('your_model');
    $menus = $this->your_model->menus();
    $data = array('menus' => $menus);
    $this->load->view('page1', $data);
}

}