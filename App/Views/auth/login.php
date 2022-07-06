<?php Core\View::render('\layout\header'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card mt-5">
                    <h5 class="card-header">Login</h5>
                    <div class="card-body">
                        <form action="<?= SITE_URL . '/auth/verify/' ?>" method="POST">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Login</span>
                                <input type="text"
                                       class="form-control"
                                       name="email"
                                       id="email"
                                       aria-label="Sizing example input"
                                       aria-describedby="inputGroup-sizing-default"
                                       value="<?= !empty($data['email']) ? $data['email'] : '' ?>">
                                <?php if (!empty($email_error)): ?>
                                    <div class="alert alert-danger"><?= $email_error ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password"
                                       class="form-control"
                                       name="password"
                                       id="password"
                                       placeholder="Password"
                                       aria-label="Recipient's username"
                                       aria-describedby="button-addon2"
                                       value="<?= !empty($data['password']) ? $data['password'] : '' ?>">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Submit</button>
                                <?php if (!empty($password_error)): ?>
                                    <div class="alert alert-danger"><?= $password_error ?></div>
                                <?php endif; ?>
                            </div>
                            <button class="btn btn-outline-secondary" type="button" onclick='location.href="<?= SITE_URL . '/registration'?>"'>Create an account</a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php Core\View::render('\layout\footer'); ?>

