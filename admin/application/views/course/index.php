
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
                    <div class="muted pull-left"><h3>Manage Course</h3></div>
                    <div class="" style="padding-left: 1000px;">
                        <a href="<?= base_url(); ?>course/add" class="btn btn-success" >Add</a>
                    </div>
                </div>
                <div class="block-content collapse in">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Banner</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $key => $val): ?>
                                <tr>
                                    <td><?= $key+1; ?></td>
                                    <td><?= $val['title']; ?></td>
                                    <td><?= $val['description']; ?></td>
                                    <td><img src="<?=$this->config->item('image_base_url').'course_images/'.$val['image_name'];?>" style="height: 100px;width: 100px;"/></td>
                                    <td>
                                        <a href="<?= base_url() ?>course/edit/<?= $val['course_id'] ?>" class="btn btn-warning">Edit</a>
                                        <a href="<?= base_url() ?>course/delete/<?= $val['course_id'] ?>/<?= $val['image_name'] ?>" class="btn btn-danger">Delete</a>
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

