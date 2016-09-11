<?php 
    foreach($query->result() as $row){
            echo'
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title">'.$row->judul.'</h4>
    <p class="place-date">'.$row->kota.' - '.$row->negara.', '.$row->tanggal.'</p>
</div>
<div class="modal-body"> 
    <p class="content">'.$row->content.'</p>
    <div id="buttons">
        <div class="col-md-6 col-xs-12">
            <a class="btn btn-default" onclick="editNotes(\''.$row->id.'\')">Edit</a>
        </div>
        <div class="col-md-6 col-xs-12">
            <a class="btn btn-danger" href="'.base_url("notes/deleteSingleNotes")."/".$row->id.'" >Delete</a>
        </div>
    </div>
</div>
    ';}
    ?>
