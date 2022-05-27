@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="{{url('css/layouts.css')}}">
</head>
<div class="container mt-1">
    <img src="images/1.jpg" alt="yo" class="d-flex justify-content-center" style="height:700px;width:100%">
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
            <h2>Ülkü Ancient Baths</h2>
            <p class="TextOrIcon-Gold">This is a space full of magic in which history and water converge to provide you with a unique total relaxation experience. Get ready to start an unforgettable journey through sensations that culminates with a relaxing massage or a sophisticated ritual.</p>
            <p class="TextOrIcon-Gold">the Ülkü experience consists of an unforgettable journey through sensations across the various baths with water at different temperatures that will transport you to the ancient times of the Roman, Greek and Ottoman traditions.</p>
            <p class="TextOrIcon-Gold">Come discover a unique atmosphere of relaxation</p>
  
            <a href="#questionss" class="btn btn-dark TextOrIcon-Gold mt-3">
              <i class="bi bi-chevron-right"></i> Frequently Asked Questions
            </a>

            <a href="#questionss" class="btn btn-dark TextOrIcon-Gold mt-3" data-bs-toggle="modal" data-bs-target="#Cancellation">
              <i class="bi bi-chevron-right"></i> Cancellation and Reservation Policy
            </a>

           </div>

              <div class="col-md">
                <img src="images/2.jpg" alt="no_learnimage" class="img-fluid">
              </div>

  
        </div>
      </div>
    </section>

 
 
 
 
<!-- Contact Info And Map -->

<section id="learn" class="p-5">
  <div class="container">
     <div class="row align-items-center justify-content-between"> 


      <div class="col-md">
          <h2 class="icon-gold">Contact Info</h2>
       <img src="images/3.jpg" alt="no_learnimage" class="img-fluid">
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
          Ülküspabook@hotmail.com.
        </pre>
        
        <a href="HoursAndGuide.html" target="_Blank" class="btn btn-dark TextOrIcon-Gold mt-3 m-5">
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
               <img src="images/4.jpg" alt="no im9" class="d-block" style="height:100%;width:100%">
               <div class="carousel-caption">
                   <h3 class="TextOrIcon-Gold">Fascinating Relaxing</h3>
                   <p class="TextOrIcon-Black">A Relaxation like no other</p>
               </div>
           </div>

           <div class="carousel-item">
               <img src="images/5.jpg" alt="no im6" class="d-block" style="height:100%;width:100%">
               <div class="carousel-caption">
                   <h3 class="TextOrIcon-Gold">More than one possiblity</h3>
                   <p class="TextOrIcon-Black">Do whatever you want while you get our best services</p>
               </div>
           </div>

           <div class="carousel-item">
               <img src="images/6.jpeg" alt="no im8" class="d-block" style="height:100%;width:100%">
               <div class="carousel-caption">
                   <h3 class="TextOrIcon-Black">Products You cant find</h3>
                   <p class="TextOrIcon-Black">Buy our special Ülkü Spa products that we used on you.</p>
               </div>
           </div>

           <div class="carousel-item">
            <img src="images/7.jpg" alt="no im8" class="d-block" style="height:100%;width:100%">
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


  <!-- Freq Asked -->
  <section id="questionss" class="p-5">
      <div class="container">
        <h2 class="text-center mb-4 TextOrIcon-Gold">Frequently Asked Questions</h2>
  
        <div class="accordion accordion-flush" id="questions">
          <!-- Item 1 -->
          <div class="accordion-item bg-dark TextOrIcon-Gold">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed bg-dark TextOrIcon-Gold" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne">
                Do you offer couples massage ?
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
              data-bs-parent="#questions">
              <div class="accordion-body">All of our services can be done as a couple’s experiences. You can book any of our experiences for two people and we will try to accommodate as couple’s massage. All the experiences offered as Couples specials are designed as an experience for two.You will find all this information online or you can ask our London booking team for details by emailing Ülküspabook@hotmail.com.</div>
            </div>
          </div>
          <!-- Item 2 -->
          <div class="accordion-item bg-dark TextOrIcon-Gold">
            <h2 class="accordion-header" id="flush-headingTwo">
              <button class="accordion-button collapsed bg-dark TextOrIcon-Gold" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo">
                Will there be other people in Baths with me?
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
              data-bs-parent="#questions">
              <div class="accordion-body">Yes, the bath area is a large space with different baths and treament areas. We limit our experiences per session to ensure the privacy and tranquility of the experience. The number of people that will be allowed in one single session depends on booked services and not all guests will coincide in the baths at the same time. All sessions are co-ed.</div>
            </div>
          </div>
          <!-- Item 3 -->
          <div class="accordion-item bg-dark TextOrIcon-Gold">
            <h2 class="accordion-header" id="flush-headingThree">
              <button class="accordion-button collapsed bg-dark TextOrIcon-Gold" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThree">
                Arrival Time ?
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
              data-bs-parent="#questions">
              <div class="accordion-body">To enhance the experience, we encourage you to arrive 30 minutes prior to your scheduled appointment time. Upon arrival into the Aire Ancient Bath, you will be requested to complete a health questionnaire. This information will not be processed in any automated database.  

                Please understand that late arrivals will result in the experience time being shortened accordingly.  .</div>
            </div>
          </div>
          <!-- Item 4 -->
          <div class="accordion-item bg-dark TextOrIcon-Gold">
            <h2 class="accordion-header" id="flush-headingFour">
              <button class="accordion-button collapsed bg-dark TextOrIcon-Gold" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFour">
                What do I need to bring ?
              </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
              data-bs-parent="#questions">
              <div class="accordion-body">We kindly ask that you bring a bathing suit, however we have bathing suits to borrow if you do not have one. Everything else is provided onsite: towels, robes, slippers, toiletries (shampoo, conditioner, body wash, face wipes) as well as hair dryers and straightening irons, all of which are available in the locker rooms. The only thing you might want to bring is facial skincare.</div>
            </div>
          </div>
          <!-- Item 5 -->
          <div class="accordion-item bg-dark TextOrIcon-Gold">
            <h2 class="accordion-header" id="flush-headingFive">
              <button class="accordion-button collapsed bg-dark TextOrIcon-Gold" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFive">
                Is the experience co-ed ?
              </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
              data-bs-parent="#questions">
              <div class="accordion-body">Yes, both men and women enjoy the bath area together and receive treatments in the same area.</div>
            </div>
          </div>
        </div>
             
        <button class="btn btn-dark icon-gold btn-lg" data-bs-toggle="modal" data-bs-target="#MoreFreqButton" id="MoreFreqID">More Frequent Questions</button>

      </div>
    </section>

    <!-- Instuctors -->
<section id="Masseuse" class="p-5">

  <div class="container">
    <h2 class="text-center icon-gold">
      Our Masseuse's
    </h2>

    <p class="lead text-center text-white mb-5">Our Employees  have 15+ years working as a <span
        class="icon-gold">Masseuser</span>
      in the industry.
    </p>

    <!--https://randomuser.me/api/portraits/men(or women)/11.jpeg random insan fotosu veren bir api img src ye yaza bilin-->
    <div class="row g-4">

      <div class="col-md-6 col-lg-3">
        <div class="card bg-dark" id="massageCard">
          <div class="card-body text-center">
            <img src="images/11.PNG" class="rounded-circle mb-2" alt="yuumi" id="yuumi">
            <h3 class="card-title mb-3 icon-gold">Yumi Matsutoya</h3>
            <p class="card-text icon-gold">Ülkü Spa is no any other Spa's you know ,it's such a experience that i still cannot forget when i first come here i ask the who is the owner they said its famous Ülkü Ayberk Yiğit.</p>
            <a href="https://twitter.com"><i class="bi bi-twitter TextOrIcon-Gold mx-1"></i></a>
            <a href="https://www.facebook.com"><i class="bi bi-facebook TextOrIcon-Grey mx-1"></i></a>
            <a href="https://www.instagram.com"><i class="bi bi-instagram TextOrIcon-Gold instagram mx-1"></i></a>
            <a href="https://tr.linkedin.com"><i class="bi bi-linkedin TextOrIcon-Grey mx-1"></i></a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card bg-dark" id="massageCard">
          <div class="card-body text-center">
            <img src="images/9.PNG" class="rounded-circle mb-2" id="yuumi">
            <h3 class="card-title mb-3 icon-gold">Yui Ichika</h3>
            <p class="card-text icon-gold">As a Masseuser my sole responsiblity is give the customer a wonderfull expereince and by that Ülkü Spa is best place you can get a service like that.</p>
            <a href="https://twitter.com"><i class="bi bi-twitter TextOrIcon-Gold mx-1"></i></a>
            <a href="https://www.facebook.com"><i class="bi bi-facebook TextOrIcon-Grey mx-1"></i></a>
            <a href="https://www.instagram.com"><i class="bi bi-instagram TextOrIcon-Gold instagram mx-1"></i></a>
            <a href="https://tr.linkedin.com"><i class="bi bi-linkedin TextOrIcon-Grey mx-1"></i></a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card bg-dark" id="massageCard">
          <div class="card-body text-center">
            <img src="images/10.PNG" class="rounded-circle mb-2" id="yuumi">
            <h3 class="card-title mb-3 icon-gold">Sakura Aoi</h3>
            <p class="card-text icon-gold">I worked so many spa saloon's but none of them can able to give expreience you get in Ülkü Spa, i totaly recommend this place to everyone.</p>
            <a href="https://twitter.com"><i class="bi bi-twitter TextOrIcon-Gold mx-1"></i></a>
            <a href="https://www.facebook.com"><i class="bi bi-facebook TextOrIcon-Grey mx-1"></i></a>
            <a href="https://www.instagram.com"><i class="bi bi-instagram TextOrIcon-Gold instagram mx-1"></i></a>
            <a href="https://tr.linkedin.com"><i class="bi bi-linkedin TextOrIcon-Grey mx-1"></i></a>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card bg-dark" id="massageCard">
          <div class="card-body text-center">
            <img src="images/8.PNG" class="rounded-circle mb-2" id="yuumi">
            <h3 class="card-title mb-3 icon-gold">Himari Sara</h3>
            <p class="card-text icon-gold">I have over 15 years of experience working as Masseuser in total, and working with Ülkü Spa more than 4 years now , i can say its the best Spa Saloon i have ever seen to date.</p>
            <a href="https://twitter.com"><i class="bi bi-twitter TextOrIcon-Gold mx-1"></i></a>
            <a href="https://www.facebook.com"><i class="bi bi-facebook TextOrIcon-Grey mx-1"></i></a>
            <a href="https://www.instagram.com"><i class="bi bi-instagram TextOrIcon-Gold instagram mx-1"></i></a>
            <a href="https://tr.linkedin.com"><i class="bi bi-linkedin TextOrIcon-Grey mx-1"></i></a>
          </div>
        </div>
      </div>

    </div>
  </div>

</section>


    <!-- Horizontal Divider-->
    <!-- <div class="container mt-5">
      <hr>
      </div> -->
    
    <!-- socail icons-->
    <!-- <div class="container mt-5">
     
     <a href="https://www.facebook.com"> <i class="bi bi-facebook icon-gold"></i> </a>
     <a href="https://www.instagram.com"> <i class="bi bi-instagram icon-gold"></i> </a>
     <a href="https://twitter.com"> <i class="bi bi-twitter icon-gold"></i></a>

    </div> -->

    <!-- Horizontal Divider-->
    <!-- <div class="container mt-5" id="bottom-horizantal">
      <hr>
      </div> -->

    

      <div>
        <p class="TextOrIcon-Gold" id="Ask_P">Give us a feedback or ask a question</p>
        <a href="/faq"><button type="submit" class="btn" id="AskYourQuest">Ask Your Question's</button></a>
        <a href="/feedbacks"><button type="submit" class="btn" id="AskYourQuest2">Give Us a Feedback</button></a>
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



<!-- More Freq Button -->

<!-- Modal -->
<div class="modal fade" id="MoreFreqButton" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark">
      <div class="modal-header bg-dark">
        <h5 class="modal-title icon-gold" id="exampleModalLabel">More Frequent Questions</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="FreqCloseIcon"></button>
      </div>
      <div class="modal-body bg-dark">
        <p class="lead icon-gold"><b>More Of These questions</b></p>
        <form>
          
          <div class="mb-3">
            <p class="icon-gold">
              <b class="icon-gold">I am pregnant, can I come enjoy an Spa Experience: </b>
              Unfortunately, if you are pregnant you will not be able to enjoy any of our Ülkü Spa experiences.
              Due to specific nature of our treatments, 
              we can’t offer expectant mothers to take part in any of our treatments or the bath experience. 
              We also do not offer any pre-natal services at this time. 
            </p>
          </div>

          <div class="mb-3">
            <p class="icon-gold">
              <b class="icon-gold">Is there a minimum age requirement?: </b>
              The minimum age requirement to enter  Ülkü Spa is 18. Anyone under 18 will not be allowed to access the facilities or enjoy any of our treatments.
            </p>
          </div>

          <div class="mb-3">
            <p class="icon-gold">
              <b class="icon-gold">Personal Items: </b>
              We regret that we cannot be responsible for any loss or damage to personal items while your visit at Ülkü Spa. Please keep all valuables locked in your locker during your visit and make sure it is properly locked before leaving the dressing room to begin your experience.
            </p>
          </div>

          <div class="mb-3">
            <p class="icon-gold">
              <b class="icon-gold">Loss or Damage: </b>
              Lockers are provided during your time at Ülkü Spa Baths. We regret that we cannot be held responsible for any loss or damage of personal possession. 

             All lost property found on the premises should be handed in at the reception. Items will be stored for 4 months, if they are not collected within this time, they will be donated to local charities. Liquids, undergarments and hairbrushes are kept for 24 hours only.  
            </p>
          </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn icon-gold" data-bs-dismiss="modal" id="ButtonCloseFreq">Close</button>
      </div>
    </div>
  </div>
</div>



<!-- Cancellation  -->

<!-- Modal -->
<div class="modal fade" id="Cancellation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-dark">
      <div class="modal-header bg-dark">
        <h5 class="modal-title icon-gold" id="exampleModalLabel">Cancellation and Reservation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="FreqCloseIcon"></button>
      </div>
      <div class="modal-body bg-dark">
        <p class="lead icon-gold"><b>They Are:</b></p>
        <form>
          
          <div class="mb-3">
            <p class="icon-gold">
              <b class="icon-gold">Bookings Refunds:</b>
              Any cancellations made in line with our cancellation policy are eligible for a full refund. Please contact our bookings team on Ülküspabook@hotmail.com. who will be able to assist with the refund process. 
            </p>
          </div>

          <div class="mb-3">
            <p class="icon-gold">
              <b class="icon-gold">Returns:</b>
              The client may cancel the purchase of the various products and services offered by Ülkü Spa within the time frame of 14 calendar days from the date of purchase. For changes and returns will be necessary to present the purchase ticket.
            </p>
          </div>

          <div class="mb-3">
            <p class="icon-gold">
              <b class="icon-gold">Booking Cancellation & Resheduling Policy: </b>
              Please allow 48 hours notice of cancellation or rescheduling to avoid any cancellation penalties.Cancellations received within 48 hours will be charged 100% of the total cost of the appointment.
            </p>
          </div>


        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn icon-gold" data-bs-dismiss="modal" id="ButtonCloseFreq">Close</button>
      </div>
    </div>
  </div>
</div>



<!--Mapbox map bilmemnesi-->
<!-- <script>
  mapboxgl.accessToken = 'pk.eyJ1IjoiY2VtYWxpZ28iLCJhIjoiY2t6c2ZmYzBnMHQ4NDJvb2hjemEyMmZxZyJ9.WDkyQXfjxQ3ZMmam_BW_CQ';
  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center: [-71.060982, 42.35725],
    zoom: 18
  });
</script> -->





@endsection