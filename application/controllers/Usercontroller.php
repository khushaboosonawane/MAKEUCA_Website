<?php
defined("BASEPATH") or exit("No direct script access allowed");

Class Usercontroller extends CI_Controller{
    private function nav(){
        $this->load->view("user/nav");
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
        $this->ov("index");
    }
    public function contact(){
        $this->ov("contact");
    }

}
?>
