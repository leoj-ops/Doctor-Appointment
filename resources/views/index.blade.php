@extends('layouts.layout')

@section('content')
<div class="background-image">
    <style >
        body {
          background-image: url('/img/h1_hero.png');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-color: rgba(255, 255, 255, 0.349);
          background-blend-mode: lighten;
          background-size: 100% 100%;
        }
        </style>
</div>
<div class="container" style="padding-top: 150px ;">
    
    <h2 style="font-family: Arial, Helvetica, sans-serif;">
    WE CARE ABOUT YOUR HEALTH
    </h2>
    <p>
        Our aim is to provide valuable health information,<br> 
        tools for managing your health,<br>
        and support to those who seek information. <br> 
        You can trust that our content is timely and credible. 
    </p>
    
    <a href="/appointment"><button type="button" class="btn btn-outline-success" style="margin-bottom:5px" >BOOK AN APPOINTMENT</button></a>
</div>

@endsection