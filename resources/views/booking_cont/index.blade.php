@extends('layouts.app')

@section('content')
<div>
    <h2>Enter Date and Select Service</h2>
    <form action="{{route('booking')}}" method="POST">
        @csrf
        <label for="date">Date</label>
        <br>
        <br>
        <input type="date" name="date" id="date" >
        <br>
        <br>
        <label for="spa_services_title">Spa Services</label>
        <br/>
        <br/>
        <input name="service" type="radio" value="RELAXING MASSAGE 60'" >
        <label for="service">RELAXING MASSAGE 60'</label>
        <input name="service" type="radio" value="RELAXING MASSAGE 45'">
        <label for="service">RELAXING MASSAGE 45'</label>
        <input name="service" type="radio" value="LOVE YOURSELF & 45' MASSAGE" >
        <label for="service">LOVE YOURSELF & 45' MASSAGE</label>
        <hr>
        <br>
        <label for="saloon_services_title">Saloon Services</label>
        <br>
        <input name="service" type="radio" value="Women's Haircut w/Styling" >
        <label for="service">Women's Haircut w/Styling</label>
        <input name="service" type="radio" value="Men's Haircut" >
        <label for="service">Men's Haircut</label>
        <input name="service" type="radio" value="Children's Haircut" >
        <label for="service">Children's Haircut</label>
        <br>
        <br>
        <button onclick="" type="submit">Continue</button>
     </form>
     <div  id="booking_continue">

       <form action="{{route('booking_cont')}}" method="POST">
        @csrf
        <p>Please select your period </p>
        @php
         $solid_periods=["09:00","10:00","11:00","12:00","14:00","15:00","16:00","17:00"];
         $check_period=[true,true,true,true,true,true,true,true];
        @endphp
         
        @for($i=0;$i < count($solid_periods) ;$i++)
        @if(count($periods)===0)
            @for ($i = 0; $i < count($solid_periods); $i++)
                <input type="radio" name="period" value={{$solid_periods[$i]}}>
                <label for="period">{{$solid_periods[$i]}}</label><br>
            @endfor
        @endif
            @for ($j = 0; $j < count($periods); $j++)
              @if($periods[$j]->period===$solid_periods[$i])
                @php
                  $check_period[$i]=false;
                @endphp
              @endif
            {{-- @if ($periods[$j]->period===$solid_periods[$i])
            <input disabled type="radio" name="period" value={{$solid_periods[$i]}}>
            <label for="period">{{$solid_periods[$i]}}</label><br> --}}
            {{-- @else
            <input type="radio" name="period" value={{$solid_periods[$i]}}>
            <label for="period">{{$solid_periods[$i]}}</label><br> --}}
            @endfor
        @endfor
       @if (count($periods)!==0)   
        @for($i=0;$i < count($solid_periods);$i++)
        @if ($check_period[$i])
        <input type="radio" name="period" value={{$solid_periods[$i]}}>
        <label for="period">{{$solid_periods[$i]}}</label><br> 
        @else
        <input disabled type="radio" name="period" value={{$solid_periods[$i]}}>
        <label for="period">{{$solid_periods[$i]}}</label><br> 
        @endif
        @endfor
       @endif
        @csrf
        
        <br>
        <h3>Personel info</h3>
        <label for="name_surname">Name Surname</label>
        <br>
        <input type="text" name="name_surname" placeholder="Your Name and Surname">
        <br>
        <label for="email">Email</label>
        <br>
        <input type="email" placeholder="Your Email"  name="email" >
        <br>
        <br>
        {{-- @php
         $stringDate=date('d M, Y', strtotime($date));;
        @endphp --}}
        <script>
          var service = document.getElementById("")
        </script>
        <input style="display:none" type="string" name="date" id="date" value="{{$date}}" >
        <input style="display: none" type="string" name="service" id="service"  value="{{$service}}" >
        <label for="persons">Amount of people</label>
        <select name="persons" >
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
      </select>
        {{-- <h2> Payment </h2>
        <div class="row">
            <div class="col-75">
              <div class="container">                    
                  <div class="row">
                    <div class="col-50">
                      <h3>Billing Address</h3>
                      <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                      <input required type="text" id="fname" name="firstname" placeholder="John M. Doe">
                      <label for="email"><i class="fa fa-envelope"></i> Email</label>
                      <input required type="text" id="email" name="email" placeholder="john@example.com">
                      <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                      <input required type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                      <label for="city"><i class="fa fa-institution"></i> City</label>
                      <input required type="text" id="city" name="city" placeholder="New York">
          
                      <div class="row">
                        <div class="col-50">
                          <label for="state">State</label>
                          <input required type="text" id="state" name="state" placeholder="NY">
                        </div>
                        <div class="col-50">
                          <label for="zip">Zip</label>
                          <input required type="text" id="zip" name="zip" placeholder="10001">
                        </div>
                      </div>
                    </div>
          
                    <div class="col-50">
                      <h3>Payment</h3>
                      <label for="fname">Accepted Cards</label>
                      <div class="icon-container">
                        <i class="fa fa-cc-visa" style="color:navy;"></i>
                        <i class="fa fa-cc-amex" style="color:blue;"></i>
                        <i class="fa fa-cc-mastercard" style="color:red;"></i>
                        <i class="fa fa-cc-discover" style="color:orange;"></i>
                      </div>
                      <label for="cname">Name on Card</label>
                      <input required type="text" id="cname" name="cardname" placeholder="John More Doe">
                      <label for="ccnum">Credit card number</label>
                      <input required type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                      <label for="expmonth">Exp Month</label>
                      <input required type="text" id="expmonth" name="expmonth" placeholder="September">
                      <div class="row">
                        <div class="col-50">
                          <label for="expyear">Exp Year</label>
                          <input required type="text" id="expyear" name="expyear" placeholder="2018">
                        </div>
                        <div class="col-50">
                          <label for="cvv">CVV</label>
                          <input required type="text" id="cvv" name="cvv" placeholder="352">
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <br>
          <br> --}}
          <button type="submit" > Book it </button> 
       </form>

     </div>
</div>
@endsection
