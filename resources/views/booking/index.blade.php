@extends('layouts.app')

@section('content')
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="{{url('css/booking.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <script src ="Book.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>

    <title>Booking Process</title>
    </head>
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

    
    {{-- <form action="{{route('booking')}}" method="POST"> --}}
        {{-- @csrf
        <label for="date">Date</label>
        <br>
        <br>
        <input required type="date" name="date" id="date" >
        <br>
        <br>
        <label for="spa_services_title">Spa Services</label>
        <br/>
        <br/>
        <input required name="service" type="radio" value="RELAXING MASSAGE 60'" >
        <label for="service">RELAXING MASSAGE 60'</label>
        <input required name="service" type="radio" value="RELAXING MASSAGE 45'">
        <label for="service">RELAXING MASSAGE 45'</label>
        <input required name="service" type="radio" value="LOVE YOURSELF & 45' MASSAGE" >
        <label for="service">LOVE YOURSELF & 45' MASSAGE</label>
        <hr>
        <br>
        <label for="saloon_services_title">Saloon Services</label>
        <br>
        <input required name="service" type="radio" value="Women's Haircut w/Styling" >
        <label for="service">Women's Haircut w/Styling</label>
        <input required name="service" type="radio" value="Men's Haircut" >
        <label for="service">Men's Haircut</label>
        <input required name="service" type="radio" value="Children's Haircut" >
        <label for="service">Children's Haircut</label>
        <br>
        <br> --}}
        {{-- @csrf --}}
        {{-- <button style="position: absolute;top:200px" onclick="" type="submit">Continue</button> --}}
     {{-- </form> --}}
    
@endsection