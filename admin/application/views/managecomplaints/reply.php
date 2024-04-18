

<div class="container">
        <div class="col-md-6" >


                    <form class="form-horizontal" action="managecomplaints/reply" method="post">
                        <fieldset>
                            <legend><?=$page_heading;?></legend>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput" >Reply Tittle </label>
                                <div class="controls">
                                    <input class="form-control" id="focusedInput" type="text" value="" placeholder="Replay tittle" name="c_tittle" required="">
                                </div>

                                <br>
                                <label class="control-label" for="focusedInput" >Description</label>
                                <div class="control-group">

                                    <div class="controls">
                                        <textarea class="form-control" placeholder="Enter text ..." style="width: 810px; height: 200px" name="c_description" required=""></textarea>
                                    </div>
                                </div>
                                <br>
                                <label class="control-label" for="focusedInput" >Username</label>
                                <div class="controls">
								<input class="form-control" type="text" value="<?=$result['username'];?>" readonly="" style="color:black;">
                                    <input class="form-control" id="focusedInput" type="hidden" value="<?=$result['user_id'];?>" placeholder="user_id" name="user_id" readonly="" style="color:black;">
                                </div>
                            </div>


                            <br>
                            <div class="form-actions">
                                <input type="hidden" name="user_id" value="<?=$result['user_id'];?>">
                                <input type="submit" class="btn btn-info" name="sub" value="SEND REPLY">
                                <button type="reset" class="btn btn-danger">Cancel</button>
								<a href="<?=base_url();?>managecomplaints/" class="btn btn-danger">Back</a>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- /block -->
</div>
