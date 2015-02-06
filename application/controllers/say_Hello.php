<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header('Content-Type: text/html; charset=utf-8');
class Say_Hello extends CI_Controller{
    /*
    public function __construct(){
    parent::__construct();
    echo "This is the initialization <br />";
    }*/
    public function index() {
        echo "This is the index";
    }
    public function one($p1,$p2="param2") {
        echo "This is the one";
        echo "These are the params:$p1,$p2";
    }
    public function two() {
        echo "This is the second function/method";
    }
    public function three() {
        $this->load->view('say_Header');
        $this->load->view('say_Hello_view');
    }
    public function pass($name) {
        $this->load->view('say_Header');
        $this->load->view('say_Hello_view');
        $data=array('n' => $name);
        $this->load->view('pass_Data_view',$data);
    }
    public function theModel($name){
        $this->load->model('say_Hello_model');
        $profile=$this->say_Hello_model->getProfile("Ali");
        print_r($profile);
    }
    public function fromModelToView($name){
        $this->load->model('say_Hello_model');
        $profile=$this->say_Hello_model->getProfile("Ali");
        $data['profile']=$profile;
        $this->load->view('pass_DataFromModel_view',$data);
    }
}
?>