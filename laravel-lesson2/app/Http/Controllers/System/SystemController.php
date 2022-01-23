<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function index(){
        ###
    }
    
    public function auth(){
        return view('auth');
    }
}
