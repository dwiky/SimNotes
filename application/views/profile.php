

<div id="profile">
    <div class="container">
        <div class="col-md-8 col-md-offset-2" style="min-height:400px">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="">
                        <div class="col-md-12"><h3 style="text-align:center;    margin-top: 20px;">My Profile</h3></div>
                        <div class="col-md-5" style="text-align:center;">
                            <a id="profilepict" href="#" data-toggle="modal" data-target=".modal">
                                <img  src="<?php echo base_url($row->img_path);?>" alt="">
                                <span><h4 style="color:white">Change Image</h4></span>
                            </a>
                        </div>
                        <div class="col-md-7" id="profile-text">
                            <p>Name: <?php echo $row->nama; ?></p>
                            <p>Username: <?php echo $row->username; ?></p>
                            <p>Email: <?php echo $row->email; ?></p>
                            <p>Number of Notes: <?php echo $row->jumlah;?> Notes</p>
                        </div>
<!--
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
-->
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