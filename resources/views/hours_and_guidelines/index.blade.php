@extends('layouts.app')

@section('content')
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="{{url('css/HAG.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <title>Hours And Guidelines</title>
</head>
    <body>
        <div class="container mt-5">
 
            <h1 id="HoAndGu">Hours and guidelines</h1>
    
          </div>
    
    
          <div class="container mt-5" id="Arrival_Time">
            <h3 class="TextOrIcon-Gold">Arrival Time </h3>
            <p class="TextOrIcon-Grey">To enhance the Ülkü Ancient Bath Experience, we encourage you to arrive 30 minutes prior to your scheduled appointment time. Upon arrival into the Ülkü Ancient Bath, you will be requested to complete a health questionnaire. This information will not be processed in any automated database.</p>
            <p class="TextOrIcon-Grey">Please understand that late arrivals will result in the experience time being shortened accordingly.  </p>
          </div>
    
    
          <div class="container mt-5" id="Hours_Time">
            <h3 class="TextOrIcon-Gold">Hours</h3>
            <p class="TextOrIcon-Grey">Our opening hours are*: Monday – Sunday: 8am - 11pm.</p>
            <p class="TextOrIcon-Grey">*(Special hours may apply to major holidays such as December 24, December 25, December 26, December 31, January 1. Contact our booking department for more information to book for those days).</p>
            <p class="TextOrIcon-Grey">Our appointment times are as follows:</p>
            
            <p class="text-white"><b>Monday - Thursday</b></p>
            <hr class="TextOrIcon-Grey">
            <pre class="TextOrIcon-Gold" id="Hours1"> 10am  |  11am  | 12pm  | 1pm  | 2pm  | 3pm  | 4pm  | 5pm  | 6pm  | 7pm  | 8pm  | 9pm </pre>
            <hr class="TextOrIcon-Grey" id="bottom-horizantal">
    
    
            <p class="text-white"><b>Friday</b></p>
            <hr class="TextOrIcon-Grey">
            <pre class="TextOrIcon-Gold" id="Hours1"> 8am  |  9am  | 10am  | 11am  | 12pm  | 1pm  | 2pm  | 3pm  | 4pm  | 5pm  | 6pm  | 7pm  | 8pm  | 9pm </pre>
            <hr class="TextOrIcon-Grey" id="bottom-horizantal">
    
    
            <p class="text-white"><b>Saturday</b></p>
            <hr class="TextOrIcon-Grey">
            <pre class="TextOrIcon-Gold" id="Hours1"> 8am  |  9am  | 10am  | 11am  | 12pm  | 1pm  | 2pm  | 3pm  | 4pm  | 5pm  | 6pm  | 7pm  | 8pm  | 9pm </pre>
            <hr class="TextOrIcon-Grey" id="bottom-horizantal">
    
    
            <p class="text-white"><b>Sunday</b></p>
            <hr class="TextOrIcon-Grey">
            <pre class="TextOrIcon-Gold" id="Hours1"> 8am  |  9am  | 10am  | 11am  | 12pm  | 1pm  | 2pm  | 3pm  | 4pm  | 5pm  | 6pm  | 7pm  | 8pm  | 9pm </pre>
            <hr class="TextOrIcon-Grey" id="bottom-horizantal">
    
          </div>
    
         
          <div class="container mt-5">
              <h3 id="Ettiq">Ülkü Ancient Bath Ettiquete</h1>
    
                <ul>
                    <li class="TextOrIcon-Grey" id="Ettiquete">We place a limit on the number of people we allow per session to maintain a private and tranquil atmosphere. We strongly advise booking in advan</li>
                    <li class="TextOrIcon-Grey" id="Ettiquete">Our Baths ans massage areas are a relaxing and tranquil environment. Please respect all guests rights to privacy and serenity.</li>
                    <li class="TextOrIcon-Grey" id="Ettiquete">The use of mobile phones and cameras is only permitted in the reception lounge.</li>
                    <li class="TextOrIcon-Grey" id="Ettiquete">The use of swimwear is compulsory in our installations.</li>
                    <li class="TextOrIcon-Grey" id="Ettiquete">Ülkü Ancient Bath is a smoke-free zone.</li>
                    <li class="TextOrIcon-Grey" id="Ettiquete">We have a silence policy in which we request clients to speak in low voices to ensure a relaxing experience for all guests.</li>
                    <li class="TextOrIcon-Grey" id="Ettiquete">We advise to arrive 30 minutes prior to the start of the experience to have time to check-in and change</li>
                    <li class="TextOrIcon-Grey" id="Ettiquete">Upon arrival, guests will receive a tour of the facilities, but they are free to move among the baths as they choose</li>
                    <li class="TextOrIcon-Grey" id="Ettiquete">There are lockers in the dressing rooms to store personal belongings. It is recommended to leave all personal items in the lockers. Ülkü Ancient Baths is not responsible for any losses.</li>
                    <li class="TextOrIcon-Grey" id="Ettiquete">Locker rooms are fully equipped with shampoo, conditioner, bodywash, and hairdryers as well as robes, towels, and slippers.</li>
                    <li class="TextOrIcon-Grey" id="Ettiquete">In the bath area, the use of the slippers provided by Ülkü is mandatory and they must be worn at all times in and out of the pools for hygiene and safety reasons. No other slippers will be permitted.</li>
                    <li class="TextOrIcon-Grey" id="Ettiquete">The length of the signature Thermal Bath Experience is 90minutes. If a massage or treatment is added to the experience it will be given during the established time slot stated on the website.</li>
                    <li class="TextOrIcon-Grey" id="Ettiquete">All bath sessions are co-ed.</li>
                    <li class="TextOrIcon-Grey" id="Ettiquete">The minimum age requirement to enter Ülkü is 18.</li>
                    <li class="TextOrIcon-Grey" id="Ettiquete">Please advise us at the time of booking of any healthy conditions, allergies or injuries that could affect your service.</li>
                    <li class="TextOrIcon-Grey" id="Ettiquete">Use of the facilities is not suitable for pregnant women and not recommended for people with cardiovascular problems.</li>
                    <li class="TextOrIcon-Grey" id="Ettiquete">The promotions are not cumulative.</li>
                </ul>
          </div>
    
    
    
          <!-- Footer -->
    <footer class="p-2 bg-dark text-white text-center position-relative">
        <div class="container">
          <p class="lead TextOrIcon-Gold">Copyright © Ülkü Saloon And Spa</p>
          <a href="#" class="position-absolute bottom-0 end-0 p-3"><i class="bi bi-arrow-up-circle h1 TextOrIcon-Gold"></i></a>
        </div>
      </footer>
    </body>
@endsection