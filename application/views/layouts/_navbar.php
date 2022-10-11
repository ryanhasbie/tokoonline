<nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(''); ?>">Oshop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url(''); ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                            aria-expanded="false">Manage</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-1">
                            <a class="dropdown-item" href="<?= base_url('category'); ?>">Category</a>
                            <a class="dropdown-item" href="<?= base_url('product'); ?>">Product</a>
                            <a class="dropdown-item" href="<?= base_url('order'); ?>">Order</a>
                            <a class="dropdown-item" href="<?= base_url('user'); ?>">User</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?= base_url('cart'); ?>" class="nav-link"> <i class="fa-solid fa-cart-shopping"></i> Cart{<?= getCart(); ?>} </a>
                    </li>
                    <?php if(!$this->session->userdata('is_login')) : ?>
                    <li class="nav-item">
                        <a href="<?php echo base_url('login'); ?>" class="nav-link"> Login </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url('register'); ?>" class="nav-link"> Register </a>
                    </li>
                    <?php else : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                            aria-expanded="false"><?php echo $this->session->userdata('name'); ?></a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-2">
                            <a class="dropdown-item" href="<?= base_url('profile'); ?>">Profile</a>
                            <a class="dropdown-item" href="<?= base_url('myorder'); ?>">Orders</a>
                            <a class="dropdown-item" href="<?= base_url('logout'); ?>">Logout</a>
                        </div>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>