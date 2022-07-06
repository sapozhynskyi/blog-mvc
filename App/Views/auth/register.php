<?php Core\View::render('\layout\header'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card mt-5">
                    <h5 class="card-header">Registration</h5>
                    <div class="card-body">
                        <form action="<?= SITE_URL . '/users/store' ?>" method="POST">
                            <div class="input-group mb-3">
                                <span class="input-group-text">First name</span>
                                <input type="text"
                                       class="form-control"
                                       name="name" id="name"
                                       value="<?= !empty($data['name']) ? $data['name'] : '' ?>"
                                       aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                <?php if (!empty($name_error)): ?>
                                    <div class="alert alert-danger"><?= $name_error ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Surname</span>
                                <input type="text"
                                       class="form-control"
                                       name="surname"
                                       id="surname"
                                       aria-label="Sizing example input"
                                       aria-describedby="inputGroup-sizing-default"
                                       value="<?= !empty($data['surname']) ? $data['surname'] : '' ?>">
                                <?php if (!empty($surname_error)): ?>
                                    <div class="alert alert-danger"><?= $surname_error ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Birthdate</span>
                                <input type="date"
                                       class="form-control"
                                       name="birthdate"
                                       id="birthade"
                                       aria-label="Sizing example input"
                                       aria-describedby="inputGroup-sizing-default"
                                       value="<?= !empty($data['birthdate']) ? $data['birthdate'] : '' ?>">
                                <?php if (!empty($birthdate_error)): ?>
                                    <div class="alert alert-danger"><?= $birthdate_error ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Email</span>
                                <input type="text"
                                       class="form-control"
                                       name="email"
                                       id="email"
                                       aria-label="Sizing example input"
                                       aria-describedby="inputGroup-sizing-default">
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php Core\View::render('\layout\footer'); ?>

