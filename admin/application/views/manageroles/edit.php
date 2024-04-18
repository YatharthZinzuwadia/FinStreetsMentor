<div class="container">
    

        <!-- block -->
        <div >
            <div class="navbar-inner block-header">
               
                <legend><h3><?= $page_heading; ?></h3></legend></div>
                
            
            </div>
        
            <div class="col-md-4">
                <div class="control-group">
                    <form method="post" action="">
                    
                    <label class="control-label" id="focusedInput">Update Role Name</label>
                    <div class="form-group">
                        <input class="form-control" id="focusedInput" type="text"  value="<?= $row['role_name'];?>" placeholder="Role_Name" name="role_name" style="color: seagreen;" >
                    </div>
                    <div class="controls">
                        <input type="hidden" name="role_id" value="<?=$row['role_id'];?>">
                        <input type="submit" value="Save Changes" name="sub" class="btn btn-primary" id="focusedInput"  >
                        <input type="reset" value="Cancel" name="clear" class="btn btn-danger" id="focusedInput"  >
                    </div>
                    </form>
                </div>



                            
            </div>
        </div>
        <!-- /block -->
    </div>
</div>
<!-- block -->

