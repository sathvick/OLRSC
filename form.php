<?php
   session_start();
   
   if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <script src="/path/to/html2canvas.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"
    integrity="sha256-c9vxcXyAG4paArQG3xk6DjyW/9aHxai2ef9RpMWO44A=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
  <title>OLRSC-TED</title>
</head>

<body>
  <!-- START HERE -->
  <div class="container mt-5">
          <!-- JUMBOTRON -->
    <div id="content2" class="jumbotron">
      <h1 class="display-4 text-center text-danger">Welcome to OLRSC!</h1>
      <ul class="ml-3">
      <li>The Online Learning Readiness Self-Check is designed to identify your current online learning readiness level and assist you to be successful in online courses.</li>
      <li>When selecting your rating, please answer honestly.</li>
      <li>After completing the self-check, please read the feedback and learning tips. Also, you can download your OLRSC result and the online learning readiness framework.</li>
      <li>Let’s start by typing your TTU email address and choosing the site you belong to.</li>
      </ul>
      
      <hr>
      
      <form class="was-validated" id="form" action="resultcopy.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" oninput="check(this)" name="email" placeholder="TTU Email" pattern=".+@ttu.edu" oninvalid="this.setCustomValidity('Please enter TTU email')" onchange="this.setCustomValidity('')" required>
    </div>
  
    <div class="form-group col-md-12">
      <label for="inputState">Site</label>
      <div class="form-group">
    <select class="custom-select" name="site" required>
        <option>GP - Grand Prairie</option> 
        <option>Dal - Dallas</option> 
        <option>Hou - Houston</option> 
        <option>AUS- Austin</option> 
        <option>ALD - Aldine</option>
        <option>FW- Fort Worth</option>
        <option>Hill - Marble Falls and Fredericksburg</option>
        <option>SA - San Antonio (Northside/Somerset)</option> 
        <option>NC- New Caney</option>
        
      </select>
      <div class="invalid-feedback">Example invalid custom select feedback</div>
    </div>
    </div>
    <!-- <button type="back" onclick="window.history.back()" class="btn btn-danger btn-lg mr-auto">Previous</button> -->
  <button type="submit" class="btn btn-success btn-lg ml-auto">Next</button>
</form>

    </div>
  

      
  </div>

  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>


</body>

</html>