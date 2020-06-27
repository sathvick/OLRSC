<?php
session_start();
$_SESSION["access"] = "true";

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
      integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous"
      />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous"
      />
    <script
      src="http://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"
      ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
      ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
      integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
      crossorigin="anonymous"
      ></script>
      <script type="text/javascript">
    $(document).ready(function () {
        window.scrollTo(0,0);
    });
</script>
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <title>OLRSC-TED</title>
    <script>
      function checkPassword(){
       if(document.getElementById('access').value == 'gotechteach2020!'){
          location.href = "http://ciel.educ.ttu.edu/olrscted/form.php";
         } else {
          return false;
        }
       }
      </script>
  </head>
  <style>
    body {overflow-x: hidden;}

    .bluebg {
    background-color: #1c4491 !important;
    }
    .yellowbg {
    background-color: #fcb03b;
    }
    .redbg {
    background-color: #ef487b;
    }
  </style>
  <body>
    <!-- START HERE -->
    <!-- NAVBAR WITH DROPDOWN -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark shadow fixed-top" id="main-nav">
      <!-- <div class="container"> -->
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarNav"
          >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#Home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#About">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Contact">Contact</a>
            </li>
          </ul>
        </div>
        <div class="dropdown">
          <button
            class="btn btn-secondary dropdown-toggle mr-4"
            type="button"
            id="dropdownMenuButton"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
            >
          Sign In
          </button>
          <div
            class="dropdown-menu dropdown-menu-right"
            aria-labelledby="dropdownMenuButton"
            style="margin-left:-10px"
            >
            <a class="dropdown-item" href="http://ciel.educ.ttu.edu/olrscted/researchlogin.php">Researcher</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="http://ciel.educ.ttu.edu/olrscted/psitelogin.php">Program Coordinator</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="http://ciel.educ.ttu.edu/olrscted/siteAuth.php">Site Coordinator</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Full Page Image Header with Vertically Centered Content -->
    <!-- <div class="row" id="Home">
      <div class="col-12 ">
        <header class="masthead"> -->
          <!-- <div class="container h-100"> -->
          <!-- <div class="row h-100 align-items-center">
            <img src="img/Banner1.png" class="img-fluid" alt="Responsive image" />
          </div>
      </div>
    </div>
    </header> -->

   
  <div class="row" id="Home">
    <img src="img/Banner1.png" class="img-responsive img-fluid pt-4" alt="Responsive image">
    </div>

    <div id="About" >
      </div>
    <!-- CARD OUTLINE -->
    <!-- BACKGROUND COLOR -->
    <div class="card text-white m-5 yellowbg">
      <div class="card-header">
        <h1 class="card-title">PURPOSE OF THE OLRSC</h1>
      </div>
      <div class="card-body">
        <p class="lead">
          <b>The Online Learning Readiness Self-Check (OLRSC) system is created to help you measure how ready you are for the online courses. Besides providing you an overall readiness score, we also provide individualized feedback and valuable resources for your success in online learning.
        </p>
      </div>
    </div>
    <div class="card text-white m-5 bluebg">
      <div class="card-header">
        <h1 class="card-title">ABOUT THE OLRSC</h1>
      </div>
      <div class="card-body">
        <p class="lead">
          <b>This OLRSC identifies your level of proficiency in the nine areas that significantly contribute to online academic success. It takes about 10 minutes to complete the self-check survey and the responses are anonymous. To provide you an accurate result, it is important that you choose the most honest description of yourself.
          <br />
          After you complete the survey, you will receive an overall score including individual scores in each area. All the recommendations and resources from proven research will be provided based on your strengths and weaknesses. Remember to keep a copy of the recommendations for your records and retake the survey later.</b>
        </p>
      </div>
    </div>
    
    <div class="card redbg text-white m-5">
      <div class="card-header">
        <h1 class="card-title">WHO CAN USE THE OLRSC?</h1>
      </div>
      <div class="card-body">
        <p class="lead">
          <b>This system is for teacher candidates at TTU who want to diagnose their strengths and weaknesses in online learning.</b>
        </p>
      </div>
    </div>
    </div>
    </div>
    <div class="card bg-white text-black m-5">
      <div class="card-body">
        <p class="lead">
          Enter the Access Code and click on the “START” button below to start the survey.
        </p>
        <hr>
        <form method="post">
        <center>
    <div>
      <input type="text" class="form-control col-sm-3" id="access" placeholder="Enter Your Access Code Here" required>
    </div><br>
        
          <a class="btn btn-success btn-lg" type="button" onclick="checkPassword()">START</a>
        </center>
      </div>
    </div>
  </form>
    <div id="Contact" class="bg-light pl-5 pr-5 pt-2 pb-2 text-dark mb-0">
    <h2>Contact Us</h2>
    <hr class="bg-white">

    <h4>Center for Innovation in E-Learning (CIEL)</h4>
    <br>
    <div class="row align-items-end">
                <div class="col">
                <address>
      <strong>Texas Tech University</strong><br>
      College of Education<br>
      3002 18th Street Lubbock<br>
      TX 79409
    </address>
                </div>
                <div class="col">
                <address>

<table>
<tr>
<td><strong>Phone: </strong></td>
<td>(806) 742-2377</td>
</tr>
<tr>
<td><strong>Email: </strong></td>
<td><a href="mailto:#">ciel.educ@ttu.edu</a></td>
</tr>
</table>
    </address>
                </div>
                <div class="col-sm-3 align-self-end mb-3">
                <img class="card-img-bottom" src="img/CIEL logo.png" alt="Card image cap">
                </div>
    </div>
    <script>
      $('body').scrollspy({ target: '#main-nav' });
      
      // Add smooth scrolling
      $('#main-nav a').on('click', function (e) {
      // Check for a hash value
      if (this.hash !== '') {
      // Prevent default behavior
      e.preventDefault();
      
      // Store hash
      const hash = this.hash;
      
      // Animate smooth scroll
      $('html, body').animate({
      scrollTop: $(hash).offset().top
      }, 900, function () {
      // Add hash to URL after scroll
      window.location.hash = hash;
      });
      }
      });
    </script>

  </body>
</html>