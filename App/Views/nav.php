
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= url('')?>">Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
                <?php
                if(isset($admin)){
                    include_once VIEW_DIR . '\navs\admins.php' ;
                } else {
                    include_once VIEW_DIR . '\navs\site.php' ;
                }
                ?>
            </ul>
            <ul class="navbar-nav flex-d">
                <?php if (\App\Helpers\SessionHelper::isUserLoggedIn()) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url('admin\dashboard') ?>">Dashboard</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?= url('logout') ?>">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url('login') ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url('registration') ?>">Registration</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
