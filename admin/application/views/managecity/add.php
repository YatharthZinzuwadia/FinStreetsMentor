<div class="container"  >

    <!-- block -->
    <div class="block" style="width: 400px; height: 200px;">
        <form class="form-group" action="" method="post">
                        <fieldset>
                            <legend><?= $page_heading; ?></legend>
                            <div class="control-group">
                                <label class="lable-info" for="focusedInput">Enter State Name</label>
                                <div class="controls">
                                    <input class="form-control" id="focusedInput" type="text" value="" 
                                           placeholder="City Name" name="cname" required="" style="color:green;" >
                                </div>
                            </div>
                            <hr>
                            <div class="control-group" >
                                <label class="control-label" for="focusedInput">Select state</label>
                                
                                <div class="controls" >
                                    
                                    <select class="form-control" name="sid"  style="color:darkmagenta;">
                                        <?php foreach($result as $val):?>
                                        <option value="<?=$val['sid'];?>">
                                            <?=$val['sname'];?>
                                        </option>
                                        <?php endforeach;?>
                                    </select>
                                </div>
                            </div>
                            
                            
                            <br>
                            <div class="form-group">
                                
                                <button type="submit" class="btn btn-primary" name="sub">Add</button>
                                <button type="reset" class="btn btn-danger">Cancel</button>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        
    
    <!-- /block -->
    
