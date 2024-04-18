
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
                    <div class="muted pull-left"><h3>Manage Material</h3></div>
                    <div class="" style="padding-left: 1000px;">
                        <a href="<?= base_url(); ?>material/add" class="btn btn-success" >Add</a>
                    </div>
                </div>
                <div class="block-content collapse in">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Menter</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>PDF Link</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $key => $val): ?>
                                <tr>
                                    <td><?= $key+1; ?></td>
                                    <td><?= $val['full_name']; ?></td>
                                    <td><?= $val['title']; ?></td>
                                    <td><?= $val['price']; ?></td>
                                    <td><?= $val['description']; ?></td>
                                    <td>
										<a href="<?=$this->config->item('image_base_url').'material_file/'.$val['material_file'];?>" target="_blank">
										 Show content
										</a>
									</td>
                                    <td>
                                        <a href="<?= base_url() ?>material/delete/<?= $val['material_id'] ?>/<?= $val['material_file'] ?>" class="btn btn-danger">Delete</a>
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

