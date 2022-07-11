<?php

namespace App\Controllers\Admin;
use App\Models\Category;
use App\Validators\CreateCategoryValidator;
use Core\View;
use App\Services\FileUploadService;

class CategoriesController extends BaseController
{
    public function index(){
        $categories = Category::all();
        View::render('\admin\categories\index', ['categories' => $categories]);
    }
    public function create(){
        View::render('\admin\categories\create');
    }
    public function store(){

        $imagePath = FileUploadService::upload($_FILES['image'], CATEGORIES_IMG_DIR);
        $fields = filter_input_array(INPUT_POST, $_POST, 1);
        $validator = new CreateCategoryValidator();
        if($validator->checkName($fields['name']) && $validator->checkDescription($fields['description']) && $validator->checkImage($_FILES['image']['name'])){
        Category::create([
           'name' => $_POST['name'],
            'description' => $_POST['description'],
            'image' => $imagePath
        ]);
        redirect('admin/categories');
        }
        $data['name'] = $fields['name'];
        $data['description'] = $fields['description'];
        $data['errors'] = $validator->errors;
        View::render('\admin\categories\create', ['data' => $data]);

    }

    public function edit($id){
        $category = Category::find($id);
        View::render('\admin\categories\edit', ['category' => $category]);
    }
    public function update($id){
        $validator = new CreateCategoryValidator();
        $fields = filter_input_array(INPUT_POST, $_POST, 1);
        if ($validator->checkName($fields['name']) && $validator->checkDescription($fields['description'])){
            $category = Category::find($id);
            $categoryData = $_POST;
            if (!empty($_FILES['image']) && $_FILES['image']['size'] > 0) {
                FileUploadService::remove(CATEGORIES_IMG_DIR . '/' . $category->image);
                $imagePath = FileUploadService::upload($_FILES['image'], CATEGORIES_IMG_DIR);
                $categoryData['image'] = $imagePath;
            }
            $category->update($categoryData);
            redirect('admin/categories');
        }
        $category = Category::find($id);
        $data['name'] = $fields['name'];
        $data['description'] = $fields['description'];
        $data['errors'] = $validator->errors;
        View::render('\admin\categories\edit', ['data' => $data, 'category' => $category]);

    }
    public function destroy($id){
        Category::delete($id);
        redirect('admin/categories');
    }
}
