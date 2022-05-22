@extends('layouts.app')

@section('content')

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
  <link rel="stylesheet" href="{{url('css/booking.css')}}">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

  {{-- <script src ="Book.js"></script> --}}

  <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>

  <title>Booking Process</title>
  </head>
  <body>
    <form action="{{route('booking')}}" method="POST">
      <div class="container mt-5" id="Form_Action">
      
        
            @csrf
         <h4 class="TextOrIcon-Gold">When would you like to come ?</h2>
         Date : <input id="date_picker" type="date" name="date" >
         <script language="javascript">
             var today = new Date();
             var dd = String(today.getDate()).padStart(2, '0');
             var mm = String(today.getMonth() + 1).padStart(2, '0');
             var yyyy = today.getFullYear();
      
             today = yyyy + '-' + mm + '-' + dd;
             $('#date_picker').attr('min',today);
         </script> 
      <div class="container mt-5" id="OptionsForSpaMain">
        <h2 class="TextOrIcon-Grey" id="Spa_Option_h4">Your Spa Option's</h2>
        <div class="container mt-2" id="BoxFor1">
       
        <input required type="radio" name="service" id="" value="RELAXING MASSAGE 60'" > <h5 class="TextOrIcon-Gold" id="aireloveh">RELAXING MASSAGE 60'</h5>
         <div class="mt-3">
          <i class="bi bi-clock-fill TextOrIcon-Gold"> 60 Min</i>
          <i class="bi bi-person-fill TextOrIcon-Gold"> 300 TL</i>
          <p class="TextOrIcon-Gold">A 60 minute full body relaxing massage and a tour at your own pace through baths at different temperatures. A complete journey of relaxation in a candlelit historical building.</p>
      
         </div>
      
         <div class="mt-2" id="BoxFor2">
          
          <input required type="radio" name="service" id="" value="RELAXING MASSAGE 45'" > <h5 class="TextOrIcon-Gold">RELAXING MASSAGE 45 </h5>
          <div class="mt-3">
          <i class="bi bi-clock-fill TextOrIcon-Gold"> 45 Min</i>
          <i class="bi bi-person-fill TextOrIcon-Gold"> 200 TL</i>
          <p class="TextOrIcon-Gold">A 45 minute relaxing massage and a tour at your own pace through baths at different temperatures. A complete journey of relaxation in a candlelit historical building.</p>
          </div>
      
      
          <div class="mt-2" id="BoxFor3">
          
            <input required type="radio" name="service" id="" value="LOVE YOURSELF & 45' MASSAGE " > <h5 class="TextOrIcon-Gold">LOVE YOURSELF & 45' MASSAGE </h5>
            <div class="mt-3">
            <i class="bi bi-clock-fill TextOrIcon-Gold"> 45 Min</i>
            <i class="bi bi-person-fill TextOrIcon-Gold"> 400 TL</i>
            <p class="TextOrIcon-Gold">A soothing 45 minute massage, enhanced with rich sandalwood oil and warm Amethyst crystals. Followed by our magical Ancient Thermal Baths circuit and cava and truffles or fresh fruit juice.</p>
           
            
            </div>
        </div> 
      </div>
      </div>
      
      </div>
      
      
      <div class="container mt-5" id="OptionsForSpaMain2">
      <h2 class="TextOrIcon-Grey" id="Salon_Option_h4">Your Salon Option's</h2>
      <div class="container mt-2" id="BoxFor1">
       
        <input required type="radio" name="service" id="" value="Women's Haircut w/Styling" > <h5 class="TextOrIcon-Gold" id="aireloveh">Women's Haircut w/Styling</h5>
       <div class="mt-3">
        <i class="bi bi-clock-fill TextOrIcon-Gold"> 60-120 Min</i>
        <i class="bi bi-person-fill TextOrIcon-Gold"> 700 TL</i>
        <p class="TextOrIcon-Gold">60 to 120 minutes of women hair cut and styling</p>
      
       </div>
       
      
      
       <div class="mt-2" id="BoxFor2">
        
        <input required type="radio" name="service" id="" value="Men's Haircut" > <h5 class="TextOrIcon-Gold">Men's Haircut</h5>
        <div class="mt-3">
          <i class="bi bi-clock-fill TextOrIcon-Gold"> 30 Min</i>
        <i class="bi bi-person-fill TextOrIcon-Gold"> 300 TL</i>
        <p class="TextOrIcon-Gold">A man hair cut that take max 30 minute.</
        </div>
      
      
        <div class="mt-2" id="BoxFor3">
        
          <input required type="radio" name="service" id="" value="Children's Haircut" ><h5 class="TextOrIcon-Gold">Children's Haircut</h5>
          <div class="mt-3">
          <i class="bi bi-clock-fill TextOrIcon-Gold"> 20 Min</i>
          <i class="bi bi-person-fill TextOrIcon-Gold"> 100 TL</i>
          <p class="TextOrIcon-Gold">Children hair cut that mostly takes 20 minutes.</p>
         
          
                    </div>
                </div> 
            </div>
        </div>
      </div>
      
      <button type="submit" class="btn btn-black btn-lg" id="CheckForAV" onclick="ShowTheOptions()">Check For Availablility</button>
         
      </div>
      </form>
      <div id="form_container" >
        
        <form action="{{route('booking_cont')}}" method="POST" > 
          <h2 class="TextOrIcon-Grey" id="Salon_Option_h4">Select an Available period</h2>
          @csrf
          @php
              $solid_periods=["09:00","10:00","11:00","12:00","14:00","15:00","16:00","17:00"];
              $check_period=[true,true,true,true,true,true,true,true];
          @endphp
           <div class="container mt-2" id="TimeBox">

              @for($i=0;$i < count($solid_periods) ;$i++)
              @if(count($periods)===0)
                  @for ($i = 0; $i < count($solid_periods); $i++)
                  <input required type="radio" name="period" value="{{$solid_periods[$i]}}" > <div id="timebuttons" onclick="selected()">{{$solid_periods[$i]}}</div>
                  @endfor
              @endif
                  @for ($j = 0; $j < count($periods); $j++)
                    @if($periods[$j]->period===$solid_periods[$i])
                      @php
                        $check_period[$i]=false;
                      @endphp
                    @endif
                  @endfor
              @endfor
             
        
            @if (count($periods)!==0)   
            <div id="period_container" > 
            @for($i=0;$i < count($solid_periods);$i++)
            @if ($check_period[$i])
              <input required type="radio" name="period" value="{{$solid_periods[$i]}}" > <div id="timebuttons"  onclick="selected()">{{$solid_periods[$i]}}</div>   
            @else
            <input disabled required type="radio" name="period" value="{{$solid_periods[$i]}}" > <div id="timebuttons_disabled" onclick="selected()">{{$solid_periods[$i]}}</div>
            @endif
            @endfor
          </div>  
           @endif
           </div>
          
      </div>
      <div class="form-floating mb-3 mt-3" id="persons">
      <h4 class="TextOrIcon-Gold">Select Number of People</h2>
          <select class="form-select" id="SelectNumOfPeop" name="persons" onchange="showLabel('LabelSelectNumOfPeop',this)">
            <option value="0">1</option>
            <option value="1">2</option>
            <option value="2">3</option>
            <option value="3">4</option>
          </select>
        <label for="SelectNumOfPeop" class="form-label">Choose how many you will be</label>
      </div>
      <div  class="form-floating mb-3 mt-3" id="personel_info">
        <label class="TextOrIcon-Gold" for="name_surname"> Name Surname </label>
        <br>
        <br>
        <input  type="text" name="name_surname" placeholder="Enter Name Surname" >
        <br>
        <br>
        <label class="TextOrIcon-Gold" id="email" for="email">Email</label>
        <br>
        <br>
        <input  type="email" name="email" placeholder="Enter Email">
      </div> 
      <input style="display:none" type="string" name="date" id="date" value="{{$date}}" >
      <input style="display: none" type="string" name="service" id="service"  value="{{$service}}" >
      <button class="btn btn-black btn-lg" id="continue" > Continue </button>
    </form>
    <div id="space" >Nano Machines Son</div>
  </body>



@endsection
