<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/layouts.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
    
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
    <title>Ülkü Spa</title>
</head>

<body>
 <div>
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top" id="navbarr"> 
    <div class="container">

      <a href="/"><img src="images/18.png" class="navbar-brand" id="SpaLogo"/></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">

           
          
          <li class="nav-item">
            <a href="/booking" class="nav-link text-black">Book</a>  
            </li>

            <!-- <li class="nav-item">
            <div class="dropdown">
            <a href="" class="nav-link bg-dark text-warning dropdown-toggle" data-bs-toggle="dropdown">Cities</a>
            <ul class="dropdown-menu bg-dark">
                <li><h3 class="dropdown-header bg-dark text-warning">Cyprus</h3></li>
                <li><a class="dropdown-item bg-dark text-warning" href="#">Link 1</a></li>
                <li><a class="dropdown-item bg-dark text-warning" href="#">Link 1</a></li>
                <li><a class="dropdown-item bg-dark text-warning" href="#">Link 1</a></li>
                <li><hr class="dropdown-divider bg-dark text-warning"></li>
                <li><h3 class="dropdown-header bg-dark text-warning">Europe</h3></li>
                <li><a class="dropdown-item bg-dark text-warning" href="#">Link 1</a></li>
                <li><a class="dropdown-item bg-dark text-warning" href="#">Link 1</a></li>
                <li><a class="dropdown-item bg-dark text-warning" href="#">Link 1</a></li>
            </ul>
           </div>
          </li>  -->
        
        </ul>
      </div>
    </div>
  </nav>
 </div>
    @yield('content')
</body>

</html>
