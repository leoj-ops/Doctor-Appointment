@extends('layouts.layout')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 ">
            <img src="/img/contact_form.png" style="height: 100%;width: 98%;float: left;" class="rounded mx-auto d-block">
        </div>
        <div class="col-lg-6 " style="padding-top: 100px;">
            <h3 style="margin-left: 18px;">Appointment Form</h3>
            <form action="/index" method="POST">
            @csrf
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6" style="padding-top: 20px;">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill the username.</div>
                    </div>
                    <div class="col-sm-6" style="padding-top: 20px;">
                        <label for="telephone">Telephone:</label>
                        <input type="text" class="form-control" id="telephone" placeholder="Enter telephone number" name="telephone" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill the username.</div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6" style="padding-top: 20px;">
                        <label for="location">Location:</label>
                        <input type="text" class="form-control" id="location" placeholder="Enter location" name="location" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill the username.</div>
                    </div>
                    <div class="col-sm-6" style="padding-top: 20px;">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill the username.</div>
                    </div>
                </div>
            </div>
            <div class="container-fluid" style="padding-top: 20px;">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="ailments">Ailments:</label>
                        <input type="text" class="form-control " id="ailments" placeholder="Enter ailments" name="ailments" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill the username.</div>
                    </div>
                    <div class="col-sm-6">
                        <label for="doctor">Doctor:</label>
                        <input type="text" class="form-control " id="doctor" placeholder="Eg. Dentist" name="doctor" required>
                        <div class="valid-feedback">Valid.</div>
                        <div class="invalid-feedback">Please fill the username.</div>
                    </div>
                </div>
            </div>
            <div style="margin-left: 18px; padding-top: 20px;">
                <button type="Submit" class="btn btn-outline-primary btn-md" >SUBMIT</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection