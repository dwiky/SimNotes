<?php
class notes_model extends CI_Model{
	function create_note($data){
        $this->load->database();
		$this->db->insert('notes', $data);
        $flag=$this->db->affected_rows();
        return $flag;
	}
    
    function read_note(){
        $this->load->database();
        $this->db->select("*");
        $this->db->from("notes");
        $query=$this->db->get();
        return $query;
    }
    
    function read_single_note($id){
        $this->load->database();
        $this->db->select("*");
        $this->db->where('id',$id);
        $this->db->from("notes");
        $query=$this->db->get();
        return $query;
    }
    
    function delete_single_note($id){
        $this->load->database();
        $this->db->where('id',$id);
	    $this->db->delete('notes'); 
        $flag=$this->db->affected_rows();
        return $flag;
    }

    function update_single_note($data){
        $this->load->database();
        $this->db->where('id',$data['id']);
        $this->db->update('notes',$data);
        $flag=$this->db->affected_rows();
        return $flag;
    }
}