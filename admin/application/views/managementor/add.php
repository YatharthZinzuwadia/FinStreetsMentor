<div class="container">
    <div class="col-md-4" >
            <div class="navbar-inner block-header">
                <div class="muted pull-left">
                    <legend><?=$page_heading;?></legend></div>

            </div>
            <div class="block-content collapse in" >
                <div class="control-group" >
                    <form method="post" action="">
					<br>
					<hr>

                    <div class="form-group">
                        <label class="control-lable" style="font-family : cursive; ">Name</label>
                        <input class="form-control" id="focusedInput" type="text" value="" placeholder="Full Name" name="full_name" required="" style="color: orangered;" required>
                    </div>
                    <div class="form-group">
                        <label class="control-lable" style="font-family : cursive; ">Username</label>
                        <input class="form-control" id="focusedInput" type="text" value="" placeholder="Username" name="username" required="" style="color: orangered;" required>
                    </div>
                    <div class="form-group">

                        <label class="control-lable" style="font-family: cursive;">password</label>
                        <input class="form-control" id="focusedInput" type="password" value="" placeholder="Password" name="password" required="" style="color: orangered;"  required >

                    </div>
					<br>
                    <div class="controls">
                        <input type="hidden" name="role_id" value="2">
                        <input type="submit" value="submit" name="sub" class="btn btn-primary" id="focusedInput"  >
                    </div>
                    </form>
                </div>




            </div>
        </div>
        <!-- /block -->
    </div>
</div>
<!-- block -->

