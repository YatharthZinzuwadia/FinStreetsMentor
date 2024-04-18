
<div class="container">
    <div class="block" >

        <div class=" block" style="margin-left: 0px;" >
                <div class="muted pull-left"><legend><h3><?=$page_heading;?></h3></legend></div>
                <div style="padding-left: 1000px;">
                    <a href="<?=base_url();?>manageroles/add" class="btn btn-success"  >ADD</a>
                </div>


            </div>
            <div class="block-content collapse in" >

                <table class="table table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($result as $key => $val): ?>
                        <tr>
                            <td><?=$key + 1;?></td>
                            <td><?=$val['role_name'];?></td>
                            <td>
                       <a  class="btn btn-info" href="<?=base_url();?>manageroles/edit/<?=$val['role_id'];?>">Edit</a>
                       <a  class="btn btn-danger" href="<?=base_url();?>manageroles/delete/<?=$val['role_id'];?>">Delete</a></td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /block -->
    </div>

        <!-- block -->

