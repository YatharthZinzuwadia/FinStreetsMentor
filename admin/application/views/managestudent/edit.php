<div class="container" >
    <div class="col-md-6" >
            <div class="navbar-inner block-header">
           
                    <form class="form-horizontal" action="" method="post">
                        <fieldset>
                            <legend><h3><?= $page_heading; ?></h3></legend>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Enter User Name :</label>
                                <div class="controls">
                                    <input class="form-control" id="focusedInput" type="text" value="<?= $row['username']; ?>" placeholder="Username" name="username" required="" style="color: black;">
                                </div>
                                <br>

                                <label class="control-label" for="focusedInput">Enter Password :</label>
                                <div class="controls">
                                    <input class="form-control" id="focusedInput" type="text" value="<?= $row['password']; ?>" placeholder="Username" name="password" required="" style="color: black;">
                                </div>
                                <br>
                                <label class="control-label" for="focusedInput">Role</label>
                                <div class="controls">
                                    <input class="form-control" id="focusedInput" name="role_id" value="<?= $row['role_name']; ?>" disabled="" style="color: black;"/>
                                </div>

                            </div>
                            <br>
                            <div class="form-actions">
                                <input type="hidden" name="user_id" value="<?= $row['user_id']; ?>"/>
                                <input type="hidden" name="role_id" value="<?= $row['role_id']; ?>"/>
                                <button type="submit" class="btn btn-primary" name="sub">Save changes</button>
                                <button type="reset" class="btn btn-danger">Cancel</button>
                            </div>
                        </fieldset>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <!-- /block -->
</div>
