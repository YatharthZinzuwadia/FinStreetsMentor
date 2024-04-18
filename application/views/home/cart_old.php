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
            <h5 class="section-title h1">Manage your cart</h5>
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
                            if (!empty($carts)) {
                                foreach ($carts as $key => $cart) : ?>
                                    <tr>
                                        <td><?= $key + 1 ?></td>
                                        <td><?= $cart['title'] ?></td>
                                        <td><?= $cart['full_name'] ?></td>
                                        <td class="text-right"><?= $cart['price'] ?></td>
                                        <td class="text-right">
                                            <button class="btn btn-danger btn-sm deleteCart" value="<?= $cart['cart_id'] ?>">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php $total = $total + $cart['price'];
                                endforeach; ?>
                                <tr>
                                    <td class="text-right" colspan="4">
                                        <b>Total : <?= $total ?></b>
                                        <br />
                                        <input type="hidden" name="price_id" value="price_1MdtZRSDCr6tEF9pC9EaBM5U">
                                        <input type="hidden" name="button_subtype" value="cart_item">
                                        <button class="btn btn-success btn-sm float-right"> Place Order : <?= $total ?></button>
                                    </td>
                                    <td>&emsp;</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </section>
    <!-- Team -->
</body>