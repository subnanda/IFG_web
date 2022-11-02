<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $data['page'] = 'index';
        return view("index", $data);
    }

    public function profil()
    {
        $data['page'] = 'profil';
        return view("index", $data);
    }
}
