<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Test extends CI_Controller {


    function index()
    {
        $this->load->model('test_model');      
		$data['title'] = $this->test_model->testfunc();
		$data['heading'] = "Controller'dan gelen değişken";
        
        //aşağıda dizi değişken atanıyor
        $data['todo_list'] = array('Clean House', 'Call Mom', 'Run Errands');
        
        $this->load->view('test_viewer',$data);
    }
 
}
/*
        $this->load->model('say_Hello_model');
        $profile=$this->say_Hello_model->getProfile("Ali");
        $data['profile']=$profile;
        $this->load->view('pass_DataFromModel_view',$data);
*/
?>