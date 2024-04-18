
<div class="container" >
<div class="col-md-4" style="padding: 20px;" >
            
            <div class="block-content collapse in">
                <div class="span9">
                    <form class="form-horizontal" action="" method="post">
                        <fieldset>
                            <legend><?= $page_heading; ?></legend>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput">Enter State Name</label>
                                <div class="controls">
                                    <input class="form-control" id="focusedInput" type="text" value="<?=$row['sname'];?>" placeholder="City Name" name="sname" required="" style="color: sienna;">
                                </div>
                            </div>
                            <br>
                            <div class="form-actions">
                                <input type="hidden" name="sid" value="<?=$row['sid'];?>"/>
                                <button type="submit" class="btn btn-primary" name="sub">Save changes</button>
                                <button type="reset" class="btn">Cancel</button>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- /block -->
</div>