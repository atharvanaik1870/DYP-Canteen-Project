<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
       content=" width=device-width,user-scalable=no.initia-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"content="ie=edge">
    <title>Registration</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../css/login.css">

    </head>
    <style>
      #login-form{
    padding:10%0;
    background: url("../assets/login/food1.png")no-repeat;
    background-size: cover;
    width: 100%;
    height: 100%;
    object-fit: cover;
    animation: scale 3s;
}
      #footer {
      margin-top:28px;
      background-color: #141414;
      color: #f5f5f5;
      padding-top: 2rem;
  }
    </style>

    <body>
    <nav class="navbar navbar-expand-md navbar-light bg-transparent">
      <!--md break point at 768px-->
      <div class="container-fluid">
        <!-- container fluid takes up 100% of the screen-->
        
        <h3 id="headtext">DY PATIL COLLEGE OF ENGINEERING</h3>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <!--thsi is navigation toggler for smaller screens-->
          <span class="navbar-toggler-icon"></span>
          <!--this is for the navbar icon-->
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./menu.html">Menu</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="./menu.html">About Us</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
   <main id="main_area">
<?php
//header.php
include "../login-reg pages/helper.php";

?>

<?php
require('../login-reg pages/mysqli_connect.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
  require('../login-reg pages/login-process.php');
}


?>



  <!--login area-->
<section id="login-form">
<div class="row m-0">
  <div class="col-lg-4 offset-lg-2">
    <div class="text-center pb-5">
    <h1 class="login-title text-light">Login</h1>
    <p class="p-1 m-0 font-ubuntu text-light">login and enjoy additional features</p>
    <span class="font-ubuntu text-light">Create a new <a href="register.php">&nbsp;account</a></span>
    </div>
    
    
    <div class="d-flex justify-content-center">
      <form action="login.php" method="post" enctype="multipart/form-data" id="log-form">
      
    <div class="form-row my-4">
      <div class="col">
      <input type="email"   required name="email" id="email" class="form-control" placeholder="Email*">

      </div>
     </div>
 <div class="form-row my-4">
      <div class="col">
      <input type="password" required name="password" id="password" class="form-control" placeholder="Password*">
 </div>
     </div>
     <div class="submit-btn text-center my-5">
      <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Login</button>
      
      </div>
      </form>
  </div>
 </div>
</div>    
</section>
 <!--registration end-->

</main>
<footer id="footer" class="p-5">
    <div class="container-fluid padding">
      <div class="row">
        <div class="col-lg-4">
          <h4 class="font-weight-bold">DY PATIL COLLEGE OF ENGINEERING</h4>
          <hr class="light">
          <p>Good Food leads to a Good Mood</p>
        </div>
        <div class="col-lg-4 d-flex justify-content-center">
          <div>
            <h3>Timings</h3>
            <hr class="light">
            <p>8:00 am - 6:00 pm</p>
          </div>
        </div>

        <div class="col-lg-4 d-flex justify-content-center">
          <div>
            <h3>For feeback</h3>
            <hr class="light">
            <p>Email: info@dypcoeakurdi.ac.in</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
      </body>
  
      </html>
