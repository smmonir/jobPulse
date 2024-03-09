@extends('layouts.app')

@section('content')
<section class="bgimage" id="home">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hero-text">
            <img src="{{ asset('img/home-banner.png') }}" alt="description of myimage">
            </div>
            </div>
        </div>
    </section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h3>Contact Us</h3>
            <p><strong><Address>Address: Mirpur, Dhaka, Bangladesh</Address></strong></p>
            <p><strong>Phone: +8801776543</strong></p>
            <p><strong><email>eng.smmonir@gmail.com</email></strong></p>
        </div>
        <div class="col-md-8">
        <h3>Get In Touch</h3>
        <form action="/persons" method="post" enctype="multipart/form-data">
    @csrf    
    <input type="text" name="name" id="name" value="John" placeholder="Your Name"><br/><br/>
    <input type="text" name="email" id="email" value="" placeholder="Your Email"><br/><br/>
    <input type="text" name="subject" id="subject" value="" placeholder="Subject"><br/><br/>
    <input type="text" name="mobile" id="mobile" value="" placeholder="Your Mobile"><br/><br/>
    <input type="text" name="query" id="query" value="" placeholder="Your Query"><br/><br/>
 
    <input type="submit" value="Send">
        </div>
    </div>
</div>
<div class="container">
  <div class="row justify-content-center">
  <h3>Companies belive in us</h3>
  </div>
</div>
@endsection