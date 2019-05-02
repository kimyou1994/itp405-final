<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
</head>
<body>
  <div class="w3-top">
    <div class="w3-bar w3-black w3-card">
      <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      @if (Auth::check())
        <a href="/profile" class="w3-bar-item w3-button w3-padding-large">Profile</a>
        <a href="/search" class="w3-bar-item w3-button w3-padding-large w3-hide-small">New</a>
        <a href="/logout" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Logout</a>
      @else
        <a href="/search" class="w3-bar-item w3-button w3-padding-large">New</a>
        <a href="/login" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Login</a>
        <a href="/signup" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Sign Up</a>
      @endif
    </div>
  </div>
  <div class="w3-content" style="max-width:2000px;margin-top:46px">
    <div class="w3-black" id="tour" style = "height: 100%">
      <div class="w3-container w3-content w3-padding-64" style="max-width:1200px">
        @yield('main')
      </div>
    </div>
  </div>
</body>
</html>
