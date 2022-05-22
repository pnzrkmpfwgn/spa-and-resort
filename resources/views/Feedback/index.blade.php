@extends('layouts.app')

@section('content')
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="{{url('css/feedbacks.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
    
    <title>Give Us Your Feedback</title>

    </head>
    <div>
        {{-- <h1>Send your feedback</h1>
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
        </form> --}}

        <div class="container mt-2">
            <!-- Offcanvas Sidebar -->
            
            <!-- Use the .offcanvas-start|end|top|bottom to position the offcanvas to the left, right, top or bottom -->
            <div class="offcanvas offcanvas-start" id="off">
             <div class="offcanvas-header" id="offcanvas-header">
                 <h1 class="offcanvas-title TextOrIcon-Gold">Side Menu</h1>
                 <button type="button" class="btn-close text-reset " data-bs-dismiss="offcanvas" id="offcanvas_button_close"></button>
             </div>
             <div class="offcanvas-body" id="offcanvas_body">        
                 <p class="TextOrIcon-Gold">Ülkü Salon:</p>
                 <a href="/salon"><button class="btn btn-secondary" type="button" id="offcanvas_button2">Salon</button></a>
                 <br>
                 <br>
                 <p class="TextOrIcon-Gold">Book a Service:</p>
                 <a href="/booking"><button class="btn btn-secondary" type="button" id="offcanvas_button2">Book</button></a>
                 <br>
                 <br>
                 <p class="TextOrIcon-Gold">Cancel a Service:</p>
                 <a href="/cancel-booking"><button class="btn btn-secondary" type="button" id="offcanvas_button2">Cancel</button></a>
                 <br>
                 <br>
                 <p class="TextOrIcon-Gold">Our Services:</p>
                 <a href="404.html"><button class="btn btn-secondary" type="button" id="offcanvas_button2">Services</button></a>
                 <br>
                 <br>
                 <p class="TextOrIcon-Gold">Our Products:</p>
                 <a href="404.html"><button class="btn btn-secondary" type="button" id="offcanvas_button2">Products</button></a>
                 <br>
                 <br>
                 <p class="TextOrIcon-Gold">Give Us your feedback:</p>
                 <a href="/feedbacks"><button class="btn btn-secondary" type="button" id="offcanvas_button2">FeedBack</button></a>
                 <br>
                 <br>
                 <p class="TextOrIcon-Gold">Ask us a question:</p>
                 <a href="/faq"><button class="btn btn-secondary" type="button" id="offcanvas_button2">Ask</button></a>
                 <br>
                 <br>
             </div>
            </div>
            
            <!-- Button to open the offcanvas sidebar -->
            
            <button type="button" class="btn" data-bs-toggle="offcanvas" data-bs-target="#off" id="offcanvas-button">
                Click For More Services
            </button>
            
            </div>

        <div class="container mt-5" id="Başlıg">
            <h3 class="TextOrIcon-Gold">Give Us your Feedback</h3>
          </div>
            
        
        
            <form action="{{route('feedbacks')}}" method="POST" >
                @csrf
                <div class="container mt-5" id="Y-Email">
                    <h3 class="TextOrIcon-Grey">Your Email</h3>
                    <div class="input-group mb-3">
                        <input required type="text" class="form-control" placeholder="Enter your email" name="email">
                    </div>
                  </div>
            
                  <div class="container mt-5" id="Title_Feed">
                    <h3 class="TextOrIcon-Grey">Your Title</h3>
                    <div class="input-group mb-3">
                        <input required type="text" class="form-control" placeholder="Write Title of the Feedback you want to give" name="title">
                    </div>
                  </div>
            
            
            
                  <div class="container mt-5" id="Question_Section">
                    
                     <div class="mt-3 mb-3">
                         <label for="comment" class="TextOrIcon-Grey">Your Feedback:</label>
                         <textarea required class="form-control" rows="5" id="comment" name="feedback"></textarea>
                     </div>
                    
                    <button type="submit" class="btn" id="SubmitButt">Submit Feedback</button>
                </div>
            </form>
    </div>

@endsection