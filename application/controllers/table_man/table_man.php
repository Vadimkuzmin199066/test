<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

   
    class table_man extends CI_Controller
    {
         function __construct()
    {
        parent::__construct();
        $this->load->model("table_man/table_man_m");
    }

    public function index()
    { 
        $this->load->view('table_man/home_view');
    }

    public function page_read()
    {
            $_first_num=$_REQUEST['first_num'];      
            $_data_count=$_REQUEST['data_count'];   
            $data=$this->table_man_m->page_get($_first_num,$_data_count);
            echo json_encode($data);
    }

    public function register()
    {
        ChromePhp::log("ok");
        if($this->input->post('name'))
        {
            $d=$this->input->post('name');
            $this->table_man_m->insert_data();
            echo "success";
        }
    } 
  
    public function delete()
    {
        ChromePhp::log("ok");
        if($this->input->post('deleteid'))
        {
        
            $this->table_man_m->delete_data();
            echo "success";
      
        }
    }
       
    function updated_data()
    {
        ChromePhp::log("ok");
        if($this->input->post('id'))
        {

            $this->table_man_m->updated_data();
            echo "success";

        }
    }
       
 }
