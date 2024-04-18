<div class="container">
  
        <!-- block -->
        <div class="block" style="margin-right: 30px;">
            <div class="navbar navbar-inner block-header">
                <div class="muted pull-left">Manage complaints</div>

                
            </div>
            <div class="block-content collapse in">
                <table class="table table-striped" id="myTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tittle</th>
                            <th>Description</th>
                            <th>Username</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($result as $key => $val): ?>
                        <tr>
                            <td><?=$key+1;?></td>
                            <td><?=$val['c_tittle'];?></td>
                            <td><?=$val['c_description'];?></td>
                            <td><?=$val['username'];?></td>
                            <td >
                                
                                <a href="<?=base_url()?>managecomplaints/view/<?=$val['user_id']?>" class="btn btn-warning" >View</a>
                                <a href="<?=base_url()?>managecomplaints/reply/<?=$val['user_id']?>" class="btn btn-info" >Reply </a>
                                <a href="<?=base_url()?>managecomplaints/delete/<?=$val['id']?>" class="btn btn-danger">Delete</a>
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

