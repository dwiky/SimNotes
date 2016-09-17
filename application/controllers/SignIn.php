<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignIn extends CI_Controller {

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
		$this->load->library('session');
		$this->load->view('header');
		$this->load->view('signin_page');
		$this->load->view('footer');
	}
    
    public function sendSignin()
	{
        $this->load->helper('url');
		$this->base = $this->config->item('base_url');
		$this->load->library('session');
        $this->load->model('user_model');
        $email=$this->input->post('email');
        $password=md5($this->input->post('password'));
        $data=array(
            'email'=>$email,
            'password'=>$password
        );
        $data["query"]=$this->user_model->signin($data);
        $username=$data["query"]->row()->username;
        $email=$data["query"]->row()->email;
        if($data["query"]!=null){
			$this->session->set_userdata('username',$username);
            $this->session->set_userdata('email',$email);
            header("location:".base_url(""));
 		} else {
            echo 'Wrong Username or Password';
        }
    }
}