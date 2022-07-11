<?php Core\View::render('\layout\header', ['admin' => true]); ?>
<div class="container">
    <div class="row">
        <div class="col-12 text-center text-uppercase">
            <div class="card mt-5">
                <h5 class="card-header">Update Post</h5>
                <div class="card-body">
                    <form action="<?= url("admin/posts/{$posts->id}/update");?>" method="post" enctype="multipart/form-data">
                        <div class="input-group mb-3">
                            <span class="input-group-text">Title</span>
                            <input type="text"
                                   class="form-control"
                                   name="title" id="title"
                                   aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"
                                   value="<?= $posts->title ?>">
                            <?php if (!empty($data['errors']['title'])): ?>
                                <div class="alert alert-danger"><?= $data['errors']['title'] ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Content</span>
                            <textarea name="body" id="body" rows="3" class="form-control"><?= $posts->body ?></textarea>
                            <?php if (!empty($data['errors']['body'])): ?>
                                <div class="alert alert-danger"><?= $data['errors']['body'] ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text">Category</span>
                            <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example" name="categories_id">
                                <?php foreach ($categories as $category):?>
                                    <option value="<?= $category->id?>"><?= $category->name?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <input type="file"
                                   class="form-control"
                                   name="image"
                                   id="image"
                                   aria-label="Recipient's username"
                                   aria-describedby="button-addon2"
                            >
                            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php Core\View::render('\layout\footer'); ?>


