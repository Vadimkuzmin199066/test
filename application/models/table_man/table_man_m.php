<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class table_man_m extends CI_Model
    {
      function __construct()
        {
         parent::__construct();
        }   
        function insert_data()
        {
            $name=$this->input->post('name');
            $password=$this->input->post('password');
            $bith=$this->input->post('bith');
            $adress=$this->input->post('adress');
            $sex=$this->input->post('sex');
            $this->db->select('*');
            $this->db->from('student');
            $this->db->where('id',$id);
            $query=$this->db->get();
            if ($query->num_rows() > 0)
            {
                return true;
            } 
            $data=array(
                    'name'=>$name,
                    'password'=>$password,
                    'bith'=>$bith, 
                    'password'=>$password, 
                    'adress'=>$adress,  
                    'sex'=>$sex
            );
            $this->db->insert('student',$data);    
        }

        function page_get($first_num,$data_count)
        {

            $table_row_count = $this->db->count_all('student');

            $this->db->select('*');
            $this->db->from('student');
            $this->db->limit($data_count, $first_num);
            $query = $this->db->get();

            foreach($query->result() as $row)
            {
                $arry[]=$row;
            } 

            return array(
                    'total'=> $table_row_count,
                    'data'=> $arry
                );
        }


        function delete_data()
        {
            $id=$this->input->post('deleteid');
            $this->db->where('id', $id);
            $this->db->delete('student');
              
        }

        function updated_data()
        {
            $id=$this->input->post('id');
            $name=$this->input->post('name');
            $password=$this->input->post('password');
            $bith=$this->input->post('bith');
            $adress=$this->input->post('adress');
            $sex=$this->input->post('sex');
        
            $data=array('name'=>$name,
                            'password'=>$password,
                            'bith'=>$bith,
                            'adress'=>$adress,
                            'adress'=>$adress);
                 $this->db->where('id',$id);
                 $this->db->update('student',$data);
                 return true;    
        }
}
                
