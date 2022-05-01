@extends('layouts.app')

@section('content')

    <div>
        <h1>Ask Your Question</h1>
        <form action="{{route('questions')}}" method="POST" >
            @csrf
            <label for="email">Email</label>
            <br>
            <input type="email" name="email" placeholder="Enter your mail...">
            <br>
            <br>
            <label for="title">Title</label>
            <br>
            <input type="text" name="title"  placeholder="Title here.." >
            <br>
            <br>
            <label for="question">Question</label>
            <br>
            <textarea type="text" placeholder="Your question" name="question"></textarea>
            <br>
            <button type="submit" > Submit Question </button>
        </form>
    </div>

@endsection