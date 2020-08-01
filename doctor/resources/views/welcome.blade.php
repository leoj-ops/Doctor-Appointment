<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body style="padding-top: 70px;font-family: Arial, Helvetica, sans-serif;">
<div class="container" >
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top ">
        <i class='fas fa-heartbeat navbar-brand' style='font-size:48px;color:rgb(255, 125, 125)'></i>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class=" collapse navbar-collapse " id="collapsibleNavbar">                
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="home.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">Login</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="background-image">
    <style >
        body {
          background-image: url('hero2.png');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-color: rgba(255, 255, 255, 0.349);
          background-blend-mode: lighten;
          background-size: 100% 100%;
        }
        </style>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 ">
            <img src="contact_form.png" style="height: 100%;width: 100%;float: left;" class="rounded mx-auto d-block">
        </div>
        <div class="col-lg-6 " style="padding-top: 100px;">
            <h3 style="margin-left: 18px;">-Appointment Form</h3>
            <form action="#">
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
                <label for="ailment">Ailments:</label>
                <input type="text" class="form-control jumbotron" id="ailment" placeholder="Enter ailments" name="ailment" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill the username.</div>
            </div>
            <div style="margin-left: 18px;">
                <button type="button" class="btn btn-outline-primary btn-md" >SUBMIT</button>
            </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>