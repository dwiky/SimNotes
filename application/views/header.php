<?php
if(!empty($this->session->userdata("email")))
$username=$this->session->userdata("username");

defined('BASEPATH') OR exit('No direct script access allowed');
if (empty($username)) {$login=false;}
else {$login=true;}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>My Simple Notes</title>

    <!-- font-awesome -->
<!--    <link href="<?php echo base_url('assets/fonts/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet">-->
    
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugin/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>" >
    <link rel="stylesheet" href="<?php echo base_url('assets/plugin/bootstrap-datepicker/css/bootstrap-datepicker.min.css');?>" >
    <link rel="stylesheet" href="<?php echo base_url('assets/css/semantic.min.css');?>" >
    
    <!-- Scripts -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.4.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/countries.js');?>"></script>
    <script src="<?php echo base_url('assets/plugin/bootstrap/js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/semantic.min.js');?>"></script>
    <script src="<?php echo base_url('assets/plugin/bootstrap-datepicker/js/bootstrap-datepicker.min.js');?>"></script>
    
    
    <!-- Page Icon -->
    <link rel="icon"  type="image/png" href="<?php echo base_url('assets/image/icon.png'); ?>"/> 
</head>
    
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url('assets/image/logo.gif');?>" alt=""></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a class="addNote" href="#" data-toggle="modal" data-target=".modal">Add-Notes</a></li>
        <?php if($login==true) {
            echo'
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$username.'<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="'.base_url('signout').'">Sign Out</a></li>
            <li><a href="'.base_url('profile').'">My Profile</a></li>
          </ul>
        </li>
        ';} else {
            echo'
        <li><a href="'.base_url('signin').'">SignIn</a></li>
        <li><a href="'.base_url('signup').'">SignUp</a></li>
            ';}
          ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>
</nav>

