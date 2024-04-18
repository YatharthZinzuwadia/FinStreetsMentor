
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
                    <div class="muted pull-left"><h3>Sold Material</h3></div>
                </div>
                <div class="block-content collapse in">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $key => $val): ?>
                                <tr>
                                    <td><?= $key+1; ?></td>
                                    <td><?= $val['full_name']; ?></td>
                                    <td><?= $val['title']; ?></td>
                                    <td><?= $val['price']; ?></td>
                                    <td><?= $val['created_on']; ?></td> 
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

