<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class CancelBookingController extends Controller {
    public function index(){
        return view('cancel-booking.index');
    }
    //Create a function here to change status inside booking table to cancelled
}