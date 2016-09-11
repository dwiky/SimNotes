<div id="signin-content">
    <div class="container">
        <div class="col-md-4 col-md-offset-4" style="min-height:300px">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="vertical-align">
                        <form class="signinForm" action="<?php echo base_url('/signIn/sendSignin'); ?>" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                            </div>
                            <div class="col-md-8"><a href="#">Don't have an account?</a></div>
                            <input type="submit" class="col-md-4 col-xs-12 btn btn-default" value="Submit"></a>
                        </form>
                    </div>
                </div>
            </div>
            <div id="alert" style="color:white;text-align:center;width:200px;">
               <p></p>
            </div>
        </div>
    </div>
</div>

</body>
<script>
    var transparent=true;
</script>

<!-- create new notes -->
<!--
<script>
    var frm = $('.signinForm');
    frm.submit(function (ev) { 
        var url="<?php echo base_url('/signIn/sendSignin'); ?>";
        var data=frm.serializeArray();
        $.post(url,data).done(function(data) {
            alert(data);
        }).fail(function(data) {
            alert('Failed to send');
      });
    });
    
</script>-->
