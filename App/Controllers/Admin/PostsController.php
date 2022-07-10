<?php

namespace App\Controllers\Admin;
use App\Models\Post;
use Core\View;

class PostsController extends BaseController
{
    public function index(){
        $posts = Post::all();
        View::render('\admin\posts\index', ['posts' => $posts]);
    }
    public function create(){
        View::render('\admin\posts\create');
    }
    public function store(){

    }
    public function show($id){

    }
    public function edit($id){

    }
    public function update($id){

    }
    public function destroy($id){

    }
}