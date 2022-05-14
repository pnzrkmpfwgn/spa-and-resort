@extends('layouts.app')

@section('content')
    <h2>Enter Date and Select Service</h2>
    <form action="{{route('booking')}}" method="POST">
        @csrf
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
        <br>
        <button onclick="" type="submit">Continue</button>
     </form>
       
    
   
@endsection