<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class input extends Controller
{
    public function index(){
        return view('profile.input');
    }
}
