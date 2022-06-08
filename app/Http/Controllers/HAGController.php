<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HAGController extends Controller
{
    public function index(){
        return view('hours_and_guidelines.index');
    }
}
