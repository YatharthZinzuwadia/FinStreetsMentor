
<div class="container">
    <div class="row-fluid">
        <div class="span9">

            <!-- block -->
            <div class="block">
                <?php
                if (!empty($this->session->flashdata('success'))) {
                    echo "<div class='alert alert-success'>"
                    . "<strong>" . $this->session->flashdata('success') . "</strong>"
                    . "</div>";
                }
                ?>
                <div class="navbar navbar-inner block-header">
                    <div class="muted pull-left"><h3>Slider Image</h3></div>
                    <div class="" style="padding-left: 1000px;">
                        <a href="<?= base_url(); ?>slider/add" class="btn btn-success" >Add</a>
                    </div>
                </div>
                <div class="block-content collapse in">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th>Image Tag</th>
                                <th>Image Title</th>
                                <th>Image Sub Title</th>
                                <th>Image</th>
                                <th>Sort Order</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $val): ?>
                                <tr>
                                    <td><?= $val['image_tag']; ?></td>
                                    <td><?= $val['image_title']; ?></td>
                                    <td><?= $val['image_sub_title']; ?></td>
                                    <td><img src="<?=$this->config->item('image_base_url').'slider_images/'.$val['image_name'];?>" style="height: 100px;width: 100px;"/></td>
                                    <td><?= $val['sort_order']; ?></td>
                                    <td>
                                        <a href="<?= base_url() ?>slider/edit/<?= $val['slider_image_id'] ?>" class="btn btn-warning">Edit</a>
                                        <a href="<?= base_url() ?>slider/delete/<?= $val['slider_image_id'] ?>/<?= $val['image_name'] ?>" class="btn btn-danger">Delete</a>
                                    </td>  
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /block -->
        </div>

        <!-- block -->

    </div>
</div>


<!--Popup-->

