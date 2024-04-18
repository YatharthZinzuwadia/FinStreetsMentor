<style>
    textarea[disabled]{
        background-color: windowframe;
        color: black;
    }
</style>



<div class="container">
        <div class="col-md-6">
            <div class="navbar-inner block-header">
                <div class="muted pull-left">
            </div>
            <div class="block-content collapse in">
                <div class="span9">
                    <form class="form-horizontal" action="" method="post">
                        <fieldset>
                            <legend><h3><?=$page_heading;?></h3></legend>
                            <div class="control-group">
                                <label class="control-label" for="focusedInput" >Reply Tittle </label>
                                <div class="controls">
                                    <input class="form-control" id="focusedInput" type="text" value="<?=$result['c_tittle'];?>" placeholder="Replay tittle" name="c_tittle" disabled="" style="color: black;">
                                </div>

                                <br>
                                <label class="control-label" for="focusedInput" >Description</label>
                                <div class="control-group">

                                    <div class="controls">
                                        <textarea class="form-control" placeholder="Enter text ..." style="width: 810px; height: 200px" name="c_description"  disabled="" ><?=$result['c_description'];?></textarea>
                                    </div>
                                </div>
                                <br>
                                <label class="control-label" for="focusedInput" >Username</label>
                                <div class="controls">
                                    <input class="form-control" id="focusedInput" type="text" value="<?=$result['username'];?>" placeholder="user_id" name="user_id" disabled="" style="color: black;">
                                </div>
                            </div>
                            <br>



                            <div class="form-actions">
                                <a href="<?=base_url();?>managecomplaints/reply/<?=$result['user_id'];?>" class="btn btn-info">Reply</a>
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
