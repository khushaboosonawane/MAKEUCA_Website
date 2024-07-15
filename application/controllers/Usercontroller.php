<?php
defined("BASEPATH") or exit("No direct script access allowed");

Class Usercontroller extends CI_Controller{
    private function nav(){
        $data['basic_info']=$this->My_model->select("basic_info_tbl",['status'=>"Active"]);
        $this->load->view("user/nav",$data);
    }
    private function footer(){
        $this->load->view("user/footer");
    }
    private function ov($filename,$data=null){
        $this->nav();
        $this->load->view("user/".$filename,$data);
        $this->footer();
    }
    public function index(){
        $data['slider_info']=$this->My_model->select("slider_tbl",['status'=>'Active']);
        $this->ov("index",$data);
    }
    public function contact(){
        $this->ov("contact");
    }

}
?>
