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
                    <div class="muted pull-left"><h3>About Info</h3></div>
                </div>
                <div class="block-content collapse in">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Info</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $row['info']; ?></td>
                                <td>
                                    <a data-toggle="modal" data-target="#myModal"  class="btn btn-warning">Edit</a>
                                </td>  
                            </tr>
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

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <textarea cols="80" id="editor1" name="editor1" rows="10"><?= $row['info']; ?></textarea>
                <script>
                    CKEDITOR.replace('editor1', {
                        uiColor: '#CCEAEE'
                    });
                </script>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
