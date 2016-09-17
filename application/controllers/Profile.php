<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
        $this->load->model("user_model");
        $this->load->library('session');
        $email=$this->session->userdata("email"); 
        $query=$this->user_model->read_profile($email);
        $row=$query->row();
        $data["row"]=$row;
		$this->load->view('header');
		$this->load->view('profile',$data);
		$this->load->view('footer');
	}
    
    public function changeProfilePict()
	{
		$this->load->view('changeprofilepict');
    }
    
    public function ChangePPProcess()
	{
        $this->load->library('session');
        $this->load->model("user_model");
        $username=$this->session->userdata("username"); 
        $email=$this->session->userdata("email"); 
        
        if(is_array($_FILES)) {
            if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
                $imageFileType = pathinfo(basename($_FILES["userImage"]["name"]),PATHINFO_EXTENSION);
                $name=$username.".";
                $sourcePath = $_FILES['userImage']['tmp_name'];
                $targetPath = "assets/image/user/" .$name .$imageFileType;
                move_uploaded_file($sourcePath,$targetPath);
                $imgpath=$this->compress($targetPath, $targetPath, 50);
                $data=array(
                    'email'=>$email,
                    'img_path'=>$imgpath
                );
                $flag=$this->user_model->update_profile($data);
                echo '<h4 style="text-align:center">Profile Picture Changed</h4>
                    <button type="button" class="col-md-12 btn btn-default" data-dismiss="modal" aria-label="Close">Close</button>';
                if($flag==1) {
                    ?>
                    alert("Success");
                    <?php
                } else {
                }
            }
        } 
    }
    
    public function compress($source, $destination, $quality)
    {
        $info = getimagesize($source);
        if ($info['mime'] == 'image/jpeg') 
            $image = imagecreatefromjpeg($source);
        elseif ($info['mime'] == 'image/gif') 
            $image = imagecreatefromgif($source);
        elseif ($info['mime'] == 'image/png') 
            $image = imagecreatefrompng($source);
        imagejpeg($image, $destination, $quality);
        return $destination;
    }

}

?>