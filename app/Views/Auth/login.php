<?= $this->extend('Layout/Starter') ?>

<?= $this->section('content') ?>

<div class="row justify-content-center pt-5">
    <div class="col-lg-4">
        <?= $this->include('Layout/msgStatus') ?>
        <div class="card shadow-sm mb-5">
            <div class="card-header h5 p-3">
                Login
            </div>
            <div class="card-body">
                <?= form_open() ?>
                <div class="form-group mb-3">
                    <label for="username">Username</label>
                    <input type="text" class="text-info form-control mt-2" name="username" id="username" aria-describedby="help-username" placeholder="Your username" required minlength="4">
                    <?php if ($validation->hasError('username')) : ?>
                        <small id="help-username" class="form-text text-danger"><?= $validation->getError('username') ?></small>
                    <?php endif; ?>
                </div>
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="text-warning form-control mt-2" name="password" id="password" aria-describedby="help-password" placeholder="Your password" required minlength="6">
                    <?php if ($validation->hasError('password')) : ?>
                        <small id="help-password" class="form-text text-danger"><?= $validation->getError('password') ?></small>
                    <?php endif; ?>
                </div>
                
                <!---->
                
                 <div class="form-group mb-3">
                    <input type="hidden" class="form-control mt-2" name="ip" value="<?php echo $_SERVER['HTTP_USER_AGENT']; ?>" id="ip" aria-describedby="help-ip" required>
                    
                    <?php if ($validation->hasError('ip')) : ?>
                        <small id="help-password" class="form-text text-danger"><?= $validation->getError('ip') ?></small>
                    <?php endif; ?>
                </div>
                
                
                <!---->
                
                <div class="form-check mb-3">
                    <label class="form-check-label" data-bs-toggle="tooltip" data-bs-placement="top" title="Keep session more than 30 minutes">
                        <input type="checkbox" class="form-check-input" name="stay_log" id="stay_log" value="yes">
                        Stay login?
                    </label>
                </div>
                <div class="form-group mb-2">
                    <button type="submit" class="btn btn-outline-warning"><i class="bi bi-box-arrow-in-right"></i> Log in</button>
                </div>
                <?= form_close() ?>
            </div>
        </div>
        <p class="text-center text-danger after-card">
            <small class="px-auto p-2 rounded">
                  TO BUY PANEL DM HERE :-
            <a href="https://telegram.me/godzillahostingprovider" class="text-danger">@AloneBoy_Boss</a>
            </small>
            </p>
        <p class="text-center text-danger after-card">
            <small class="px-auto p-2 rounded">
                Don't have an account yet?
                <a href="<?= site_url('register') ?>" class="text-danger">Register here</a>
            </small>
        </p>
    </div>
</div>

<?= $this->endSection() ?>