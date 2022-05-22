@extends('layouts.app')

@section('content')

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="{{url('css/salon.css')}}">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet'/>
    
    <title>Ülkü Salon</title>
</head>

<div class="container mt-1">
    <img src="images/12.jpg" alt="yo" class="d-flex justify-content-center" style="height:700px;width:100%">
</div>


   <!-- OffCanvas -->
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



  <!-- Something Something1 -->

    <section id="learn" class="p-5">
      <div class="container">
      <div class="row align-items-center justify-content-between">
          <div class="col-md p-5 TextOrIcon-Gold">
            <h2>Ülkü Salon</h2>
            <p class="TextOrIcon-Grey">Ülkü Salon and Spa has become one of the most talked about beauty spots in World and is among the fastest growing salons in the country.</p>
            <p class="TextOrIcon-Grey">Our team is extremely talented and passionate. They are also among the most highly trained and educated technicians in the industry.</p>
            <p class="TextOrIcon-Grey">This ensures each and every one of our clients receives world-class service - each and every time. We want your experience to be unlike any other.</p>
  
            <a href="#questionss" class="btn btn-dark TextOrIcon-Grey mt-3">
              <i class="bi bi-chevron-right"></i> Frequently Asked Questions
            </a>

            <a href="#questionss" class="btn btn-dark TextOrIcon-Grey mt-3" data-bs-toggle="modal" data-bs-target="#Cancellation">
              <i class="bi bi-chevron-right"></i> Cancellation and Reservation Policy
            </a>

           </div>

              <div class="col-md">
                <img src="images/13.jpg" alt="no_learnimage" class="img-fluid">
              </div>

  
        </div>
      </div>
    </section>

 
 
 
 
<!-- Contact Info And Map -->

<section id="learn" class="p-5">
  <div class="container">
     <div class="row align-items-center justify-content-between"> 


      <div class="col-md">
          <h2 class="TextOrIcon-Grey">Contact Info</h2>
       <img src="images/14.jpg" alt="no_learnimage" class="img-fluid">
      </div>

      
      <!-- Laned olası map -->
      <!-- <div class="col-md">
        <div id="map"></div>
      </div> -->

      <div class="col-md p-5 text-white">
        <i class="bi bi-geo-alt icon-gold m-5"> Location</i>
        <pre>
        2-3 Robert St 
        WC2N 6BH
        Covent Garden , Cyprus
        </pre>
        
        <i class="bi bi-telephone icon-gold m-5">  Telephone</i>
        <pre>
          +423 2052 912391
        </pre>

        <i class="bi bi-envelope icon-gold m-5 p-1">  Email</i>
        <pre>
          Ülküsalonbook@hotmail.com.
        </pre>
        
        <a href="HoursAndGuide.html" target="_Blank" class="btn btn-dark TextOrIcon-Grey mt-3 m-5">
          <i class="bi bi-chevron-right"></i> Hours And Guidelines
        </a>
        
       </div>

      </div>

    </div>
  
</section>



<div class="container mt-1">

  <!-- Carousel  (carousel-dark) -->
   <div id="caro" class="carousel slide carousel-fade " data-bs-ride="carousel">
      <!-- Indicators/dots -->
      <div class="carousel-indicators">
          <button type="button" data-bs-target="#caro" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#caro" data-bs-slide-to="1" class="active"></button>
          <button type="button" data-bs-target="#caro" data-bs-slide-to="2" class="active"></button>
          <button type="button" data-bs-target="#caro" data-bs-slide-to="3" class="active"></button>
      </div>

       <!-- The slideshow/carousel -->
       <div class="carousel-inner">
           <div class="carousel-item active">
               <img src="images/15.jpg" alt="no im9" class="d-block" style="height:100%;width:100%">
               <div class="carousel-caption">
                   <h3 class="TextOrIcon-Grey">Fascinating Relaxing</h3>
                   <p class="TextOrIcon-Grey">A Relaxation like no other</p>
               </div>
           </div>

           <div class="carousel-item">
               <img src="images/16.jpg" alt="no im6" class="d-block" style="height:100%;width:100%">
               <div class="carousel-caption">
                   <h3 class="TextOrIcon-Grey">More than one possiblity</h3>
                   <p class="TextOrIcon-Grey">Do whatever you want while you get our best services</p>
               </div>
           </div>

           <div class="carousel-item">
               <img src="images/18.jpg" alt="no im8" class="d-block" style="height:100%;width:100%">
               <div class="carousel-caption">
                   <h3 class="TextOrIcon-Black">Products You cant find</h3>
                   <p class="TextOrIcon-Black">Buy our special Ülkü Spa products that we used on you.</p>
               </div>
           </div>

           <div class="carousel-item">
            <img src="images/17.jpg" alt="no im8" class="d-block" style="height:100%;width:100%">
            <div class="carousel-caption">
                <h3>Special Rooms</h3>
                <p>You can get special treatment by our Masseuser's</p>
            </div>
        </div>
    </div>

       


       <!-- Left and right controls/icons -->
       <button class="carousel-control-prev" type="button" data-bs-target="#caro" data-bs-slide="prev">
           <span class="carousel-control-prev-icon"></span>
       </button>

       <button class="carousel-control-next" type="button" data-bs-target="#caro" data-bs-slide="next">
           <span class="carousel-control-next-icon"></span>
       </button>
    
    </div>
  </div>


    <!-- Horizontal Divider-->
    <div class="container mt-5" id="upper-horizantal">
        <hr>
        </div>

  <div>
    <p class="TextOrIcon-Gold" id="Ask_P">Give us a feedback or ask a question</p>
    <a href="/faq"><button type="submit" class="btn" id="AskYourQuest">Ask Your Question's</button></a>
    <a href="/feedbacks"><button type="submit" class="btn" id="AskYourQuest2">Give Us a Feedback</button></a>
  </div>


<!-- Horizontal Divider-->
<div class="container mt-5" id="bottom-horizantal">
    <hr>
    </div>



    
        <!-- Horizontal Divider-->
        <div class="container mt-5" id="upper-horizantal">
            <hr>
            </div>
      
      
      
             <div class="container mt-5">
               <a href="404.html" class="Terms">Terms And Conditions</a>
             
      
             
              <a href="404.html" class="Privacy">Privacy Notice</a>
            
      
            
              <a href="404.html" class="Health">Health and Safety policy</a>
            </div>
      
      
             <!-- Horizontal Divider-->
            <div class="container mt-5" id="bottom-horizantal">
              <hr>
              </div>


              
  <!-- Footer -->
  <footer class="p-2 bg-dark text-white text-center position-relative">
    <div class="container">
      <p class="lead TextOrIcon-Gold">Copyright © Ülkü Saloon And Spa</p>
      <a href="#" class="position-absolute bottom-0 end-0 p-3"><i class="bi bi-arrow-up-circle h1 TextOrIcon-Gold"></i></a>
    </div>
  </footer>

@endsection