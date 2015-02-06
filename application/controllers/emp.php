<?php

class Emp extends CI_Controller
{

  function GetAll()
  {
     $this->load->model('emp_model'); 
     $data['query']=$this->emp_model->emp_getall();
     $this->load->view('emp_viewall',$data);
  }
}
?>