<?php
defined("BASEPATH") or exit("No direct script access is allowed");

class Adminlogincontroller extends CI_Controller{
    function __construct(){
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        if(isset($_SESSION['admin_id'])){
            redirect(base_url()."admincontroller/");
            exit();
        }
    }
    public function index(){
        $this->load->view("login/index");
    }
    public function process(){
        if(isset($_POST['admin_email']) && isset($_POST['admin_password'])){
            $admin_data=$this->My_model->select("admin_tbl",['admin_email'=>$_POST['admin_email'],"admin_password"=>$_POST['admin_password']]);
            if(count($admin_data)>0){
                $_SESSION['admin_id']=$admin_data[0]['admin_id'];
                redirect(base_url()."admincontroller/");
            }else{
                echo "no data found";
            }
        }
    }
}
?>
