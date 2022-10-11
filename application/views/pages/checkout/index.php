<main role="main" class="container">
    <?php $this->load->view('layouts/_alert'); ?>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Formulir Alamat Pengiriman
                    </div>
                    <div class="card-body">
                        <form action="<?= base_url("checkout/create"); ?>" method="POST">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="name" id="" class="form-control"
                                    placeholder="Enter the recipient's name.." value="<?= $input->name; ?>">
                                <?= form_error('name'); ?>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="address" id="" cols="30" rows="10" class="form-control"><?= $input->address; ?></textarea>
                                <?= form_error('address'); ?>
                            </div>
                            <div class="form-group">
                                <label for="">Telepon</label>
                                <input type="text" name="phone" id="" class="form-control"
                                    placeholder="Enter recipient's phone number.." value="<?= $input->phone; ?>"></input>
                                    <?= form_error('phone'); ?>
                            </div>
                            <button type="submit" class="btn btn-dark">Save</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                Cart
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($cart as $row) : ?>
                                        <tr>
                                            <td><?= $row->title; ?></td>
                                            <td><?= $row->qty; ?></td>
                                            <td>Rp<?= number_format($row->price, 0, ',', '.'); ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Sub Total</td>
                                            <td>Rp<?= number_format($row->subtotal, 0, ',', '.'); ?></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th colspan="2">Total</th>
                                            <th>Rp<?= number_format(array_sum(array_column($cart, 'subtotal')), 0, ',', '.'); ?></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>