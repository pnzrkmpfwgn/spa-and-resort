@extends('layouts.app')

@section('content')

    <div>
        <h1>Send your feedback</h1>
        <form action="{{route('feedbacks')}}" method="POST" >
            @csrf
            <label for="email">Email</label>
            <br>
            <input type="email" name="email" placeholder="Your Email">
            <br>
            <label for="title">Title</label>
            <br>
            <input type="text" placeholder="Title"  name="title" >
            <br>
            <label for="feedback">Feedback</label>
            <br>
            <br>
            <textarea name="feedback" placeholder="Your Feedback" cols="30" rows="10"></textarea>
            <br>
            <button type="submit" > Submit Feedback </button>
        </form>
    </div>

@endsection