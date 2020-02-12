<!Doctype html>
<html>
   <head>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js">
</script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/jquery-ui.js" type="text/javascript"></script>
<link href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.8.9/themes/blitzer/jquery-ui.css" rel="stylesheet" type="text/css" />
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

      <!-- Modal -->
      <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='max-height: calc(100vh - 25px); overflow-y: auto;'>
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" color="red">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <div class="modal-body">
              <p><span id="mtext1"></span></p>
              <embed src="Goal Setting.pdf" frameborder="0" width="100%" height="550px">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='max-height: calc(100vh - 25px); overflow-y: auto;'>
        <div class="modal-dialog" role="document">

          <div class="modal-content">
            <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" color="red">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <div class="modal-body">
              <p><span id="mtext2"></span></p>
              <embed src="Monitoring.pdf" frameborder="0" width='100%' height='550px'>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='max-height: calc(100vh - 25px); overflow-y: auto;'>
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" color="red">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <div class="modal-body">
              <p><span id="mtext3"></span></p>
              <embed src="Time Management_hyperlinks.pdf" frameborder="0" width='550px' height='100%'>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='max-height: calc(100vh - 25px); overflow-y: auto;'>
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" color="red">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <div class="modal-body">
              <p><span id="mtext4"></span></p>
              <embed src="SpaceM.pdf" frameborder="0" width="100%" height="550px">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='max-height: calc(100vh - 25px); overflow-y: auto;'>
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" color="red">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <div class="modal-body">
              <p><span id="mtext5"></span></p>
              <embed src="TECHM.pdf" frameborder="0" width="100%" height="550px">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='max-height: calc(100vh - 25px); overflow-y: auto;'>
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" color="red">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <div class="modal-body">
              <p><span id="mtext6"></span></p>
              <embed src="Instructor Interaction.pdf" frameborder="0" width="100%" height="550px">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='max-height: calc(100vh - 25px); overflow-y: auto;'>
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" color="red">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <div class="modal-body">
              <p><span id="mtext7"></span></p>
              <embed src="Peer Interaction.pdf" frameborder="0" width="100%" height="550px">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='max-height: calc(100vh - 25px); overflow-y: auto;'>
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" color="red">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <div class="modal-body">
              <p><span id="mtext8"></span></p>
              <embed src="Effort regulation.pdf" frameborder="0" width="100%" height="550px">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style='max-height: calc(100vh - 25px); overflow-y: auto;'>
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" color="red">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <div class="modal-body">
              <p><span id="mtext9"></span></p>
              <embed src="Master self talk.pdf" frameborder="0" width="100%" height="550px">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid bg-grey row">
      <div class="row">  <div class="col-sm-12">
           <br><br><center>
           <p style="font-size:25px;" id="avg"></p>
           <p style="font-size:25px;" id="feedback"></p></center>
        </div>
      </div>
         <div class="row">
           <div class="col-sm-1">
           </div>
            <div class="col-sm-10">
               <center>
                  <div id="canvas-holder" >
                     <canvas id="chart-area" width="100%" height="50%"></canvas>
                  </div>
               </center>
            </div>
            <div class="col-sm-1">
            </div>
         </div>
         <br>
         <h2>Online Learning Readiness Framework</h2>
         </br>


           <div class="col-sm-6">
              <center>
                 <div id="canvas-holder" >
                    <canvas id="chartarea1" width="100%" height="100%"></canvas>
                 </div>
              </center>
           </div>
           <div class="col-sm-6">
             <br><br>
             <div id="myDIV">
             <h3>Goal Seting</h3>
             <br>
             <p>It refers to students’ strategy to manage and achieve their goals by breaking a long-term goal (e.g., completing an extensive and complex task) into small sub-goals so that they can be easily achieved. </p>
             <br><ol>
               <li>Plan your assignment</li>
               <li>Break down course workload</li>
               <li>Use step-by-step approach</li>
               <li>Set your goals effectively</li>
             </ol>
           </div>
         </div>
            <a href="Framework and Resources1104.pdf" download>
            <button class="btn" style="width:100%"><i class="fa fa-download"></i> Click to Download Tips for Online Learning</button>
            </a>

      </div>
   </body>
</html>
