<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller {
    public function store(Request $request){
        $post = new Feedback;
        $post-> title = $request->title;
        $post -> feedback = $request-> feedback;
        $post -> email = $request -> email;
        $post -> save(); 
        return view('feedback_final.index');
    }
    public function index(){
        return view('Feedback.index');
    }
}