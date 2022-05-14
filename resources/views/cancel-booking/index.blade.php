@extends('layouts.app')

@section('content')

    <div>
        <h1>Enter Your payment id</h1>
        <form action="{{route('cancel-booking')}}" method="POST" >
            @csrf
            <input required type="text" name="payment_id" placeholder="Your Payment Id Here..." >
            <br>
            <br>
            <button type="submit" > Submit </button>
        </form>
    </div>

@endsection