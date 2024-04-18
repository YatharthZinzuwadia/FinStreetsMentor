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
            <h5 class="section-title h1">Material</h5>
            <div class="row">
                <?php foreach ($materials as $mkey => $material) : ?>
                    <div class="col-md-4 mt-5">
                        <form action="<?= base_url() . "make-stripe-payment/" ?>" method="post">
                            <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                <div class="mainflip">
                                    <div class="frontside">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <br>
                                                <h4 class="card-title"><?= $material['title'] ?> (<?= $material['price'] ?>)</h4>
                                                <!-- <p class="card-text"><?= $material['username'] ?></p><br> -->
                                                <p class="card-text"><?= $material['description'] ?></p><br>

                                                <input type="hidden" name="material_title" value="<?= $material['title'] ?>">
                                                <input type="hidden" name="material_id" value="<?= $material['material_id'] ?>">
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="ammount" value="<?= $material['price'] ?>">
                                                <input type="hidden" name="price_id" value="price_1MdtZRSDCr6tEF9pC9EaBM5U">
                                                <input type="hidden" name="button_subtype" value="material">
                                                <?php if (in_array($material['material_id'], $purchaseMaterial)) { ?>
                                                    <a href="<?= base_url(); ?>assets/images<?= '/material_file/' . $material['material_file'] ?>" target="_blank" class="btn btn-primary btn-sm" download>
                                                        <i class="fa fa-plus"> Download</i>
                                                    </a>
                                                <?php } else { ?>
                                                    <input type="submit" name="pay" value="Purchase ₹ <?= $material['price'] ?>" class="btn btn-success btn-sm">
                                                <?php } ?>
                                                <button type="button" name="cart" class="btn btn-warning btn-sm cartBtn" value="<?= $material['material_id'] ?>"> Add to Cart </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- Team -->
</body>