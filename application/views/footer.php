<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

    </div>
  </div>
</div>

<!--datepicker.js-->
<script language="javascript">
    $('.datepicker').datepicker({
        dateFormat: 'dd-mm-yy'
     });
</script>

<!--//change navbar color-->
<script>
   $(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('#main-content');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $(".navbar-default").addClass("change-color-bg");
          $(".navbar-default .navbar-nav li a").css("color", "white");
          $(".navbar-default .navbar-toggle").css("border-color", "white");
          $(".navbar-default .navbar-toggle .icon-bar").css("background-color","#ece9e9");
       } else {
          $('.navbar-default').removeClass("change-color-bg");
          $(".navbar-default .navbar-nav li a").css("color", "black");
          $(".navbar-default .navbar-toggle").css("border-color", "#aaa");
          $(".navbar-default .navbar-toggle .icon-bar").css("background-color","#aaa");
           
       }
   });
}
});
</script>

<!--call new note form-->
<script>
    $('.addNote').click(function() {
        var url="<?php echo base_url('notes/openNewSingleNotes');?>" 
        $('#myModal .modal-content').load(url);
    });
</script>

 
<!--read single note-->
<script>
    var curId = $('.singNote').attr('id')
    $('.singNote').click(function() {
        var curId = $(this).attr('id');
        var url="<?php echo base_url('/notes/readSingleNotes/'); ?>";
        $.post( url, {id: curId} ).done(function( data ) {
            $('#myModal .modal-content').html(data); 
          });
      });
</script>

<!--call edit note form-->
<script>
    function editNotes($id) {
        var url="<?php echo base_url('notes/openEditSingleNotes');?>" 
        $.post( url, {id: $id} ).done(function( data ) {
            $('#myModal .modal-content').html(data); 
        });
    }
</script>

<script>
 	if(transparent==true){
        $(".navbar-default").css("background-color","transparent");
 	}
</script>
<footer class="">
Created by: Rudwiky Okta Putra
</footer>
</html>