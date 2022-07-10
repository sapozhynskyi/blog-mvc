<?php Core\View::render('\layout\header', ['admin' => true]); ?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center text-uppercase">
            <div class="card mt-5">
                <h5 class="card-header">Registration</h5>
                <div class="card-body">
                    <form action="<?= url('auth/posts/store') ?>" method="POST">
                        <div class="input-group mb-3">
                            <span class="input-group-text">First name</span>
                            <input type="text"
                                   class="form-control"
                                   name="name" id="name"
                                   aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Surname</span>
                            <input type="text"
                                   class="form-control"
                                   name="surname"
                                   id="surname"
                                   aria-label="Sizing example input"
                                   aria-describedby="inputGroup-sizing-default">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Birthdate</span>
                            <input type="date"
                                   class="form-control"
                                   name="birthdate"
                                   id="birthade"
                                   aria-label="Sizing example input"
                                   aria-describedby="inputGroup-sizing-default">
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
                                   aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php Core\View::render('\layout\footer'); ?>


