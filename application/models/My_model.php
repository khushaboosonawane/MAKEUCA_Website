<?php
defined("BASEPATH") or exit("no direct script access is allowed");

class My_model extends CI_Model{
    public function insert($tablename,$data){
        $this->db->insert($tablename,$data);
    }
    public function select($tablename,$cond=null){
        if($cond != null){
            return $this->db->where($cond)->get($tablename)->result_array();
        }
        return $this->db->get($tablename)->result_array();
    }
    public function update($tablename,$data,$cond=null){
        if($cond != null){
            $this->db->where($cond)->update($tablename,$data);
        }
        $this->db->update($tablename,$data);
    }
    public function update_cond($tablename,$data,$cond){
        $this->db->where($cond)->update($tablename,$data);
    }
    public function select_image($tablename,$cond,$colname){
        return $this->db->select($colname)->from($tablename)->where($cond)->get()->result_array();
    }
    public function delete($tablename,$cond){
        $this->db->delete($tablename,$cond);
    }
}
?>

