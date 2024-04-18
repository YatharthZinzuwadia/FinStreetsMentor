<body style="background-image: url('<?= base_url(); ?>assets/images/mentor_bg.jpg');">
    <style>
        a.disable-links {
            pointer-events: none;
        }
    </style>
    <!-- Team -->
    <br />

    <section id="team" class="pb-5" style="margin-top: 150px; ">
        <div class="container">
            <h5 class="section-title h1">Your orders</h5>
            <form action="<?= base_url() . "make-stripe-payment/" ?>" method="post">
                <div class="row">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Material Title</th>
                                <th scope="col">Mentor Name</th>
                                <th scope="col" class="text-right">Amount</th>
                                <th scope="col" class="text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-white">
                            <?php $total = 0;
                            if (!empty($orders)) {
                                foreach ($orders as $key => $order) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $order['title'] ?></td>
                                        <td><?= $order['full_name'] ?></td>
                                        <td class="text-right"><?= $order['price'] ?></td>
                                        <td class="text-right">
                                            <a href="<?= base_url(); ?>assets/images<?= '/material_file/' . $order['material_file'] ?>" target="_blank" class="btn btn-success btn-sm">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                            <a href="<?= base_url(); ?>assets/images<?= '/material_file/' . $order['material_file'] ?>" class="btn btn-primary btn-sm" download>
                                                <i class="fa fa-download" aria-hidden="true"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                endforeach; ?>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </section>
    <!-- Team -->
</body>