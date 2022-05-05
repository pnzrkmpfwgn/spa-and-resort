<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Mail\QuestionAnswered;

class QuestionController extends Controller {
    public function store(Request $request){
        $post = new Question;
        $post-> title = $request->title;
        $post -> question = $request-> question;
        $post -> email = $request -> email;
        $post -> save(); 
        Mail::to($post->email)->send(new QuestionAnswered);
        return back();
    }

    public function index(){
        return view('FAQ.index');
    }
}