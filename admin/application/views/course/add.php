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
        <form class="form-group" action="add" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend><?= $page_heading; ?></legend>
                <div class="control-group">
                    <label class="lable-info" for="focusedInput">Name</label>
                    <div class="controls">
                        <input class="form-control" id="focusedInput" type="text" value="" 
                               placeholder="Name" name="title" required="" style="color:green;" >
                    </div>
                </div>
                <div class="control-group">
                    <label class="lable-info" for="focusedInput">Details</label>
                    <div class="controls">
                        <input class="form-control" id="focusedInput" type="text" value="" 
                               placeholder="Details" name="description" required="" style="color:green;" >
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="lable-info" for="focusedInput">Upload Image</label>
                    <div class="controls">
                        <input type="file" name="slider_image" required=""/>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <button type="submit" value="sub" class="btn btn-primary" name="sub">Add</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                </div>
            </fieldset>
        </form>

    </div>
</div>


<!-- /block -->

