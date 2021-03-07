<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return 'Hello ';
    }


    public function userByUsername($user){
        return 'Halo user dengan username : '.$user;
    }

    public function userByUserID($id){
        return 'Halo user dengan ID : '.$id;
    }
}
