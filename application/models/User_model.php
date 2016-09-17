<?php
class User_model extends CI_Model{
    function read_profile($email){
        $this->load->database();
        $sql="
        select u.*, count(n.id) jumlah
        from user as u
        join notes as n on n.id_user=u.id
        where email = '$email'
        ";
//        $this->db->select("*");
//        $this->db->where('email',$email);
//        $this->db->from("user");
        $query=$this->db->query($sql);
        return $query;
    }
    
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
    
    function update_profile($data){
        $this->load->database();
        $this->db->where('email',$data['email']);
        $this->db->update('user',$data);
        $flag=$this->db->affected_rows();
        return $flag;
    }
}