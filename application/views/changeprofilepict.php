
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" style="text-align:center">Change Profile Picture</h4>
      </div>
      <div class="modal-body">
        <div id="changePict" style="text-align:center;">
            <div id="targetLayer" style="min-height:50px; max-height:300px;background-color:grey">
                <img id="previewHolder" alt="No Image" style="max-width:100%;max-height:300px"/>
            </div>
            <form id="uploadForm" style="margin-top: 30px;">
                <div class="form-group">
                    <input type="file" class="form-control" id="imageUpload" name="userImage" required>
                </div>
                <input type="submit" class="col-md-12 col-xs-12 btn btn-default" value="Submit"></a>
            </form>
        </div>
      </div>

<!--preview image before upload-->
<script type="text/javascript">
$(document).ready(function (e){
    $("#imageUpload").on('change', function () {
        readURL(this);
    });
});  
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#previewHolder').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
</script>

<!--uploading image-->
<script type="text/javascript">   
$(document).ready(function (e) {
	$("#uploadForm").on('submit',(function(e) {
		e.preventDefault();
		$.ajax({
        	url: "<?php echo base_url('profile/ChangePPProcess');?>",
			type: "POST",
			data:  new FormData(this),
			contentType: false,
    	    cache: false,
			processData:false,
			success: function(data)
		    {
			$("#changePict").html(data);
		    },
		  	error: function() 
	    	{
	    	} 	        
	   });
	}));
});
</script>
