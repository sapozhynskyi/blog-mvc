<?php
namespace App\Controllers;

use App\Helpers\SessionHelper;
use Core\Controller;
use Core\View;

class HomeController extends Controller
{
    public function index()
    {
       View::render('\home\index');
    }

}


