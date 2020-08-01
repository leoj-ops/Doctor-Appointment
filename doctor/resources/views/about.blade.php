@extends('layouts.layout')

@section('content')
<div class="row" style="margin-top:20px;">   
  <div class="col-sm-8" >
    <h3 class="font-weight-bold" style="margin-left: 20px;padding-top:70px"> ABOUT US</h3>
    <div class="container" style="padding:50px 50px 50px">
     <p>This website was created with the sole purpose of linking the patients and doctors online and to promote online treatment during this COVID crisis. The creators of this website are smart students and Joel Jose of SFIT. This website was created from scratch please believe us. The creators are also lazy hence this sad about us page. </p>
    </div>
  </div>
  <div class="col-sm-4" >    
    <img style="height:100% ;width:60% ;border-radius:50% " src="https://media.discordapp.net/attachments/543442604642009109/736908275349717002/about1.png" alt="doctor">
  </div>
</div>
<h3 class="font-weight-bold" style="margin-left: 20px;">OUR DOCTORS</h3>
<div class="container">
<div class="row justify-content-between" >
  <div class="col-sm-4" >
    <div class="thumbnail">
    <img src="https://media.discordapp.net/attachments/543442604642009109/736908288788135976/team1.png" alt="doctor">
    <h3>CARDIOLOGIST</h3>
    <p>DR. SOHAM HALANKAR</p>
  </div>  
  </div>
  <div class="col-sm-4" >
    <div class="thumbnail">
    <img src="https://media.discordapp.net/attachments/543442604642009109/736908293531762718/team2.png" alt="doctor">
    <h3>NEUROSURGEON</h3>
    <p>DR. SAMSON MENDONCA</p>
  </div>
  </div>
  <div class="col-sm-4" >
    <div class="thumbnail">
    <img src="https://media.discordapp.net/attachments/543442604642009109/736908295591428187/team3.png" alt="doctor">
    <h3>DENTIST</h3>
    <p>MR. JOEL JOSE</p>
</div>
</div>
</div>

@endsection