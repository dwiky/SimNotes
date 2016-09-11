<?php
class User_model extends CI_Model{
	function signin($data){
        $email=$data["email"];
        $password=$data["password"];
  		$this->load->database();
  		$this->db->select("*");
  		$wherecondition = array('email'=>$email, 'password'=>$password);
  		$this->db->where($wherecondition);
  		$this->db->from("user");
  		$query=$this->db->get();
        return $query;
	}
}