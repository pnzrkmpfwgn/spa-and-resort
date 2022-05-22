@extends('layouts.app')

@section('content')

<head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <link rel="stylesheet" href="{{url('css/payment.css')}}">
      
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
      
        {{-- <script src ="Book.js"></script> --}}
      
        <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.2.min.js"></script>
      
        <title>Payment</title>
</head>

<body>
    <div style="padding:100px;width:100%" >
        <div class="row">
            <div class="col-75">
              <div class="payment_container">
                <form action="/action_page.php">
          
                  <div class="row">
                    <div class="col-50">
                      <h3>Billing Address</h3>
                      <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                      <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                      <label for="email"><i class="fa fa-envelope"></i> Email</label>
                      <input type="text" id="email" name="email" placeholder="john@example.com">
                      <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                      <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                      <label for="city"><i class="fa fa-institution"></i> City</label>
                      <input type="text" id="city" name="city" placeholder="New York">
          
                      <div class="row">
                        <div class="col-50">
                          <label for="state">State</label>
                          <input type="text" id="state" name="state" placeholder="NY">
                        </div>
                        <div class="col-50">
                          <label for="zip">Zip</label>
                          <input type="text" id="zip" name="zip" placeholder="10001">
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
                      <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                      <label for="ccnum">Credit card number</label>
                      <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                      <label for="expmonth">Exp Month</label>
                      <input type="text" id="expmonth" name="expmonth" placeholder="September">
          
                      <div class="row">
                        <div class="col-50">
                          <label for="expyear">Exp Year</label>
                          <input type="text" id="expyear" name="expyear" placeholder="2018">
                        </div>
                        <div class="col-50">
                          <label for="cvv">CVV</label>
                          <input type="text" id="cvv" name="cvv" placeholder="352">
                        </div>
                      </div>
                    </div>
          
                  </div>
                  <input type="submit" value="Continue to checkout" class="btn">
                </form>
              </div>
            </div>
          
            <div class="col-25">
              <div class="payment_container">
                <h4>Price <span class="price" style="color:black">
                    <i class="fa fa-shopping-cart"></i>
                    <b></b>
                  </span>
                <hr>
                <p>Total: <span class="price" style="color:black">  <b>  
                    @switch($service)
                    @case("RELAXING MASSAGE 60'")
                         {{300*$persons}}TL
                        @break
                
                        @case("RELAXING MASSAGE 45")
                        {{200*$persons}}TL
                        @break

                        @case("LOVE YOURSELF & 45' MASSAGE")
                        {{400*$persons}}TL
                        @break

                        @case("Women's Haircut w/Styling")
                        {{700*$persons}}TL
                        @break

                        @case("Men's Haircut")
                        {{300*$persons}}TL
                        @break

                        @case("Children's Haircut")
                        {{100*$persons}}TL
                        @break

                    @default
                        <span>?</span>
                @endswitch   
                
                </b></span></p>
              </div>
            </div>
          </div>
    </div>
    <div style="position: absolute;top:1000px;color:rgb(34, 33, 33)" >Suicide is painless</div>
</body>

@endsection