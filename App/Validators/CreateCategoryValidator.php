<?php

namespace App\Validators;

use App\Validators\Base\BaseValidator;

class CreateCategoryValidator extends BaseValidator
{
    public array $errors = [];
    public function checkImage(string $image){
        if(empty($image)){
            $this->errors['image'] = 'Image is empty';
            return false;
        }
        return true;
    }
    public function checkDescription(string $fields):bool{
        if(!empty($fields) && strlen($fields) > 5){
            return true;
        }
        $this->errors['description'] = 'Description is empty or short';
        return false;
    }
    public function checkName(string $fields):bool{
        if(!empty($fields)){
            return true;
        }
        $this->errors['name'] = 'Name is empty';
        return false;
    }
}