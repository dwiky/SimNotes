      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="text-align:center">New Notes</h4>
      </div>
      <div class="modal-body">
        <div id="new-notes">
            <form class="createNotesForm">
                <div class="form-group">
                    <input type="text" class="form-control" id="judul" name="title" placeholder="Title" required>
                </div>
                <div class="form-group">
                    <div class="input-group date" data-provide="datepicker">
                        <input type="text" class="form-control" placeholder="Date" name="date" required>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <select class="form-control ui search selection dropdown" id="country" name ="country" required>
                    <option value="">Select Country</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control ui search selection dropdown" name ="state" id ="state" required>
                    <option value="">Select State</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="8" name="content" id="content" placeholder="Your Notes" required></textarea>
                </div>

                <input type="submit" class="col-md-12 col-xs-12 btn btn-default" value="Submit"></a>
            </form>
        </div>
      </div>

<!--countries.js-->
<script language="javascript">
	populateCountries("country", "state");
</script>

<script>
$('#country')
  .dropdown();
$('#state')
  .dropdown();
</script>

<!-- create new notes -->
<script>
    var frm = $('.createNotesForm');
    frm.submit(function (ev) { 
        var url="<?php echo base_url('/notes/createNotes'); ?>";
        var data=frm.serializeArray();
        $.post(url,data).done(function(data) {
            
        }).fail(function(data) {
            alert('Failed to send');
      });
    });
    
</script>