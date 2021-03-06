<?php

namespace App\Helpers;

class SessionHelper
{
    public static function isUserLoggedIn(): bool
    {
        return !empty($_SESSION['user_data']);
    }
    public static function userId(){
        return $_SESSION['user_dara']['id'];
    }
    public static function setUserData($id, ...$args){
        $_SESSION['user_data'] = array_merge(['id'=>$id],$args);
    }
    public static function destroy(){
        session_destroy();
    }
}


