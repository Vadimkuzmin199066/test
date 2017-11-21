<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class login extends CI_Controller
	{
	    public function __construct()
	    {
	         parent::__construct();
	         $this->load->library('session');
	         $this->load->model("table_man/user");
	        }

	     public function index()
	    { 
	          $this->load->view('table_man/login_view');
	    }
	       
	        function loginform()
	    { 
	         if(isset($_POST['login']) && $_POST['login']!='')
	         { 
	          $data['ResAre']=$this->user->loginvalidate();
	          if($data['ResAre'])
	          {
	              redirect( base_url().'index.php/table_man/table_man/manage');
	             
	          }
	         else
	         {
	             redirect( base_url().'index.php/table_man/table_man/index');
	            
	         }
	         }
	        }

	}
?>