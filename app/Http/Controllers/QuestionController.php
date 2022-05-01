<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller {
    public function store(Request $request){
        $post = new Question;
        $post-> title = $request->title;
        $post -> question = $request-> question;
        $post -> email = $request -> email;
        $post -> save(); 
        return back();
    }

    public function index(){
        return view('FAQ.index');
    }
}