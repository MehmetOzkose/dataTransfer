<?php
class Emp_model extends CI_Model
{

  function emp_getall()
  {
       $this->load->database();
       $query=$this->db->get('kiralik');//employee is a table in the database
       return $query->result();
  }
}
?>