<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/sub_plan.css">
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <h3><?= $page_slug; ?></h3>
        <hr>
        <?php foreach ($plan as $val) : ?>
            <form action="<?= base_url() . "make-stripe-payment/" ?>" method="post">
                <div class="col-xs-12 col-md-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <?= $val['type'] ?></h3>
                        </div>
                        <div class="panel-body">
                            <div class="the-price">
                                <h1>
                                    <?= $val['amount'] ?>₹<span class="subscript">/mo</span></h1>
                                <small></small>
                            </div>
                            <table class="table">
                                <tr>
                                    <td>
                                        1 Account
                                    </td>
                                </tr>
                                <tr class="active">
                                    <td>
                                        <?= $val['no_of_meetings'] ?> Meetings
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="panel-footer">
                            <input type="submit" name="pay" value="Stripe Pay" class="btn btn-success">
                        </div>
                    </div>
                </div>
                <input type="hidden" name="cmd" value="_cart">
                <input type="hidden" name="price_id" value="<?= $val['stripe_pkg_id'] ?>">
                <input type="hidden" name="button_subtype" value="services">

                <input type="hidden" name="ammount" value="<?= $val['amount'] ?>">
                <input type="hidden" name="button_subtype" value="package">
                <input type="hidden" name="package_type" value="<?= $val['type'] ?>">
                <input type="hidden" name="payment_id" value="<?= $val['id'] ?>">

            </form>
        <?php endforeach; ?>
    </div>
</div>