@extends('layouts.app')

@section('content')

    <div>
        <h1>Send your feedback</h1>
        <form action="">
            @csrf
            <label for="email">Email</label>
            <br>
            <input type="email" name="email" placeholder="Your Email">
            <br>
            <br>
            <label for="feedback">Feedback</label>
            <br>
            <textarea name="feedback" placeholder="Your Feeback" cols="10" rows="10"></textarea>
            <button type="submit" > Submit Feedback </button>
        </form>
    </div>

@endsection