<?php
defined("BASEPATH") or exit("No direct script access is allowed");

class Admincontroller extends CI_Controller{
    public function __constructor(){
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
        if(!isset($_SESSION['admin_id'])){
            redirect(base_url()."adminlogincontroller/");

            
        }

    }
    private function nav(){
        if(isset($_SESSION['admin_id'])){
            $data['admin_data']=$this->My_model->select("admin_tbl",['admin_id'=>$_SESSION['admin_id']]);
            $this->load->view("admin/nav",$data);
        }
    }
    private function footer(){
        $this->load->view("admin/footer");
    }
    private function ov($filename,$data=null){
        $this->nav();
        $this->load->view("admin/".$filename,$data);
        $this->footer();
    }
    public function index(){
        $this->ov("index");
    }
    public function basic_info(){
        $data['basic_info']=$this->My_model->select("basic_info_tbl");
        $this->ov("basic_info",$data);
    }
    public function update_basic_info(){
        if($_FILES['class_logo']['name']!=""){
            $filename=($this->My_model->select_image("basic_info_tbl",['basic_id'=>1],"class_logo"))[0]['class_logo'];
            unlink("public/upload/class_logo/$filename");

            $class_logo=time().rand(1111,9999).$_FILES['class_logo']['name'];
            move_uploaded_file($_FILES['class_logo']['tmp_name'],"public/upload/class_logo/$class_logo");
            $_POST['class_logo']=$class_logo;
            if(isset($_SESSION['admin_id'])){
                $_POST['admin_id']=$_SESSION['admin_id'];
                $_POST['entry_time']=time();
                $_POST['status']='Active';
            }
            $this->My_model->update_cond("basic_info_tbl",$_POST,['basic_id'=>1]);
            redirect(base_url()."admincontroller/basic_info");
        }
        else{
            if(isset($_SESSION['admin_id'])){
                $_POST['admin_id']=$_SESSION['admin_id'];
                $_POST['entry_time']=time();
                $_POST['status']='Active';
            }
            $this->My_model->update_cond("basic_info_tbl",$_POST,['basic_id'=>1]);
            redirect(base_url()."admincontroller/basic_info");
        }
    }
    public function slider(){
        $data['slider_data']=$this->My_model->select("slider_tbl");
        $this->ov("slider",$data);
    }
    public function save_slider_info(){ 
        $slider_image=time().rand(1111,9999).$_FILES['slider_image']['name'];
        $_POST['slider_image']=$slider_image;
        if(isset($_SESSION['admin_id'])){
            $_POST['admin_id']=$_SESSION['admin_id'];
            $_POST['entry_time']=time();
            $_POST['status']='Active';
        }
        move_uploaded_file($_FILES['slider_image']['tmp_name'],"public/upload/slider_image/$slider_image");
        $this->My_model->insert("slider_tbl",$_POST);
        redirect(base_url()."admincontroller/slider");

    }
    public function edit_slider($slider_id){
        $data['slider_data']=$this->My_model->select("slider_tbl",['slider_id'=>$slider_id]);
        $this->ov("edit_slider",$data);
    }
    public function update_slider_info(){
        if($_FILES['slider_image']['name']!=""){
            $filename=($this->My_model->select_image("slider_tbl",['slider_id'=>$_POST['slider_id']],"slider_image"))[0]['slider_image'];
            unlink("public/upload/slider_image/$filename");
            $slider_image=time().rand(1111,9999).$_FILES['slider_image']['name'];
            move_uploaded_file($_FILES['slider_image']['tmp_name'],"public/upload/slider_image/$slider_image");
            $_POST['slider_image']=$slider_image;
            if(isset($_SESSION['admin_id'])){
                $_POST['admin_id']=$_SESSION['admin_id'];
                $_POST['entry_time']=time();
                $_POST['status']='Active';
            }
            $this->My_model->update_cond("slider_tbl",$_POST,['slider_id'=>$_POST['slider_id']]);
            redirect(base_url()."admincontroller/slider");
        }else{
            if(isset($_SESSION['admin_id'])){
                $_POST['admin_id']=$_SESSION['admin_id'];
                $_POST['entry_time']=time();
                $_POST['status']='Active';
            }
            $this->My_model->update_cond("slider_tbl",$_POST,['slider_id'=>$_POST['slider_id']]);
            redirect(base_url()."admincontroller/slider");
        }
    }
    public function delete_slider($slider_id){
        $filename=($this->My_model->select_image("slider_tbl",['slider_id'=>$_POST['slider_id']],"slider_image"))[0]['slider_image'];
            unlink("public/upload/slider_image/$filename");
        $this->My_model->delete("slider_tbl",['slider_id'=>$slider_id]);
        redirect(base_url()."admincontroller/slider");
    }
    public function course(){
        $data['course_data']=$this->My_model->select("course_tbl");
        $this->ov("course",$data);
    }
    public function save_course(){
        if(isset($_SESSION['admin_id'])){
            $_POST['admin_id']=$_SESSION['admin_id'];
            $_POST['entry_time']=time();
            $_POST['status']='Active';
        }
        $this->My_model->insert("course_tbl",$_POST);
        redirect(base_url()."admincontroller/course");
    }
    public function edit_course($course_id){
        $data['course_data']=$this->My_model->select("course_tbl",['course_id'=>$course_id]);
        $this->ov("edit_course",$data);
    }
    public function update_course(){
        if(isset($_SESSION['admin_id'])){
            $_POST['admin_id']=$_SESSION['admin_id'];
            $_POST['entry_time']=time();
            $_POST['status']='Active';
        }
        $this->My_model->update_cond("course_tbl",$_POST,['course_id'=>$_POST['course_id']]);
        redirect(base_url()."admincontroller/course");
    }
    public function delete_course($course_id){
        $this->My_model->delete("course_tbl",['course_id'=>$course_id]);
        redirect(base_url()."admincontroller/course");
    }

    // Admin Information 

    public function admin(){
        $data['admin_data']=$this->My_model->select("admin_tbl");
        $this->ov("admin_details",$data);
    }
    public function save_admin_info(){
        if($_FILES['admin_img']['name']!=""){
            $admin_img=time().rand(1111,9999).$_FILES['admin_img']['name'];
            move_uploaded_file($_FILES['admin_img']['tmp_name'],"public/upload/admin_image/$admin_img");
            $_POST['admin_img']=$admin_img;
            $this->My_model->insert("admin_tbl",$_POST);
            redirect(base_url()."admincontroller/admin");
        }
        else{
            $this->My_model->insert("admin_tbl",$_POST);
            redirect(base_url()."admincontroller/admin");
        }
    }
    public function edit_admin($admin_id){
        $data['admin_data']=$this->My_model->select("admin_tbl",['admin_id'=>$admin_id]);
        $this->ov("edit_admin",$data);
    }
    public function update_admin_info(){
        
        if($_FILES['admin_img']['name']!=""){
            $filename=($this->My_model->select_image("admin_tbl",['admin_id'=>$_POST['admin_id']],"admin_img"))[0]['admin_img'];
            unlink("public/upload/admin_image/$filename");
            $admin_img=time().rand(1111,9999).$_FILES['admin_img']['name'];
            move_uploaded_file($_FILES['admin_img']['tmp_name'],"public/upload/admin_image/$admin_img");
            $_POST['admin_img']=$admin_img;
            $this->My_model->update_cond("admin_tbl",$_POST,['admin_id'=>$_POST['admin_id']]);
            redirect(base_url()."admincontroller/admin");
        }else{
            $this->My_model->update_cond("admin_tbl",$_POST,['admin_id'=>$_POST['admin_id']]);
            redirect(base_url()."admincontroller/admin");
        }
    }
    public function delete_admin($admin_id){
        $filename=($this->My_model->select_image("admin_tbl",['admin_id'=>$admin_id],"admin_img"))[0]['admin_img'];
        unlink("public/upload/admin_image/$filename");
        $this->My_model->delete("admin_tbl",['admin_id'=>$admin_id]);
        redirect(base_url()."admincontroller/admin");
    }
}
?>