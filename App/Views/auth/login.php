<?php Core\View::render('\layout\header'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card mt-5">
                    <h5 class="card-header">Login</h5>
                    <div class="card-body">
                        <form action="<?= SITE_URL . '/auth/verify/' ?>" method="POST">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Login</span>
                                <input type="text" class="form-control" name="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php Core\View::render('\layout\footer'); ?>

