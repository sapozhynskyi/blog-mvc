<?php

namespace Core;

use App\Helpers\SessionHelper;

abstract class Controller
{
    public function before(string $action):bool{

        return true;
    }
    public function after(){

    }
    protected function getPArams(){

    }
}

