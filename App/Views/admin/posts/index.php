<?php Core\View::render('\layout\header', ['admin' => true]); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-uppercase">
                <?php
                if (!empty($posts)) {
                    include_once VIEW_DIR . '/admin/posts/parts/posts_list.php';
                } else {
                    echo "<h3>Posts are not yet available</h3>";
                }
                ?>
            </div>
        </div>
    </div>
<?php Core\View::render('\layout\footer'); ?>


