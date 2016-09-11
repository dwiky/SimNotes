<?php
if(!empty($this->session->userdata("username")))
$username=$this->session->userdata("username");

defined('BASEPATH') OR exit('No direct script access allowed');
if (empty($username)) {$login=false;}
else {$login=true;}
if ($login==false) {header("location:".base_url("signin"));}
?>

<div id="main-content">
    <div class="container">
    
    <div id="createHomeNote" class=" col-md-8 col-md-offset-2" data-toggle="modal" data-target=".modal">
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control addNote" placeholder="Create New Note.." >
                <div class="input-group-addon">
                    <span class="glyphicon glyphicon-pencil"></span>
                </div>
            </div>
        </div>
    </div><br><br><br><br>
        
    <?php 
        foreach($query->result() as $row){
            echo'
    <div class="col-md-4 notes">
        <a class="singNote" href="#" data-toggle="modal" data-target=".modal" id='.$row->id.'>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="vertical-align">
                        <h3>'.$row->judul.'</h3>
                        <p class="place-date">'.$row->kota.'-'.$row->negara.', '.$row->tanggal.'</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    ';}
    ?>

    </div>
</div>

</body>