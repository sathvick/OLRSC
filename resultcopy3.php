<!Doctype html>
<html>
   <head>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js">
</script>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Add icon library -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="mystyle.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="style.css" type="text/css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>OLRSC</title>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript"  src='http://cdn.renderedfont.com/js/renderedfont-0.8.min.js#free'></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
      <script src="Chart.min.js"></script>
      <script src="utils.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
      <script src="myscript.js"></script>
   </head>
   <body>
      <div id='maindiv' class='maindiv'>
      <div class='container-fluid bg-grey row'>
         </br>
         <div class='row'>
            <div class='col-sm-6'>
               <img src='COE logo.png' alt='CIEL' class='responsive' style='width:318px;height:71px;' align='left'>
            </div>
            <div class='col-sm-6'>
               <img src='CIEL logo.png' alt='CIEL' class='responsive' style='width:320px;height:70px;' align='right'>
            </div>
         </div>
      </div>
      <br>
      <h2>Online Learning Readiness Self-Check Results</h2>
      <div class="container-fluid bg-grey row">
         <div class="row">
            <div class="col-sm-9">
               <center>
                  <div id="canvas-holder" >
                     <canvas id="chart-area" width="100%" height="50%"></canvas>
                  </div>
               </center>
            </div>
            <div class="col-sm-3">
               <br><br><br><br><br>
               <p id="avg"></p>
               <br>
               <p id="feedback"></p>
            </div>
         </div>
         <br>
         <h2>Online Learning Readiness Framework</h2>
         </br>
         <div class="col-sm-6">
            <center>
               <div id="canvas-holder" style="width:100%">
                  <canvas id="chartarea1" width="504" height="500" class="chartjs-render-monitor">
                  </canvas>
               </div>
            </center>
            </div>
            <div class="col-sm-6">
            </div>
            <a href="Framework and Resources.pdf" download>
            <button class="btn" style="width:100%"><i class="fa fa-download"></i> Click to Download Tips for Online Learning</button>
            </a>

      </div>
   </body>
</html>
