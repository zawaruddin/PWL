<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }


    public function userByUsername($user)
    {
        return 'Halo user dengan username : '.$user;
    }

    public function userByUserID($id)
    {
        return 'Halo user dengan ID : '.$id;
    }

    public function getSmartphone()
    {
        return '<ul>
                    <li>Iphone</li>
                    <li>Samsung</li>
                    <li>Xiaomi</li>
                    <li>Oppo</li>
                    <li>Nokia</li>
                </ul>';
    }

    public function getLaptop()
    {
        return '<ul>
                    <li>Macbook</li>
                    <li>Asus</li>
                    <li>HP</li>
                    <li>Dell</li>
                    <li>Acer</li>
                    <li>MSI</li>
                </ul>';
    }
}
