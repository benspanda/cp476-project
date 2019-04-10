<!DOCTYPE html>
<html>

<head>
  {{-- META --}}
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Join Course Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{-- CSRF Validation --}}
  <meta name="csrf-token" content="{{ csrf_token() }}">

  {{-- CSS/Fonts --}}
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,700,800" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" media="screen" href="/css/main.css" />
  
  {{-- JS --}}
  <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="/js/main.js"></script>
</head>

<body>
    
  <nav class="navbar navbar-expand-sm bg-white">
    
      <a href="/">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <img class = "ml-3 mr-3" src="https://openclipart.org/download/289348/Pencil-2d.svg" width="60" alt="Colorful Rainbow Clipart" />
          </li>
          <li class="nav-item">
              <h1>Teach-It</h1>
          </li>
        </ul>
      </a>

                <ul class="navbar-nav ml-auto">
      <li class = "nav-item"><a class = "text-muted btn mr-3" href="{{ route('index') }}">Home</a></li>
                  <li class = "nav-item"><a class = "text-muted btn mr-3" href="{{ route('about') }}">About Us</a></li>
                     <li class = "nav-item"><a class = "text-muted btn mr-3" href="{{ route('createCourse') }}">Create a Chat</a></li>
            <li class = "nav-item"><a class = "text-muted btn mr-3" href="{{ route('joinCourse') }}">Join a Chat</a></li>
       
          @if (!Auth::check())
            <li class = "nav-item"><a class = "text-white btn mr-3 btn-info" href="{{ route('login') }}">Login</a></li>
            <li class = "nav-item"><a class = "text-white btn mr-3 btn-info" href="{{ route('register') }}">Register</a></li>
          @else
            <li class = "nav-item"><a class = "text-white btn mr-3 btn-info" href="{{ route('logout') }}">Logout</a></li>
          @endif

    </ul>
    
    </nav>  
    
    @yield('content')

  <nav class="navbar navbar-expand-lg site-footer">
        
     <img src="https://openclipart.org/download/289348/Pencil-2d.svg" width="20" alt="Colorful Rainbow Clipart" /> Teach-It, Inc. All rights reserved © 2019 
    </nav> 

</body>

</html>