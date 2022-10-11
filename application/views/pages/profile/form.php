<main role="main" class="container">
        <div class="row">
            <div class="col-md-3">
                <?php $this->load->view('layouts/_menu'); ?>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        Form Profile
                    </div>
                    <div class="card-body">
                        <?= form_open_multipart($form_action, ["method" => "POST"]); ?>
                            <?= isset($input->id) ? form_hidden('id', $input->id) : ''; ?>
                            <div class="form-group">
                                <label for="">Name</label>
                                <?= form_input('name', $input->name, ["class" => "form-control", "required" => true, "autofocus" => true]); ?>
                                <?= form_error('name'); ?>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <?= form_input(["type" => "email", "name" => "email", "value" => $input->email, "class" => "form-control", "required" => true, "placeholder" => "example@gmail.com"]); ?>
                                <?= form_error('email'); ?>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <?= form_password('password', '', ["class" => "form-control", "placeholder" => "Masukan password Min 8 Karakter"]); ?>
                                <?= form_error('password'); ?>
                            </div>
                            <div class="form-group">
                                <label for="">Foto</label>
                                <br>
                                <?= form_upload('image'); ?>
                                <?php if($this->session->flashdata('image_error')) : ?>
                                    <small class="form-text text-danger"><?= $this->session->flashdata('image_error'); ?></small>
                                <?php endif; ?>
                                <?php if (isset($input->image)) : ?>
                                    <img src="<?= base_url("images/user/$input->image"); ?>" alt="" height="150">
                                <?php endif; ?>
                            </div>
                            <button type="submit" class="btn btn-dark">Save Data</button>
                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </main>