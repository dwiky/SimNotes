  <?php 
    $row=$query->row();
            echo'
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="text-align:center">Edit Notes</h4>
      </div>
      <div class="modal-body">
        <div id="new-notes">
            <form class="editNotesForm" method="post" id="'.$row->id.'">
                <div class="form-group">
                    <input type="text" class="form-control" style="display:none;" id="id" name="id" placeholder="Id" value="'.$row->id.'">
                    <input type="text" class="form-control" id="judul" name="title" placeholder="Title" value="'.$row->judul.'" required>
                </div>
                <div class="form-group">
                    <div class="input-group date" data-provide="datepicker">
                        <input type="text" class="form-control" placeholder="Date" name="date" value="'.$row->tanggal.'" required>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <select class="form-control ui search selection dropdown" id="country" name ="country" required>
                    <option selected="selected">'.$row->negara.'</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control ui search selection dropdown" name ="state" id ="state" required>
                    <option selected="selected" >'.$row->kota.'</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="8" name="content" id="content" placeholder="Your Notes" required >'.$row->content.'</textarea>
                </div>

                <input type="submit" class="col-md-12 col-xs-12 btn btn-default" value="Submit"></a>
            </form>
        </div>
      </div>
    ';
    ?>

<!-- countries.js -->
<script language="javascript">
	populateCountries("country", "state");
</script>


<script>
    $('#country option[value=<?php echo $row->negara;?>]').attr('selected','selected');
    $('#states option[value=<?php echo $row->kota;?>]').attr('selected','selected');
</script>
<script>
$('#country')
  .dropdown();
$('#state')
  .dropdown();
</script>

<!-- send edit note -->
<script>
    var frm = $('.editNotesForm');
    frm.submit(function (ev) { 
        var url="<?php echo base_url('/notes/editSingleNotes'); ?>";
        var data=frm.serializeArray();
        data.push({id:$(this).attr('id')});
        $.post(url,data).done(function(data) {
            alert(data);
        }).fail(function(data) {
            alert('Failed to send');
      });
    });
</script>