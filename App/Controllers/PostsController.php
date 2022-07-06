<?php

namespace App\Controllers;

use App\Helpers\SessionHelper;

class PostsController
{
    public function show(int $id)
    {
        dd(__METHOD__, $id);
    }
}
