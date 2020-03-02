  <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainSystem extends CI_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->model('menusys','ms');
    }

    function menu()
    {
        $this->data['menus'] = $this->ms->get_menu();
        $this->data['submenus'] = $this->ms->get_submenu();
        $this->load->view('index', $this->data);
    }

    function add_menu()
    {
        $data = array(
            'Menu_Name' => $this->input->post('mname'),
            'Menu_Link' => $this->input->post('mlink'),

        );
        $this->ms->adm($data);
    }

    function sub_menu()
    {
        $this->data['mmenu'] = $this->ms->get_menu();
        $this->load->view('submenu', $this->data);
    }


    function add_submenu()
    {
        $data = array(
            'Main_Menu_Name' => $this->input->post('mmname'),
            'Sub_Menu_Name' => $this->input->post('mname'),
            'Sub_Menu_Link' => $this->input->post('mlink'),

        );
        $this->ms->adsm($data);
    }

}

?>