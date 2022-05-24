@extends('layouts.app')

@section('content')
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="{{url('css/thanks.css')}}">
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  
    {{-- <script src ="Book.js"></script> --}}
  
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
  
    <title>Thank You!</title>
    </head>  

    <body>
        <div class="container message-container" >
        <h2 class="heading" > Your reservation is successfully cancelled. </h2>
        <br>
        <a href="/" class="btn home-btn" >Home</a>
        </div>
    </body>

@endsection