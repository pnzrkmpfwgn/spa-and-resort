<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;

class CancelBookingController extends Controller {
    public function index(){
        return view('cancel-booking.index');
    }
    public function cancel(Request $request){
        $id = $request->input("payment_id");
        DB::table('bookings')->where('payment_id',$id)->update(['status'=>'Cancelled']);
       
        return back();
    }
    //Create a function here to change status inside booking table to cancelled
}