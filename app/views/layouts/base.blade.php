<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>
      Real state management
      @yield('title')
    </title>
    @include('layouts.css')
    @include('layouts.js')
</head>
<body class="bodyclass">
<div id="wrap">
   @include('layouts.header')
  <div id="content">
    <div id="home_main">
      @include('layouts.top_search')
    </div>
    <div id="home_sidebar">
      @include('layouts.top_featured')
    </div>
    
    <div id="topcategorieslink" class="clear">
      <h2>Categories</h2>
      <ul>
        <li><a href="#">Villas</a> </li>
        <li><a href="#">Houses</a> </li>
        <li><a href="#">Flats</a> </li>
        <li><a href="#">Apartments</a> </li>
        <li><a href="#">Raw Land</a> </li>
        <li><a href="#">Estates</a> </li>
        <li><a href="#">Shop / OFfice</a> </li>
        <li><a href="#">For Rent</a> </li>
      </ul>
    </div>
    <div class="clear">&nbsp;</div>
    <div id="main">
       @yield('content')
    </div>
     @include('layouts.left_sidebar')
    <div class="clear">&nbsp;</div>
  </div>
  <div id="footer">
    <div id="upperfooter"> <a href="#">Home</a> | <a href="#">Search</a> | <a href="#">Register</a> | <a href="#">Pro Agent Account</a> | <a href="#">About Us</a> | <a href="#">Contact Us</a> |<a href="#"> Privacy Policy</a> <a href="#">Terms Of Use</a> | <a href="#">Advertise With Us</a> </div>
    <div id="lowerfooter"> <span class="backtotop"> <a href="#">Back To Top</a> </span><a href="http://ramblingsoul.com">Free CSS Template</a> by RamblingSoul </div>
  </div>
</div>
</body>
</html>