<main role="main" class="container">
    <?php $this->load->view('layouts/_alert'); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Checkout Success
                    </div>
                    <div class="card-body">
                        <h5>Order No: <?= $content->invoice; ?></h5>
                        <p>Thank You For Shopping.</p>
                        <p>Please make a payment so that it can be processed immediately. Here are the steps: </p>
                        <ol>
                            <li>Please make payment to<strong> BCA 123456</strong> a/n PT. Oshop Group</li>
                            <li>Include with the description of the order number: <strong> <?= $content->invoice; ?></strong></li>
                            <li>Total Payment: <strong>Rp<?= number_format($content->total, 0, ',', '.'); ?></strong></li>
                        </ol>
                        <p>If you have, please send proof of the transaction on the confirmation page or <a
                                href="<?= base_url("myorder/detail/$content->invoice"); ?>">
                                click here</a></p>
                        <a href="<?= base_url('/'); ?>" class="btn btn-dark"><i class="fas fa-angle-left"></i> Back </a>
                    </div>
                </div>
            </div>
        </div>
    </main>