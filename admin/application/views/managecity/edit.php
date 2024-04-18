<div class="container" >
    
    <div class="block" style="width: 400px; padding:10px;"> 
                
                    <form class="form-horizontal" action="" method="post">
                        
                            <legend><h3><?= $page_heading; ?></h3></legend>
                            <div class="form-group" style="padding: 12px;">
                                <label class="control-lable" for="focusedInput">Enter City Name</label>
                                <div>
                                    <input class="form-control" id="focusedInput" type="text" value="<?=$row['cname'];?>" placeholder="City Name" name="cname" required="" style="color: violet;">
                                </div>
                            </div>
<hr>
                            <div class="control-group">
                                <label class="control-label" for="selectError">Select State</label>
                                <div class="controls">
                                    <select name="sid" required="" class="form-control" style="color: tomato;">
                                        <option value="">--Select State--</option>
                                        <?php foreach ($states as $val): ?>
                                        <option value="<?=$val['sid']?>" <?=($val['sid'] == $row['sid']) ? 'selected' : ""?>><?=$val['sname']?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
<hr>
                            <div class="form-actions">
                                <input type="hidden" name="cid" value="<?=$row['cid']?>"/>
                                <button type="submit" class="btn btn-info" name="sub" value="submit">SUBMIT</button>
                                <a type="reset" class="btn btn-danger" href="<?=base_url();?>managecity/index">Cancel</a>
                            </div>
                        </fieldset>
                    </form>

                </div>
            </div>
        
   
    <!-- /block -->









