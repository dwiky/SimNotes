<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notes extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
//		$this->load->view('header');
//		$this->load->view('home');
//		$this->load->view('footer');
	}
    
    public function openNewSingleNotes()
	{
		$this->load->view('create_note');
    }
    
    public function createNotes()
	{
        $this->load->model('notes_model');
        $date=$this->input->post('date');
        $newDate = date_format(date_create_from_format('m/d/Y', $date), 'Y-m-d');
        $data=array(
            'judul'=>$this->input->post('title'),
            'tanggal'=>$newDate,
            'negara'=>$this->input->post('country'),
            'kota'=>$this->input->post('state'),
            'content'=>$this->input->post('content')
        );
        $flag=$this->notes_model->create_note($data);
        if($flag==1){
            header("location:".base_url(""));
        } else {
            //$this->load->view('delete-unsuccessfull');
        }
	}
    
    public function readNotes()
	{
        $this->load->model("notes_model");
        $data["query"]=$this->notes_model->read_note();
        $this->load->view('header');
		$this->load->view('home', $data);
        $this->load->view('footer');
    }
    
    public function readSingleNotes()
	{
        $this->load->model("notes_model");
        $id=$this->input->post('id');
        $data["query"]=$this->notes_model->read_single_note($id);
		$this->load->view('read_note', $data);
    }
    
    public function deleteSingleNotes($id)
	{
        $this->load->model("notes_model");
        $flag=$this->notes_model->delete_single_note($id);
		if($flag==1){
            header("location:".base_url(""));
        } else {
            //$this->load->view('delete-unsuccessfull');
        }
    }
    
    public function openEditSingleNotes()
	{
        $this->load->model("notes_model");
        $id=$this->input->post('id');
        $data["query"]=$this->notes_model->read_single_note($id);
		$this->load->view('edit_note', $data);
    }
    
    public function editSingleNotes()
	{
        $this->load->model('notes_model');
        $date=$this->input->post('date');
        $newDate = date_format(date_create_from_format('m/d/Y', $date), 'Y-m-d');
        $data=array(
            'id'=>$this->input->post('id'),
            'judul'=>$this->input->post('title'),
            'tanggal'=>$newDate,
            'negara'=>$this->input->post('country'),
            'kota'=>$this->input->post('state'),
            'content'=>$this->input->post('content')
        );
        $flag=$this->notes_model->update_single_note($data);
		if($flag==1){
            header("location:".base_url(""));
        } else {
            //$this->load->view('delete-unsuccessfull');
        }
	}

}


//   