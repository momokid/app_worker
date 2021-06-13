<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name','Laravel') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-dark bg-gradient">
    <nav class="navbar navbar-expand-lg navbar-light bg-warning d-flex justify-between">
        <div class="container-fluid ">
          <a class="navbar-brand sr-only" href="#">Worker App</a>
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Post</a>
            </li>
          </ul>
          
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @auth
              <li class="nav-item">
                <a class="nav-link" href="#">Anwar Sadat Ayub</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
              </li>
              <li class="nav-item">
                <form action="{{ route('logout') }}" method="post">
                  @csrf
                  <input type="submit" class="nav-link" href="{{ route('logout')}}" value="Logout">
                </form>
              </li>
            @endauth
            @guest
              
              <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
              </li>
            @endguest
          </ul>
        </div>
      </nav>
      <div class="container-fluid">
          <div class="row">

            @auth
            <div class="col-3 pt-4 text-white bg-secondary bg-gradient" style="height: 100vh;">
              <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center bg-dark">
                  Site Patrol
                  <span class="badge bg-primary rounded-pill">14</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center  bg-dark">
                  Fuel Escort
                  <span class="badge bg-primary rounded-pill">2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center  bg-dark">
                  A third list item
                  <span class="badge bg-primary rounded-pill">1</span>
                </li>
              </ul>               
            </div>
            @endauth

            @yield('content')

          </div>
      </div>
      
  <!-- Scripts -->
  <script src="{{ asset('js/styles.js') }}" defer></script>
  </body>
</html>