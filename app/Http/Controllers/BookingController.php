<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;
use App\Mail\Info;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller {
    public function check(Request $request){
        $date = $request->input("date");
        $service = $request->input("service");
        $periods = DB::select('SELECT period from bookings WHERE service = ? AND date = ?', [$service,$date]);
        return view("booking_cont.index" ,["periods"=>$periods,"service"=>$service,"date"=>$date]);
    }
    public function index(Request $request){
        $periods = Booking::all();
        return view('booking.index',['periods'=>$periods]);
    }
    public function store(Request $request){
        $post = new Booking;
        $post-> email = $request->email;
        $post -> name_surname = $request-> name_surname;
        $post -> period = $request-> period;
        $post -> date = $request -> date;
        $post -> service = $request -> service;
        $post -> persons= $request -> persons;
        $uniqid = Str::random(9);
        $post -> payment_id = $uniqid;
        $post -> status = "OK";
        $post -> save(); 
        Mail::to($post->email)->send(new Info($post));
        return view('payment.index',['persons'=>$post->persons,'service'=>$post->service]);

        //return redirect('/payment',['persons'=>$post->persons,'service'=>$post->service]);
    }
}
