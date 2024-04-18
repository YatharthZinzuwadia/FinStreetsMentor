<?php
extract($row);
?>
<div class="container"  >

    <!-- block -->
    <div class="block" style="width: 400px; height: 200px;">
        <?php 
        if(!empty($this->session->flashdata('error'))){
            echo "<div class='alert alert-danger'>"
            . "<strong>".$this->session->flashdata('error')."</strong>"
            . "</div>";
        }
        ?>
        <form class="form-group" action="" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend><?= $page_heading; ?></legend>
                <div class="control-group">
                    <label class="lable-info" for="focusedInput">Name</label>
                    <div class="controls">
                        <input class="form-control" id="focusedInput" type="text" value="<?=$title?>" 
                               placeholder="Name" name="title" required="" style="color:green;">
                    </div>
                </div>
                <div class="control-group">
                    <label class="lable-info" for="focusedInput">Details</label>
                    <div class="controls">
                        <input class="form-control" id="focusedInput" type="text" value="<?=$description?>"
                               placeholder="Details" name="description" required="" style="color:green;" >
                    </div>
                </div>
                <div class="control-group">
                    <label class="lable-info" for="focusedInput">Current Image</label>
                    <div class="controls">
                        <img src="<?=$this->config->item('image_base_url').$image_name?>" style="height: 100px;width: 100px;"/>
                    </div>
                </div>
                <div class="control-group">
                    <label class="lable-info" for="focusedInput">Upload Image</label>
                    <div class="controls">
                        <input type="file" name="slider_image"/>
                    </div>
                </div>
                <input type="hidden" name="course_id" value="<?=$course_id;?>"/>
                <input type="hidden" name="current_image" value="<?=$image_name?>"/>
                <hr>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="sub">Update</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                </div>
            </fieldset>
        </form>

    </div>
</div>


<!-- /block -->

