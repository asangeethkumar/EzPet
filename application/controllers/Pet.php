<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Pet extends CI_Controller { 
  function __construct() {
        parent::__construct();
		
		// Load form validation ibrary & user model
        $this->load->model('EzPet_model');
		
		// User login status
    }
	

    public function info()
	{
		
if(isset($_FILES['image']))
{
    $errors=array();
    $allowed_ext= array('jpg','jpeg','png','gif');
    $file_name =$_FILES['image']['name'];
 //   $file_name =$_FILES['image']['tmp_name'];
    $file_ext = strtolower( end(explode('.',$file_name)));


    $file_size=$_FILES['image']['size'];
    $file_tmp= $_FILES['image']['tmp_name'];
    echo $file_tmp;echo "<br>";

    $type = pathinfo($file_tmp, PATHINFO_EXTENSION);
    $data = file_get_contents($file_tmp);
    $base64 = 'data:image/' . $type . ';base64,' . md5($data);
    echo "Base64 is ".$base64;



    if(in_array($file_ext,$allowed_ext) === false)
    {
        $errors[]='Extension not allowed';
    }

    if($file_size > 2097152)
    {
        $errors[]= 'File size must be under 2mb';

    }
    if(empty($errors))
    {
		$filenamekey = md5(uniqid($_FILES["image"]["name"], true)); 

       if( move_uploaded_file($file_tmp, 'C:/xampp/htdocs/EzPet/assets/images/'.$filenamekey));
       {
        echo 'File uploaded';
       }
    }
    else
    {
        foreach($errors as $error)
        {
            echo $error , '<br/>'; 
        }
    }
					$this->load->view('menu');
 
		        $this->load->view('petinfo');  

    }	
	}

}
?>
