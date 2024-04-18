<div class="container" >
    
    <div class="block" style="width: 400px; padding:10px;"> 
                
                    <form class="form-horizontal" action="profile/update" method="post">
                        
                            <legend><h3><?= $page_heading; ?></h3></legend>
                            <div class="form-group" style="padding: 12px;">
                                <label class="control-lable" for="focusedInput">Username</label>
                                <div>
                                    <input class="form-control" id="focusedInput" type="text" value="<?=$row['username'];?>" placeholder="City Name" name="username" required="" style="color: violet;">
                                </div>
                            </div>
                            <div class="form-group" style="padding: 12px;">
                                <label class="control-lable" for="focusedInput">Email</label>
                                <div>
                                    <input class="form-control" id="focusedInput" type="text" value="<?=$row['email'];?>" placeholder="Email" name="email" required="" style="color: violet;">
                                </div>
                            </div>
                            <div class="form-group" style="padding: 12px;">
                                <label class="control-lable" for="focusedInput">Fullname</label>
                                <div>
                                    <input class="form-control" id="focusedInput" type="text" value="<?=$row['full_name'];?>" placeholder="Full_name" name="full_name" required="" style="color: violet;">
                                </div>
                            </div>
                            <div class="form-group" style="padding: 12px;">
                                <label class="control-lable" for="focusedInput">About</label>
                                <div>
                                    <input class="form-control" id="focusedInput" type="text" value="<?=$row['about_user'];?>" placeholder="Full_name" name="about_user" required="" style="color: violet;">
                                    <input class="form-control" id="focusedInput" type="hidden" value="<?=$row['user_id'];?>" placeholder="Full_name" name="user_id" required="" style="color: violet;">
                                </div>
                            </div>
                            <div class="form-actions">
                               
                                <button type="submit" class="btn btn-info" name="sub" value="submit">SUBMIT</button>
                                <a type="reset" class="btn btn-danger" href="<?=base_url();?>/dashboard">Cancel</a>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        
   
    <!-- /block -->









