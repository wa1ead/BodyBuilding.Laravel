<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>BODY BUILDING</title>
  <link rel="stylesheet" href="/css/style.css">
</head>

<body>
  <div class="banner">
    <div class="navbar">
      <h1><a href="{{route('home.index')}}">BodyBuilding</a></h1>
      <ul>
        <li><a href="{{route('home.index')}}">HOME</a></li>
        <li><a href="programs">PROGRAMS</a></li>
        <li><a href="{{route('programs.create')}}">CREATE</a></li>
        <li><a href="{{route('home.login')}}">LOGIN</a></li>';
        <li><a href="{{route('home.signup')}}">SIGNUP</a></li>';
        <li><a href="{{route('home.about')}}">ABOUT</a></li>
      </ul>
    </div>
  </div>
  <div class="content">
    @yield('content')
  </div>
</body>

</html>