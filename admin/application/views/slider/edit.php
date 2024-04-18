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
                    <label class="lable-info" for="focusedInput">Image Tag</label>
                    <div class="controls">
                        <input class="form-control" id="focusedInput" type="text" value="<?=$image_tag?>" 
                               placeholder="Image Tage" name="image_tag" required="" style="color:green;">
                    </div>
                </div>
                <div class="control-group">
                    <label class="lable-info" for="focusedInput">Image Title</label>
                    <div class="controls">
                        <input class="form-control" id="focusedInput" type="text" value="<?=$image_title?>"
                               placeholder="Image Title" name="image_title" required="" style="color:green;" >
                    </div>
                </div>
                <div class="control-group">
                    <label class="lable-info" for="focusedInput">Image Sub Title</label>
                    <div class="controls">
                        <input class="form-control" id="focusedInput" type="text" value="<?=$image_sub_title?>" 
                               placeholder="Image Sub Title" name="image_sub_title" required="" style="color:green;" >
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
                <input type="hidden" name="slider_image_id" value="<?=$slider_image_id;?>"/>
                <input type="hidden" name="current_image" value="<?=$image_name?>"/>
                <hr>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="sub">Add</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                </div>
            </fieldset>
        </form>

    </div>
</div>


<!-- /block -->

