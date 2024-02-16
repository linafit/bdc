<link rel="stylesheet" href="<?php echo base_url('assets/css/style_login.css') ?>">
<div class="container">
    <div class="">

        <div class="position-absolute top-50 start-50 translate-middle">

            <div class="card border-0 shadow">
                <span class="title fw-bold" style="color: #012970;">Bank Data Centre (BDC)</span>
                <div class="message fw-semibold text-danger" style="display: none;">

                </div>
                <form class="form" id="login" method="post" action="<?= base_url('Auth/login'); ?>">
                    <div class="group">
                        <input type="text" required="" id="username" name="username" required>
                        <label for="username">Username</label>
                    </div>
                    <div class="group">
                        <input  type="password" id="password" name="password" required>
                        <label for="password">Password</label>
                    </div>
                    <button type="submit" class="fw-semibold" style="background-color: #012970;">Login</button>
                </form>
            </div>

        </div>
    </div>
</div>