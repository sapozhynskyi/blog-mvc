<?php Core\View::render('\layout\header', ['admin' => true]); ?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center text-uppercase">
            <div class="card mt-5">
                <h5 class="card-header">Create new category</h5>
                <div class="card-body">
                    <form action="<?= url('admin/categories/store') ?>" method="POST" enctype="multipart/form-data">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Name</span>
                            <input type="text"
                                   class="form-control"
                                   name="name" id="name"
                                   placeholder="Category name"
                                   aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                   value="<?= !empty($data['name']) ? $data['name'] : '' ?>">
                            <?php if (!empty($data['errors']['name'])): ?>
                                <div class="alert alert-danger"><?= $data['errors']['name'] ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Description</span>
                            <textarea name="description" id="description" rows="3" class="form-control"><?= !empty($data['description']) ? $data['description'] : '' ?></textarea>
                            <?php if (!empty($data['errors']['description'])): ?>
                                <div class="alert alert-danger"><?= $data['errors']['description'] ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="input-group mb-3">
                            <input type="file"
                                   class="form-control"
                                   name="image"
                                   id="image"
                                   aria-label="Recipient's username"
                                   aria-describedby="button-addon2"
                                   value="<?= !empty($data['image']) ? $data['image'] : '' ?>"
                            >
                            <?php if (!empty($data['errors']['image'])): ?>
                                <div class="alert alert-danger"><?= $data['errors']['image'] ?></div>
                            <?php endif; ?>
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php Core\View::render('\layout\footer'); ?>


