<?php

namespace App\Http\Controllers;

class ServicesController extends Controller {
    public function index(){
        return view('services.index');
    }
}